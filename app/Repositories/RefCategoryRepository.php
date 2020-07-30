<?php

namespace App\Repositories;

use App\Models\RefCategory;
use App\Repositories\BaseRepository;

/**
 * Class RefCategoryRepository
 * @package App\Repositories
 * @version July 30, 2020, 10:52 pm UTC
*/

class RefCategoryRepository extends BaseRepository
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
        return RefCategory::class;
    }
}
