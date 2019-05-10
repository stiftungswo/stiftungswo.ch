<?php namespace Stiftungswo\Swoadmin\Components;

use Cms\Classes\ComponentBase;
use Stiftungswo\Swoadmin\Models\Project as ProjectModel;

class ProjectView extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ProjectView',
            'description' => 'Loads the Project from the Slug in the URL'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function project() {
        return ProjectModel::where('slug', $this->param('slug'))->first();
    }

    public function onRun()
    {
        $this->page->title = $this->project()->title;
    }
}
