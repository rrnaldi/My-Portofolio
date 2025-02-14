<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Filament\Resources\ExperienceResource\RelationManagers;
use App\Models\exper;
use App\Models\Experience;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExperienceResource extends Resource
{
    protected static ?string $model = exper::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('company')
                ->label('Company Name') 
                ->required()
                ->maxLength(255),
    
            Forms\Components\DatePicker::make('start_date')
                ->label('Start Date') 
                ->required(),
    
            Forms\Components\DatePicker::make('end_date')
                ->label('End Date') 
                ->nullable() 
                ->hint('Leave empty if currently working'),
    
            Forms\Components\Textarea::make('description')
                ->label('Job Description') 
                ->required()
                ->maxLength(500)
                ->rows(5),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company')
                ->searchable(),
            Tables\Columns\TextColumn::make('start_date')
                ->searchable(),
            Tables\Columns\TextColumn::make('end_date')
                ->searchable(),
            Tables\Columns\TextColumn::make('description')
                ->limit(50)
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
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
