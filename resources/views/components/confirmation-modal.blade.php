@props([
'name' => null
])
<div x-data="{ show: false, name: '{{$name}}' }"
     x-on:show-modal.window="show = name === $event.detail.name"
     style="display: none"
     @keydown.window.esc="show = false"
     x-show="show"
    {{$attributes}}
>
    <div class="fixed inset-0 bg-gray-900 opacity-90">
    </div>
    <div @click.window.outside="show = false" class="bg-white fixed h-48 inset-0 m-auto max-w-sm pt-2 rounded-md shadow-md"
         x-show="show"
         x-transition>
        <div class="flex flex-col h-full justify-between">
            <header class="p-2">
                <h3 class="font-bold">
                    {{$title}}
                </h3>
            </header>
            <main class="p-2 mt-4">
                <p>
                    {{$body}}
                </p>
            </main>
            <footer class="bg-gray-200 p-2 mt-4">
                {{$footer}}
            </footer>
        </div>
    </div>
</div>
