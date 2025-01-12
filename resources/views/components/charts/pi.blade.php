@props([
    'id' => 'chart',
    'title' => '',
    'data' => [],
    'span' => 'col-span-12',
])
<div x-data='{
    id: "{{ $id }}",
    range: "monthly",
    data: @json($data),
    renderChart() {
        this.data.id = this.id;
        window.pie(this.data);
    },
    init() {
        this.renderChart();
    },
    $watch: {
        range() {
            this.renderChart();
        },
    },
}'
    class="col-span-12 rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:{{$span ?? 'col-span-12'}}">
    <div class="mb-3 justify-between gap-4 sm:flex">
        <div>
            <h4 class="text-xl font-bold text-black dark:text-white">
                {{ $title }}
            </h4>
        </div>
    </div>

    <div class="mb-2">
        <div id="{{ $id }}" class="mx-auto flex justify-center"></div>
    </div>

    <div class="-mx-8 flex flex-wrap items-center justify-center gap-y-3">
        @foreach ($data['labels'] as $i => $d)
            <div class="w-full px-8 sm:w-1/2">
                <div class="flex w-full items-center">
                    <span class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[{{$data['colours'][$i]}}]"></span>
                    <p class="flex w-full justify-between text-sm font-medium text-black dark:text-white">
                        <span> {{$data['labels'][$i]}} </span>
                        <span> {{$data['percentages'][$i]}} </span>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
