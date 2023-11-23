<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script type="module">
    Echo.join('presenceChannel')
        .here((users) => {
            console.log(users.length);
        })
        .joining((user) => {

            console.log('New User Join'+" " + user.name);
        })
        .leaving((user) => {

            console.log('Leaving ' + user.name);

        })
        .listen('presenceMessageEvent', (data) => {

            console.log(data);
            //document.getElementById('tradeId').innerHTML = data.message;
        });
</script>
