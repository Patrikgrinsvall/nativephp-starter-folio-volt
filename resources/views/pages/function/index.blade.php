<?php

use function Livewire\Volt\{state, layout};

state(['count' => 0, 'title' => 'Function based Volt full page component ']);

$increment = fn() => $this->count++;

?>

<x-layouts.app>

@volt('content')
<div class="w-full bg-gray-300 rounded p-4">


        <h1>{{ $count }}</h1>
        <h2>{{ $title }}</h2>

        <div class="mt-5">

        </div>
        <button wire:click="increment"
                class="inline-flex items-center justify-center rounded-md border border-transparent bg-red-100 px-4 py-4 font-medium text-red-700 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:text-sm">
            + add
        </button>


</div>
@endvolt

</x-layouts.app>
