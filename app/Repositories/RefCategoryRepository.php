<?php

namespace App\Repositories;

use App\Models\RefCategory;
use App\Repositories\BaseRepository;

/**
 * Class RefCategoryRepository
 * @package App\Repositories
 * @version July 30, 2020, 11:13 pm UTC
*/

class RefCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'user_id',
        'referral_visits',
        'referral_count',
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
