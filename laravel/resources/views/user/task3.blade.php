<x-layout>
<x-slot name="title">Task3</x-slot>

{!! $html !!}

{{-- комментарий --}}

@if ($age > 18)
    <p>Старше 18</p>
@endif

@if ($age > 18)
    <p>Взрослый</p>
@else
    <p>Не взрослый</p>
@endif

@if ($age > 18)
    <p>Больше 18</p>
@elseif ($age == 18)
    <p>Ровно 18</p>
@else
    <p>Меньше 18</p>
@endif

@unless ($age >= 18)
    <p>Несовершеннолетний</p>
@endunless

</x-layout>