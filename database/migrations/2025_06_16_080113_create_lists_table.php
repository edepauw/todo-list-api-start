<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListsTable extends Migration
{
    public function up()
    {
        Schema::create('todo_lists', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('todo_lists');
    }
}
