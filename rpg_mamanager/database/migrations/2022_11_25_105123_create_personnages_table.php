<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
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
        Schema::create('personnages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('nom');
            $table->string('description');
            $table->string('specialite');
            $table->string('image')->nullable();
            $table->integer('magie');
            $table->integer('force');
            $table->integer('agilite');
            $table->integer('intelligence');
            $table->integer('vie');
            // $table->foreignId('user_id')->constrained();
            // $table->foreignId('group_id')->constrained();
            $table->foreignIdFor(User::class)->constrained()->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnages');
    }
};
