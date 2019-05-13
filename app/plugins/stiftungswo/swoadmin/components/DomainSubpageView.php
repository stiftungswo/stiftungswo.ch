<?php namespace Stiftungswo\Swoadmin\Components;

use Cms\Classes\ComponentBase;
use Stiftungswo\Swoadmin\Models\DomainSubpage as DomainSubpageModel;

class DomainSubpageView extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'DomainSubpageView',
            'description' => 'Loads the DomainSubpage from the Slug in the URL'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function subpage() {
        return DomainSubpageModel::where('slug', $this->param('slug'))->first();
    }

    public function onRun()
    {
        $this->page->title = "Bereich Detail " . $this->subpage()->title;
    }
}
