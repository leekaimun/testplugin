<?php

namespace Lkm\Testplugin\Filament\Resources\ItemResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Lkm\Testplugin\Filament\Resources\ItemResource;
use Filament\Pages\Actions\DeleteAction;
use Lkm\Testplugin\Models\Item;

class EditItem extends EditRecord
{
    protected static string $resource = ItemResource::class;

    protected function getActions(): array
    {
			return [ DeleteAction::make(), ];
    }
}