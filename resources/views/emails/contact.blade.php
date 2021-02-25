@component('mail::message')

<h1>Hallo bedankt om ons formulier in te vullen</h1>
<p>Name:</p>{{$data['name']}}
<p>Email:</p>{{$data['email']}}
<p>Message:</p>{{$data['message']}}

@component('mail::button', ['url' => 'https://www.google.be'])
Take me to Google.
@endcomponent

Bedankt,<br>
{{ config('app.name') }}
   <p>CEO TOM</p>
@endcomponent
