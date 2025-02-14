<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkillsResource\Pages;
use App\Filament\Resources\SkillsResource\RelationManagers;
use App\Models\Skills;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SkillsResource extends Resource
{
    protected static ?string $model = Skills::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('skills')
                        ->required()
                        ->maxLength(255),
                Forms\Components\TextInput::make('percentage')
                        ->required()
                        ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('skills')
                    ->searchable(),
                Tables\Columns\TextColumn::make('percentage')
                    ->searchable(),
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
            'index' => Pages\ListSkills::route('/'),
            'create' => Pages\CreateSkills::route('/create'),
            'edit' => Pages\EditSkills::route('/{record}/edit'),
        ];
    }
}
