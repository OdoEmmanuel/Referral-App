<?php

namespace App\Repositories;

use App\Models\RefLevel;
use App\Repositories\BaseRepository;

/**
 * Class RefLevelRepository
 * @package App\Repositories
 * @version July 30, 2020, 11:13 pm UTC
*/

class RefLevelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'reward',
        'congratulatory_message',
        'target_no_refferals',
        'point_per_referral'
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
        return RefLevel::class;
    }
}
