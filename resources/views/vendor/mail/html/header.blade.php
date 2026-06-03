@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://laravel.com/img/notification-logo-v2.1.png" class="logo" alt="Laravel Logo">
@else
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRO-yHCER1mI8-GjJbmuVwSYW4ZuLNv2JVLA&s"  class="logo" alt="Facturalaya">
@endif
</a>
</td>
</tr>
