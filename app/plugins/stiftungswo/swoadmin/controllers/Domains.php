<?php namespace Stiftungswo\Swoadmin\Controllers;

use Backend\Behaviors;
use Backend\Classes\Controller;
use BackendMenu;
use Flash;
use Stiftungswo\Swoadmin\Models\Domain;
use Event;

class Domains extends Controller
{
    public $implement = [
        Behaviors\ListController::class,
        Behaviors\FormController::class,
        Behaviors\RelationController::class
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relations.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Stiftungswo.Swoadmin', 'domains');
    }

    public function update($recordId, $context = null)
    {
        $this->addCss('/plugins/stiftungswo/swoadmin/assets/css/sortable.css');
        $this->addJs('/plugins/stiftungswo/swoadmin/assets/js/html5sortable.js');
        $this->addJs('/plugins/stiftungswo/swoadmin/assets/js/sortable.js');

        return $this->asExtension('FormController')->update($recordId, $context);
    }

    public function onProjectsSort()
    {
        return $this->makePartial('projects_order_form');
    }

    public function onSwitchSwoListField($domainId)
    {
        $field = post('field');
        $id = post('id');
        $modelClass = post('model');

        if (empty($field) || empty($id) || empty($modelClass)) {
            Flash::error('Following parameters are required : id, field, model');

            return;
        }

        $domain = Domain::find($domainId);
        $item = $domain->projects()->where('project_id', $id)->where('domain_id', $domainId)->firstOrFail();

        $domain->projects()->remove($item);
        $domain->projects()->add($item, array_merge($item->pivot->toArray(), [ 'is_visible_on_domain' => !$item->pivot->is_visible_on_domain ]));

        $this->initForm($domain);
        $this->initRelation($domain, 'projects');

        return $this->relationRefresh('projects');
    }

    public function update_onUpdateProjectPosition($domainId)
    {
        $moved = [];
        $position = 0;

        $domain = Domain::find($domainId);
        if (($reorderIds = post('checked')) && is_array($reorderIds) && count($reorderIds)) {
            foreach ($reorderIds as $id) {
                $item = $domain->projects()->where('project_id', $id)->where('domain_id', $domainId)->first();

                $domain->projects()->remove($item);
                $domain->projects()->add($item, array_merge($item->pivot->toArray(), [ 'order' => $position ]));

                $moved[] = $id;
                $position++;
            }

            if (count($reorderIds) === count($moved))
                Flash::success('Reihenfolge erfolgreich gesetzt.');
        }

        $this->initForm($domain);
        $this->initRelation($domain, 'projects');

        return $this->relationRefresh('projects');
    }
}
