<?php namespace Stiftungswo\Swoadmin\Models;

use Model;
use October\Rain\Database\Traits;

/**
 * Model
 */
class Project extends Model
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
    public $table = 'stiftungswo_swoadmin_projects';

    /**
     * @var array Generate slugs for these attributes.
     */
    protected $slugs = ['slug' => 'title'];

    /**
     * @var array Validation rules
     */
    public $rules = [];

    public function scopeVisibleOnDomain($query)
    {
        return $query->where('stiftungswo_swoadmin_domain_project.is_visible_on_domain', 1);
    }

    public function getUrlAttribute()
    {
        return '/projekt/' . $this->slug;
    }

    public $belongsTo = [
        'employee' => Employee::class,
        'habitat' => Habitat::class
    ];

    public $belongsToMany = [
        'domains' => [
            Domain::class,
            'table' => 'stiftungswo_swoadmin_domain_project',
            'pivot' => [
                'is_visible_on_domain',
                'order'
            ]
        ],
    ];
}
