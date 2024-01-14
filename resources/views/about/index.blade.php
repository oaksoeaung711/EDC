<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
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
                                    <td class="py-3">{{ $abouts[0]->section }}</td>
                                    <td class="py-3">{!! $formattedintroHeader !!}</td>
                                    <td><a href="{{ route('admin.about.edit',$abouts[0]->id) }}" class="text-xl text-sky-400"><i class="fi fi-rr-edit"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="py-3 text-center">2</td>
                                    <td class="py-3">{{ $abouts[1]->section }}</td>
                                    <td class="py-3">{!! $formattedintroContent !!}</td>
                                    <td><a href="{{ route('admin.about.edit',$abouts[1]->id) }}" class="text-xl text-sky-400"><i class="fi fi-rr-edit"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="py-3 text-center">2</td>
                                    <td class="py-3">{{ $abouts[2]->section }}</td>
                                    <td class="py-3">
                                        <div class="flex gap-4">
                                            <img src="{{ asset($abouts[2]->images[0]->url) }}" class="w-40 h-40 object-cover" alt="intro-image"/>
                                        </div>
                                    </td>
                                    <td><a href="{{ route('admin.about.photoEdit',$abouts[2]->id) }}" class="text-xl text-sky-400"><i class="fi fi-rr-edit"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="my-10">
                        <h4 class="my-4">Why Choose Us Section</h4>
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
                                @foreach ($whyChooseUs as $no => $quotes)
                                    <tr>
                                        <td class="py-3 text-center">{{ $no+1 }}</td>
                                        <td class="py-3">{{ $quotes->section }}</td>
                                        <td class="py-3">{!! $quotes->content !!}</td>
                                        <td><a href="{{ route('admin.about.edit',$quotes->id) }}" class="text-xl text-sky-400"><i class="fi fi-rr-edit"></i></a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="my-10">
                        <h4 class="my-4">Office Section</h4>
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
                                    <td class="py-3">{{ $officeLocation->section }}</td>
                                    <td class="py-3">
                                        <div class="flex gap-4">
                                            @foreach ($officeLocation->images as $image)
                                                <img src="{{ asset($image->url) }}" class="w-40 h-40 object-cover" alt="intro-image"/>
                                            @endforeach
                                        </div>
                                    </td>
                                    <td><a href="{{ route('admin.about.photoEdit',$officeLocation->id) }}" class="text-xl text-sky-400"><i class="fi fi-rr-edit"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
