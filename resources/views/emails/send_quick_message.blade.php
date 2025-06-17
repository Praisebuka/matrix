{{-- <x-mail::message>
# Hello Tolulope

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}


<x-mail::message>
# Hello {{ $data->firstname }}

The body of your message:  
{{ $data->message }}

<x-mail::button :url="'mailto:{{ $data->email }}'">
Respond Now
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
