<?php

namespace App\Repositories;

use App\Models\Anggota;
use App\Repositories\BaseRepository;

/**
 * Class AnggotaRepository
 * @package App\Repositories
 * @version December 29, 2022, 7:49 am UTC
*/

class AnggotaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_anggota',
        'kode_anggota',
        'nama_anggota',
        'nomor_telepon',
        'alamat_anggota'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Anggota::class;
    }
}
