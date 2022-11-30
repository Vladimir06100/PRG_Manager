<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Personnage;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->timestamps();
            $table->softDeletes();
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->foreignIdFor(Personnage::class, 'user_id')->name('personnage_id')->nullable()->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->foreignIdFor(Personnage::class, 'user_id1')->name('personnage_id1')->nullable()->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->foreignIdFor(Personnage::class, 'user_id2')->name('personnage_id2')->nullable()->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->foreignIdFor(Personnage::class, 'user_id3')->name('personnage_id3')->nullable()->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->foreignIdFor(Personnage::class, 'user_id4')->name('personnage_id4')->nullable()->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->foreignIdFor(Personnage::class, 'user_id5')->name('personnage_id5')->nullable()->constrained()->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
};
