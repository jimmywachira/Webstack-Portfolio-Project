<x-layout>
    <x-page-heading>Log In</x-page-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />

         <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="border border-blue-300 px-3 py-2 rounded-md font-semibold leading-6 text-white-900">Cancel</a>
        <x-forms.button>Log In</x-button>
        </div>
    </x-forms.form>
</x-layout>
