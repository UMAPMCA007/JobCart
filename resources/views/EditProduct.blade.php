<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">

                    <div class="min-w-full align-middle">

                        <form method="POST" action="{{ url('/updateProduct/'.$product->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div>
                                <x-input-label for="Company" :value="__('Company')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="company" value="{{($product->company_name)}}" required  />
                                <x-input-error :messages="$errors->get('company')" class="mt-2" />
                            </div>

                            <!--Product Price -->
                            <div class="mt-4">
                                <x-input-label for="price" :value="__('Email')" />
                                <x-text-input  class="block mt-1 w-full" type="text" name="email" value="{{$product->email}}" required  />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Phone')" />
                                <x-text-input id="description" class="block mt-1 w-full" type="text" name="phone" value="{{$product->phone}}" required  />
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Location')" />
                                <x-text-input id="description" class="block mt-1 w-full" type="text" name="location" value="{{$product->location}}" required  />
                                <x-input-error :messages="$errors->get('location')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Job Title')" />
                                <x-text-input id="description" class="block mt-1 w-full" type="text" name="job_title" value="{{$product->job_title}}" required  />
                                <x-input-error :messages="$errors->get('job_title')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="job_des" :value="__('Job Description')" />
                                <x-text-input id="description" class="block mt-1 w-full" type="text" name="job_des" value="{{$product->job_discription}}" required  />
                                <x-input-error :messages="$errors->get('job_des')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Job Type')" />
                                <select name="job_type" >
                                    <option selected value="{{$product->job_type}}">{{$product->job_type}}</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Freelance">Freelance</option>
                                </select>
                            </div>

                            <div class="flex items-center justify-end mt-4">

                                <x-primary-button class="ml-4">
                                    {{ __('Update') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
