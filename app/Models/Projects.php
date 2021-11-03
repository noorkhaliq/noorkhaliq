<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $guarded = ['id'];


    public function category()
    {
        return $this->belongsTo(Categories::class,'category_id','id');
    }
}
