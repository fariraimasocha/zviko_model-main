<x-layout>

    <div class="px-5">

        <div class="justify-center w-9/12 mx-auto mt-8 rounded-lg">



                <div class="flex space-x-4">
                    <a href="{{route('task.create')}}" class="">
                        <button class="w-40 h-10 mt-4 text-white bg-gray-700 rounded">Create</button>
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
            @foreach ($tasks as $task)
                <div class="p-4 border border-gray-300 rounded-lg">
                    <p class="mb-2 text-xl font-bold text-gray-700 leading-none">Test: {{ $task->id }}</p>
                    <p class="mb-2 text-xl font-semibold text-gray-700 leading-none">Number 1: {{ $task->one }}</p>
                    <p class="mb-2 text-xl font-semibold text-gray-700 leading-none">Number 2: {{ $task->two }}</p>
                    <p class="mb-2 text-xl font-semibold text-gray-700 leading-none">Number 3: {{ $task->three }}</p>
                    <p class="mb-2 text-xl font-semibold text-gray-700 leading-none">Number 4: {{ $task->four }}</p>
                    <p class="mb-2 text-xl font-semibold text-gray-700 leading-none">Number 5: {{ $task->five }}</p>
                </div>
            @endforeach
        </div>


    </div>



</x-layout>
