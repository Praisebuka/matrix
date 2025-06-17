
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
