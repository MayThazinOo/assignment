@component('mail::message')
# Thanks your inquiry

Accepted your inquiry. Please wait for a while. <br>

お問い合わせ内容 : {{ $content['subject'] }}<br>
内容(できるだけ具体的にお書き下さい) : {{ $content['opinion'] }}<br>
会社名 / 団体名 : {{ $content['company'] }}<br>
部署名 : {{ $content['section'] }}<br>
お名前 : {{ $content['name'] }}<br>
ふりがな : {{ $content['ruby'] }}<br>
電話番号 : {{ $content['tel'] }}<br>
メールアドレス : {{ $content['mailaddress'] }}<br>

Thanks,<br>
@endcomponent
