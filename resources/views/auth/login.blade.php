<x-layout>
    <x-page-heading>Log In</x-page-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />

        <div class="mt-6 flex items-center justify-end gap-x-2">
            <a href="/" class="bg-gradient-to-r from-blue-600 to-blue-800 hover:from-blue-700 hover:to-blue-900 px-4 py-2 shadow-xl rounded-md">back</a>
            <x-forms.button type="submit">Log In</x-forms.button>
        </div>
    </x-forms.form>
</x-layout>
