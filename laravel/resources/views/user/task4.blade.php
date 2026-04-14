<x-layout>
<x-slot name="title">Task4</x-slot>

@if (count($arr) > 0)
    <p>{{ array_sum($arr) }}</p>
@endif

<ul>
@foreach ($arr as $elem)
    <li>{{ $elem }}</li>
@endforeach
</ul>

<ul>
@foreach ($arr as $elem)
    <li>{{ $elem * $elem }}</li>
@endforeach
</ul>

<ul>
@foreach ($arr as $elem)
    <li>{{ sqrt($elem) }}</li>
@endforeach
</ul>

<ul>
@foreach ($arr as $key => $elem)
    <li>{{ $key + 1 }}: {{ $elem }}</li>
@endforeach
</ul>

<ul>
@foreach ($arr as $elem)
    @if ($elem % 2 == 0)
        <li>{{ $elem }}</li>
    @endif
@endforeach
</ul>

</x-layout>