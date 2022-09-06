@props(['name'])
<div style="display: none" x-data="{isShow:false}" x-show="isShow" x-cloak @hashchange.window="isShow = location.hash === '#{{$name}}'">
    <div class="fixed inset-0 bg-gray-900 opacity-90">
    </div>
    <div class="bg-white fixed flex flex-col h-48 inset-0 m-auto max-w-sm px-4 py-2 rounded-md shadow-md space-y-7">
        <header>
            <h3 class="font-bold">
                {{$title}}
            </h3>
        </header>
        <main>
            <p>
                {{$body}}
            </p>
        </main>
        <footer>
            {{$footer}}
        </footer>
    </div>
</div>
