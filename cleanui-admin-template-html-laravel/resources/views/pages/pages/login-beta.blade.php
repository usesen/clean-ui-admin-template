@extends ('layouts.app')

@section('content')
<!-- START: pages/login-beta -->
<div
  class="cui-login"
  style="background-image: url(/cleanui/components/pages/common/img/login/1.jpeg)"
>
  <div class="cui-login-header">
    <div class="row">
      <div class="col-lg-8">
        <div class="cui-login-header-logo">
          <a href="javascript: history.back();">
            <img
              src="/cleanui/components/pages/common/img/logo-inverse.png"
              alt="Clean UI Admin Template"
            />
          </a>
          <br />
          <br />
          <a href="javascript: void(0);" class="btn btn-sm btn-outline switch-to-fullscreen mb-3"
            >Toggle Fullscreen</a
          >
          <a
            href="javascript: void(0);"
            class="btn btn-sm btn-outline ml-3 random-bg-image mb-3"
            data-img="1"
            >Toggle Background</a
          >
        </div>
      </div>
      <div class="col-lg-4">
        <div class="cui-login-header-menu">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item"><a href="javascript: history.back();">&larr; Back</a></li>
            <li class="list-inline-item active"><a href="javascript: void(0);">Login</a></li>
            <li class="list-inline-item"><a href="javascript: void(0);">About</a></li>
            <li class="list-inline-item"><a href="javascript: void(0);">Support</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="cui-login-block cui-login-block-extended">
    <div class="row">
      <div class="col-xl-12">
        <div class="cui-login-block-inner">
          <div class="cui-login-block-form">
            <h4 class="text-uppercase">
              <strong>Please log in</strong>
            </h4>
            <br />
            <form id="form-validation" name="form-validation" method="POST">
              <div class="form-group">
                <label class="form-label">Username</label>
                <input
                  id="validation-email"
                  class="form-control"
                  placeholder="Email or Username"
                  name="validation[email]"
                  type="text"
                  data-validation="[EMAIL]"
                />
              </div>
              <div class="form-group">
                <label class="form-label">Password</label>
                <input
                  id="validation-password"
                  class="form-control password"
                  name="validation[password]"
                  type="password"
                  data-validation="[L>=6]"
                  data-validation-message="$ must be at least 6 characters"
                  placeholder="Password"
                />
              </div>
              <div class="form-group">
                <a
                  href="javascript: void(0);"
                  class="pull-right cui-utils-link-blue cui-utils-link-underlined"
                  >Forgot Password?</a
                >
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="example6" checked />
                    Remember me
                  </label>
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-primary mr-3">Sign In</button>
                <span class="register-link">
                  <a href="" class="cui-utils-link-blue cui-utils-link-underlined">Register</a> if
                  you don't have account
                </span>
              </div>
              <div class="form-group">
                <span>
                  Use another service to Log In
                </span>
                <div class="mt-2">
                  <a href="javascript: void(0);" class="btn btn-icon">
                    <i class="icmn-facebook"></i>
                  </a>
                  <a href="javascript: void(0);" class="btn btn-icon">
                    <i class="icmn-google"></i>
                  </a>
                  <a href="javascript: void(0);" class="btn btn-icon">
                    <i class="icmn-windows"></i>
                  </a>
                  <a href="javascript: void(0);" class="btn btn-icon">
                    <i class="icmn-twitter"></i>
                  </a>
                </div>
              </div>
            </form>
          </div>
          <div class="cui-login-block-sidebar">
            <h4 class="cui-login-block-sidebar-title">
              <strong>Agile Dev Meetup</strong>
              <br />
              <span>2019</span>
            </h4>
            <div class="cui-login-block-sidebar-item">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
              has been the industry's standard dummy text ever since the 1500s.
            </div>
            <div class="cui-login-block-sidebar-item">
              Ipsum has been the industry's standard dummy text ever since the 1500s.
            </div>
            <div class="cui-login-block-sidebar-place">
              <i class="icmn-location mr-3"><!-- --></i>
              New York, USA
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cui-login-footer text-center">
    <ul class="list-unstyled list-inline">
      <li class="list-inline-item"><a href="javascript: void(0);">Terms of Use</a></li>
      <li class="active list-inline-item"><a href="javascript: void(0);">Compliance</a></li>
      <li class="list-inline-item"><a href="javascript: void(0);">Confidential Information</a></li>
      <li class="list-inline-item"><a href="javascript: void(0);">Support</a></li>
      <li class="list-inline-item"><a href="javascript: void(0);">Contacts</a></li>
    </ul>
  </div>
</div>
<!-- END: pages/cui-login-beta -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      // Form Validation
      $('#form-validation').validate({
        submit: {
          settings: {
            inputContainer: '.form-group',
            errorListClass: 'form-control-error',
            errorClass: 'has-danger',
          },
        },
      })

      // Show/Hide Password
      $('.password').password({
        eyeClass: '',
        eyeOpenClass: 'icmn-eye',
        eyeCloseClass: 'icmn-eye-blocked',
      })

      // Switch to fullscreen
      $('.switch-to-fullscreen').on('click', function() {
        $('.cui-login').toggleClass('cui-login-fullscreen')
      })

      // Change BG
      $('.random-bg-image').on('click', function() {
        var min = 1,
          max = 5,
          next = Math.floor($('.random-bg-image').data('img')) + 1,
          final = next > max ? min : next

        $('.random-bg-image').data('img', final)
        $('.cui-login')
          .data('img', final)
          .css('backgroundImage', 'url(/cleanui/components/pages/common/img/login/' + final + '.jpeg)')
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection