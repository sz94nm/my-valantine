<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand')->default('#MB24Black');
            $table->string('profession')->default('Digital Artist/Illustrator');
            $table->string('cover')->default('/uploads/cover.jpg');
            $table->string('profile')->default('/uploads/profile.jpg');
            $table->text('about');
            $table->text('contact');
            $table->string('email')->default('mb24black@gmail.com');
            $table->string('instagram')->default('https://www.instagram.com/mb24black');
            $table->string('facebook')->default('https://www.facebook.com/mb24black');
            $table->timestamps();
        });
        DB::table('options')->insert(
            array(
                'about' => 'stuff about me',
                'contact' => 'contact me for reasons',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options');
    }
}
