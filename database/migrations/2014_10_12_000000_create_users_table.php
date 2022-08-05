<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',20);
            $table->string('last_name',20);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone_number',13)->unique;
            $table->string('password',100);
            $table->enum('user_type',[0,1])->default(0);

            $table->rememberToken();
            $table->string('avatar')->nullable();

            // Foreign Key
            $table->foreignId('city_id')->nullable()->constrained('cities')->nullOnDelete();

            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
