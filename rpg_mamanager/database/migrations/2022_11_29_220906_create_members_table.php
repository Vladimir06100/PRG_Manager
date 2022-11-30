<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Personnage;
use App\Models\Group;


return new class extends Migration
{
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignIdFor(Group::class, 'group_id')->nullable()->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->foreignIdFor(Personnage::class, 'personnage_id')->nullable()->constrained()->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('response');

        });
    }

    public function down()
    {
        Schema::dropIfExists('members');
    }
};
