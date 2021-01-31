<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <div class="flex flex-wrap -mx-1 overflow-hidden">

                        <div class="my-1 px-1 w-full overflow-hidden xl:w-1/2">
                            <img class="rounded shadow" src="https://via.placeholder.com/600x200.png?text=text"
                                alt="{{ $car->brand }}">
                            <h1 class="text-2xl">{{ $car->brand }}</h1>
                            <div class="mz-4">
                                <ul class="flex p-4">
                                    <li class="p-2">{{ $car->fuel }}</li>
                                    <li class="p-2">{{ $car->type }}</li>
                                    <li class="p-2">{{ $car->price }}</li>
                                    <li class="p-2">{{ $car->horse_power }}</li>
                                    <li class="p-2">{{ $car->kilometers }}</li>
                                </ul>

                            </div>
                        </div>

                        <div class="my-1 px-1 w-full overflow-hidden xl:w-1/2">

                           <livewire:book-form />
                           
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
