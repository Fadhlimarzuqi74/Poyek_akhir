<?php

namespace App\Repositories;

use App\Models\Buku;
use App\Repositories\BaseRepository;

/**
 * Class BukuRepository
 * @package App\Repositories
 * @version December 29, 2022, 7:53 am UTC
*/

class BukuRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_buku',
        'kode_buku',
        'judul_buku',
        'tahun_penerbit',
        'stok'
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
        return Buku::class;
    }
}
