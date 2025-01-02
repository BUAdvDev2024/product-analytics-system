<x-app-layout>
    <div class="mb-6 flex gap-3 flex-row sm:items-center sm:justify-between">
        <h2 class="text-2xl font-bold text-black dark:text-white">
            Point of sale platforms
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Dashboard /</a>
                </li>
                <li class="font-medium text-primary">Point of sale platforms</li>
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
                                class="px-3 py-3.5 text-left text-sm font-semibold text-black dark:text-white">Number of products</th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-black dark:text-white">Status</th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-black dark:text-white">
                                Last updated</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-stroke dark:divide-strokedark">
                        @php
                            $data = [
                                [
                                    'name' => 'Restaurant',
                                    'products' => 12,
                                    'status' => 'Active',
                                    'updated_at' => '2 days ago',
                                ],
                                [
                                    'name' => 'Online',
                                    'products' => 12,
                                    'status' => 'Active',
                                    'updated_at' => '2 days ago',
                                ],
                                [
                                    'name' => 'Delivery App',
                                    'products' => 12,
                                    'status' => 'Active',
                                    'updated_at' => '2 days ago',
                                ],
                            ];
                        @endphp

                        @foreach ($data as $item)
                            <tr>
                                <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                    <div class="flex items-center">
                                        <a href=""
                                            class="font-medium text-black dark:text-white block underline hover:italic hover:font-bold">
                                            {{ $item['name'] }}
                                        </a>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                    <div class="text-black dark:text-white">{{ $item['products'] }}</div>
                                </td>
                                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                    <div class="text-black dark:text-white">{{ $item['status'] }}</div>
                                </td>
                                <td class="whitespace-nowrap px-3 py-5 text-sm font-medium">{{ $item['updated_at'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
