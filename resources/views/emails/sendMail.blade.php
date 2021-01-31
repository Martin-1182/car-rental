@component('mail::message')
    # New reservation

    # {{ $data['name'] }}

    # {{ $data['phone'] }}

    # {{ $data['email'] }}


    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
