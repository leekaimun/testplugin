<?php

namespace Lkm\Testplugin\Filament\Resources\ItemResource\Pages;

use Filament\Resources\Pages\ListRecords;
use Lkm\Testplugin\Filament\Resources\ItemResource;
use Filament\Pages\Actions\CreateAction;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Lkm\Testplugin\Models\Item;

class ListItem extends ListRecords
{
    protected static string $resource = ItemResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}