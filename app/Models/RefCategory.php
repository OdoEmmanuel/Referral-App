<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RefCategory
 * @package App\Models
 * @version July 30, 2020, 11:13 pm UTC
 *
 * @property string $name
 */
class RefCategory extends Model
{
    use SoftDeletes;

    public $table = 'ref_categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'user_id',
        'referral_visits',
        'referral_count',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'user_id' => 'integer',
        'referral_visits' => 'integer',
        'referral_count' => 'integer',

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];


}
