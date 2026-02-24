<div class="p-5">
    <x-form-frame action="/auth/login" method="POST">
        @csrf
        <x-card class="d-flex mx-auto p-5 align-items-center bg-secondary">
            <h2 class="text-info text-center mb-3 pb-5">Login</h2>
            <x-form-label-input name="email"  />
            <x-error name="email"></x-error>
            <x-form-label-input name="password" type="password"  />
            <x-error name="password"></x-error>
            <x-submitButton name="Login" />
            <small class="text-dark">Are you already have an account ?   <a href="/auth/register" class="text-info text-decoration-none">reagister</a></small>
        </x-card>
    </x-form-frame>
</div>
