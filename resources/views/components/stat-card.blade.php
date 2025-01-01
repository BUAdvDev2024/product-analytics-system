@props([
    'title' => '',
    'value' => '',
    'icon' => '',
    'percentage' => '',
    'increase' => null,
])
<div class="rounded-sm border border-stroke bg-white px-7.5 py-6 shadow-default dark:border-strokedark dark:bg-boxdark">
    <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
        {{ $icon }}
    </div>

    <div class="mt-4 flex items-end justify-between">
        <div>
            <h4 class="text-title-md font-bold text-black dark:text-white">
                {{ $value }}
            </h4>
            <span class="text-sm font-medium">{{ $title }}</span>
        </div>

        <span class="flex items-center gap-1 text-sm font-medium {{ !is_null($increase) ? ($increase ? 'text-meta-3' : 'text-meta-5') : '' }}">
            {{ $percentage }}

            @if (!is_null($increase))    
                <svg class="{{ $increase ? 'fill-meta-3' : 'fill-meta-5 rotate-180'}}" width="10" height="11" viewBox="0 0 10 11" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M4.35716 2.47737L0.908974 5.82987L5.0443e-07 4.94612L5 0.0848689L10 4.94612L9.09103 5.82987L5.64284 2.47737L5.64284 10.0849L4.35716 10.0849L4.35716 2.47737Z"
                        fill=""></path>
                </svg>
            @endif
        </span>
    </div>
</div>
