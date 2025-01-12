<x-app-layout>
    <div class="mb-6 flex gap-3 flex-row sm:items-center sm:justify-between">
        <h2 class="text-2xl font-bold text-black dark:text-white">
            Products
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
                </li>
                <li class="font-medium text-primary">Products</li>
            </ol>
        </nav>
    </div>

    <div
        class="rounded-sm border border-stroke bg-white px-5 pb-2.5 pt-6 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:pb-1">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <table class="min-w-full divide-y divide-stroke dark:divide-strokedark">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-0 text-black dark:text-white">
                                Name</th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-black dark:text-white">Total
                                Views</th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-black dark:text-white">Total
                                Sales</th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-black dark:text-white">
                                Conversion</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stroke dark:divide-strokedark">
                        @foreach ($productsPerPos['all'] as $item)
                            <tr>
                                <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                    <div class="flex items-center">
                                        <div class="">
                                            <div>
                                                <a href=""
                                                    class="font-medium text-black dark:text-white block underline hover:italic hover:font-bold">
                                                    {{ $item['name'] }}
                                                </a>
                                            </div>
                                            <div class="mt-1 text-gray-500">{{ $item['available_in'] }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                    <div class="text-black dark:text-white">{{ $item['views'] }}</div>
                                </td>
                                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                    <div class="text-black dark:text-white">{{ $item['current_sales'] }}</div>
                                </td>
                                <td class="whitespace-nowrap px-3 py-5 text-sm font-medium text-meta-5">{{ $item['conversion_rate'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
