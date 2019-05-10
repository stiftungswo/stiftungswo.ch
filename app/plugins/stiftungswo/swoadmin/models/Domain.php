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
        'title' => 'required'
    ];

    public function getVisibleProjectsAttribute()
    {
        return $this->projects()->visibleOnDomain()->get()->sortByDesc(function ($project) {
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
        ]
    ];
}
