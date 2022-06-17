<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Dokter extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'dokter';

    protected $date = [
        'created_at',
        'update_at',
        'delete_at',
    ];
    protected $fillable =[
        'specialist_id',
        'user_id',
        'name',
        'fee',
        'photo',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function specialist()
    {
        return $this->belongsTo('App\Models\Operational\Dokter','specialist_id','id');
    }
    public function appointment()
    {
        return $this->hasOne('App\Models\Operational\Appointment','dokter_id');
    }
}
