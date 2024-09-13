<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageUrlToTArticleTable extends Migration
{
    public function up()
    {
        Schema::table('t_article', function (Blueprint $table) {
            $table->string('image_url')->nullable()->after('content'); // Menambahkan kolom image_url setelah kolom summary
        });
    }

    public function down()
    {
        Schema::table('t_article', function (Blueprint $table) {
            $table->dropColumn('image_url');
        });
    }
}
