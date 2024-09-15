<?php

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Laravel\Folio\Folio;
use Livewire\Attributes\Computed;
use Livewire\Volt\Component;

new
class extends Component {


    #[Computed]
    public function pages()
    {


        $pages = collect(scandir(Folio::paths()[0]))
            ->reject(function ($item) {
                return in_array($item, [".", ".."]);
            })->map(function ($item) {
                if (is_dir(Folio::paths()[0] . "/" . $item))
                    return Str::studly($item);
            });
        $pages = array_filter($pages->toArray());
        return $pages;
    }
}
?>

    <div class="flex flex-grow flex-col overflow-y-auto border-r border-gray-200 bg-white pt-5 pb-4">
        <div class="flex flex-shrink-0 items-center px-4">
            <a href="/">{{config('app.name')}}</a>
        </div>
        <div class="mt-5 flex flex-grow flex-col">

            <nav class="flex-1 space-y-8 bg-white px-2" aria-label="Sidebar">
                    <div class="space-y-1">
                @foreach($this->pages() as $page)


                        <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
                        <a href="/{{Str::lower($page)}}"
                           class="bg-gray-100 text-gray-900 group flex items-center px-2 py-2 text-sm font-medium rounded-md">

                            <svg class="text-gray-500 mr-3 flex-shrink-0 h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                 aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                            </svg>
                            {{$page}}
                        </a>

                @endforeach
                    </div>

                <div class="space-y-1">
                    <h3 class="px-3 text-sm font-medium text-gray-500" id="projects-headline">Docs</h3>

                    <a href="https://nativephp.com/docs/"
                       class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">NativePHP
                        docs</a>
                    <a href="https://livewire.laravel.com/docs/volt"
                       class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Volt
                        docs</a>
                    <a href="https://livewire.laravel.com/docs"
                       class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Livewire
                        docs</a>
                    <a href="https://folio.laravel.com/docs"
                       class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Laravel
                        Folio docs</a>
                    <a href="https://tailwindcss.com/docs"
                       class="group flex items-center rounded-md px-3 py-2 text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900">Tailwind
                        CSS</a>

                </div>
            </nav>
        </div>
    </div>
