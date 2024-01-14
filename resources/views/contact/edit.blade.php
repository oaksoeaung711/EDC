<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 space-y-7">
                    <h3 class="text-center">Contact Informations</h3>
                    <div>
                        <form action="{{ route('admin.contact.update',$contact->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="space-y-10">
                                <x-input label="Email" name="email" type="email" icon="fi fi-sr-envelope" placeholder="Enter your email" autocomplete="off" value="{{ $contact->email }}" />
                                    <x-input label="Primary Phone Number" name="primaryphonenumber" type="text" icon="fi fi-sr-mobile-button" placeholder="Enter primary phone number" autocomplete="off" value="{{ $contact->primaryphonenumber }}" />
        
                                    <x-input label="Secondary Phone Number" name="secondaryphonenumber" type="text" icon="fi fi-sr-mobile-button" placeholder="Enter secondary phone number" autocomplete="off" value="{{ $contact->secondaryphonenumber }}" />
        
                                    <div class="form-group">
                                        <label for="worktime" class="block mb-2 text-sm font-medium text-gray-700">Work Time</label>
                                        <div class="relative">
                                            <div class="form-icon absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-gray-400 transition-all duration-300">
                                                <i class="fi fi-rr-business-time"></i>
                                            </div>
                                            <input id="worktime" type="text" name="worktime" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:border-gray-500 block w-full ps-10 p-2.5" placeholder="Enter worktime" autocomplete="off" value="{!! $contact->worktime !!}">
                                        </div>
                                        <p class="text-sm text-red-500 mt-1">{{ $errors->first('worktime') }}</p>
                                    </div>
        
                                    <div class="form-group">
                                        <label for="address" class="block mb-2 text-sm font-medium text-gray-700">Address</label>
                                        <div class="relative">
                                            <div class="form-icon absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-gray-400 transition-all duration-300">
                                                <i class="fi fi-rr-map-marker"></i>
                                            </div>
                                            <input id="address" type="text" name="address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:border-gray-500 block w-full ps-10 p-2.5" placeholder="Enter address" autocomplete="off" value="{!! $contact->address !!}">
                                        </div>
                                        <p class="text-sm text-red-500 mt-1">{{ $errors->first('address') }}</p>
                                    </div>
        
                                    <x-input label="Facebook URL" name="facebookurl" type="text" icon="fi fi-brands-facebook" placeholder="Enter your email" autocomplete="off" value="{{ $contact->facebookurl }}" />
        
                                    <x-input label="Google Map URL" name="googlemapurl" type="text" icon="fi fi-ss-map" placeholder="Enter your email" autocomplete="off" value="{{ $contact->googlemapurl }}" />
        
                                    <div class="flex justify-end gap-4 mt-10">
                                        <a href="{{ route('admin.contact.index') }}" class="px-4 py-3 bg-gray-500 rounded text-gray-50" >Cancle</a>
                                        <button type="submit" class="px-4 py-3 bg-gray-500 rounded text-gray-50" >Update</button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('scripts')
        <script src="{{ asset('js/input.js') }}" type="text/javascript"></script>
    @endsection
</x-app-layout>