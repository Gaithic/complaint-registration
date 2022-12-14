<?php namespace Netgen\Netgen\Models;

use Model;

/**
 * Model
 */
class Complaint extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    use \Winter\Storm\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'netgen_netgen_complaint';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo = [
        'state_name' => 'Netgen\Netgen\Models\Complaint',
        'table' => 'netgen_netgen_complaint_state_name',
    ];

    public $attachOne = [
        'file' => 'System\Models\File'
    ];
  
}
