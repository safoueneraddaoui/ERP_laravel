<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan__features', function (Blueprint $table) {
            // Columns
            $table->increments('id');
            $table->integer('plan_id')->unsigned();
            $table->boolean('dashboard')->default(false);
            $table->integer('customers')->default(0);
            $table->integer('invoices')->default(0);
            $table->integer('products')->default(0);
            $table->boolean('suppliers')->default(false);
            $table->boolean('sales')->default(false);
            $table->boolean('complaints')->default(false);
            $table->boolean('returns')->default(false);
            $table->boolean('reports')->default(false);
            $table->timestamps();
            // Indexes
            $table->unique(['plan_id']);
            $table->foreign('plan_id')->references('id')->on('plans')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan__features');
    }
}
