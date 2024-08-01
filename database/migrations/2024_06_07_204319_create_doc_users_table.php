<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_users', function (Blueprint $table) {
            $table->string('first_name', 50)->default('');
            $table->string('other_name', 50)->default('');
            $table->string('last_name', 50)->default('');
            $table->string('PREVIOUS_NAME', 120)->default('');
            $table->tinyInteger('gender')->nullable()->comment("1 - FEMALE, \r\n2 - MALE");
            $table->string('phone', 50)->default('');
            $table->string('email', 70)->default('');
            $table->date('dob')->nullable();
            $table->tinyInteger('PROGRAMME_TYPE')->nullable()->comment("1 - FULLTIME,\r\n2 - PARTTIME");
            $table->tinyInteger('MARITALSTAT')->default(2)->comment("1 - MARRIED,\r\n2 - SINGLE");
            $table->string('NATIONALITY', 100)->default('NI');
            $table->string('STATE_OF_ORIGIN', 100)->default('');
            $table->string('LGA', 100)->default('');
            $table->string('HOMETOWN', 100)->default('');
            $table->string('PLACE_OF_BIRTH', 100)->default('');
            $table->boolean('RELIGION')->default(1)->comment("1 - CHRISTIANITY,\r\n2 - ISLAM");
            $table->string('DENOMINATION', 100)->default('')->comment("RELIGIOUS DENOMINATION");
            $table->string('PLACE_OF_WORSHIP', 200)->default('');
            $table->string('WSF', 100)->default('');
            $table->integer('NO_OF_SIBLING')->default(0);
            $table->boolean('POSITION_IN_FAMILY')->default(1);
            $table->string('TELEPHONE', 50)->default('');
            $table->string('MAIL_ADDRESS', 300)->default('')->comment("MAILING ADDRESS");
            $table->string('MAIL_CITY', 100)->default('');
            $table->string('MAIL_STATE', 3)->default('');
            $table->string('MAIL_COUNTRY', 3)->default('');
            $table->string('ADDRESS', 300)->default('');
            $table->string('CITY', 100)->default('');
            $table->string('STATE', 3)->default('');
            $table->string('COUNTRY', 3)->default('');
            $table->integer('MODE_OF_ENTRY')->nullable();
            $table->integer('F_PROGRAMME')->default(0)->comment("FIRST CHOICE PROGRAMME");
            $table->integer('S_PROGRAMME')->default(0)->comment("SECOND CHOICE PROGRAMME");
            $table->string('SP_TITLE', 10)->default('')->comment("SPONSOR TITLE");
            $table->string('SP_NAME', 300)->default('')->comment("SPONSOR NAME");
            $table->string('SP_RELATIONSHIP', 20)->default('')->comment("SPONSOR RELATIONSHIP");
            $table->string('SP_OCCUPATION', 100)->default('')->comment("SPONSOR OCCUPATION");
            $table->string('SP_POST', 100)->default('')->comment("SPONSOR POST");
            $table->string('SP_TELEPHONE', 30)->default('')->comment("SPONSOR TELEPHONE");
            $table->string('SP_EMAIL', 70)->default('')->comment("SPONSOR EMAIL");
            $table->string('SP_ADDRESS', 300)->default('');
            $table->string('SP_CITY', 100)->default('')->comment("SPONSOR CITY");
            $table->string('SP_STATE', 3)->default('')->comment("SPONSOR STATE");
            $table->string('EX_ACTIVITY', 200)->default('')->comment("EXTRA CURRICULAR ACTIVITY");
            $table->smallInteger('SPECIALLYCHALL')->default(0)->comment("0 - No,\r\n1 - Yes");
            $table->string('UTME', 20)->default('');
            $table->integer('UTMESCORE')->default(0)->comment("	");
            $table->integer('ENTRY_YEAR')->nullable()->comment("1 - YEAR 1,\r\n2 - YEAR 2,\r\nETC\r\n\r\nENTRY ACALVL");
            $table->string('REGNO', 15)->nullable();
            $table->boolean('BLOCK')->default(0)->comment("0 - UNBLOCK, 1 - BLOCK-------------BLOCK STUDENT LOGIN AND OTHERS");
            $table->string('BLOCKREASON', 200)->default('')->comment("WHY ACCOUNT WAS BLOCKED");
            $table->boolean('ALLOWNEWREG')->default(1)->comment("0 - BLOCK, 1 - ALLOW\r\nALLOW/DISALLOW SESSION REGISTRATION INCASE OF EXTRA YEAR OR NO PROMOTION");
            $table->string('BLOCKREGREASON', 200)->default('');
            $table->integer('status_id')->default(32)->comment("STUDENT STATUS - REF TO GENERAL TYPES");
            $table->string('NEXT_OF_KIN_NAME', 300)->default('');
            $table->string('NEXT_OF_KIN_ADDRESS', 300)->default('');
            $table->string('NEXT_OF_KIN_TELEPHONE', 30)->default('');
            $table->string('NEXT_OF_KIN_EMAIL', 70)->default('');
            $table->integer('PROGRAMME')->nullable();
            $table->integer('ACADLVL')->nullable();
            $table->integer('ACADYEAR')->nullable()->comment("SESSION ADMITTED");
            $table->integer('FSTUDENT')->default(0)->comment("IS FOREIGN STUDENT ?");
            $table->integer('id')->primary();
            $table->timestamp('updated_at')->nullable()->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->bigInteger('gender_id')->nullable();
            $table->string('guid')->nullable()->unique('guid');
            $table->string('domain')->nullable();
            $table->string('upload_folder')->nullable();
            $table->string('objectguid')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doc_users');
    }
}
