<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactList extends Component
{
    protected $listeners = ['refreshList' => '$refresh'];

    public function render()
    {
        $contacts = Contact::all();
        
        return view('livewire.contact-list', compact('contacts'));
    }
}
