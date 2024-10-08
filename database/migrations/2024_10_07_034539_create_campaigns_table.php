<?php

// database/migrations/2024_10_07_000001_create_campaigns_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaignsTable extends Migration
{
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('image_url');
            $table->integer('target_amount'); // Fix here
            $table->integer('raised_amount')->default(0); // Fix here
            $table->boolean('is_active')->default(true);
            $table->string('division'); // Add division field
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
