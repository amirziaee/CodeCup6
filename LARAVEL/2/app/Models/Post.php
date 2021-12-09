<?php

namespace App\Models;

use App\Models\Edit;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'body', 'created_by', 'updated_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function edits()
    {
        return $this->belongsToMany(Edit::class);
    }
}
