
<div class="py-6 px-6">

    @foreach ($map as $value => $name)

        <x-jet-nav-link class="inline-block w-full p-3"
        href="{{ route('cars.index', array_merge(request()->query(), [$key => $value, 'page' => 1])) }}">
            {{ $name }}
        </x-jet-nav-link>


    @endforeach

    @if (request($key))

    <x-jet-nav-link class="inline-block w-full p-3"
    href="{{ route('cars.index', Arr::except(request()->query(), [$key, 'page' ])) }}">
        <span class="text-red-500">&times; Clear this filter</span>
    </x-jet-nav-link>

    @endif

</div>
