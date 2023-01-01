<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Petugas
 * @package App\Models
 * @version December 29, 2022, 7:44 am UTC
 *
 * @property integer $id_petugas
 * @property string $nama_petugas
 * @property string $jabatan_petugas
 * @property string $nomor_telepon
 * @property string $alamat_petugas
 */
class Petugas extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'petugas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_petugas',
        'nama_petugas',
        'jabatan_petugas',
        'nomor_telepon',
        'alamat_petugas'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_petugas' => 'integer',
        'nama_petugas' => 'string',
        'jabatan_petugas' => 'string',
        'nomor_telepon' => 'string',
        'alamat_petugas' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_petugas' => 'required',
        'nama_petugas' => 'required',
        'jabatan_petugas' => 'required',
        'nomor_telepon' => 'required',
        'alamat_petugas' => 'required'
    ];

    
}
