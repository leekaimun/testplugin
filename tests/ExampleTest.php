<?php

use Lkm\Testplugin\Filament\Resources\ItemResource\Pages\CreateItem;
use Lkm\Testplugin\Filament\Resources\ItemResource\Pages\EditItem;
use Lkm\Testplugin\Filament\Resources\ItemResource\Pages\ListItem;
use Lkm\Testplugin\Models\Item;
use function Pest\Livewire\livewire;

it('can test', function () {
    $name = 'Fake Name';
    livewire(CreateItem::class)
        ->fillForm(['name' => $name])
        ->call('create')
        ->assertHasNoFormErrors();  // Tested ok

    $this->assertDatabaseHas(Item::class, ['name' => $name]); // Tested ok

    livewire(ListItem::class)->assertSee($name); // Tested ok

    $record = Item::where('name', $name)->first();
    livewire(EditItem::class, ['record' => $record->id]);
    /*
      The above code encountered Illuminate\View\ViewException
      Undefined variable $form
      (View: .../testplugin/vendor/filament/filament/resources/views/resources/pages/edit-record.blade.php)
     */
});
