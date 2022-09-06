<x-layout>
    <div class="container max-w-lg mx-auto bg-gray-300" x-data="{confirmed: false}">
        <header class="bg-blue-600 p-4">
            <h1 class="font-bold text-white">My Site</h1>
        </header>

        <div class="grid grid-cols-12 p-4">
            <aside class="mr-6 col-span-3 text-sm">
                <ul>
                    <li>Link 1</li>
                    <li>Link 2</li>
                    <li>Link 3</li>
                </ul>
            </aside>

            <main class="text-sm col-span-9">
                <form id="delete-modal" action="" method="post" @submit.prevent="if (!confirmed) location.hash='#user-delete-modal'">
                    <button class="px-4 py-2 rounded bg-blue-400 text-white">Delete modal?</button>
                </form>

            </main>
        </div>

        <footer class="bg-blue-600 p-4 flex items-center justify-between text-xs text-white">
            <h5 class="text-xs">My Site</h5>
            <p>2021</p>
        </footer>
    </div>
    <x-confirmation-modal name="user-delete-modal">
        <x-slot name="title">
            Are you sure?
        </x-slot>
        <x-slot:body>
            if you proceed, your account will be deleted forever
        </x-slot:body>
        <x-slot:footer>
            <x-button @click="document.querySelector('#delete-modal').submit()" class="bg-blue-400 hover:bg-blue-500 mr-2">Continue</x-button>
{{--            <a href="#something-else" class = 'bg-blue-400 hover:bg-blue-500 mr-2 px-4 py-2 rounded-xl text-white transition'>Continue</a>--}}
            <a href="#cancel" class = 'bg-gray-400 hover:bg-gray-500 px-4 py-2 rounded-xl text-white transition'>Cancel</a>
{{--            <x-button class="bg-gray-400 hover:bg-gray-500">Cancel</x-button>--}}
        </x-slot:footer>
    </x-confirmation-modal>

{{--    <x-confirmation-modal name="something-else">--}}
{{--        <x-slot name="title">--}}
{{--            Just checking--}}
{{--        </x-slot>--}}
{{--        <x-slot:body>--}}
{{--            if you proceed, your account will be deleted forever--}}
{{--        </x-slot:body>--}}
{{--        <x-slot:footer>--}}
{{--            <a href="#user-delete-modal" class = 'bg-blue-400 hover:bg-blue-500 mr-2 px-4 py-2 rounded-xl text-white transition'>Retry</a>--}}
{{--            <x-button class="bg-blue-400 hover:bg-blue-500 mr-2">Retry</x-button>--}}
{{--            <a href="#cancel" class = 'bg-gray-400 hover:bg-gray-500 px-4 py-2 rounded-xl text-white transition'>Cancel</a>--}}
{{--            <x-button class="bg-gray-400 hover:bg-gray-500">Cancel</x-button>--}}
{{--        </x-slot:footer>--}}
{{--    </x-confirmation-modal>--}}

</x-layout>
