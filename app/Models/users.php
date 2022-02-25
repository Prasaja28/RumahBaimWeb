<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;



/**
 * Class users
 * @package App\Models
 * @version February 25, 2022, 1:46 am UTC
 *
 * @property string $user_name
 * @property string $user_password
 * @property string $user_role
 */
class users extends Model
{


    public $table = 'users';
    



    public $fillable = [
        'user_name',
        'user_password',
        'user_role'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_name' => 'string',
        'user_password' => 'string',
        'user_role' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_name' => 'required',
        'user_password' => 'required',
        'user_role' => 'required'
    ];

    
}
