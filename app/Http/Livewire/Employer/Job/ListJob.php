<?php

namespace App\Http\Livewire\Employer\Job;

use Livewire\Component;
use Filament\Tables;
use App\Models\Job;
use Illuminate\Database\Eloquent\Builder;

class ListJob extends Component implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder 
    {

        return Job::query();
    }

    protected function getTableColumns(): array 
    {
        return [ 
            Tables\Columns\TextColumn::make('title'),
        ]; 
    }

    protected function getTableEmptyStateIcon(): ?string 
    {
        return 'heroicon-o-bookmark';
    }
 
    protected function getTableEmptyStateHeading(): ?string
    {
        return 'No posts yet';
    }

    // protected function getTableEmptyStateActions(): array
    // {
    //     return [
    //         Tables\Actions\Action::make('create')
    //             ->label('Create post')
    //             ->url(route('createjobs'))
    //             ->icon('heroicon-o-plus')
    //             ->button(),
    //     ];
    // } 
 

    public function render()
    {
        return view('livewire.employer.job.list-job');
    }
}
