<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
<<<<<<< HEAD
            $table->string('token');
=======
            $table->string('token')->index();
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
        Schema::dropIfExists('password_resets');
=======
        Schema::drop('password_resets');
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
    }
}
