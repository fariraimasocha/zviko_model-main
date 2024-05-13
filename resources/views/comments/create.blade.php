<x-layout>


    <x-splade-modal>
        <h2 class="font-Nc2 text-xl leading-relaxed text-center mt-10">
            Create new Comment
        </h2>

        <x-splade-form action="{{ route('comment.store') }}" class="mt-5 w-3/12 justify-center mx-auto">
            <x-splade-input name="title" label="Name" type="text" />
            <x-splade-input name="comment" label="Comment" type="text" />
            <x-splade-submit class="mt-5" />
        </x-splade-form>
    </x-splade-modal>


</x-layout>
