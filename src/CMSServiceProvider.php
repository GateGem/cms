<?php

namespace GateGem\CMS;

use GateGem\Core\Builder\Menu\MenuBuilder;
use Illuminate\Support\ServiceProvider;
use GateGem\Core\Support\Core\ServicePackage;
use GateGem\Core\Traits\WithServiceProvider;

class CMSServiceProvider extends ServiceProvider
{
    use WithServiceProvider;

    public function configurePackage(ServicePackage $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         */
        $package
            ->name('cms')
            ->hasConfigFile()
            ->hasViews()
            ->hasHelpers()
            ->hasAssets()
            ->hasTranslations()
            ->runsMigrations();
    }
    public function extending()
    {
        
    }
    public function registerMenu()
    {
        add_menu_with_sub(function ($subItem) {
            $subItem
                ->addItem('cms::menu.sidebar.post', 'bi bi-speedometer', '', ['name' => 'core.table.slug', 'param' => ['module' => 'post']], MenuBuilder::ItemRouter)
                ->addItem('cms::menu.sidebar.catalog', 'bi bi-speedometer', '', ['name' => 'core.table.slug', 'param' => ['module' => 'catalog']], MenuBuilder::ItemRouter)
                ->addItem('cms::menu.sidebar.tag', 'bi bi-speedometer', '', ['name' => 'core.table.slug', 'param' => ['module' => 'tag']], MenuBuilder::ItemRouter)
                ;
        }, 'cms::menu.sidebar.post',  'bi bi-speedometer');
    }
    public function packageRegistered()
    {
        add_link_symbolic(__DIR__ . '/../public', public_path('modules/gate-cms'));
        add_asset_js(asset('modules/gate-cms/js/gate-cms.js'), '', 20);
        add_asset_css(asset('modules/gate-cms/css/gate-cms.css'), '',  20);

        $this->registerMenu();
        $this->extending();
    }
    private function bootGate()
    {
        if (!$this->app->runningInConsole()) {
            add_filter('core_auth_permission_custom', function ($prev) {
                return [
                    ...$prev,
                ];
            });
        }
    }
    public function packageBooted()
    {
        $this->bootGate();
    }
}
