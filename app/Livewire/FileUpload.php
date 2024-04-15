<?php

namespace App\Livewire;

use App\Models\Uploadfile;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    public $name;
    public $file;

    public $downloads;

    protected $rules = [
        'name' => 'required',
        'file' => 'required|mimes:pdf,doc,docx,jpg,png,jpeg|max:2048',
    ];

    public function save()
    {
        $this->validate();

        $path = $this->file->store('myfiles');

        Uploadfile::create([
            'name' => $this->name,
            'path' => $path,
        ]);

        session()->flash('status', 'File Uploaded');
       // $this->reset('name','file');
      return $this->redirect('upload', navigate:true);
    }

    public function render()
    {
        return view('livewire.file-upload');
    }

    public function mount()
    {
        $this->downloads=Uploadfile::all();
    }


    public function downloadfile(Uploadfile $uploadfile){

        //dd($uploadfile);

        if(Storage::disk('local')->exists($uploadfile->path)){
            session()->flash('status','File is downloading');
            return Storage::download($uploadfile->path,$uploadfile->name);
        }
        session()->flash('status','File not found');
    }
}
