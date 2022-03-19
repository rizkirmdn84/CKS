<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterPermissionGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permission_groups', function (Blueprint $table) {
            $table->index('role_id');
            $table->foreign('role_id')
                ->references('id')->on('roles');

            $table->index('permission_id');
            $table->foreign('permission_id')
                ->references('id')->on('permissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permission_groups', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropIndex(['role_id']);

            $table->dropForeign(['permission_id']);
            $table->dropIndex(['permission_id']);
        });
    }
}
