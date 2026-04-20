@extends('layouts.app')

@section('content')

<div class="py-6">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

        <!-- Card -->
        <div class="bg-white p-6 rounded-lg shadow">

            <h2 class="text-lg font-semibold mb-4">Customer Details</h2>

            <div class="space-y-4">

                <div>
                    <p class="text-gray-500 text-sm">Name</p>
                    <p class="font-medium">{{ $customer->name }}</p>
                </div>

                <div>
                    <p class="text-gray-500 text-sm">Gender</p>
                    <p class="font-medium">{{ $customer->gender }}</p>
                </div>

                <div>
                    <p class="text-gray-500 text-sm">Date of Birth</p>
                    <p class="font-medium">{{ $customer->date_of_birth }}</p>
                </div>

                <div>
                    <p class="text-gray-500 text-sm">Address</p>
                    <p class="font-medium">{{ $customer->address }}</p>
                </div>

            </div>

            <!-- Buttons -->
            <div class="flex justify-end gap-2 mt-6">
                <a href="{{ route('customers.edit', $customer->id) }}"
                   class="bg-gray-800 text-white px-4 py-2 rounded text-sm">
                    EDIT
                </a>

                <a href="{{ route('customers.index') }}"
                   class="bg-gray-200 px-4 py-2 rounded text-sm">
                    BACK TO LIST
                </a>
            </div>

        </div>

    </div>
</div>

@endsection