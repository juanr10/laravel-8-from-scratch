<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $guarded = [
    //     'id'
    // ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
