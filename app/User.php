<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Database\Eloquent\Model;
use Kingsley\Mentions\Traits\HasMentions;


use Cog\Contracts\Love\Liker\Models\Liker as LikerContract;
use Cog\Laravel\Love\Liker\Models\Traits\Liker;

class User extends Authenticatable implements LikerContract
{
    use Notifiable;
    use Liker;
    use HasMentions;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function notifications()
    {
        return $this->hasMany(Notification::class,'to_user_id','id');
    }
    public function followers()
    {
        return $this->belongsToMany(User::class, 'friends_users', 'friends_id', 'users_id');
    }
    public function following()
    {
        return $this->belongsToMany(User::class, 'friends_users', 'users_id', 'friends_id');
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class)->latest();
    }

    /**
* @param string|array $roles
*/
public function authorizeRoles($roles)
{
  if (is_array($roles)) {
      return $this->hasAnyRole($roles) ||
             abort(401, 'This action is unauthorized.');
  }
  return $this->hasRole($roles) ||
         abort(401, 'This action is unauthorized.');
}
/**
* Check multiple roles
* @param array $roles
*/
public function hasAnyRole($roles)
{
  return null !== $this->roles()->whereIn('name', $roles)->first();
}

/**
* Check one role
* @param string $role
*/
public function hasRole($role)
{
  return null !== $this->roles()->where('name', $role)->first();
}

}
