<?php

namespace App\Http\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class Add extends Component
{

    public  $name;
    public  $description;
    public  $price;


    public function add(){
        Category::create([
            'name'=>$this->name,
            'description'=>$this->description,
            'price'=>$this->price,

        ]);

        $this->emitTo('category.show','$refresh');

        }

    public function render()
    {
        return view('livewire.category.add');
    }
}
