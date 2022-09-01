@component('mail::message')


# Hi {{ $request->name }}!!!

We have received your order for <b>"{{ $request->skill }}"</b>" in the amount of <b>{{ $request->amount }}</b>!

Thanks,<br>
{{ config('app.name') }}

 
@endcomponent