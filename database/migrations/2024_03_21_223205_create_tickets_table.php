<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Ticket; 
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->enum('status',[Ticket::ABIERTO, Ticket::ASIGNADO, Ticket::PROCESO, Ticket::REVISION,Ticket::TERMINADO,Ticket::CANCELADO,]);
            $table->string('file');
            $table->string('product');

            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('subcategory_id'); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');

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
        Schema::dropIfExists('tickets');
    }
};
