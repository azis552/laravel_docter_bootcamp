<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Permission extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'permission';

    protected $date = [
        'created_at',
        'update_at',
        'delete_at',
    ];
    protected $fillable =[
        'title',
    ];
    public function role()
    {
        return $this->belongsToMany('App\Models\ManagementAccess\Role');
    }
    public function permission_role(){
        return $this->hasMany('App\Models\ManagementAccess\PermissionRole','permission_id');
    }
}
