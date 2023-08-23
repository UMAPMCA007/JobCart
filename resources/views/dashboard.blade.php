<x-app-layout>
    <x-slot name="header">

        <div class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">

            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Jobs</a>

            <a href="{{ url('/appliedJobs') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Applied Candidate List & Detailes</a>

            <a href="{{ url('/total_candidate') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Total Count of Candidate</a>

        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">

                    <div class="min-w-full align-middle">


            <form method="POST" action="{{ url('/store_jobs') }}" enctype="multipart/form-data">
                @csrf

                <!--product Name -->
                <div>
                    <x-input-label for="Company" :value="__('Company')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="company" :value="old('company')" required  />
                    <x-input-error :messages="$errors->get('company')" class="mt-2" />
                </div>

                <!--Product Price -->
                <div class="mt-4">
                    <x-input-label for="price" :value="__('Email')" />
                    <x-text-input  class="block mt-1 w-full" type="text" name="email" :value="old('email')" required  />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="description" :value="__('Phone')" />
                    <x-text-input id="description" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required  />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="description" :value="__('Location')" />
                    <x-text-input id="description" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required  />
                    <x-input-error :messages="$errors->get('location')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="description" :value="__('Job Title')" />
                    <x-text-input id="description" class="block mt-1 w-full" type="text" name="job_title" :value="old('job_title')" required  />
                    <x-input-error :messages="$errors->get('job_title')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="job_des" :value="__('Job Description')" />
                    <x-text-input id="description" class="block mt-1 w-full" type="text" name="job_des" :value="old('job_des')" required  />
                    <x-input-error :messages="$errors->get('job_des')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="description" :value="__('Job Type')" />
                    <select name="job_type" >
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Contract">Contract</option>
                        <option value="Freelance">Freelance</option>
                    </select>
                </div>

                <div class="flex items-center justify-end mt-4">


                    <x-primary-button class="ml-4">
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

        <div class="mt-2">

        </div>

    </div>
</div>
</div>
</div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">

                    <div class="min-w-full align-middle">

                        <table class="min-w-full divide-y divide-gray-200 border">
                            <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Product Name</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Qty</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Amount</span>
                                </th>

                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Product Image</span>
                                </th>

                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Edit</span>
                                </th>
                                <th class="px-6 py-3 bg-gray-50 text-left">
                                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Delete</span>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                                @foreach($products as $product)
                                    <tr class="bg-white">
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{$product->company_name}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{$product->email}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{$product->phone}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{$product->location}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{$product->job_title}}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{$product->job_discription}}
                                        </td>


                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{$product->job_type}}
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            <a href="{{url('edit/'.$product->id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                                <a href="{{url('delete/'.$product->id)}}" class="text-indigo-600 hover:text-indigo-900">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>

                    <div class="mt-2">

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
