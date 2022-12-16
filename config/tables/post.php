<?php

use GateGem\Core\Livewire\Modal;
use GateGem\Core\Builder\Form\FieldBuilder;

return [
    'model' => GateGem\CMS\Models\Post::class,
    //'DisableModule' => true,
    'enableAction' => true,
    'funcQuery' => function ($query, $request, $PostComponent) {
        return $query;
    },
    'title' => 'cms::tables.post.title',
    'action' => [
        'add' => true,
        'edit' => true,
        'delete' => true,
        'export' => true,
        'inport' => true,
        'append' => [
            [
                'title' =>  'cms::tables.post.button.button1',
                'icon' => '<i class="bi bi-magic"></i>',
                'permission' => 'cms.post.button.button1',
                'class' => 'btn-primary',
                'type' => 'update',
                'action' => function ($id) {
                    return 'wire:component="cms::page.post.edit({\'dataId\':\'' . $id . '\'})"';
                }
            ]
        ]
    ],
    'formSize' => Modal::ExtraLarge,
    'fields' => [
        [
            'field' => 'slug',
            'edit' => false,
            'add' => false,
            'fieldType' => FieldBuilder::Text,
            'title' => 'cms::tables.post.field.slug'
        ],
        [
            'field' => 'title',
            'title' => 'cms::tables.post.field.title'
        ],
        [
            'field' => 'thumbnail',
            'fieldType' => FieldBuilder::File,
            'title' => 'cms::tables.post.field.thumbnail'
        ],

        [
            'field' => 'tag',
            'fieldType' => FieldBuilder::Tag,
            'title' => 'cms::tables.post.field.tag'
        ],
        [
            'field' => 'content',
            'view' => false,
            'fieldType' => FieldBuilder::Quill,
            'title' => 'cms::tables.post.field.content'
        ],

        [
            'field' => 'published_at',
            'view' => false,
            'fieldType' => FieldBuilder::DateTime,
            'title' => 'cms::tables.post.field.published_at'
        ],
    ]
];
