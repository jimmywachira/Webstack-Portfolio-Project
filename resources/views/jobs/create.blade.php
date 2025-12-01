<x-layout>
    <x-page-heading> create New Job </x-page-heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title">Title</label>

                        <div class="mt-2">
                            <input name="title" id="title" placeholder="CEO" />

                            @error('title')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary">Salary</label>

                        <div class="mt-2">
                            <input name="salary" id="salary" placeholder="$50,000 USD" />

                            @error('salary')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <input type="submit" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" value="Save" />
        </div>
    </form>

    {{-- <x-forms.form method="POST" action={{route("/jobs")}}> --}}
    {{-- <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.checkbox label="Remote" name="remote" />

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider /> --}}

    {{-- <select label="employer" name="employer">
        @foreach($employers as $employee)
            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
    @endforeach
    </select> --}}

    {{-- <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education" /> --}}

    {{-- <x-forms.button type="submit">Publish</x-forms.button>
    </x-forms.form> --}}
</x-layout>
