<?php
namespace Models;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "posts";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'created_by'
    ];
}