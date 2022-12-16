<?php

namespace GateGem\CMS\Models;

use GateGem\CMS\Traits\WithCatalogSync;
use GateGem\Core\Traits\WithSlug;
use GateGem\Core\Traits\WithTagSync;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    // use HasFactory;
    use WithSlug, WithTagSync, WithCatalogSync;
    public function TagModel()
    {
        return Tag::class;
    }
    public function CatalogModel()
    {
        return Catalog::class;
    }
    protected $fillable = ['title', 'slug', 'content', 'thumbnail'];

    //protected static function newFactory()
    //{
    //    return \GateGem\CMS\Database\Factories\PostFactory::new();
    //}
}
