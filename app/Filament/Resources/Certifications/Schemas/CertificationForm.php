<?php

namespace App\Filament\Resources\Certifications\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CertificationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('organization')
                    ->required(),
                DatePicker::make('issued_on')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->visibility('public')
                    ->disk('public')
                    ->directory('certification'),
                TextInput::make('credential_id'),
            ]);
    }
}
