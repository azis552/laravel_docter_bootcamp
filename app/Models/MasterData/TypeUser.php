<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class TypeUser extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'type_user';

    protected $date = [
        'created_at',
        'update_at',
        'delete_at',
    ];
    protected $fillable =[
        'name',
    ];
    public function detail_user()
    {
        return $this->hasMany('App\ManagementAccess\DetailUser','type_user_id');
    }
}
