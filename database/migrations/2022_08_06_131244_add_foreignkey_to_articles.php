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
        Schema::table('articles', function (Blueprint $table) {
            // create foreign key
            $table->foreign('category_id', 'category_id_fk1')->references('id')->on('categories')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('image_id', 'image_id_fk2')->references('id')->on('images')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            // drop foreign key
            $table->dropForeign('category_id_fk1');
            $table->dropForeign('image_id_fk2');
        });
    }
};
