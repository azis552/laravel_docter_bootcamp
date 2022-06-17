<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Specialist extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'specialist';

    protected $date = [
        'created_at',
        'update_at',
        'delete_at',
    ];
    protected $fillable =[
        'name',
        'price',
    ];
    public function specialist()
    {
        return $this->hasMany('App\Models\Operational\Dokter','specialist_id');
    }
}
