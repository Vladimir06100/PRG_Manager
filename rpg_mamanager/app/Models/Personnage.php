<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personnage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $fillable = [
        'nom',
        'description',
        'specialite',
        'image',
        'magie',
        'force',
        'agilite',
        'intelligence',
        'vie',
        'user_id',
    ];

    protected string $nom;
    protected string $description;
    protected string $specialite;
    protected string $image;
    protected int $magie;
    protected int $force;
    protected int $agilite;
    protected int $intelligence;
    protected int $vie;
    protected int $user_id;

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
