<?php

namespace App\Http\Livewire\Employer;

use App\Models\Job;
use Livewire\Component;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;


class Dashboard extends Component  implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected function getTableQuery(): Builder 
    {

        return Job::latest()->limit(5);
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
        return 'No Jobs yet';
    }

    public function render()
    {
        return view('livewire.employer.dashboard');
    }
}
