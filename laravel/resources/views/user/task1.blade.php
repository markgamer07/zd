<x-layout>
<x-slot name="title">Task1</x-slot>

<p>{{ $name }}</p>
<p>{{ $age }}</p>
<p>{{ $salary }}</p>

<p class="{{ $class }}">Text</p>

<input value="{{ $value1 }}">
<input value="{{ $value2 }}">
<input value="{{ $value3 }}">

<p style="{{ $style }}">Text</p>

<a href="{{ $href }}">{{ $text }}</a>

</x-layout>