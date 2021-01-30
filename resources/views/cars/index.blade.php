<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="w-full max-w-6xl mx-auto">
                    <div class="grid md:grid-cols-12 gap-5 p-2">
                        <aside class="md:col-span-3 md:pt-0 p-2 shadow-xl">
                            @include('cars.partials._filters')
                        </aside>
                        <div class="md:col-span-9 p-4">
                            <div class="flex flex-wrap -mx-5 overflow-hidden md:-mx-px xl:-mx-2">

                                @if ($cars->count())

                                  @each('cars.partials._content', $cars, 'car')
                                  {{ $cars->appends(request()->query())->links() }}

                                @else

                                    Cars not found :(

                                @endif

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-guest-layout>
