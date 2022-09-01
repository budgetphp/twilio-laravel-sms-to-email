@component('mail::message')


# Dear BudgetPHP Software Engineer,

You have received a quote request from {{ $request->name }}. 

The customers email is <b>{{ $request->email }}</b> @isset($request->phone) , there phone number is <b>{{ $request->phone }}</b> @endisset @isset($request->orgfilename) and they uploaded a file that is attached to this email @endisset 
 
<b>Quote Specifications:</b>
 {{ $request->message }}

The customer has chosen the  @if ($request->is_hourly === '1') <b>hourly</b> @elseif ($request->is_hourly === '2') <b>flat</b> @else <b>both</b> @endif rate type and the quote was submitted from <a href="{{ $request->domain }}">this page</a> with the following <a href="https://whois.domaintools.com/{{ $request->ip_address }}">ip address</a>.
 

@component('mail::button', ['url' => '{{ $request->domain }}'])
Quote Page
@endcomponent

Thanks,<br>
{{ config('app.name') }} 
@endcomponent
 