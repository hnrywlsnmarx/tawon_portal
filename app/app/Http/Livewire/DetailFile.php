<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DetailFileModel;
use Livewire\WithFileUploads;


class DetailFile extends Component
{
    
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $images = [];

    public function render()
    {
        return view('livewire.detail-file',  [
            'detailfiles' => DetailFileModel::latest()->paginate(20),
        ]);
    }

    public function upload()
    {
        return view('livewire.detail-file.upload');
    }

    public function store()
    {
        $this->validate([
            'images.*' => 'image|max:1024', // 1MB Max
        ]);

        foreach ($this->images as $key => $image) {
            $this->images[$key] = $image->store('images','public');
        }

        $this->images = json_encode($this->images);

        Image::create(['image' => $this->images]);

        session()->flash('message', 'Image successfully Uploaded.');

        return redirect()->to('/mutliple-image-upload');
    }

}
