<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DetailFileModel;
use Livewire\WithFileUploads;


class UploadFile extends Component
{
    
    use WithFileUploads;
    public $loan_app_no, $file;
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function submit()
    {
        $dataValid = $this->validate([
            'loan_app_no' => 'required',
            'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
        ]);
  
        $dataValid['file'] = $this->file->store('dokumen');
        dd($dataValid);
        
        DetailFileModel::create($dataValid);
  
        session()->flash('message', 'File uploaded.');
    }

    public function render()
    {
        //session()->flash('message', 'Start uploaded.');
        return view('livewire.upload-file');
    }

}
