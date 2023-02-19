<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        'img_path'
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

    public function applications()
    {
        return DB::table('applications')->where('job_id', $this->id)->get();
    }

    public function userHasApplied()
    {
        $applied = DB::table('applications')->where('job_id', $this->id)
            ->where('user_id',Auth::id())->get();
        if(isset($applied) && $applied->count() != 0){
            return true;
        }
        return false;
    }

    public function userHasCv(): bool
    {
        $hasCV = DB::table('cvs')->where('user_id',Auth::id())->get();
        if(isset($hasCV) && $hasCV->count() != 0){
            return true;
        }
        return false;
    }

    use HasFactory;
    use \Conner\Tagging\Taggable;
}
