
<div class="py-6 px-6">

    @foreach ($map as $value => $name)

        <x-jet-nav-link class="inline-block w-auto mt-2"
        href="{{ route('cars.index', array_merge(request()->query(), [$key => $value, 'page' => 1])) }}"
        :active="request($key) === $value">
            {{ $name }}
        </x-jet-nav-link>


    @endforeach

    @if (request($key))

    <a class="inline-block w-auto pt-2 mt-1"
    href="{{ route('cars.index', Arr::except(request()->query(), [$key, 'page' ])) }}">
        <span class="text-red-500 text-xs p-2 bg-grey-100 rounded shadow">&times; Clear this filter</span>
    </a>

    @endif

</div>
