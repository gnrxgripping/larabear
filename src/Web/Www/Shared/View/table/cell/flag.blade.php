<td class="px-1 py-1.5 cursor-pointer w-16 mx-auto" @if($countryName !== null) tippy="{{$countryName . ($ip === null ? '' : (' - ' . $ip))}}" @endif  @if($ip !== null) copy="{{$ip}}" @endif>
    <img class="h-7 shadow" src="/static/flags/svg/{{$countryCode}}.svg"  alt="{{$countryName ?? $countryCode}}"/>
</td>