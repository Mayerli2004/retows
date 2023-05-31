<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Larevel\Sanctum\HasApiTokens;

class apprentice extends Model
{
    use HasFactory;
    use HasApiTokens;

    protected $fillable = [
        'name',
        'document_number',
        'email',
        'telephone',
        'course_id'
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
