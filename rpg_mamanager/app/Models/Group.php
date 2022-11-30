<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'description',
        'image',
        'personnage_id',
        'personnage_id1',
        'personnage_id2',
        'personnage_id3',
        'personnage_id4',
        'personnage_id5',
    ];

    protected string $name;
    protected string $description;
    protected string $image;
    protected int $user_id;


    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
