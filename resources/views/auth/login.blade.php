<div class="modal-content">
  <form class="form-horizontal" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title text-center" id="myModalLabel">Login</h4>
    </div>
    <div class="modal-body">
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="col-md-8 col-md-offset-2">
          <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="E-Mail Address">

          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <div class="col-md-8 col-md-offset-2">
          <input id="password" class="form-control" type="password" name="password" required placeholder="Password">

          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-8 col-md-offset-2">
          <div class="checkbox">
              <label>
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </label>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <div class="form-group">
        <div class="col-md-8 col-md-offset-2">
            <a class="btn btn-link" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>
            <button type="submit" class="btn btn-primary">
                Login
            </button>
        </div>
      </div>
    </div>
  </form>
</div>
