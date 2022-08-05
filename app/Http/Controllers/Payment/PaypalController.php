<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Owner\TainentController;
use App\Models\Tainant;
use App\Models\Workspace;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalHttp\HttpException;
use PayPalCheckoutSdk\Core\PayPalHttpClient;

class PaypalController extends Controller
{
    /**
     * @var PayPalCheckoutSdk\Core\PayPalHttpClient
     */
    protected $client;

    public function __construct()
    {
        $this->client = App::make('paypal.client');
    }

    public function createPayment($tainent)
    {
        $object = Tainant::findOrFail($tainent);

        $request = new OrdersCreateRequest();
        $request->prefer('return=representation');
        $request->body = [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => $object->id,
                "amount" => [
                    "value" => $object->total,
                    "currency_code" => "ILS",
                ],
            ]],
            "application_context" => [
                "cancel_url" => url(route('CancelPayment')),
                "return_url" => url(route('CallbackPayment'))
            ],
        ];

        try {
            // Call API with your client and get a response for your call
            $response = $this->client->execute($request);

            if($response && $response->statusCode == 201) {
                $links = collect($response->result->links);

                $link = $links->where('rel', '=', 'approve')->first();

                return redirect()->away($link->href);

            };
            // If call returns body in response, you can get the deserialized version from the result attribute of the response
//            print_r($response);

        }catch (HttpException $ex) {
            echo $ex->statusCode;
            print_r($ex->getMessage());
        }
    }

    public function callback()
    {
        $paypal_order_id = request()->query('token');

        $request = new OrdersCaptureRequest($paypal_order_id);
        $request->prefer('return=representation');
        try {
            // Call API with your client and get a response for your call

            $response = $this->client->execute($request);

            $collection = collect($response->result->purchase_units);
            if($response && $response->statusCode == 201) {

                $collections = collect($response->result->purchase_units);
                foreach($collections as $collection) {
                    $tainents = Tainant::where('id', $collection->reference_id)->get();

                    foreach($tainents as $tainent) {
                        $tainent->update([
                            'status' => 'Paid',
                        ]);
                    }



                   return redirect()->route('my-tainants.index');
                }
           }
        // If call returns body in response, you can get the deserialized version from the result attribute of the response
        }catch (HttpException $ex) {
            echo $ex->statusCode;
            print_r($ex->getMessage());
        }
    }
}
