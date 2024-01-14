<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xls mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="my-10">
                        <h4 class="my-4">Intro Section</h4>
                        <table class="w-full table table-auto rounded-t-md overflow-hidden">
                            <thead class="bg-gray-500">
                                <tr class="text-gray-50">
                                    <td class="whitespace-nowrap py-3 w-20 text-center">No</td>
                                    <td class="whitespace-nowrap py-3 w-40">Section</td>
                                    <td class="whitespace-nowrap py-3">Content</td>
                                    <td class="whitespace-nowrap py-3 w-20">Action</td>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-50">
                                <tr>
                                    <td class="py-3 text-center">1</td>
                                    <td class="py-3">{{ $infos[0]->section }}</td>
                                    <td class="py-3">{!! $formattedIntroHeader !!}</td>
                                    <td><a href="{{ route('admin.home.edit',$infos[0]->id) }}" class="text-xl text-sky-400"><i class="fi fi-rr-edit"></i></td>
                                </tr>
                                <tr>
                                    <td class="py-3 text-center">2</td>
                                    <td class="py-3">{{ $infos[1]->section }}</td>
                                    <td class="py-3">{!! $formattedIntroContent !!}</td>
                                    <td><a href="{{ route('admin.home.edit',$infos[1]->id) }}" class="text-xl text-sky-400"><i class="fi fi-rr-edit"></i></td>
                                </tr>
                                <tr>
                                    <td class="py-3 text-center">2</td>
                                    <td class="py-3">{{ $infos[2]->section }}</td>
                                    <td class="py-3">
                                        <div class="flex gap-4">
                                            @foreach ($infos[2]->images as $image)
                                                <img src="{{ asset($image->url) }}" class="w-40 h-40 object-cover" alt="intro-image"/>
                                            @endforeach
                                        </div>
                                    </td>
                                    <td><a href="{{ route('admin.home.photoEdit',$infos[2]->id) }}" class="text-xl text-sky-400"><i class="fi fi-rr-edit"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="my-10">
                        <h4 class="my-4">Welcome Section</h4>
                        <table class="w-full table table-auto rounded-t-md overflow-hidden">
                            <thead class="bg-gray-500">
                                <tr class="text-gray-50">
                                    <td class="whitespace-nowrap py-3 w-20 text-center">No</td>
                                    <td class="whitespace-nowrap py-3 w-40">Section</td>
                                    <td class="whitespace-nowrap py-3">Content</td>
                                    <td class="whitespace-nowrap py-3 w-20">Action</td>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-50">
                                <tr>
                                    <td class="py-3 text-center">2</td>
                                    <td class="py-3">{{ $infos[3]->section }}</td>
                                    <td class="py-3">
                                        <div class="flex gap-4">
                                            <div class="flex gap-4">
                                                @foreach ($infos[3]->images as $image)
                                                    <img src="{{ asset($image->url) }}" class="w-40 h-40 object-cover" alt="welcome-image"/>
                                                @endforeach
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="{{ route('admin.home.photoEdit',$infos[3]->id) }}" class="text-xl text-sky-400"><i class="fi fi-rr-edit"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
