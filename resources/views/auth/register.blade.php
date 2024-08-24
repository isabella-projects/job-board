<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form
        method="POST"
        action="/register"
        enctype="multipart/form-data"
    >
        <x-forms.input
            label="Name"
            name="name"
            placeholder="John Doe"
        />
        <x-forms.input
            label="E-Mail"
            name="email"
            type="email"
            placeholder="example@test.com"
        />
        <x-forms.input
            label="Password"
            name="password"
            type="password"
        />
        <x-forms.input
            label="Confirm Password"
            name="password_confirmation"
            type="password"
        />

        <x-forms.divider />

        <x-forms.input
            label="Employer Name"
            name="employer"
            placeholder="Limited Ltd."
        />

        <x-forms.input
            label="Employer Logo"
            name="logo"
            type="file"
        />



        <x-forms.button>Create Account</x-forms.button>
    </x-forms.form>
</x-layout>
