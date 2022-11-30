<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    public function up()
    {
        Schema::create('personnages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('nom')->unique();
            $table->integer('level')->default(1);
            $table->text('description');
            $table->string('specialite');
            $table->longText('image')->nullable();
            $table->integer('magie');
            $table->integer('force');
            $table->integer('agilite');
            $table->integer('intelligence');
            $table->integer('vie');
            $table->foreignIdFor(User::class)->constrained()->onDelete('restrict')->onUpdate('restrict');
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
