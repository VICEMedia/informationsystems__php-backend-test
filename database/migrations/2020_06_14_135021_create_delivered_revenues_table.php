<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveredRevenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivered_revenues', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("order_id");
            $table->string("order_name");
            $table->date("month_of_service");
            $table->unsignedBigInteger("delivered_impressions");
            $table->decimal("revenue", 10, 2);

            $table->foreignId("job_id")->references("id")->on("jobs");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('delivered_revenues');
    }
}
