@component('mail::message')


# Hi {{ $request->name }}!!!

We have received your @if ($request->is_hourly === '1') <b>hourly rate quote</b> @elseif ($request->is_hourly === '2') <b>flat rate quote</b> @else @endif request @if ($request->domain) for {{ $request->domain  }}@else @endif and our software developer is reviewing the message and will get back to your shortly.

Thanks,<br>
{{ config('app.name') }}


@endcomponent