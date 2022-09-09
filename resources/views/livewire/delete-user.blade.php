<div>
    <form id="delete-modal" action="" wire:submit.prevent="$set('isShowModal', true)" method="post">
        <button class="px-4 py-2 rounded bg-blue-400 text-white">Delete modal?</button>
    </form>
        <x-confirmation-modal class="bg-red-500">
            <x-slot name="title">
                Are you sure?
            </x-slot>
            <x-slot:body>
                if you proceed, your account will be deleted forever
            </x-slot:body>
            <x-slot:footer>
                <x-button wire:click.prevent="handle"
                          class="bg-blue-400 hover:bg-blue-500 mr-2">Continue
                </x-button>
                {{--            <a href="#something-else" class = 'bg-blue-400 hover:bg-blue-500 mr-2 px-4 py-2 rounded-xl text-white transition'>Continue</a>--}}
                <a href="#cancel" wire:click.prevent="$set('isShowModal', false)" class='bg-gray-400 hover:bg-gray-500 px-4 py-2 rounded-xl text-white transition'>Cancel</a>
                {{--            <x-button class="bg-gray-400 hover:bg-gray-500">Cancel</x-button>--}}
            </x-slot:footer>
        </x-confirmation-modal>
</div>
