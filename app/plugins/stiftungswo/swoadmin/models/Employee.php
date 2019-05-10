<?php namespace Stiftungswo\Swoadmin\Models;

use Model;
use October\Rain\Database\Traits;

/**
 * Model
 */
class Employee extends Model
{
    use Traits\Validation;
    use Traits\Sluggable;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'stiftungswo_swoadmin_employees';

    /**
     * @var array Generate slugs for these attributes.
     */
    protected $slugs = ['slug' => ['first_name', 'last_name']];

    /**
     * @var array Validation rules
     */
    public $rules = [];

    public function getFullNameAttribute()
    {
        return $this->first_name . " " . $this->last_name;
    }

    public $hasMany = [
        'projects' => Project::class,
    ];
}
