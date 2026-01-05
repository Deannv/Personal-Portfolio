<?php

namespace App\Filament\Resources\Contents\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ContentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('linkedin_url')
                    ->url(),
                TextInput::make('github_url')
                    ->url(),
                Toggle::make('is_available')
                    ->required(),
            ]);
    }
}
