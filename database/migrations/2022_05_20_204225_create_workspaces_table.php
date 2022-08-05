<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkspacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workspaces', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->text('description',100);
            $table->string('location',100);
            $table->json('gallery');
            $table->string('price',100);
            $table->unsignedFloat('rating');
            $table->enum('status', ['Booked', 'Available'])->default('Booked');
            $table->enum('type', ['Private Office', 'Public Office', 'Workspace', 'Skype Room'])->default('Workspace');
            $table->json('features')->nullable();

            $table->foreignId('owner_id')
            ->nullable()
            ->constrained('owners')
            ->nullOnDelete();

            $table->foreignId('city_id')
            ->nullable()
            ->constrained('cities')
            ->nullOnDelete();

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
        Schema::dropIfExists('workspaces');
    }
}
