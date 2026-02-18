<x-layout>

    <x-form-frame action="/auth/register" method="POST">
        @csrf
        <x-card class="d-flex mx-auto p-2 align-items-center bg-secondary">
            <h2 class="text-info text-center p-0">Register</h2>
            <x-form-label-input name="name"  />
            <x-error name="name"></x-error>
            <x-form-label-input name="username"  />
            <x-error name="username"></x-error>
            <x-form-label-input name="email" type="email"  />
            <x-error name="email"></x-error>
            <x-form-label-input name="password" type="password"  />
            <x-error name="password"></x-error>
            <x-submitButton name="Register" />
        </x-card>
    </x-form-frame>
</x-layout>
