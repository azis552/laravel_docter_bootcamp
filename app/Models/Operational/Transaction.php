<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Transaction extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'transaction';

    protected $date = [
        'created_at',
        'update_at',
        'delete_at',
    ];
    protected $fillable =[
        'appointment_id',
        'fee_dokter',
        'fee_specialist',
        'fee_hospital',
        'sub_total',
        'vat',
        'total',
        'status',
    ];
    public function appointment()
    {
        return $this->belongsTo('App\Models\Operational\Appointment','appointment_id','id');
    }
}
