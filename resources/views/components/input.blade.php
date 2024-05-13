<input
    {{ $attributes->merge([
        'class' =>
            $attributes->has('error') &&
            $errors->{$attributes->has('bag') ? $attributes->get('bag') : 'default'}->has($attributes->get('error'))
                ? 'block border border-gray-focus:border-blue-300 rounded p-2 rounded border-red-400 '
                : 'block border border-gray-focus:border-blue-300 rounded p-2 rounded border-gray-300',
    ]) }}>

@if ($attributes->has('error'))
    @error($attributes->get('error'), $attributes->has('bag') ? $attributes->get('bag') : null)
        <p class="text-sm text-red-400 mt-2">
            {{ $message }}
        </p>
    @enderror
@endif
