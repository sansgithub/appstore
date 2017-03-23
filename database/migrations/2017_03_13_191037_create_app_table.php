<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apps', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('title'); //mandatory
            $table->string('short_desc'); //mandatory
            $table->longText('details'); //mandatory
            $table->boolean('approval')->default('0');
            $table->string('developer')->nullable();
            $table->string('support_email')->nullable();
            $table->string('website')->nullable();
            $table->rememberToken();
            $table->unsignedInteger('user_id'); 
            $table->boolean('publish')->default('0');
            $table->string('icon'); //mandatory
            $table->string('app_in_link'); //mandatory
            $table->string('app_out_link');
            $table->string('scr_shot1'); //mandatory
            $table->string('scr_shot2')->nullable();
            $table->integer('download_count');
            $table->string('tags'); //mandatory
        });

        Schema::table('apps', function($table) {
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('apps');
    }
}
