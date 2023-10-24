@extends('layouts.app')

@section('content')
<div id="appCapsule">
    <div class="section full mt-4">
        <div class="col-12" style="margin-top:20px;">
            <div class="form-group round">
                <div class="input-wrapper">
                    <label class="label">User Name</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" readonly name="reference"
                        id="reference" placeholder="User Name">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
            </div>

            <div class="form-group round">
                <div class="input-wrapper">
                    <label class="label">Email</label>
                    <input type="text" class="form-control" value="{{ $user->email }}" readonly name="reference"
                        id="reference" placeholder="Email">
                    <i class="clear-input">
                        <ion-icon name="close-circle"></ion-icon>
                    </i>
                </div>
            </div>

            <form method="post" action="{{ route('password.update') }}">
                @csrf
                @method('put')

                <div class="form-group">
                    <x-input-label for="current_password" :value="__('Current Password')" />
                    <x-text-input id="current_password" class="form-control" name="current_password" type="password"
                        class="mt-1 block w-full" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>

                <div class="form-group">
                    <x-input-label for="password" :value="__('New Password')" />
                    <x-text-input id="password" class="form-control" name="password" type="password"
                        class="mt-1 block w-full" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                </div>

                <div class="form-group">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="form-control" name="password_confirmation"
                        type="password" class="mt-1 block w-full" autocomplete="new-password" />
                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="flex items-center gap-4">
                    <x-primary-button class="btn btn-danger">{{ __('Save') }}</x-primary-button>

                    @if (session('status') === 'password-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                    @endif
                </div>
            </form>
        </div>

    </div>


</div>
@endsection
