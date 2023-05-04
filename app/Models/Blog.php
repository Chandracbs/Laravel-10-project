<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'category_id',
        'user_id',
        'last_updated_by'
    ];

    public function upd()
    {
        return $this->belongsTo(User::class, 'last_updated_by');
    }

    public function userid(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function catid(){
        return $this->belongsTo(Category::class,'category_id');
    }


}
