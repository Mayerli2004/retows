<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Larevel\Sanctum\HasApiTokens;

class course extends Model
{
    use HasFactory;
    use HasApiTokens;

    protected $fillable = [
        'name',
        'code'
    ];

    public function apprentices(){
        return $this->hasMany(Apprentices::class);
    }
}

