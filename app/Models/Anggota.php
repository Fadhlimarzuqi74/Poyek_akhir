<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Anggota
 * @package App\Models
 * @version December 29, 2022, 7:49 am UTC
 *
 * @property integer $id_anggota
 * @property string $kode_anggota
 * @property string $nama_anggota
 * @property string $nomor_telepon
 * @property string $alamat_anggota
 */
class Anggota extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'anggotas';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_anggota',
        'kode_anggota',
        'nama_anggota',
        'nomor_telepon',
        'alamat_anggota'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_anggota' => 'integer',
        'kode_anggota' => 'string',
        'nama_anggota' => 'string',
        'nomor_telepon' => 'string',
        'alamat_anggota' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_anggota' => 'required',
        'kode_anggota' => 'required',
        'nama_anggota' => 'required',
        'nomor_telepon' => 'required',
        'alamat_anggota' => 'required'
    ];

    
}
