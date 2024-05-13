<x-layout>
    <div class="px-5">

        <div class="justify-center w-9/12 mx-auto mt-8 rounded-lg">
            <h1
                class="mt-4 font-sans text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-gray-700 to-blue-800">
                All Comments
            </h1>

            <div class="flex space-x-4">
                <a href="{{ route('comment.create') }}" class="">
                    <button class="w-48 h-10 mt-4 text-white bg-gray-700 rounded">Create</button>
                </a>
            </div>

        </div>

        <div class="justify-center w-9/12 mx-auto mt-8">
            @if (session()->has('success'))
                <div class="justify-end mt-3 font-sans text-2xl text-gray-700 alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div class="grid justify-center w-9/12 grid-cols-1 gap-4 mx-auto mt-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($comments as $song)
                <div class="p-4 border border-gray-300 rounded-lg">
                    <p class="mb-2 text-xl font-bold text-gray-700 leadinlg-none">Title: {{ $song->title }}</p>
                    <p class="mb-2 text-base font-medium leading-none text-gray-700">Comment: {{ $song->comment }}</p>
                </div>
            @endforeach
        </div>

    </div>

</x-layout>
