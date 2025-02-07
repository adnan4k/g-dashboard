<?php

namespace App\Http\Livewire\Contact;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public $contacts;
    public $selectedContact;
    public $openModal = false;

    protected $listeners = ['openContactDetailModal' => 'openContactDetailModal'];
    public function mount()
    {
        $this->contacts = Contact::latest()->get();
    }

    /**
     * Sets the selected contact and dispatches a browser event to open the modal.
     *
     * @param int $contactId
     */

    public function openContactDetailModal($contactId)
    {
        $this->openModal = true;
        $this->selectedContact = Contact::find($contactId);
        // Dispatch a browser event (you can listen to this event on the client if needed)
        // $this->dispatch('open-contact-detail-modal', $contactId);
        // dd($this->openModal);
    }

    public function render()
    {
        return view('livewire.contact.contact-component');
    }
}
