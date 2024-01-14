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
                    <div class="w-full grid grid-cols-2 gap-4">
                        <div class="font-medium">Email</div>
                        <div>{{ $email }}</div>
                        <div class="font-medium">Primary Phone Number</div>
                        <div>{{ $primaryphonenumber }}</div>
                        <div class="font-medium">Secondary Phone Number</div>
                        <div>{{ $secondaryphonenumber }}</div>
                        <div class="font-medium">Work TIme</div>
                        <div>{{ $worktime }}</div>
                        <div class="font-medium">Address</div>
                        <div>{!! $address !!}</div>
                        <div class="font-medium">Facebook URL</div>
                        <div>{{ $facebookurl }}</div>
                        <div class="font-medium">Google Map URL</div>
                        <div class="line-clamp-1">{{ $googlemapurl }}</div>
                    </div>
                    <div class="flex justify-end">
                        <a href="{{ route('admin.contact.edit',$contactInformations->id) }}" class="px-4 py-3 bg-gray-500 rounded text-gray-50" >Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
