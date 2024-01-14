<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="my-10">
                        <form action="{{ route('admin.about.update',$about->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="space-y-5">
                                <x-input label="Section" name="section" type="text" icon="fi fi-sr-memo" placeholder="" autocomplete="false" value="{{ $about->section }}" disabled />
                            
                                <div>
                                    <label class="text-sm font-medium">Content</label>
                                    <textarea name="content" class="w-full mt-1 bg-gray-50 border rounded-lg p-5 focus:outline-none focus:border-gray-400" rows="4">{{  $about->content  }}</textarea>
                                </div>

                                <div class="flex justify-end gap-4">
                                    <a href="{{ route('admin.about.index') }}" class="px-4 py-3 bg-red-500 rounded text-gray-50" >Cancle</a>
                                    <button type="submit" class="px-4 py-3 bg-gray-500 rounded text-gray-50">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
