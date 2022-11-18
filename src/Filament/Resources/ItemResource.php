<?php

namespace Lkm\Testplugin\Filament\Resources;

use Filament\Forms\Components\Card;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\MultiSelectFilter;
use Lkm\Testplugin\Models\Item;

class ItemResource extends Resource
{
	protected static ?string $model = Item::class;

	public static function form(Form $form): Form
	{
		return $form
			->schema([
				TextInput::make('name')->required()->maxLength(255),
			]);
	}

	public static function table(Table $table): Table
	{
		return $table
			->columns([
				TextColumn::make('name'),
			])
			->filters([
				//
			])
			->actions([
				ViewAction::make(),
				EditAction::make(),
			])
			->bulkActions([
				DeleteBulkAction::make(),
			]);
	}

	public static function getRelations(): array
	{
		return [];
	}

	public static function getPages(): array
	{
		return [
			'index' => ItemResource\Pages\ListItem::route('/'),
			'create' => ItemResource\Pages\CreateItem::route('/create'),
			'edit' => ItemResource\Pages\EditItem::route('/{record}/edit'),
		];
	}
}