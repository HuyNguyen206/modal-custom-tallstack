<x-layout>
    <div>
        <button @click="$dispatch('show-modal', {name: 'join-modal'})" class="px-4 py-2 rounded bg-blue-400 text-white">Join</button>
        <button @click="$dispatch('show-modal', {name: 'contact-modal'})" class="px-4 py-2 rounded bg-blue-400 text-white">Contact</button>
    </div>
    <x-modals.join/>
    <x-modals.contact/>

    <script>
        // window.$modals = {
        //     @dispatch
        //     show(name) {
        //         alert('Show the modal name')
        //     }
        // }
    </script>
</x-layout>
