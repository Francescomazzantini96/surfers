<x-mail::message>


# Introduction
## Hello {{request()->get('name')}}

Thank you for your message, our team will get back to you as soon as possible

Below is a summary of the data you filled in:

Nome: {{request()->get('name')}}<br>
Mail: {{request()->get('mail')}}<br>
Birthplace: {{request()->get('birth_place')}}<br>
Birthday: {{request()->get('birth_day')}}<br>
Phone: {{request()->get('phone')}}<br>
Company: {{request()->get('company')}}<br>
Yourmessage: {{request()->get('message')}}

Thanks,<br>
Surfers.co
</x-mail::message>

