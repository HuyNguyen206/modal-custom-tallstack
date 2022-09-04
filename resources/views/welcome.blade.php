<x-layout>
    <div class="container max-w-lg mx-auto bg-gray-300">
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
                <p class="mb-4">
                    Exercitation commodo velit duis reprehenderit anim duis ullamco et ut cillum officia nostrud.
                </p>
                <p class="mb-4">
                    Pariatur eu ad ad dolor esse mollit sunt esse esse.
                </p>
                <p>
                    Eiusmod laborum duis et ipsum occaecat aliquip minim nulla consequat esse nisi voluptate.
                </p>
            </main>
        </div>

        <footer class="bg-blue-600 p-4 flex items-center justify-between text-xs text-white">
            <h5 class="text-xs">My Site</h5>
            <p>2021</p>
        </footer>
    </div>
    <x-confirmation-modal>
        <x-slot name="title">
            Are you sure?
        </x-slot>
        <x-slot:body>
            if you proceed, your account will be deleted forever
        </x-slot:body>
        <x-slot:footer>
            <x-button class="bg-blue-400 hover:bg-blue-500 mr-2">Continue</x-button>
            <x-button class="bg-gray-400 hover:bg-gray-500">Cancel</x-button>
        </x-slot:footer>
    </x-confirmation-modal>

</x-layout>