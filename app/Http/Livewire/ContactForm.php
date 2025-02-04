<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;
use Illuminate\Support\Facades\Session;

class ContactForm extends Component
{
    public $name, $email, $message;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:5'
    ];

    public function submit()
    {
        $this->validate();

        // Save message to the database
        Message::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        // Reset form fields
        // return redirect()->route('home')->with('success', 'Message sent successfully!');

    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
?>