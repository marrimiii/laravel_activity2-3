@extends('layouts.app')

@section('content')

<div class="max-w-4xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-lg font-semibold mb-4">Create a Customer</h2>

    <form action="{{ route('customers.store') }}" method="POST">
        @csrf

        <label>Name</label>
        <input type="text" name="name" class="w-full border p-2 mb-3">

        <label>Address</label>
        <textarea name="address" class="w-full border p-2 mb-3"></textarea>

        <label>Gender</label>
        <select name="gender" class="w-full border p-2 mb-3">
            <option value="">Select Gender</option>
            <option>Male</option>
            <option>Female</option>
        </select>

        <label>Date of Birth</label>
        <input type="date" name="date_of_birth" class="w-full border p-2 mb-4">

        <button class="bg-gray-800 text-white px-4 py-2 rounded">
            CREATE CUSTOMER
        </button>
    </form>
</div>

@endsection