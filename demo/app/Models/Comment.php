<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;

class Comment extends Model
{
    protected $guarded = ['id'];
    public function ticket()
    {
        return $this->belongsTo('App\Models\Ticket');
    }
}
