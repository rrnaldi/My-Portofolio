<?php

namespace App\Filament\Resources\SertifResource\Pages;

use App\Filament\Resources\SertifResource;
use App\Models\Sertif;
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
                function(Sertif  $record){
                    if($record->image)
                    Storage::disk('public')->delete($record->image);
                }
            ), 
        ];
    }
}
