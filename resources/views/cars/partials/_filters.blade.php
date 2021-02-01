
@foreach($mappings as $key => $map)

    @include('cars.partials._filter_list', compact('key', 'map'))

@endforeach

<div class="w-1/2 bg-blue-900 text-white p-2 rounded shadow">
    <p>
        <a href="{{ route('cars.index') }}">Clear all filters</a>
    </p>
</div>




