@extends('layouts.app')

@section('content')

<div class="py-6">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

        <!-- Card -->
        <div class="bg-white p-6 rounded-lg shadow">

            <h2 class="text-lg font-semibold mb-4">Edit Customer</h2>

            <form action="{{ route('customers.update', $customer->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Name -->
                <label class="block mb-1">Name</label>
                <input type="text" name="name"
                       value="{{ $customer->name }}"
                       class="w-full border p-2 mb-4">

                <!-- Address -->
                <label class="block mb-1">Address</label>
                <textarea name="address"
                          class="w-full border p-2 mb-4">{{ $customer->address }}</textarea>

                <!-- Gender -->
                <label class="block mb-1">Gender</label>
                <select name="gender" class="w-full border p-2 mb-4">
                    <option value="">Select Gender</option>
                    <option value="Male" {{ $customer->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ $customer->gender == 'Female' ? 'selected' : '' }}>Female</option>
                </select>

                <!-- Date of Birth -->
                <label class="block mb-1">Date of Birth</label>
                <input type="date" name="date_of_birth"
                       value="{{ $customer->date_of_birth }}"
                       class="w-full border p-2 mb-6">

                <!-- Buttons -->
                <div class="flex justify-end gap-2">
                    <a href="{{ route('customers.index') }}"
                       class="bg-gray-200 px-4 py-2 rounded text-sm">
                        Cancel
                    </a>

                    <button type="submit"
                            class="bg-gray-800 text-white px-4 py-2 rounded text-sm">
                        UPDATE CUSTOMER
                    </button>
                </div>

            </form>

        </div>

    </div>
</div>

@endsection