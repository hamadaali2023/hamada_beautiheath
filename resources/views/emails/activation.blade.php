Wellcome, {{ $name }}
Please active your account : {{ url('user/activation', $link)}}



<h1>أهلا {{$user->name}}</h1>

<p>
يرجى الضغط على زر إعادة تعيين كلمة المرور لإعادة تعيين كلمة المرور الخاصة بك	<a href="{{ url('reset_password/'. $user->email. '/' .$code )}}"> أعادة تعين</a>
</p>