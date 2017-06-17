<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterActivityLogTableAddAdditionalFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('activity_logs', function($table)
		{
			$table->text('data')->nullable()->after('details');
			$table->boolean('language_key')->default(0)->after('data');
			$table->boolean('public')->default(0)->after('language_key');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('activity_logs', function($table)
		{
			$table->dropColumn('data');
			$table->dropColumn('language_key');
			$table->dropColumn('public');
		});
	}

}