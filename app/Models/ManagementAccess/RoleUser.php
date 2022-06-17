<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class RoleUser extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'role_user';

    protected $date = [
        'created_at',
        'update_at',
        'delete_at',
    ];
    protected $fillable =[
        'user_id',
        'role_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\user','user_id','id');

    }
    public function role()
    {
        return $this->belongsTo('App\Models\ManagementAccess\Role','role_id','id');
    }
}

