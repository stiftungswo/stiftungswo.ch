<?php namespace Stiftungswo\Swoadmin\Models;

use Model;
use October\Rain\Database\Traits;

/**
 * Model
 */
class DomainSubpage extends Model
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
    public $table = 'stiftungswo_swoadmin_domain_subpage';

    /**
     * @var array Generate slugs for these attributes.
     */
    protected $slugs = ['slug' => 'title'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function getUrlAttribute()
    {
        return '/bereich/detail/' . $this->slug;
    }

    public $belongsTo = [
      'domain' => Domain::class
    ];
}
