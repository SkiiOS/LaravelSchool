@php
    $path = ltrim(parse_url($href, PHP_URL_PATH) ?? '', '/');
    $isActive = url()->current() === $href || ($path !== '' && request()->is($path, $path . '/*'));
@endphp
<li>
    <a href="{{ $href }}"
        {{-- mengatur layout jika menu aktif (di klik) atau tidak --}}
        @class([
            'flex items-center p-2 text-base font-medium rounded-lg group',
            'bg-gray-100 text-gray-900 dark:bg-gray-700 dark:text-white' => $isActive, // jika menu aktif (diklik)
            'text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' => !$isActive, //jika tidak
        ])>
        <span
            aria-hidden="true"
            @class([
                'inline-flex items-center justify-center transition duration-75 [&>svg]:w-6 [&>svg]:h-6',
                'text-gray-900 dark:text-white' => $isActive, //jika menu aktif
                'text-gray-500 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white' => !$isActive,
            ])>
            {!! $icon !!}
        </span>
        <span class="ml-3">{{ $label }}</span>
    </a>
</li>
