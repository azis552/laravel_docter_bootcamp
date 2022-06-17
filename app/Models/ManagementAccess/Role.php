<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'role';

    protected $date = [
        'created_at',
        'update_at',
        'delete_at',
    ];
    protected $fillable =[
        'title',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function role_user()
    {
        return $this->hasMany('App\Models\ManagementAccess\RoleUser','role_id');
    }

    public function permission_role()
    {
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole','role_id');
    }
}
