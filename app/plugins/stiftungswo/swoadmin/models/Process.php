<?php namespace Stiftungswo\Swoadmin\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Model
 */
class Process extends Model
{
    use Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'stiftungswo_swoadmin_processes';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
