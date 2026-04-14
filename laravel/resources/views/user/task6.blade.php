<x-layout>
<x-slot name="title">Task6</x-slot>

@forelse ($arr as $elem)
    <p>{{ $elem }}</p>
@empty
    <p>Нет элементов</p>
@endforelse

<ul>
@foreach ($arr as $elem)
    <li>{{ $loop->iteration }} - {{ $elem }}</li>
@endforeach
</ul>

<ul>
@foreach ($arr as $elem)
    <li class="@if($loop->first) first @endif @if($loop->last) last @endif">
        {{ $elem }}
    </li>
@endforeach
</ul>

@foreach ($arr as $elem)
    @if ($loop->remaining < 3)
        <i>{{ $elem }}</i>
    @else
        <b>{{ $elem }}</b>
    @endif
@endforeach

@foreach ($arr as $elem)
    @break($elem == 0)
    {{ $elem }}
@endforeach

<ul>
@foreach ($arr as $elem)
    @continue($elem == 0)
    <li>{{ $elem }}</li>
@endforeach
</ul>

@for ($i = 1; $i <= 10; $i++)
    <p>{{ $i }}</p>
@endfor

</x-layout>