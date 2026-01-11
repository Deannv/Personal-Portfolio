<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('company_id')
                    ->relationship('company', 'name')
                    ->required()
                    ->createOptionForm([
                        TextInput::make('name')
                            ->required(),
                        FileUpload::make('image')
                            ->image()
                            ->disk('public')
                            ->visibility('public')
                            ->directory('company_images'),
                    ]),
                TextInput::make('title')
                    ->required(),
                Select::make('employment_type')
                    ->options([
                        'freelance' => 'Freelance',
                        'full-time' => 'Full time',
                        'part-time' => 'Part time',
                        'self-employment' => 'Self employment',
                        'internship' => 'Internship',
                    ])
                    ->preload()
                    ->default('full-time')
                    ->required(),
                Toggle::make('is_currently_working')
                    ->required(),
                DatePicker::make('start_date')
                    ->required(),
                DatePicker::make('end_date'),
                TextInput::make('location'),
                Select::make('location_type')
                    ->options(['on-site' => 'On site', 'online' => 'Online', 'hybrid' => 'Hybrid'])
                    ->default('on-site')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                Section::make('Highlights')
                    ->columns(2)
                    ->columnSpan(2)
                    ->schema([
                        Repeater::make('Highlight')
                            ->relationship('experienceBulletPoints')
                            ->schema([
                                Textarea::make('description')
                                    ->required()
                            ]),

                        Select::make('Relevant Skills')
                            ->relationship('skills', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required()
                            ])
                    ])
            ]);
    }
}
