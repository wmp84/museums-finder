<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    @foreach($users as $user)
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                    <div class="flex min-w-0 gap-x-4">
                        <img class="size-12 flex-none rounded-full bg-gray-50"
                             src="https://images.pexels.com/photos/8519611/pexels-photo-8519611.jpeg"
                             alt="">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm/6 font-semibold text-gray-900">{{$user->name}}</p>
                            <p class="mt-1 truncate text-xs/5 text-gray-500">{{$user->email}}</p>
                        </div>
                    </div>
            <div>
    @endforeach

</x-app-layout>
