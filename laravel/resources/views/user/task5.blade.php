<x-layout>
<x-slot name="title">Task5</x-slot>

@if (is_array($data))
    <ul>
        @foreach ($data as $d)
            <li>{{ $d }}</li>
        @endforeach
    </ul>
@else
    <p>{{ $data }}</p>
@endif

<ul>
@foreach ($employees as $emp)
    <li>{{ $emp['name'] }} {{ $emp['surname'] }}</li>
@endforeach
</ul>

<table border="1">
@foreach ($employees as $emp)
<tr>
    <td>{{ $emp['name'] }}</td>
    <td>{{ $emp['surname'] }}</td>
    <td>{{ $emp['salary'] }}</td>
</tr>
@endforeach
</table>

</x-layout>