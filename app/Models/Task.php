<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Task
 * @package App\Models
 * @version July 31, 2020, 11:59 am UTC
 *
 * @property string $title
 * @property string $intruction
 * @property integer $user_id
 * @property integer $reward_points
 */
class Task extends Model
{
    use SoftDeletes;

    public $table = 'tasks';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'intruction',
        'user_id',
        'reward_points'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'intruction' => 'string',
        'user_id' => 'integer',
        'reward_points' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'user_id' => 'required',
        'reward_points' => 'required'
    ];

    
}
