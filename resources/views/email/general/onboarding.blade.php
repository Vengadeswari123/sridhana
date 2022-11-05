@component('mail::message')
# Welcome Sridhana
<img src="http://localhost:8000/storage/saree1.JPG">
Hello recipient's name,

We're super excited to see you join the Sridhana community.

We hope you will be happy with [products offered by the online store] and that you will shop with us again and again.

Our goal is to offer the widest range of [products offered by the online store] at the highest quality. If you think we should add any items to our store, don't hesitate to contact us and share your feedback.

Until then, enjoy your shopping!

Best,
[store owners' signature]


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
