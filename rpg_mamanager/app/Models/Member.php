<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $fillable = [
        'personnage_id',
        'group_id',
        'response',
    ];
    
    protected int $personnage_id;
    protected int $group_id;
    protected bool $response;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
