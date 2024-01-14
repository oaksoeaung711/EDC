<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activities') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 grid grid-cols-5 place-items-center gap-5">
                    @foreach ($activities as $activity)
                        <div class="group/image w-64 h-32 relative group-hover:">
                            <img src="{{ asset($activity->url) }}" class="w-full h-full object-cover" alt="{{ $activity->name }}" />
                            <div class="group-hover/image:visible bg-gray-500/80 absolute inset-0 z-20 invisible flex items-center justify-center"><a class="text-gray-50 font-bold text-lg" href="{{ route('admin.activities.edit',$activity->id) }}">Edit</a></div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
