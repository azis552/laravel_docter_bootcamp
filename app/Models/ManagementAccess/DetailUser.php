<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class DetailUser extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'detail_user';

    protected $date = [
        'created_at',
        'update_at',
        'delete_at',
    ];
    protected $fillable = [
        'user_id',
        'type_user_id',
        'contact',
        'address',
        'photo',
        'gender',
        'age',
    ];

    // one to one
    public function user()
    {
        return $this->belongsTo('App\Models\user','user_id','id');

    }
    public function type_user_id()
    {
        return $this->belongsTo('App\Models\user','type_user_id','id');
    }
}
