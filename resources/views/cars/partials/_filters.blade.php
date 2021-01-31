
<div class="w-full bg-blue-900 text-white p-4 rounded shadow">
    <p>
        <a href="{{ route('cars.index') }}">Clear all filters</a>
    </p>
</div>

@foreach($mappings as $key => $map)

    @include('cars.partials._filter_list', compact('key', 'map'))

@endforeach





