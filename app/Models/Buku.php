<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Buku
 * @package App\Models
 * @version December 29, 2022, 7:53 am UTC
 *
 * @property integer $id_buku
 * @property string $kode_buku
 * @property string $judul_buku
 * @property string $tahun_penerbit
 * @property integer $stok
 */
class Buku extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'bukus';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_buku',
        'kode_buku',
        'judul_buku',
        'tahun_penerbit',
        'stok'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_buku' => 'integer',
        'kode_buku' => 'string',
        'judul_buku' => 'string',
        'tahun_penerbit' => 'string',
        'stok' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_buku' => 'required',
        'kode_buku' => 'required',
        'judul_buku' => 'required',
        'tahun_penerbit' => 'required',
        'stok' => 'required'
    ];

    
}
