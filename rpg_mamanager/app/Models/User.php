<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $fillable = [
        'pseudo',
        'nom',
        'prenom',
        'email',
        'password',
    ];

 
    


    public function getRouteKeyName()
    {
        return 'pseudo';
    }

    private string $pseudo;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $password;
}
