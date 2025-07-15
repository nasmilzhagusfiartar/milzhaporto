<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Projects') }}
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

                <form action="{{ route('admin.projects.update', $projects) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="flex flex-col gap-y-5">
                        <h1 class="text-3xl text-indigo-950 font-bold">
                            Add New Project
                        </h1>
                        
                        {{-- Name Field --}}
                        <div class="flex flex-col gap-y-2">
                            <label for="name" class="font-semibold">Name</label>
                            <input value="{{ $projects->name }}" type="text" id="name" name="name" class="border rounded px-4 py-2">
                        </div>

                        {{-- Category Field --}}
                        <div class="flex flex-col gap-y-2">
                            <label for="category" class="font-semibold">Category</label>
                            <select name="category" id="category" class="border rounded px-4 py-2">
                                <option selected value="{{ $projects->category }}">{{ $projects->category }}</option>
                                <option value="Mobile Development">Mobile Development</option>
                                <option value="Data">Data Science</option>
                                <option value="Web">Website Development</option>
                                <option value="Microsoft Office">Microsoft Office</option>
                            </select>
                        </div>

                        {{-- Image Upload --}}
                        <div class="flex flex-col gap-y-2">
                            <label for="cover" class="font-semibold">Image</label>
                            <img src="{{ Storage::url($projects->cover) }}" alt="" class="object-cover w-[120px] h-[90px] rounded-2xl">
                            <input type="file" id="cover" name="cover" class="border rounded px-4 py-2">
                        </div>

                        {{-- About Field --}}
                        <div class="flex flex-col gap-y-2">
                            <label for="about" class="font-semibold">About</label>
                            <textarea name="about" id="about" rows="5" class="border rounded px-4 py-2">{{ $projects->about }}</textarea>
                        </div>

                        {{-- Submit Button --}}
                        <button type="submit" class="py-4 w-full mt-4 rounded-full bg-yellow-400 hover:bg-yellow-500 text-black font-bold shadow-md transition">
    Update Project
</button>


                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
