<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blogpost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Blogpost', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('title');
            // $table->string('image')->nullable();
            $table->text('desc'); // desc untuk menyimpan sebagaian kecil dari tulisan body blog kita
            $table->text('body');
            $table->timestamp('published_at')->nullable(); // tipe data timestamp
            $table->timestamps(); // method yg ini untuk membuat created_add dan updated_Add
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Blogpost');
    }
}
