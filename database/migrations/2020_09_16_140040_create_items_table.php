<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->integer('id'); //ลำดับ
            $table->string('name'); //ชื่อครุภัณฑ์
            $table->string('idname'); //รหัสครุภัณฑ์
            $table->integer('categories_id')->unsigned();
            $table->foreign('categories_id')->references('id')->on('categories');
            $table->decimal('price',10,2); //ราคา
            $table->string('typename'); //หน่วยนับ
            $table->string('id_status')->nullable(); //สถานะ
            $table->string('detail'); //รายละเอียด
            $table->string('image'); //รูปภาพ
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
        Schema::dropIfExists('items');
    }
}
