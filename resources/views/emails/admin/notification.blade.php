<x-mail::message>
    # Introduction

    {{ $name }}
    {{ $email }}


    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
