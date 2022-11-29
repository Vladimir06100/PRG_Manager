<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Member; 
use App\Models\User;

return new class extends Migration
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
            $table->timestamps();
            $table->softDeletes();
            // create the columns with user_id  (chef) and group_id (group) for 6 users with response yes or no
            $table->foreignIdFor(Member::class)->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->foreignIdFor(User::class)->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('response');

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
};
