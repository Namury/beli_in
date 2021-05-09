<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_type_id',
        'user_role_id',
        'name',
        'email',
        'password',
        'page_name',
        'page_slug',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    public function isCreator(){
        if($this->user_role_id == 1){
            return true;
        }else{
            return false;
        }
    }

    public function userRole()
    {
        return $this->belongsTo(UserRole::class, 'user_role_id');
    }

    public function userType()
    {
        return $this->belongsTo(UserType::class, 'user_type_id');
    }

    public function wallet()
    {
        return $this->hasOne(Wallet::class, 'user_id');
    }

    public function posts()
    {
    	return $this->hasMany(Post::class, 'user_id');
    }

    public function postCategories()
    {
    	return $this->hasMany(PostCategory::class, 'user_id');
    }

    public function items()
    {
        return $this->hasMany(Item::class, 'user_id');
    }

    public function supports()
    {
        return $this->hasMany(Support::class, 'supported_id');
    }

    public function following()
    {
        return $this->hasMany(Follow::class, 'follower');
    }

    public function follower()
    {
        return $this->hasMany(Follow::class, 'followed');
    }


}
