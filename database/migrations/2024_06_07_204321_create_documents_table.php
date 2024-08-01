<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name')->nullable();
            $table->bigInteger('document_type_id')->nullable();
            $table->string('file_path');
            $table->string('path');
            $table->string('s3_url')->nullable(); // Add this line
            $table->boolean('uploaded_to_s3')->default(false);
            $table->unsignedTinyInteger('status');
            $table->string('session', 50)->nullable();
            $table->string('semester', 50)->nullable();
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->string('uuid', 100)->nullable();
            $table->tinyInteger('verified')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
