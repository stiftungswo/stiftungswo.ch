<?php namespace Stiftungswo\Swoadmin\Components;

use Cms\Classes\ComponentBase;
use Stiftungswo\Swoadmin\Models\Employee as EmployeeModel;

class EmployeeView extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'EmployeeView',
            'description' => 'Loads the Employee from the Slug in the URL'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function domain() {
        return EmployeeModel::where('slug', $this->param('slug'))->first();
    }

    public function onRun()
    {
        if ($this->domain()) {
            $this->page->title = "Mitarbeiter " . $this->domain()->title;
        }
    }
}
