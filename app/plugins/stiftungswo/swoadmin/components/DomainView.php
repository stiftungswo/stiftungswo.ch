<?php namespace Stiftungswo\Swoadmin\Components;

use Cms\Classes\ComponentBase;
use Stiftungswo\Swoadmin\Models\Domain as DomainModel;

class DomainView extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'DomainView',
            'description' => 'Loads the Domain from the Slug in the URL'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function domain() {
        return DomainModel::where('slug', $this->param('slug'))->first();
    }

    public function onRun()
    {
        if ($this->domain()) {
            $this->page->title = "Bereich " . $this->domain()->title;
        }
    }
}
