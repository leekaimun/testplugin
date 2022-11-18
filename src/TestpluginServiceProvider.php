<?php

namespace Lkm\Testplugin;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Lkm\Testplugin\Filament\Resources\ItemResource;

class TestpluginServiceProvider extends PluginServiceProvider
{
    public static string $name = 'testplugin';

    protected array $resources = [
        ItemResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-testplugin' => __DIR__.'/../resources/dist/testplugin.css',
    ];

    protected array $scripts = [
        'plugin-testplugin' => __DIR__.'/../resources/dist/testplugin.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-testplugin' => __DIR__ . '/../resources/dist/testplugin.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasMigrations(['create_items_table']);
    }
}
