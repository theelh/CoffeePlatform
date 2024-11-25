<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Create a post') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-6 mt-5">

        @if(session('success'))
            <div class="bg-green-500 text-white p-2 rounded">
                {{ session('success') }}
            </div>
        @endif

        <div class="p-6">
            <form method="POST" action="{{ route('dashboard') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-gray-700">Enter a Title</label>
                    <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
    
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Select Your Post Image</label>
                    <input type="file" name="image" id="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                </div>
    
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Describe Your Post</label>
                    <textarea name="description" id="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required></textarea>
                </div>
    
                <div>
                    <button type="submit" class=" border rounded-lg text-white px-4 py-2 bg-black dark:bg-black">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
