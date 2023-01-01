<?php

namespace App\Repositories;

use App\Models\Petugas;
use App\Repositories\BaseRepository;

/**
 * Class PetugasRepository
 * @package App\Repositories
 * @version December 29, 2022, 7:44 am UTC
*/

class PetugasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_petugas',
        'nama_petugas',
        'jabatan_petugas',
        'nomor_telepon',
        'alamat_petugas'
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
        return Petugas::class;
    }
}
