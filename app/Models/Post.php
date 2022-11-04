<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function comments()   
    {
        return $this->hasMany('App\Models\Comment');  
    }
    
    public function getPaginateByLimit(int $limit_count = 30)
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
        'title',
        'body',
        'date',
        'user_id',
        'rating_1',
        'rating_2'
    ];
}
