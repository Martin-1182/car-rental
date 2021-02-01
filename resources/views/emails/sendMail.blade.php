@component('mail::message')
    # New reservation

    {{ $data['name'] }}

    {{ $data['phone'] }}

    {{ $data['email'] }}

@endcomponent
