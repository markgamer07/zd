<x-layout>
<x-slot name="title">Task2</x-slot>

<p>{{ date('d.m.Y') }}</p>

<p>{{ $arr[0] }}</p>
<p>{{ count($arr) }}</p>

<p>{{ $city ?? 'Москва' }}</p>

<p>{{ $location['country'] ?? 'Россия' }}</p>
<p>{{ $location['city'] ?? 'Москва' }}</p>

<p>
{{ $year ?? date('Y') }} -
{{ $month ?? date('m') }} -
{{ $day ?? date('d') }}
</p>

</x-layout>