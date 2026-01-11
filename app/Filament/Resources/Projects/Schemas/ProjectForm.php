<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('url')
                    ->url(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Section::make('Highlights')
                    ->columns(2)
                    ->columnSpan(2)
                    ->schema([
                        Select::make('Relevant Skills')
                            ->relationship('skills', 'name')
                            ->searchable()
                            ->preload()
                            ->multiple()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required()
                            ])
                    ])
            ]);
    }
}
