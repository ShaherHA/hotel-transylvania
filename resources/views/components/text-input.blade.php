@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-transparent rounded-md shadow-sm']) }}>
