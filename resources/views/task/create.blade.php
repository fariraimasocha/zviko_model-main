<x-layout>
    <div class="justify-center w-9/12 mx-auto rounded-lg">
        <div class="flex space-x-4">
            <a href="{{route('task.index')}}" class="">
                <button class="w-48 h-10 mt-4 text-white bg-gray-700 rounded">Tasks</button>
            </a>
        </div>

        <div class='justify-center w-6/12 mx-auto'>
            <form action="{{ route('task.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <h1 class="mt-1 font-sans text-2xl text-transparent bg-clip-text bg-gradient-to-r from-gray-700 to-blue-800">
                    Nzwisiso
                </h1>
                <div class="relative w-full mt-8">
                    <x-label for="one">
                        One
                    </x-label>

                    <x-input class="w-full px-4 py-4 mt-1 text-sm" type="text" id="one" name="one" error='one'
                             :value="old('one', '')" placeholder="Nyora Zvawanzwa" />

                </div>
                <div class="relative w-full mt-4">
                    <x-label for="two">
                        Two
                    </x-label>

                    <x-input class="w-full px-4 py-4 mt-1 text-sm" type="text" id="two" name="two" error='two'
                             :value="old('two', '')" placeholder="Nyora Zvawanzwa" />


                </div>
                <div class="relative w-full mt-4">

                    <div class="relative w-full mt-4">
                        <x-label for="three">
                            Three
                        </x-label>

                        <x-input class="w-full px-4 py-4 mt-1 text-sm" type="three" id="three" name="three" error='three'
                                 :value="old('three', '')" placeholder="Nyora Zvawanzwa" />

                    </div>
                    <div class="relative w-full mt-4">
                        <x-label for="four">
                            Four
                        </x-label>

                        <x-input class="w-full px-4 py-4 mt-1 text-sm" type="four" id="four" name="four" error='four'
                                 :value="old('four', '')" placeholder="Nyora Zvawanzwa" />

                        <div class="relative w-full mt-4">
                            <x-label for="five">
                                Five
                            </x-label>

                            <x-input class="w-full px-4 py-4 mt-1 text-sm" type="five" id="five" name="five" error='five'
                                     :value="old('five', '')" placeholder="Nyora Zvawanzwa" />

                        </div>

                        <div class='relative w-full py-5'>
                            <x-button type="submit">
                                Submit
                            </x-button>
                        </div>

            </form>


        </div>

    </div>
</x-layout>

