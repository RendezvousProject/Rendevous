<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTainantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tainants', function (Blueprint $table) {
            $table->id();
            // Foreign Keys
            $table->foreignId('owner_id')
            ->nullable()
            ->constrained('owners')
            ->nullOnDelete();

            $table->foreignId('workspace_id')
            ->nullable()
            ->constrained('workspaces')
            ->nullOnDelete();

            $table->foreignId('user_id')
            ->nullable()
            ->constrained('users')
            ->nullOnDelete();

            
            $table->string('start_date');
            $table->string('end_date');
            $table->string('per_day');
            $table->string('total');

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
        Schema::dropIfExists('tainants');
    }
}
