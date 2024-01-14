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
                    <form action="{{ route('admin.about.photoUpdate',$about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="space-y-5">
                            <x-input label="Section" name="section" type="text" icon="fi fi-sr-memo" placeholder="" autocomplete="false" value="{{ $about->section }}" disabled />

                            <div class="grid grid-cols-3 gap-3 place-items-center">
                                @foreach ($about->images as $image)
                                    <div class="w-[500px]">
                                        <div class="border-2 border-gray-300 border-dashed rounded-xl p-6 relative">
                                            <input type="file" name="images[]" id="file" class="w-full h-full absolute inset-0 z-50 opacity-0" onchange="fileview(event,'{{ 'preview-'.$image->id }}')" />
                                            <div class="text-center">
                                                <img id="preview-{{ $image->id }}" src="{{ asset($image->url) }}" class="w-full h-52 object-cover" />
                                                <h3 class="text-gray-900 font-medium text-sm mt-2">
                                                    <label for="file" class="">
                                                        <span>Click Here To Upload Your</span>
                                                        <span class="text-indigo-600">Photo</span>
                                                    </label>
                                                </h3>
                                                <span class="text-gray-500 text-xs mt-1">JPG,PNG,GIF,ICO</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <script type="text/javascript">

                                function fileview(event,imgId){
                                    const getinput = event.target;
                                    const getpreview = document.getElementById(imgId);
                                    getpreview.src = URL.createObjectURL(getinput.files[0]);
                                }
                            </script>

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
</x-app-layout>
