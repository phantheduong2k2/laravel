
<div>

</div>
<form action="{{ Route('auth.postLogin') }}" method="post">
    @csrf
<div>
    <label for="">Email</label>
    <input type="text" name="email">
    @if ($errors->has('email'))
    <div class="alert alert-danger"><span>{{ $errors->first('email') }} </span></div>
@endif
</div>
<div>
    <label for="">Password</label>
    <input type="password" name="password">
    @if ($errors->has('password'))
    <div class="alert alert-danger"><span>{{ $errors->first('password') }} </span></div>
@endif
</div>
<div>
    <button>Dang nhap</button>
</div>
</form>
