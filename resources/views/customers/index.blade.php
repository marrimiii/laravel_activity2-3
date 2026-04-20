@extends('layouts.app')

@section('content')

<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <!-- Page Title -->
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
            Customers
        </h2>

        <!-- Card -->
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

            <!-- Header -->
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-semibold text-gray-700">
                    Customer List
                </h3>

                <a href="{{ route('customers.create') }}"
                   class="bg-gray-800 hover:bg-gray-900 text-white px-4 py-2 rounded text-sm">
                    ADD CUSTOMER
                </a>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full border border-gray-200 text-sm text-center">

                    <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                        <tr>
                            <th class="p-3 border">Name</th>
                            <th class="p-3 border">Gender</th>
                            <th class="p-3 border">Date of Birth</th>
                            <th class="p-3 border">Address</th>
                            <th class="p-3 border">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="text-gray-700">
                        @forelse ($customers as $customer)
                        <tr class="hover:bg-gray-50">
                            <td class="p-3 border">{{ $customer->name }}</td>
                            <td class="p-3 border">{{ $customer->gender }}</td>
                            <td class="p-3 border">{{ $customer->date_of_birth }}</td>
                            <td class="p-3 border">{{ $customer->address }}</td>

                            <td class="p-3 border">
                                <div class="flex justify-center gap-2">

                                    <!-- VIEW -->
                                    <a href="{{ route('customers.show', $customer->id) }}"
                                       class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-3 py-1 rounded text-xs">
                                        VIEW
                                    </a>

                                    <!-- EDIT -->
                                    <a href="{{ route('customers.edit', $customer->id) }}"
                                       class="bg-gray-800 hover:bg-gray-900 text-white px-3 py-1 rounded text-xs">
                                        EDIT
                                    </a>

                                    <!-- DELETE -->
                                    <form action="{{ route('customers.destroy', $customer->id) }}"
                                          method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button onclick="return confirm('Delete this customer?')"
                                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-xs">
                                            DELETE
                                        </button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="p-4 text-gray-500">
                                No customers found.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>

        </div>

    </div>
</div>

@endsection