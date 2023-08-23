<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Apply For Job') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">

                    <div class="min-w-full align-middle">

                        <form method="POST" action="{{ url('/job_applied/'.$id) }}" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <x-input-label for="Company" :value="__('Candidate Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"  required  />
                                <x-input-error :messages="$errors->get('company')" class="mt-2" />
                            </div>

                            <!--Product Price -->
                            <div class="mt-4">
                                <x-input-label for="price" :value="__('Email')" />
                                <x-text-input  class="block mt-1 w-full" type="email" name="email"  required  />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Phone')" />
                                <x-text-input  class="block mt-1 w-full" type="text" name="phone"  required  />
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Resume')" />
                                <x-text-input  class="block mt-1 w-full" type="file" name="resume"  required  />
                                <x-input-error :messages="$errors->get('resume')" class="mt-2" />
                            </div>


                            <div class="flex items-center justify-end mt-4">

                                <x-primary-button class="ml-4">
                                    {{ __('Apply') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
