<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LoansResource\Pages;
use App\Filament\Resources\LoansResource\RelationManagers;
use App\Models\Loans;
use App\Models\Books;
use App\Models\Members;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LoansResource extends Resource
{
    protected static ?string $model = Loans::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('member_id')
                    ->label('ID Member')
                    ->options(members::all()->mapWithKeys(function ($item) {
                        return [$item->id => $item->id . ' - ' . $item->name];
                    }))
                    ->searchable(),

                Forms\Components\Select::make('book_id')
                    ->label('ID Buku')
                    ->options(books::all()->mapWithKeys(function ($item) {
                        return [$item->id => $item->id . ' - ' . $item->title];
                    }))
                    ->searchable(),

                Forms\Components\DatePicker::make('borrow_date')
                ->label('Borrow Date')
                ->required(),

                Forms\Components\DatePicker::make('return_date')
                ->label('Return Date'),

                Forms\Components\Select::make('status')
                ->label('Status')
                ->options([
                    'borrowed' => 'borrowed',
                    'returned' => 'returned',
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('book_id')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('member_id')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('borrow_date')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('return_date')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('status')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLoans::route('/'),
            'create' => Pages\CreateLoans::route('/create'),
            'edit' => Pages\EditLoans::route('/{record}/edit'),
        ];
    }
}
