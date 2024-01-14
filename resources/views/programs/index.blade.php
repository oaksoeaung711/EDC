<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Programs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 space-y-5">
                    <div class="flex justify-end">
                        <a href="{{ route('admin.programs.create') }}" class="px-4 py-3 bg-green-400 rounded-lg text-gray-50">Create</a>
                    </div>
                    <div>
                        <table class="table w-full">
                            <thead class="bg-gray-600">
                                <tr class="text-gray-50">
                                    <td class="px-4 py-3 w-10 text-center">No</td>
                                    <td class="px-4 py-3">Image</td>
                                    <td class="px-4 py-3">Name</td>
                                    <td class="px-4 py-3">Session</td>
                                    <td class="px-4 py-3">Time</td>
                                    <td class="px-4 py-3">Start Date</td>
                                    <td class="px-4 py-3">Location</td>
                                    <td class="px-4 py-3">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($programs as $program)
                                    <tr>
                                        <td class="px-4 py-3 w-10 text-center">{{ $loop->iteration }}</td>
                                        <td class="px-4 py-3">
                                            <img src="{{ asset($program->image) }}" class="w-28 object-cover rounded-lg" alt="program-image" />
                                        </td>
                                        <td class="px-4 py-3">{!! $program->name !!}</td>
                                        <td class="px-4 py-3">{!! $program->session !!}</td>
                                        <td class="px-4 py-3">{!! $program->time !!}</td>
                                        <td class="px-4 py-3">{!! $program->startdate !!}</td>
                                        <td class="px-4 py-3">{!! $program->location !!}</td>
                                        <td class="px-4 py-3">
                                            <div class="flex gap-4">
                                                <a href="{{ route('admin.programs.edit',$program->id) }}" class="text-xl text-sky-400"><i class="fi fi-rr-edit"></i></a>
                                                <form action="{{ route('admin.programs.destroy',$program->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button><i class="fi fi-rr-trash text-xl text-red-500"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
