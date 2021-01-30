<div class="my-5 px-5 w-full overflow-hidden md:my-px md:px-px xl:my-2 xl:px-2 xl:w-1/2">
    <div class="flex items-center shadow-xl m-2 p-2">
        <a href="{{ $car->slug }}">
            <img class="w-20 rounded" src="https://via.placeholder.com/150C/O https://placeholder.com/" alt="{{ $car->brand }}">
        </a>
        <div class="">
            <h5 class="text-xl p-2"><a href="{{ $car->slug }}">{{ $car->brand }}</a></h5>

            <div>
                <ul class="flex">
                    <li class="p-2">{{ $car->formattedFuel }}</li>
                    <li class="p-2">{{ $car->formattedType }}</li>
                    <li class="p-2">{{ $car->formattedAccess }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
