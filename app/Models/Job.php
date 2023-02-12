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
        'city',
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

    public function getCategoryName(){
        $category = Category::find($this->category_id);
        return $category->name;
    }

    public function getUserName(){
        $user = User::find($this->user_id);
        return $user->name;
    }
    use HasFactory;
}
