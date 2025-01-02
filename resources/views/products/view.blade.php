<x-app-layout>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 xl:grid-cols-3 2xl:gap-7.5">
        <x-stat-card title="Total views" value="$3.456K" percentage="0.43%" :increase="false">
            <x-slot name="icon">
                <svg class="fill-primary dark:fill-white" width="22" height="16" viewBox="0 0 22 16" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11 15.1156C4.19376 15.1156 0.825012 8.61876 0.687512 8.34376C0.584387 8.13751 0.584387 7.86251 0.687512 7.65626C0.825012 7.38126 4.19376 0.918762 11 0.918762C17.8063 0.918762 21.175 7.38126 21.3125 7.65626C21.4156 7.86251 21.4156 8.13751 21.3125 8.34376C21.175 8.61876 17.8063 15.1156 11 15.1156ZM2.26876 8.00001C3.02501 9.27189 5.98126 13.5688 11 13.5688C16.0188 13.5688 18.975 9.27189 19.7313 8.00001C18.975 6.72814 16.0188 2.43126 11 2.43126C5.98126 2.43126 3.02501 6.72814 2.26876 8.00001Z"
                        fill=""></path>
                    <path
                        d="M11 10.9219C9.38438 10.9219 8.07812 9.61562 8.07812 8C8.07812 6.38438 9.38438 5.07812 11 5.07812C12.6156 5.07812 13.9219 6.38438 13.9219 8C13.9219 9.61562 12.6156 10.9219 11 10.9219ZM11 6.625C10.2437 6.625 9.625 7.24375 9.625 8C9.625 8.75625 10.2437 9.375 11 9.375C11.7563 9.375 12.375 8.75625 12.375 8C12.375 7.24375 11.7563 6.625 11 6.625Z"
                        fill=""></path>
                </svg>
            </x-slot>
        </x-stat-card>

        <x-stat-card title="Total Sales" value="45,2K" percentage="0.43%" :increase="true">
            <x-slot name="icon">
                <svg class="fill-primary dark:fill-white" width="20" height="22" viewBox="0 0 20 22"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.7531 16.4312C10.3781 16.4312 9.27808 17.5312 9.27808 18.9062C9.27808 20.2812 10.3781 21.3812 11.7531 21.3812C13.1281 21.3812 14.2281 20.2812 14.2281 18.9062C14.2281 17.5656 13.0937 16.4312 11.7531 16.4312ZM11.7531 19.8687C11.2375 19.8687 10.825 19.4562 10.825 18.9406C10.825 18.425 11.2375 18.0125 11.7531 18.0125C12.2687 18.0125 12.6812 18.425 12.6812 18.9406C12.6812 19.4219 12.2343 19.8687 11.7531 19.8687Z"
                        fill=""></path>
                    <path
                        d="M5.22183 16.4312C3.84683 16.4312 2.74683 17.5312 2.74683 18.9062C2.74683 20.2812 3.84683 21.3812 5.22183 21.3812C6.59683 21.3812 7.69683 20.2812 7.69683 18.9062C7.69683 17.5656 6.56245 16.4312 5.22183 16.4312ZM5.22183 19.8687C4.7062 19.8687 4.2937 19.4562 4.2937 18.9406C4.2937 18.425 4.7062 18.0125 5.22183 18.0125C5.73745 18.0125 6.14995 18.425 6.14995 18.9406C6.14995 19.4219 5.73745 19.8687 5.22183 19.8687Z"
                        fill=""></path>
                    <path
                        d="M19.0062 0.618744H17.15C16.325 0.618744 15.6031 1.23749 15.5 2.06249L14.95 6.01562H1.37185C1.0281 6.01562 0.684353 6.18749 0.443728 6.46249C0.237478 6.73749 0.134353 7.11562 0.237478 7.45937C0.237478 7.49374 0.237478 7.49374 0.237478 7.52812L2.36873 13.9562C2.50623 14.4375 2.9531 14.7812 3.46873 14.7812H12.9562C14.2281 14.7812 15.3281 13.8187 15.5 12.5469L16.9437 2.26874C16.9437 2.19999 17.0125 2.16562 17.0812 2.16562H18.9375C19.35 2.16562 19.7281 1.82187 19.7281 1.37499C19.7281 0.928119 19.4187 0.618744 19.0062 0.618744ZM14.0219 12.3062C13.9531 12.8219 13.5062 13.2 12.9906 13.2H3.7781L1.92185 7.56249H14.7094L14.0219 12.3062Z"
                        fill=""></path>
                </svg>
            </x-slot>
        </x-stat-card>

        <x-stat-card title="Total Products" value="24">
            <x-slot name="icon">
                <svg class="fill-primary dark:fill-white" width="22" height="22" viewBox="0 0 22 22"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21.1063 18.0469L19.3875 3.23126C19.2157 1.71876 17.9438 0.584381 16.3969 0.584381H5.56878C4.05628 0.584381 2.78441 1.71876 2.57816 3.23126L0.859406 18.0469C0.756281 18.9063 1.03128 19.7313 1.61566 20.3844C2.20003 21.0375 2.99066 21.3813 3.85003 21.3813H18.1157C18.975 21.3813 19.8 21.0031 20.35 20.3844C20.9 19.7656 21.2094 18.9063 21.1063 18.0469ZM19.2157 19.3531C18.9407 19.6625 18.5625 19.8344 18.15 19.8344H3.85003C3.43753 19.8344 3.05941 19.6625 2.78441 19.3531C2.50941 19.0438 2.37191 18.6313 2.44066 18.2188L4.12503 3.43751C4.19378 2.71563 4.81253 2.16563 5.56878 2.16563H16.4313C17.1532 2.16563 17.7719 2.71563 17.875 3.43751L19.5938 18.2531C19.6282 18.6656 19.4907 19.0438 19.2157 19.3531Z"
                        fill=""></path>
                    <path
                        d="M14.3345 5.29375C13.922 5.39688 13.647 5.80938 13.7501 6.22188C13.7845 6.42813 13.8189 6.63438 13.8189 6.80625C13.8189 8.35313 12.547 9.625 11.0001 9.625C9.45327 9.625 8.1814 8.35313 8.1814 6.80625C8.1814 6.6 8.21577 6.42813 8.25015 6.22188C8.35327 5.80938 8.07827 5.39688 7.66577 5.29375C7.25327 5.19063 6.84077 5.46563 6.73765 5.87813C6.6689 6.1875 6.63452 6.49688 6.63452 6.80625C6.63452 9.2125 8.5939 11.1719 11.0001 11.1719C13.4064 11.1719 15.3658 9.2125 15.3658 6.80625C15.3658 6.49688 15.3314 6.1875 15.2626 5.87813C15.1595 5.46563 14.747 5.225 14.3345 5.29375Z"
                        fill=""></path>
                </svg>
            </x-slot>
        </x-stat-card>
    </div>

    <div class="mt-4 grid grid-cols-12 gap-4 md:mt-6 md:gap-6 2xl:mt-7.5 2xl:gap-7.5">
        <x-charts.pi span="col-span-5" id="piChart" title="Sales per platform" :data="[
            'labels' => ['Restaurant', 'Online', 'Delivery App'],
            'colours' => ['#6577F3', '#8FD0EF', '#0FADCF'],
            'data' => [3500, 1500, 2000],
            'percentages' => ['50%', '21%', '29%'],
        ]" />

        <div class="col-span-12 xl:col-span-7">
            <div
                class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
                <h4 class="mb-6 text-xl font-bold text-black dark:text-white">
                    Top Products
                </h4>

                <div class="flex flex-col">
                    <div class="grid grid-cols-3 rounded-sm bg-gray-2 dark:bg-meta-4 sm:grid-cols-4">
                        <div class="p-2.5 xl:p-5">
                            <h5 class="text-sm font-medium uppercase xsm:text-base">Product</h5>
                        </div>
                        <div class="p-2.5 text-center xl:p-5 hidden sm:block">
                            <h5 class="text-sm font-medium uppercase xsm:text-base">Views</h5>
                        </div>
                        <div class="p-2.5 text-center xl:p-5">
                            <h5 class="text-sm font-medium uppercase xsm:text-base">Sales</h5>
                        </div>
                        <div class="p-2.5 text-center xl:p-5">
                            <h5 class="text-sm font-medium uppercase xsm:text-base">Conversion</h5>
                        </div>
                    </div>

                    @php
                        $data = [
                            [
                                'name' => 'Margarite Pizza',
                                'views' => '3.5K',
                                'sales' => '$5,768',
                                'conversion' => '4.8%',
                            ],
                            [
                                'name' => 'Pepperoni Pizza',
                                'views' => '2.2K',
                                'sales' => '$4,635',
                                'conversion' => '4.3%',
                            ],
                            [
                                'name' => 'Cheese Pizza',
                                'views' => '2.1K',
                                'sales' => '$4,290',
                                'conversion' => '3.7%',
                            ],
                            [
                                'name' => 'Veggie Pizza',
                                'views' => '1.5K',
                                'sales' => '$3,580',
                                'conversion' => '2.5%',
                            ],
                            [
                                'name' => 'Hawaiian Pizza',
                                'views' => '1.2K',
                                'sales' => '$2,740',
                                'conversion' => '1.9%',
                            ],
                        ];
                    @endphp

                    @foreach ($data as $item)
                        <div class="grid grid-cols-3 border-b border-stroke dark:border-strokedark sm:grid-cols-4">
                            <div class="flex items-center gap-3 p-2.5 xl:p-5">
                                <p class="font-medium text-black dark:text-white">
                                    {{ $item['name'] }}
                                </p>
                            </div>

                            <div class="items-center justify-center p-2.5 xl:p-5 hidden sm:flex">
                                <p class="font-medium text-black dark:text-white">
                                    {{ $item['views'] }}
                                </p>
                            </div>

                            <div class="flex items-center justify-center p-2.5 xl:p-5">
                                <p class="font-medium text-meta-3">
                                    {{ $item['sales'] }}
                                </p>
                            </div>

                            <div class="items-center justify-center p-2.5 sm:flex xl:p-5">
                                <p class="font-medium text-meta-5 text-center">
                                    {{ $item['conversion'] }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
