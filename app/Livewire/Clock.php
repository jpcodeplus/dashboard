<?php

namespace App\Livewire;

use Carbon\WeekDay;
use Livewire\Component;
use Illuminate\Support\Carbon;

class Clock extends Component
{
    public string $timezone;
    public string $local;
    public array $date;

    public function mount()
    {
        $this->timezone = 'Europe/Berlin';
        $this->local = 'de';
        $this->setDateInfo();
    }

    public function setDateInfo()
    {
        $now = Carbon::now()->timezone($this->timezone)->locale($this->local);
        $this->date =   [
            'wday' => $now->isoFormat('dddd'),
            'day' => $now->isoFormat('DD'),
            'mon' => $now->isoFormat('MMMM'),
            'year' => $now->isoFormat('YYYY'),
            'week' => $now->weekOfYear,
            'hour' => $now->format('H'),
            'min' => $now->format('i'),
            's' => $now->format('s'),
        ];
    }


    public function render()
    {
        return view('livewire.clock');
    }
}
