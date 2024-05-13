<x-layout>

    <x-splade-modal position="right" wire:model="showModal">
        <h2 class="font-Nc2 text-xl leading-relaxed text-center mt-10">
            Create new Mark
        </h2>

        <x-splade-form action="{{ route('score.store') }}" class="mt-5 w-3/12 justify-center mx-auto">
            <x-splade-input name="test" label="test" type="text" class="w-full"/>
            <x-splade-input name="score" label="Score" type="text" class="w-full"/>
            <x-splade-submit class="mt-5" />
        </x-splade-form>
    </x-splade-modal>



</x-layout>
