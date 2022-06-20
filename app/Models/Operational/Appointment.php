<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Appointment extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'appointment';

    protected $date = [
        'created_at',
        'update_at',
        'delete_at',
    ];
    protected $fillable =[
        'dokter_id',
        'user_id',
        'consultation_id',
        'level',
        'date',
        'time',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function dokter()
    {
        return $this->belongsTo('App\Models\Operational\Dokter','dokter_id','id');
    }
    public function consultation()
    {
        return $this->belongsTo('App\Models\MasterData\Consultation','consultation_id','id');
    }
    public function appointment()
    {
        return $this->hasMany('App\Models\Operational\Transaction','appointment_id');
    }
}
