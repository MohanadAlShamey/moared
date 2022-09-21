@component('mail::message')
# رسالة من : {{$data->name}}
# رقم الهاتف : {{$data->phone}}
# البريد الإلكتروني : {{$data->email}}

{{$data->msg}}

@component('mail::button', ['url' => 'mailto:'.$data->email])
راسله
@endcomponent

{{lang('thanks')}}<br>
{{ setting()->name }}
@endcomponent
