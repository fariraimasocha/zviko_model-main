<x-layout>
    <div class="px-5">

        <div class="justify-center w-9/12 mx-auto mt-8 rounded-lg">
            <h1
                class="mt-4 font-sans text-3xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-gray-700 to-blue-800">
                Basa
            </h1>
        </div>

        <div class="grid justify-center w-9/12 grid-cols-1 gap-4 mx-auto mt-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach($uploads as $upload)
                <div class="p-4 border border-gray-300 rounded-lg">
                    <div class="flex space-x-4">
                        <a href="{{route('task.create')}}" class="">
                            <button class="w-40 h-10 mt-4 text-white bg-gray-700 rounded">Test</button>
                        </a>
                    </div>
                    <audio controls class="mt-4">
                        <source src="{{ asset('storage/' . $upload->file) }}" type="audio/mp3">
                    </audio>
                </div>
            @endforeach
        </div>

        <div class="grid justify-center w-9/12 grid-cols-1 gap-4 mx-auto mt-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($tasks as $task)
                <div class="p-4 border border-gray-300 rounded-lg">
                    <p class="mb-2 text-xl font-bold text-gray-700 leading-none">Test: {{ $task->id }}</p>
                    <p class="mb-2 text-2xl font-bold text-gray-700 leading-none">Name: {{ $task->name }}</p>
                    <p class="mb-2 text-xl font-semibold text-gray-700 leading-none">Number 1: {{ $task->one }}</p>
                    <p class="mb-2 text-xl font-semibold text-gray-700 leading-none">Number 2: {{ $task->two }}</p>
                    <p class="mb-2 text-xl font-semibold text-gray-700 leading-none">Number 3: {{ $task->three }}</p>
                    <p class="mb-2 text-xl font-semibold text-gray-700 leading-none">Number 4: {{ $task->four }}</p>
                    <p class="mb-2 text-xl font-semibold text-gray-700 leading-none">Number 5: {{ $task->five }}</p>

                    <div class="flex space-x-4 mt-5">
                        <Link href="{{ route('task.edit', $task->id) }}"
                              class="font-semibold text-white hover:text-white hover:bg-blue-700 text-center bg-red-500 py-1 px-1 rounded w-20">
                        Retry
                        </Link>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="grid justify-center w-9/12 grid-cols-1 gap-4 mx-auto mt-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($scores as $song)
                <div class="p-4 border border-gray-300 rounded-lg">
                    <p class="mb-2 text-xl font-medium leading-none text-gray-700">Mark: {{ $song->score }} / 5</p>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
