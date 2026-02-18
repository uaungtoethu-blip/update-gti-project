<x-form-frame action="/auth/login" method="POST">
    @csrf
    <x-card class="d-flex mx-auto p-3 align-items-center bg-secondary bg-opacity-50">
        <h2 class="text-info text-center mb-3">Login</h2>
        <x-form-label-input name="email"  />
        <x-error name="email"></x-error>
        <x-form-label-input name="password" type="password"  />
        <x-error name="password"></x-error>
        <x-submitButton name="Login" />
    </x-card>
    </x-form-frame>
