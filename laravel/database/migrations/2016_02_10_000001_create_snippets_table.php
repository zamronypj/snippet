<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSnippetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('snippets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hash',6)->unique();
            $table->string('title',32)->default('untitled');
            $table->text('code');
            $table->integer('syntax_id')->unsigned()->index();
            $table->date('expired_date')->index()->default('0000-00-00');
            $table->enum('exposure',['public', 'hidden'])->default('public');
            $table->timestamps();
            $table->foreign('syntax_id')->references('id')->on('syntaxes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('snippets');
    }
}
