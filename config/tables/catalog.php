<?php

use GateGem\Core\Livewire\Modal;
use GateGem\Core\Builder\Form\FieldBuilder;
use GateGem\Core\Facades\GateConfig;

return GateConfig::NewItem()
    ->setTitle('cms::tables.catalog.title')
    ->setModel(\GateGem\CMS\Models\Catalog::class)
    ->setForm(
        GateConfig::Form()
            ->setSize(Modal::ExtraLarge)
    )
    ->setFields([
        GateConfig::Field()
            ->setTitle('cms::tables.catalog.field.slug')
            ->setField('slug')
            ->setFieldType(FieldBuilder::Text),
        GateConfig::Field()
            ->setTitle('cms::tables.catalog.field.title')
            ->setField('title')
            ->setFieldType(FieldBuilder::Text),
    ]);



// [
//     'model' => GateGem\CMS\Models\Catalog::class,
//     //'DisableModule' => true,
//     'enableAction' => true,
//     'funcQuery' => function ($query, $request, $CatalogComponent) {
//         return $query;
//     },
//     'title' => '',
//     'action' => [
//         'title' => '#',
//         'add' => true,
//         'edit' => true,
//         'delete' => true,
//         'export' => true,
//         'inport' => true,
//         'append' => [
//             // [
//             //     'title' =>  'cms::tables.catalog.button.button1',
//             //     'icon' => '<i class="bi bi-magic"></i>',
//             //     'permission' => 'cms.catalog.button.button1',
//             //     'class' => 'btn-primary',
//             //     'type' => 'update',
//             //     'action' => function ($id) {
//             //         return 'wire:component="cms::page.catalog.edit({\'dataId\':\'' . $id . '\'})"';
//             //     }
//             // ]
//         ]
//     ],
//     'formSize' => Modal::Small,
//     'fields' => [
//         [
//             'field' => 'slug',
//             'fieldType' => FieldBuilder::Text,
//             'title' => 'cms::tables.catalog.field.slug'
//         ],
//         [
//             'field' => 'title',
//             'title' => 'cms::tables.catalog.field.title'
//         ],
//     ]
// ];
