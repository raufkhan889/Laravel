{{-- @component('mail::message') --}}
# Shop Request <br>

Please activate the shop, here is the details. <br>

Shop Name: {{ $shop['name'] }} <br>
Shop Details: {{ $shop['description'] }}

@component('mail::button', ['url' => url('/admin/shops')])
    Manage Shop
@endcomponent

Thanks,<br>
{{ config('app.name') }}
{{-- @endcomponent --}}
