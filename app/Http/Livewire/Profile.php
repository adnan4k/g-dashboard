<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Masmerise\Toaster\Toaster;

class Profile extends Component
{
    public $name, $email, $phone;
    public $current_password, $new_password, $confirm_password;

    public function mount()
    {
        $user = User::where('id', auth()->id())->first();

        if ($user) {
            $this->name = $user->name;
            $this->email = $user->email;
            $this->phone = $user->phone;
        }
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email',
            'phone' => 'nullable',
        ]);

        $user = User::where('id', auth()->id())->first();

        if ($user) {
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
            ]);
        }

        if ($this->current_password || $this->new_password || $this->confirm_password) {
            $this->validate([
                'current_password' => '',
                'new_password' => 'different:current_password',
                'confirm_password' => 'same:new_password',
            ]);

          

            $user->update([
                'password' => Hash::make($this->new_password),
            ]);

            // Clear password fields after successful update
            $this->current_password = '';
            $this->new_password = '';
            $this->confirm_password = '';
        }
         Toaster::success('Updated successfully');
        // session()->flash('message', 'Profile updated successfully!');
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
