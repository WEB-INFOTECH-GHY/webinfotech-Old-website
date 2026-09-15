@component('mail::message')
# New Contact Form Submission

**Name:** {{ $name }}  
**Email:** {{ $email }}  
**Phone Number:** {{ $number }}  

**Message:**  
{{ $message }}

@endcomponent
