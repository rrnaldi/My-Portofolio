<?php

namespace App\Filament\Resources\ProjekResource\Pages;

use Filament\Actions;
use App\Models\Projek;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ProjekResource;

class EditProjek extends EditRecord
{
    protected static string $resource = ProjekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(Projek  $record){
                    if($record->image)
                    Storage::disk('public')->delete($record->image);
                }
            ), 
        ];
    }
}
