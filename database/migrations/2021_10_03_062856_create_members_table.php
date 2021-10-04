<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->unsignedBigInteger('position_id')->nullable();
            $table->unsignedBigInteger('lcp_id')->nullable();
            $table->unsignedBigInteger('lcvp_id')->nullable();
            $table->unsignedBigInteger('manager_id')->nullable();
            $table->String('fullname')->nullable();
            $table->String('nim')->nullable();
            $table->String('email')->nullable();
            $table->String('password')->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);

            $table->foreign('department_id')->references('id')->on('departments');
            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('lcp_id')->references('id')->on('members');
            $table->foreign('lcvp_id')->references('id')->on('members');
            $table->foreign('manager_id')->references('id')->on('members');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
