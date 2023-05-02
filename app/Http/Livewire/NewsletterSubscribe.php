<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Livewire\Component;

class NewsletterSubscribe extends Component
{
    public string $email;
    public string $success;

    public function store()
    {
        $this->validate([
            'email' => ['required', 'email', 'unique:subscribers']
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $this->email;
        $subscriber->save();

        $this->success = 'You signed up to our newsletter successfully!';
    }

    public function hydrate()
    {
        $this->success = '';
    }

    public function render()
    {
        return view('livewire.newsletter-subscribe');
    }
}
