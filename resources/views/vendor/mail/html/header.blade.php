<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'BudgetPHP')
<img src="{{env('APP_CDN_URL')}}/assets/Budgetphp.svg" class="logo" alt="Budgetphp">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
