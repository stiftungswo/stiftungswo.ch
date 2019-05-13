<?php namespace Stiftungswo\Swoadmin\Models;

use Model;
use October\Rain\Database\Traits;

/**
 * Model
 */
class Domain extends Model
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
    public $table = 'stiftungswo_swoadmin_domains';

    /**
     * @var array Generate slugs for these attributes.
     */
    protected $slugs = ['slug' => 'title'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required',
        'employee_id' => 'required'
    ];

    public function getUrlAttribute()
    {
        return '/bereich/' . $this->slug;
    }

    public function getVisibleProjectsAttribute()
    {
        return $this->projects()->visibleOnDomain()->get()->sortBy(function ($project) {
            return $project->pivot->order;
        });
    }

    public $belongsToMany = [
        'projects' => [
            Project::class,
            'table' => 'stiftungswo_swoadmin_domain_project',
            'pivot' => [
                'is_visible_on_domain',
                'order',
            ],
            'pivotModel' => DomainProjectPivot::class
        ],
    ];

    public $hasMany = [
        'subpages' => DomainSubpage::class
    ];

    public function beforeValidate() {

        // we need to check record is created or not
        if($this->id == NULL) {

            // CREATE CASE

            // we need to use differ binding scope as this record is not saved yet.
            if($this->employee()->withDeferred(post('_session_key'))->count() == 0) {
                throw new \ValidationException(['employee' => 'Mitarbeiter kann nicht leer sein']);
            }
        }
        else {

            // UPDATE CASE

            // now record is created so we dont need differ binding
            if($this->employee()->count() == 0) {
                throw new \ValidationException(['employee' => 'Mitarbeiter kann nicht leer sein']);
            }
        }
    }
}
