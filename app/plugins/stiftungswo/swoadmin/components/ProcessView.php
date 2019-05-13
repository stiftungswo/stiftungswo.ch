<?php namespace Stiftungswo\Swoadmin\Components;

use Cms\Classes\ComponentBase;
use Stiftungswo\Swoadmin\Models\Process as ProcessModel;

class ProcessView extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ProcessView',
            'description' => 'Loads the Process from the Slug in the URL'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function domain() {
        return ProcessModel::where('slug', $this->param('slug'))->first();
    }

    public function onRun()
    {
        if ($this->domain()) {
            $this->page->title = "Prozess " . $this->domain()->title;
        }
    }
}
