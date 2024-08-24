<x-layout>
    <x-page-heading>Log In</x-page-heading>

    <x-forms.form method="POST" action="/login">
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

        <x-forms.button>Log In</x-forms.button>
    </x-forms.form>
</x-layout>
