<?php

namespace App\Filament\Resources\TechnologyResource\Pages;

use App\Filament\Resources\TechnologyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTechnology extends CreateRecord
{
    protected static string $resource = TechnologyResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
