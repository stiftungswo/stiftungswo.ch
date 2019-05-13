<?php
namespace Stiftungswo\Swoadmin\Models;

use October\Rain\Database\Pivot;
use October\Rain\Database\Traits\Sortable;
use October\Rain\Database\Traits\Validation;

/**
 * User-Role Pivot Model
 */
class ProcessProjectPivot extends Pivot
{

    use Validation;
    use Sortable;

    const SORT_ORDER = 'order';

    /**
     * @var array Rules
     */
    public $rules = [
        'order' => 'required|unique',
    ];

    public $customMessages = [
        'order.unique' => 'Die Reihenfolge muss eindeutig sein',
    ];
}