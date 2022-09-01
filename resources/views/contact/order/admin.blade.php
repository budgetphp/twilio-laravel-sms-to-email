@component('mail::message')


# Hi Admin!!!

We have received a order for <b>"{{ $request->skill }}"</b>" in the amount of <b>{{ $request->amount }}</b> from {{ $request->name }} who's email is {{ $request->email }}!

Thanks,<br>
{{ config('app.name') }}

 
@endcomponent