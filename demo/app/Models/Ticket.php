<?php
namespace App;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
class Ticket extends Model
{
    protected $guarded = ['id'];
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'post_id');
    }
}