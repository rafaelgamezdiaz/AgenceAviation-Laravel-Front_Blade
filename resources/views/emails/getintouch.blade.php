@component('mail::message')
# Message from a visitant in Agence Aviation webpage 

Name: {{ $name }}

@component('mail::panel')
 {{ $message }}
@endcomponent

@component('mail::button', ['url' => 'mailto:'.$email])
Answer the visitor
@endcomponent

@endcomponent
