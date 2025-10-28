<x-layout>
    <x-slot:heading>
        Create a Job
    </x-slot:heading>

    <form method="POST" action="/jobs" class="mt-6 space-y-8">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-white">Create a New job</h2>
                <p class="mt-1 text-sm/6 text-gray-400">Please fill in the details below to create a new job listing.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>

                        <div class="mt-2">

                            <x-form-input id="title" name="title" placeholder="Enter title here" required />

                            <x-form-error name="title" />

                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>

                        <div class="mt-2">

                            <x-form-input id="salary" name="salary" placeholder="Enter salary here" required />

                            <x-form-error name="salary" />

                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="location">Location</x-form-label>

                        <div class="mt-2">

                            <x-form-input id="location" name="location" placeholder="Enter location here" required />

                            <x-form-error name="location" />

                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-form-button-cancel>Cancel</x-form-button-cancel>
            <x-form-button-save>Save</x-form-button-save>
        </div>
    </form>
</x-layout>