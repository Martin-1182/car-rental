<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="w-full max-w-6xl mx-auto">
                    <div class="grid md:grid-cols-12 gap-5 p-2">
                        <aside class="md:col-span-3 md:pt-0 p-2 shadow-xl justifi-center">
                            <svg class="w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                              </svg>
                            @include('cars.partials._filters')
                        </aside>
                        <div class="md:col-span-9 p-4">
                            <div class="flex flex-wrap -mx-5 overflow-hidden md:-mx-px xl:-mx-2">

                                @if ($cars->count())

                                  @each('cars.partials._content', $cars, 'car')
                                  <div class="p-2">
                                      {{ $cars->appends(request()->query())->links() }}
                                  </div>

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
