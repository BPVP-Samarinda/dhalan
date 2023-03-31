<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\Customer;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama'),
                Forms\Components\Textarea::make('alamat'),
                Forms\Components\Toggle::make('status')->onColor('success')->offColor('danger'),
                Forms\Components\Radio::make('agama')->enum('islam', 'kristen', 'katolik', 'budha', 'hindu', 'konghuchu'),
                Forms\Components\DatePicker::make('tgl_lahir'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('alamat'),
                Tables\Columns\BadgeColumn::make('status')
                ->enum([
                    0 => 'ada', 
                    1 => 'tidak']),
                    // ->colors([
                    //     'danger' => static fn ($state): bool => $state == 0,
                    //     'success' => static fn ($state): bool => $state == 1,
                    // ]),
                Tables\Columns\TextColumn::make('agama'),
                Tables\Columns\TextColumn::make('tgl_lahir'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCustomers::route('/'),
        ];
    }
}
