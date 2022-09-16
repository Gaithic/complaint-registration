<?php namespace Netgen\Netgen\Models;

use Model;

/**
 * Model
 */
class States extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    use \Winter\Storm\Database\Traits\SoftDelete;
    

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'netgen_netgen_states';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];



}
