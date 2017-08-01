<?php

use Illuminate\Support\Facades\Schema;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJokesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     /**
         * The name of the database connection to use.
         *
         * @var string
         */
    protected $connection = 'mongodb';

    public function up()
    {
        Schema::connection('mongodb')->table('test', function (Blueprint $collection) {
                $collection->index(
                    [
                        "id" => "text",
                        "name" => "text",
                        "email" => "text",
                        "contact_number" => "text"
                    ],
                    'test',
                    null,
                    [
                        "weights" => [
                            "id" => 1,
                            "name" => 20,
                            "email" => 30,
                            "contact_number" => 100
                        ],
                        'name' => 'test'
                    ]
                    );
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('mongodb')->table('test', function (Blueprint $collection) {
                $collection->dropIndex('test');
            });
    }
}
