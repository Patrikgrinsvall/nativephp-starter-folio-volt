<?php

use Illuminate\View\View;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;


new
class extends Component {
    public $count = 0;
    public $title = "class based volt full page component";

    public function increment()
    {
        $this->count++;

    }

}
?>
<x-layouts.app>

@volt

<div class="w-full h-fit p-4">

    <h1>{{ $count }}</h1>
    <h2>{{ $title }}</h2>

    <button wire:click="increment"
                class="inline-flex items-center justify-center rounded-md border border-neutral-400 bg-neutral-300 px-4 py-2 font-medium text-neutral-700 hover:border-neutral-300 hover:text-neutral-600 hover:bg-neutral-200 focus:outline-none focus:ring-2 focus:ring-neutral-500 focus:ring-offset-2 sm:text-sm transition-all duration-750">
            + increment
        </button>
    <a href="/home">home</a>
</div>


@endvolt
</x-layouts.app>
