@props(['disable' => false])

<input {!! $attributes->merge(['class' => 'form-control','disabled' => $disable]) !!}>
