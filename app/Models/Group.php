<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function topic()
    {
        return $this->hasMany(Topic::class);
    }

    public function meeting()
    {
        return $this->hasMany(Meeting::class);
    }

    public function finalization()
    {
        return $this->hasMany(Finalization::class);
    }
    
}
