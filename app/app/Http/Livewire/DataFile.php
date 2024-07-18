<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DataFileModel;
//use Livewire\WithPagination;
class DataFile extends Component
{
    //use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.data-file',  [
            'datafiles' => DataFileModel::latest()->paginate(5),
        ]);
    }
}
