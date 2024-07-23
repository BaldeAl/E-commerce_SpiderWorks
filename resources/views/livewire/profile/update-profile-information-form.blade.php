<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Volt\Component;

new class extends Component
{
    public string $name = '';
    public string $email = '';

    /**
     * Mount the component.
     */
    public function mount(): void
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }

    /**
     * Update the profile information for the currently authenticated user.
     */
    public function updateProfileInformation(): void
    {
        $user = Auth::user();

        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
        ]);

        $user->fill($validated);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        $this->dispatch('profile-updated', name: $user->name);
    }

    /**
     * Send an email verification notification to the current user.
     */
    public function sendVerification(): void
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('dashboard', absolute: false));

            return;
        }

        $user->sendEmailVerificationNotification();

        Session::flash('status', 'verification-link-sent');
    }
}; ?>

<section>
    <header>
        <h2 class="h5 font-weight-bold ">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-muted">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form wire:submit="updateProfileInformation" class="mt-3">
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input wire:model="name" id="name" name="name" type="text" class="form-control mt-1" required autofocus
                autocomplete="name" />
            <div class="text-danger mt-2">{{ $errors->first('name') }}</div>
        </div>

        <div class="form-group">
            <label for="email">{{ __('Email') }}</label>
            <input wire:model="email" id="email" name="email" type="email" class="form-control mt-1" required
                autocomplete="username" />
            <div class="text-danger mt-2">{{ $errors->first('email') }}</div>

            @if (auth()->user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !
            auth()->user()->hasVerifiedEmail())
            <div>
                <p class="text-muted mt-2">
                    {{ __('Your email address is unverified.') }}

                    <button wire:click.prevent="sendVerification" class="btn btn-link text-muted p-0">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 text-success">
                    {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
            </div>
            @endif
        </div>

        <div class="d-flex align-items-center gap-2">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>

            @if (session('profile-updated'))
            <div class="alert alert-success mb-0">
                {{ __('Saved.') }}
            </div>
            @endif
        </div>
    </form>
    <style>
    label {
        font-weight: bold !important;
        color: black !important;
    }
    </style>
</section>