<?php

use GateGem\Core\Livewire\Modal;
use GateGem\Core\Builder\Form\FieldBuilder;
use GateGem\Core\Facades\GateConfig;

return GateConfig::NewItem('cms::tables.tag.title')
    ->setModel(\GateGem\CMS\Models\Catalog::class)
    ->setForm(
        GateConfig::Form()
            ->setSize(Modal::ExtraLarge)
    )
    ->setFields([
        GateConfig::Field()
            ->setTitle('cms::tables.tag.field.slug')
            ->setField('slug')
            ->setFieldType(FieldBuilder::Text),
        GateConfig::Field()
            ->setTitle('cms::tables.tag.field.title')
            ->setField('title')
            ->setFieldType(FieldBuilder::Text),
    ]);
