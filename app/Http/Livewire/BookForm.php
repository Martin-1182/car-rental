<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Mail\SendMail;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class BookForm extends Component
{
    public Car $car;

    public function mount(Car $car)
    {
        $this->car = $car;
    }

    public $name;
    public $email;
    public $phone;



    public $successMessage;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'phone' => 'required',
    ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }





    public function submitForm()
    {
        $data = $this->validate();


        $data['name'] = $this->name;
        $data['email'] = $this->email;
        $data['phone'] = $this->phone;


        sleep(1);


        Mail::to('m.halaj@websystem.sk')->send(new SendMail($data));

        $this->successMessage = 'Vehicle reservation was created successfully';


        $this->resetForm();

    }

    private function resetForm()
    {
            $this->name = ' ';
            $this->email = ' ';
            $this->phone = ' ';
            $this->carId = ' ';
    }



    public function render()
    {
        return view('livewire.book-form');
    }
}


