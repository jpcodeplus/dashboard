@php
    [
        'wday' => $wday,
        'mon' => $mon,
        'day' => $day,
        'year' => $year,
        'week' => $kw,
        'hour' => $hour,
        'min' => $min,
        's' => $s,
    ] = $date;
@endphp

<div wire:poll='setDateInfo' class="flex flex-col justify-center items-center">
    <div class="time">{{ $hour }}:{{ $min }}</div>
    <div class="inline-flex gap-4 justify-center date backdrop-blur-sm">
        <span>
            {{ $wday }} <span class=" opacity-40 text-xs">der</span> {{ $day }} {{ $mon }} {{ $year }}
        </span>
        <span class="opacity-40">Kalenderwoche {{ $kw }}</span>
    </div>
</div>

{{-- <div class="time" wire:poll="setNow">{{ $now }}</div>
    <div wire:poll="setWeekDay">{{ $weekday }}</div>
    <div wire:poll="setWeekOfYear">Kalenderwoche {{ $weekOfYear }}</div> --}}
