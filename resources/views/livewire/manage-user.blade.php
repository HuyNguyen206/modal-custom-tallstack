<div>
    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
        <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                        <tr>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                User
                            </th>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                email
                            </th>
                            <th scope="col"
                                class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                delete
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $user)
                            <tr wire:key="item-{{ $user->id }}">
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{$user->name}}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{$user->email}}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <form id="delete-modal-{{$user->id}}" action="" wire:submit.prevent="confirmDelete({{$user->id}})" method="post">
                                        <button class="px-4 py-2 rounded bg-blue-400 text-white">Delete</button>
                                        <input type="hidden" wire:model="currentUserId">
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" colspan="3">
                                    <div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                No user
                                            </p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                    <x-confirmation-modal class="bg-red-500" wire:model.defer="isShowModal">
                        <x-slot name="title">
                            Are you sure to delete this user?
                        </x-slot>
                        <x-slot:body>
                            if you proceed, your account will be deleted forever
                        </x-slot:body>
                        <x-slot:footer>
                            <x-button wire:click.prevent="delete"
                                      class="bg-blue-400 hover:bg-blue-500 mr-2">Continue
                            </x-button>
                            {{--            <a href="#something-else" class = 'bg-blue-400 hover:bg-blue-500 mr-2 px-4 py-2 rounded-xl text-white transition'>Continue</a>--}}
                            <a href="#cancel" wire:click.prevent="$set('isShowModal', false)" class='bg-gray-400 hover:bg-gray-500 px-4 py-2 rounded-xl text-white transition'>Cancel</a>
                            {{--            <x-button class="bg-gray-400 hover:bg-gray-500">Cancel</x-button>--}}
                        </x-slot:footer>
                    </x-confirmation-modal>
                </div>
            </div>
        </div>
    </div>
</div>
