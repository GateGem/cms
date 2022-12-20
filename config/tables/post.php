<?php

use GateGem\Core\Livewire\Modal;
use GateGem\Core\Builder\Form\FieldBuilder;
use GateGem\Core\Facades\GateConfig;

return GateConfig::NewItem('cms::tables.post.title')
    ->setModel(GateGem\CMS\Models\Post::class)
    ->setForm(GateConfig::Form()->setSize(Modal::Fullscreen)->setLayout([
        [
            ['key' => 'cell_1_1', 'column' => FieldBuilder::Col8],
            ['key' => 'cell_1_2', 'column' => FieldBuilder::Col4]
        ]
    ]))
    ->setFields([
        GateConfig::Field('slug')
            ->setTitle('cms::tables.post.field.slug')
            ->hideEdit()
            ->hideAdd(),
        GateConfig::Field('title')
            ->setKeyLayout('cell_1_1')
            ->setTitle('cms::tables.post.field.title'),
        GateConfig::Field('thumbnail')
            ->setKeyLayout('cell_1_2')
            ->setFieldType(FieldBuilder::Image)
            ->setTitle('cms::tables.post.field.thumbnail'),
        GateConfig::Field('tag')
            ->setTitle('cms::tables.post.field.tag')
            ->setKeyLayout('cell_1_2')
            ->setFieldType(FieldBuilder::Tag)
            ->hideView(),
        GateConfig::Field('content')
            ->setKeyLayout('cell_1_1')
            ->setTitle('cms::tables.post.field.content')
            ->setFieldType(FieldBuilder::Quill)
            ->hideView(),
        GateConfig::Field('published_at')
            ->setKeyLayout('cell_1_2')
            ->setTitle('cms::tables.post.field.published_at')
            ->setFieldType(FieldBuilder::DateTime)
    ]);
