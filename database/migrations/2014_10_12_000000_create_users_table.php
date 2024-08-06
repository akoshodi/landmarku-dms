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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sid')->nullable()->default(null);
            $table->string('username')->nullable();
            $table->string('first_name', 50)->default('');
            $table->string('other_name', 50)->default('');
            $table->string('last_name', 50)->default('');
            $table->string('regno', 15)->nullable();
            $table->string('matricno', 15)->nullable();
            $table->integer('entry_year')->nullable()->comment("1 - YEAR 1,\r\n2 - YEAR 2,\r\nETC\r\n\r\nENTRY ACALVL");
            $table->integer('programme')->nullable();
            $table->integer('acadlvl')->nullable()->comment("CURRENT ACADEMIC LEVEL");
            $table->integer('acadyear')->nullable()->comment("SESSION ADMITTED");
            $table->integer('status_id')->default(32)->comment("STUDENT STATUS - REF TO GENERAL TYPES");
            $table->integer('foreign_student')->default(0)->comment("IS FOREIGN STUDENT ?");
            $table->tinyInteger('gender_id')->nullable()->comment("1 - FEMALE, \r\n2 - MALE");
            $table->string('phone', 15)->default('');
            $table->string('email')->unique();
            $table->date('dob')->nullable();
            $table->tinyInteger('programme_type')->default(1)->comment("1 - FULLTIME,\r\n2 - PARTTIME");
            $table->tinyInteger('marital_status')->default(2)->comment("1 - MARRIED,\r\n2 - SINGLE");
            $table->boolean('block')->default(0)->comment("0 - UNBLOCK, 1 - BLOCK---BLOCK STUDENT LOGIN AND OTHERS");
            $table->string('blockreason', 200)->default('')->comment("WHY ACCOUNT WAS BLOCKED");
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('is_staff')->default(0);
            $table->string('nationality', 100)->default('NI');
            $table->string('state_of_origin', 100)->default('');
            $table->string('lga', 100)->default('');
            $table->string('hometown', 100)->default('');
            $table->string('place_of_birth', 100)->default('');
            $table->boolean('religion_id')->default(1)->comment("1 - CHRISTIANITY,\r\n2 - ISLAM");
            $table->string('mail_address', 300)->default('')->comment("MAILING ADDRESS");
            $table->string('mail_city', 100)->default('');
            $table->string('mail_state', 3)->default('');
            $table->string('mail_country', 3)->default('');
            $table->string('address', 300)->default('');
            $table->string('city', 100)->default('');
            $table->string('state', 3)->default('');
            $table->string('country', 3)->default('');
            $table->integer('mode_of_entry')->nullable()->default(1);
            $table->integer('f_programme')->default(0)->comment("FIRST CHOICE PROGRAMME");
            $table->integer('s_programme')->default(0)->comment("SECOND CHOICE PROGRAMME");
            $table->string('sp_title', 10)->default('')->comment("SPONSOR TITLE");
            $table->string('sp_name', 300)->default('')->comment("SPONSOR NAME");
            $table->string('sp_relationship', 20)->default('')->comment("SPONSOR RELATIONSHIP");
            $table->string('sp_occupation', 100)->default('')->comment("SPONSOR OCCUPATION");
            $table->string('sp_post', 100)->default('')->comment("SPONSOR POST");
            $table->string('sp_telephone', 30)->default('')->comment("SPONSOR TELEPHONE");
            $table->string('sp_email', 70)->default('')->comment("SPONSOR EMAIL");
            $table->string('sp_address', 300)->default('');
            $table->string('sp_city', 100)->default('')->comment("SPONSOR CITY");
            $table->string('sp_state', 3)->default('')->comment("SPONSOR STATE");
            $table->string('ex_activity', 200)->default('')->comment("EXTRA CURRICULAR ACTIVITY");
            $table->smallInteger('speciallychall')->default(0)->comment("0 - No,\r\n1 - Yes");
            $table->string('utme', 20)->default('');
            $table->integer('utmescore')->default(0)->comment("	");
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
