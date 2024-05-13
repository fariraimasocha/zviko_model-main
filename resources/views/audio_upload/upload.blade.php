<x-layout>
    <div class="justify-center w-9/12 mx-auto mt-8 rounded-lg">
        <div class="flex space-x-4">
            <a href="{{route('upload.index')}}" class="">
                <button class="w-48 h-10 mt-4 text-white bg-gray-700 rounded">All Tasks</button>
            </a>
        </div>

        <div class='justify-center w-6/12 mx-auto'>
            <form action="{{ route('upload.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <h1 class="mt-4 font-sans text-2xl text-transparent bg-clip-text bg-gradient-to-r from-gray-700 to-blue-800">
                    Upload Audio
                </h1>
                <div class="relative w-full mt-8">
                    <x-label for="title">
                        Title
                    </x-label>
                    <x-input class="w-full px-4 py-4 mt-1 text-sm" type="text" id="title" name="title" error='title'
                             :value="old('title', '')" placeholder="Enter audio title" />
                </div>
                <div class="relative w-full mt-4">
                    <x-label for="description">
                        Description
                    </x-label>

                    <textarea id="description" name="description"
                              class="@error('description') border-red-400 @enderror border-gray-300 w-full bg-white rounded border focus:border-blue-600 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ old('description', '') }}</textarea>

                    @error('description')
                    <p class="text-sm text-red-400">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class="mt-4">
                    <input type="file" id="file" name="file"
                           class="w-full text-black text-base bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 file:py-2.5 file:px-4 file:mr-4 file:bg-gray-800 file:hover:bg-gray-700 file:text-white rounded" />
                </div>
                <div class='relative w-full py-5'>
                    <x-button type="submit">
                        Upload File
                    </x-button>
                </div>

            </form>
        </div>
    </div>
</x-layout>
