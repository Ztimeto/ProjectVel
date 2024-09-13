<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('t_article', function (Blueprint $table) {
            if (!Schema::hasColumn('t_article', 'status')) {
                $table->char('status', 1)->default('A')->comment('N for News, A for Articles');
            }
        });
    }


    public function down()
    {
        Schema::table('t_article', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
