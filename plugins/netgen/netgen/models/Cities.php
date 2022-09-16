<?php namespace Netgen\Netgen\Models;

use Model;

/**
 * Model
 */
class Cities extends Model
{
    use \Winter\Storm\Database\Traits\Validation;
    
    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'netgen_netgen_cities';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
