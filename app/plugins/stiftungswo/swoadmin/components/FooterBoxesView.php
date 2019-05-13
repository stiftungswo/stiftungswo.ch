<?php namespace Stiftungswo\Swoadmin\Components;

use Cms\Classes\ComponentBase;
use Stiftungswo\Swoadmin\Models\Domain;
use Stiftungswo\Swoadmin\Models\DomainSubpage as DomainSubpageModel;
use Stiftungswo\Swoadmin\Models\Process;

class FooterBoxesView extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'FooterBoxesView Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function domains() {
        return Domain::all();
    }
    public function processes() {
        return Process::all();
    }
}
