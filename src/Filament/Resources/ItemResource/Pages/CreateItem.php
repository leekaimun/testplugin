<?php

namespace Lkm\Testplugin\Filament\Resources\ItemResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Lkm\Testplugin\Filament\Resources\ItemResource;

class CreateItem extends CreateRecord
{
    protected static string $resource = ItemResource::class;
}