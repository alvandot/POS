@props(['type' => 'submit'])

<button {!! $attributes->merge(['class' => 'btn bg-gradient-info shadow-info w-100 my-4 mb-2','type' => $type]) !!}>{{ $slot }}</button>
