<?php

namespace GateGem\CMS\Models;

use GateGem\Core\Traits\WithSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Catalog extends Model
{
    use HasFactory;
    use WithSlug;
    protected $fillable = ['slug','title'];
    
    //protected static function newFactory()
    //{
    //    return \GateGem\CMS\Database\Factories\CatalogFactory::new();
    //}
}
