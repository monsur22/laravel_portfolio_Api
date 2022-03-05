<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewcolumnToPortfolios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->string('overview')->after('tittle')->nullable();
            $table->string('technology')->after('overview')->nullable();
            $table->string('part_name')->after('technology')->nullable();
            $table->string('your_role')->after('part_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropColumn('overview');
            $table->dropColumn('technology');
            $table->dropColumn('part_name');
            $table->dropColumn('your_role');

        });
    }
}
