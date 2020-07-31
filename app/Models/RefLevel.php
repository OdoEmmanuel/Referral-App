<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RefLevel
 * @package App\Models
 * @version July 30, 2020, 11:13 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property string $reward
 * @property string $congratulatory_message
 * @property string $target_no_refferals
 * @property string $point_per_referral
 */
class RefLevel extends Model
{
    use SoftDeletes;

    public $table = 'ref_levels';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'reward',
        'congratulatory_message',
        'target_no_refferals',
        'point_per_referral'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'reward' => 'string',
        'congratulatory_message' => 'string',
        'target_no_refferals' => 'string',
        'point_per_referral' => 'string'
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
