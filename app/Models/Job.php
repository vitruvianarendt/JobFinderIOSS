<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    
    protected $guarded = [];

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'salary',
        'position',
        'phone',
        'address',
        'type',
        'role',
    ];

    public function isAdmin() {
        return $this->role == '1';
    }

    public function user(){
        return $this->hasOne(User::class);
    }

    public function category()
    {
        return $this->hasOne(Category::class);
    }
    use HasFactory;
}
