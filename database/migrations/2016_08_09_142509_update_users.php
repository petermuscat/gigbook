<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::table('users', function ($table) {
			$table->string('bio');
            $table->string('cellphone');
			$table->string('phone');
			$table->string('fax');
			$table->string('medicalreqs');
			$table->string('dietaryreqs');
			$table->string('workphone');
			$table->string('skype]');
			$table->string('facebook');
			$table->string('twitter');
			$table->string('instagram');
			$table->string('snapchat');
			$table->string('linkedin');
			$table->string('soundcloud');
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
