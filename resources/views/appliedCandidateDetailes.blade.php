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

                        <h2> Candidate Name:{{$appliedJobDetailes->name}}</h2>
                        <h2> Candidate Email:{{$appliedJobDetailes->email}}</h2>
                        <h2> Candidate Phone No:{{$appliedJobDetailes->phone}}</h2>
                        <h2> Applied For :{{$appliedJobDetailes->job_title}}</h2>
                        <h2 class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">Candidate Resume:
                            <a href="{{asset('uploads/resume/'.$appliedJobDetailes->resume)}}" target="_blank">View Resume</a>
                        </h2>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
