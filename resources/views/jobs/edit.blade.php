<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}" class="mt-6 space-y-8">
        @csrf

        @method('PATCH')

        <div class="space-y-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <div class="shrink-0 text-base text-gray-400 select-none sm:text-sm/6">
                                <input id="title"
                                       type="text"
                                       name="title" 
                                       placeholder="Enter title here"
                                       class="block min-w-0 grow bg-transparent py-1.5 pr-1  text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" 
                                       value="{{ $job->title }}"
                                       required/>
                                </div>
                            </div>
                            <div class="mt-1">
                                @error('title')
                                    <p class="text-xs text-red-600 semi-bold mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-white">Salary</label>
                       
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <div class="shrink-0 text-base text-gray-400 select-none sm:text-sm/6">
                                <input 
                                       id="salary" 
                                       type="text" 
                                       name="salary" 
                                       placeholder="Enter salary here"
                                       class="block min-w-0 grow bg-transparent py-1.5 pr-1  text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" 
                                       value="{{ $job->salary }}" 
                                       required/>
                                </div>
                            </div>
                              <div class="mt-1">
                                @error('salary')
                                    <p class="text-xs text-red-600 semi-bold mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <label for="location" class="block text-sm/6 font-medium text-white">Location</label>
                       
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                                <div class="shrink-0 text-base text-gray-400 select-none sm:text-sm/6">
                                <input id="location" 
                                       type="text" 
                                       name="location"
                                       placeholder="Enter location here"
                                       class="block min-w-0 grow bg-transparent py-1.5 pr-1  text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6" 
                                       value="{{ $job->location }}"  
                                       required/>
                                </div>
                            </div>
                              <div class="mt-1">
                                @error('location')
                                    <p class="text-xs text-red-600 semi-bold mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">

            <div class="flex items-center gap-x-6">
                <a href="/jobs/{{ $job->id }}" class="text-sm/6 font-semibold text-white">
                    Cancel
                </a>
            </div>

            <div>
                <button form="delete-form" class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500">
                    Delete
                </button>
           </div>

            <div>
                <button type="submit"
                    class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Update
                </button>
            </div>
        </div>
    </div>
  </form>
  <form action="/jobs/{{ $job->id }}" method="POST" id="delete-form" class="hidden">
    @csrf
    @method('DELETE')
    </form>
</x-layout>