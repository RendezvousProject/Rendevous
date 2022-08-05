<?php

namespace Database\Seeders;
use App\Models\Feature;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    protected $feature;

    public function __construct(Feature $feature)
    {
        $this->feature = $feature;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->truncate();
        $this->feature->insert([
            'feature_name' => 'Water'
        ]);

        $this->feature->insert([
            'feature_name' => 'Vip-wifi'
        ]);

        $this->feature->insert([
            'feature_name' => 'Electricity'
        ]);



    }
}
