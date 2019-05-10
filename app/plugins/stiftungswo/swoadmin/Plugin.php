<?php namespace Stiftungswo\Swoadmin;

use Stiftungswo\Swoadmin\Classes\SortableListSwitchField;
use Stiftungswo\Swoadmin\Components\DomainView;
use Stiftungswo\Swoadmin\Components\ProjectView;
use Backend\Classes\Controller;
use System\Classes\PluginBase;
use Event;
use Flash;

class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */
    public $require = [
        'ToughDeveloper.ImageResizer'
    ];

    public function registerComponents()
    {
        return [
            ProjectView::class => 'projectView',
            DomainView::class => 'domainView'
        ];
    }

    public function registerSettings()
    {
    }

    /**
     * Register custom list type
     *
     * @return array
     */
    public function registerListColumnTypes()
    {
        return [
            'swo-list-switch' => [SortableListSwitchField::class, 'render']
        ];
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        Event::listen('backend.list.extendColumns', function ($widget) {
            foreach ($widget->config->columns as $name => $config) {
                if (empty($config['type']) || $config['type'] !== 'swo-list-switch') {
                    continue;
                }

                // Store field config here, before that unofficial fields was removed
                SortableListSwitchField::storeFieldConfig($name, $config);

                $column = [
                    'clickable' => false,
                    'type'      => 'swo-list-switch'
                ];

                if (isset($config['label'])) {
                    $column['label'] = $config['label'];
                }

                // Set this column not clickable
                // if other column with same field name exists configs are merged
                $widget->addColumns([
                    $name => $column
                ]);
            }
        });

        /**
         * Switch a boolean value of a model field
         * @return void
         */
        Controller::extend(function ($controller) {

            $controller->addDynamicMethod('onSwitchInetisListField', function () use ($controller) {

                $field = post('field');
                $id = post('id');
                $modelClass = post('model');

                if (empty($field) || empty($id) || empty($modelClass)) {
                    Flash::error('Following parameters are required : id, field, model');

                    return;
                }

                $model = new $modelClass;
                $item = $model::find($id);
                $item->{$field} = !$item->{$field};

                $item->save();

                return $controller->listRefresh($controller->primaryDefinition);
            });
        });
    }
}
