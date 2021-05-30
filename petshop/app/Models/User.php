<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'surname',
        'name',
        'phone',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }

    public function checkPermissionAccess($permissionCheck){
        // Use login có quyền add, sửa danh mục, và xem menu
        // B1: Lấy dc tất cả các quyền của user đang login hệ thống
        $roles = auth()->guard('admin')->user()->roles;
        foreach($roles as $role){
            $permissions = $role->permissions;
            if($permissions->contains('key_code', $permissionCheck)){
                return true;
            } 
        }
        return false;
        // B2: So sánh giá trị đưa vào của router hiện tại xem có tồn tại trong quyền mà mình lấy dc hay ko

    }
}
