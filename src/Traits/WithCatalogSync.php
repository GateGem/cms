<?php

namespace GateGem\CMS\Traits;

use function PHPUnit\Framework\returnSelf;

trait WithCatalogSync
{
    private $arrCatalogs = null;
    public function CatalogModel()
    {
        return "";
    }
    public function getCatalogAttribute()
    {
        $this->arrCatalogs = $this->getCatalogNames();
        return $this->arrCatalogs;
    }

    public function setCatalogAttribute($tag)
    {
        $this->arrCatalogs = $tag;
        if ($this->id > 0) {
            $this->syncCatalogs($this->arrCatalogs);
        }
    }
    public function Catalogs()
    {
        return $this->belongsToMany($this->CatalogModel());
    }
    public function syncCatalogs($arr)
    {
        if($arr==null) return;
        if (is_string($arr)) $arr = explode(",", $arr);
        $arrCatalogs = [];
        foreach ($arr as $item) {
            if ($item) {
                $_tag = app($this->CatalogModel())->where('title', trim($item))->first();
                if ($_tag == null) {
                    $arrCatalogs[] = app($this->CatalogModel())->create(['title' => trim($item)])->id;
                } else {
                    $arrCatalogs[] = $_tag->id;
                }
            }
        }
        $this->Catalogs()->sync($arrCatalogs);
    }
    public function getCatalogNames()
    {
        $list = $this->catalogs()->pluck('title');
        if ($list)
            return $list->implode(',');
        return null;
    }
    public function getCatalogs()
    {
        return $this->catalogs()->get();
    }
    public function initializeWithCatalogSync()
    {
        self::created(function ($model) {
            $model->syncCatalogs($model->arrCatalogs);
        });
    }
}
