<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class UserChat extends Model
{
    use HasFactory;
    protected $table = 'user_chat';
}
