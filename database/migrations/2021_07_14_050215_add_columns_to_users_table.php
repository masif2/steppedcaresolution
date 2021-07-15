<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {  
            //
            $table->string('firstname')->nullable()->after('email');
            $table->string('lastname')->nullable()->after('firstname');
            $table->string('phone')->nullable()->after('lastname');
            $table->string('zip')->nullable()->after('phone');
            $table->string('city')->nullable()->after('zip');
            $table->string('state')->nullable()->after('city');
            $table->string('country')->nullable()->after('state');

            $table->integer('project_id')->unsigned()->after('country');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

            $table->enum('project_type',["Active","Disabled"])->after('project_id');
            $table->enum('status',["Active","Disabled"])->after('project_type');
            $table->enum('role',["Admin","Manager","User"])->after('password');

           
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            //
        });
    }
}
