<div class="form-group">
    <label for="{{ $name }}" class="block mb-2 text-sm font-medium text-gray-700">{{ $label }}</label>
    <div class="relative">
        <div class="form-icon absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none text-gray-400 transition-all duration-300">
            <i class="{{ $icon }}"></i>
        </div>
        <input id="{{ $name }}" type="{{ $type }}" name="{{ $name }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none focus:border-gray-500 block w-full ps-10 p-2.5" placeholder="{{ $placeholder }}" autocomplete="{{ $autocomplete }}" value={{ old($name,$value) }} {{ $attributes  }}>
    </div>
    <p class="text-sm text-red-500 mt-1">{{ $errors->first($name) }}</p>
</div>
