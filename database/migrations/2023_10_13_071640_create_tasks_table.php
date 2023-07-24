<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('duedate');
            $table->string('status');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')  // Define foreign key constraint
            ->references('id')      // Reference the 'id' column in the 'users' table
            ->on('users')           // Referencing the 'users' table
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
