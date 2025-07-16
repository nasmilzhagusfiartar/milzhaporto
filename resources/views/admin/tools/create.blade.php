<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Tools') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="py-5 bg-red-700 text-white font-bold">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('admin.tools.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col gap-y-5">
                        <h1 class="text-3xl text-indigo-950 font-bold">
                            Add New Tools
                        </h1>
                        
                        {{-- Name Field --}}
                        <div class="flex flex-col gap-y-2">
                            <h3>Name</h3>
                            <input type="text" id="name" name="name" class="border rounded px-4 py-2">
                        </div>

                        {{-- Tagline Field --}}
                        <div class="flex flex-col gap-y-2">
                            <h3>Tagline</h3>
                            <input type="text" id="tagline" name="tagline" class="border rounded px-4 py-2">
                        </div>


                        {{-- Logo Upload --}}
                        <div class="flex flex-col gap-y-2">
                            <label for="logo" class="font-semibold">Logo</label>
                            <input type="file" id="logo" name="logo" class="border rounded px-4 py-2">
                        </div>


                        {{-- Submit Button --}}
                        <button type="submit" class="py-4 w-full mt-4 rounded-full bg-yellow-400 hover:bg-yellow-500 text-black font-bold shadow-md transition">
    Upload Tools
</button>


                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
