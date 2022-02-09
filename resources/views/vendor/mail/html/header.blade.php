<tr>
<td class="header">
<a href="#" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://media-exp1.licdn.com/dms/image/C4E22AQHbUMd-ExXoAA/feedshare-shrink_2048_1536/0/1637870865658?e=1647475200&v=beta&t=wx1kemOm5fy4Auuiq8vd0uO510MvOX7fnPm84onbveY" style="whidth: 400px; border-radius: 250px; height: 150px;" class="#" alt="MMtch logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
