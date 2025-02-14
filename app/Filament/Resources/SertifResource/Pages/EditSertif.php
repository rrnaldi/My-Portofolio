<?php

namespace App\Filament\Resources\SertifResource\Pages;

use App\Filament\Resources\SertifResource;
use App\Models\sertif;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditSertif extends EditRecord
{
    protected static string $resource = SertifResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(sertif  $record){
                    if($record->image)
                    Storage::disk('public')->delete($record->image);
                }
            ), 
        ];
    }
}
