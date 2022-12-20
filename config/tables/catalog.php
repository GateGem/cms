<?php

use GateGem\Core\Livewire\Modal;
use GateGem\Core\Builder\Form\FieldBuilder;
use GateGem\Core\Facades\GateConfig;

return GateConfig::NewItem('cms::tables.catalog.title')
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
