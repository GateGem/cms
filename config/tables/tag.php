<?php

use GateGem\Core\Livewire\Modal;
use GateGem\Core\Builder\Form\FieldBuilder;

return [
    'model' => GateGem\CMS\Models\Tag::class,
    //'DisableModule' => true,
    'enableAction' => true,
    'funcQuery'=>function($query,$request,$TagComponent){
        return $query;
    },
    'title'=>'cms::tables.tag.title',
    'action' => [
        'title' => '#',
        'add' => true,
        'edit' => true,
        'delete' => true,
        'export' => true,
        'inport' => true,
        'append' => [
            [
                'title' =>  'cms::tables.tag.button.button1',
                'icon' => '<i class="bi bi-magic"></i>',
                'permission' => 'cms.tag.button.button1',
                'class' => 'btn-primary',
                'type' => 'update',
                'action' => function ($id) {
                    return 'wire:component="cms::page.tag.edit({\'dataId\':\'' . $id . '\'})"';
                }
            ]
        ]
    ],
    'formSize' => Modal::Small,
    'fields' => [
        [
            'field' => 'slug',
            'fieldType' => FieldBuilder::Text,
            'title' => 'cms::tables.tag.field.slug'
        ],
        [
            'field' => 'title',
            'title' => 'cms::tables.tag.field.title'
        ],
    ]
];
