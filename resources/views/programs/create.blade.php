<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Programs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('admin.programs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="space-y-5">

                            <div class="form-group">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Name</label>
                                <div class="relative">
                                    <div class="form-icon absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-gray-400 transition-all duration-300">
                                        <i class="fi fi-sr-chalkboard-user"></i>
                                    </div>
                                    <input id="name" type="text" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:border-gray-500 block w-full ps-10 p-2.5" placeholder="Enter name" autocomplete="off">
                                </div>
                                <p class="text-sm text-red-500 mt-1">{{ $errors->first('name') }}</p>
                            </div>

                            <div class="form-group">
                                <label for="session" class="block mb-2 text-sm font-medium text-gray-700">Session</label>
                                <div class="relative">
                                    <div class="form-icon absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-gray-400 transition-all duration-300">
                                        <i class="fi fi-sr-calendar-days"></i>
                                    </div>
                                    <input id="session" type="text" name="session" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:border-gray-500 block w-full ps-10 p-2.5" placeholder="Enter session" autocomplete="off">
                                </div>
                                <p class="text-sm text-red-500 mt-1">{{ $errors->first('session') }}</p>
                            </div>

                            <div class="form-group">
                                <label for="time" class="block mb-2 text-sm font-medium text-gray-700">Time</label>
                                <div class="relative">
                                    <div class="form-icon absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-gray-400 transition-all duration-300">
                                        <i class="fi fi-sr-clock"></i>
                                    </div>
                                    <input id="time" type="text" name="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:border-gray-500 block w-full ps-10 p-2.5" placeholder="Enter time" autocomplete="off">
                                </div>
                                <p class="text-sm text-red-500 mt-1">{{ $errors->first('time') }}</p>
                            </div>

                            <div class="form-group">
                                <label for="startdate" class="block mb-2 text-sm font-medium text-gray-700">Start Date</label>
                                <div class="relative">
                                    <div class="form-icon absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-gray-400 transition-all duration-300">
                                        <i class="fi fi-sr-calendar-lines"></i>
                                    </div>
                                    <input id="startdate" type="text" name="startdate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:border-gray-500 block w-full ps-10 p-2.5" placeholder="Enter start date" autocomplete="off">
                                </div>
                                <p class="text-sm text-red-500 mt-1">{{ $errors->first('start date') }}</p>
                            </div>

                            <div class="form-group">
                                <label for="location" class="block mb-2 text-sm font-medium text-gray-700">Location</label>
                                <div class="relative">
                                    <div class="form-icon absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-gray-400 transition-all duration-300">
                                        <i class="fi fi-sr-land-layer-location"></i>
                                    </div>
                                    <input id="location" type="text" name="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:border-gray-500 block w-full ps-10 p-2.5" placeholder="Enter location" autocomplete="off">
                                </div>
                                <p class="text-sm text-red-500 mt-1">{{ $errors->first('location') }}</p>
                            </div>

                            <div class="w-[500px]">
                                <div class="border-2 border-gray-300 border-dashed rounded-xl p-6 relative">
                                    <input type="file" name="image" id="file" class="w-full h-full absolute inset-0 z-50 opacity-0" onchange="fileview(event,'preview-1')" />
                                    <div class="text-center">
                                        <img id="preview-1" src="{{ asset('images/backgrounds/bg8.png') }}" class="w-52 h-52 object-cover mx-auto" />
                                        <h3 class="text-gray-900 font-medium text-sm mt-2">
                                            <label for="file" class="">
                                                <span>Click Here To Upload Your</span>
                                                <span class="text-indigo-600">Photo</span>
                                            </label>
                                        </h3>
                                        <span class="text-gray-500 text-xs mt-1">JPG,PNG,JPEG</span>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">

                                function fileview(event,imgId){
                                    const getinput = event.target;
                                    const getpreview = document.getElementById(imgId);
                                    getpreview.src = URL.createObjectURL(getinput.files[0]);
                                }
                            </script>

                            <div class="flex justify-end gap-3">
                                <a href="{{ route('admin.programs.index') }}" class="px-4 py-3 bg-gray-500 text-gray-50 rounded-lg">Cancle</a>
                                <button type="submit" class="px-4 py-3 bg-gray-500 text-gray-50 rounded-lg">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
            <script src="{{ asset('js/input.js') }}" type="text/javascript"></script>
    @endsection
</x-app-layout>
