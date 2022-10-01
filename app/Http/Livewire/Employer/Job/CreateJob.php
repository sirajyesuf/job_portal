<?php

namespace App\Http\Livewire\Employer\Job;

use Livewire\Component;
use Filament\Forms;
use Illuminate\Support\Str;
class CreateJob extends Component implements forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    public $title;

    public function render()
    {
        return view('livewire.employer.job.create-job');
    }
    protected function getFormSchema(): array 
    {
        return [
    
            Forms\Components\Group::make()
            ->schema([

            Forms\Components\Group::make()
            ->schema([

            Forms\Components\Card::make()
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->lazy()
                    ->afterStateUpdated(fn (string $context, $state, callable $set) => $context === 'create' ? $set('slug', Str::slug($state)) : null),

                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->required()
                    ->unique(Job::class, 'slug', ignoreRecord: true),

                Forms\Components\MarkdownEditor::make('description')
                    ->columnSpan('full'),
                Forms\Components\MarkdownEditor::make('requirement')
                    ->columnSpan('full'),
               
            ])
            ->columns(2),
        Forms\Components\Section::make('Salary')
            ->schema([
                Forms\Components\TextInput::make('salary')
                    ->default('As per the Company Scale')
                    ->required(),
                Forms\Components\TextInput::make('number_position')
                    ->label('Number of Position')
                    ->numeric()
                    ->rules(['regex:/^\d{1,6}(\.\d{0,2})?$/'])
                    ->required()

            ])
            ->columns(2),

        Forms\Components\Section::make('How To apply')
            ->schema([
                Forms\Components\MarkdownEditor::make('how_to_apply')
                ->columnSpan('full'),
            ])
            ->columns(2),
    ])->columnSpan((['lg' => 2])),
    Forms\Components\Group::make()
            ->schema([
        Forms\Components\Section::make('Job Seeker')
            ->schema([
                Forms\Components\Select::make('location_id')
                    ->relationship('location','name')
                    ->searchable(),
                Forms\Components\Select::make('education_id')
                    ->relationship('education','name')
                    ->searchable(),

                Forms\Components\MultiSelect::make('categories')
                ->relationship('categories','name')
                ->required(),
            ])
            ])
            ->columnSpan(['lg' => 1])
            ])
            ->columns(3)
            
            
        ];
            
    }
}
