@extends ('layouts.app')

@section('content')
<!-- START: pages/register -->
<div
  class="cui-register"
  style="background-image: url(/cleanui/components/pages/common/img/login/1.jpeg)"
>
  <div class="cui-register-header">
    <div class="row">
      <div class="col-lg-8">
        <div class="cui-register-header-logo">
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
        <div class="cui-register-header-menu">
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
  <div class="cui-register-block">
    <div class="row">
      <div class="col-xl-12">
        <div class="cui-register-block-inner">
          <div class="cui-register-block-form">
            <h4 class="text-uppercase">
              <strong>Please register</strong>
            </h4>
            <br />
            <form id="form-validation" name="form-validation" method="POST">
              <div class="form-group">
                <div class="form-input-icon form-input-icon-right">
                  <i class="icmn-spinner11"></i>
                  <input
                    id="validation-email"
                    class="form-control"
                    placeholder="Email or Username"
                    name="validation[email]"
                    type="text"
                    data-validation="[EMAIL]"
                  />
                </div>
              </div>
              <div class="form-group">
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
                <input type="password" class="form-control" placeholder="Repeat Password" />
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-primary">Sign Up</button>
                <label class="ml-3">
                  <input type="checkbox" name="example6" class="mr-1" checked />
                  Mail Subscription
                </label>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cui-register-footer text-center">
    <ul class="list-unstyled list-inline">
      <li class="list-inline-item"><a href="javascript: void(0);">Terms of Use</a></li>
      <li class="active list-inline-item"><a href="javascript: void(0);">Compliance</a></li>
      <li class="list-inline-item"><a href="javascript: void(0);">Confidential Information</a></li>
      <li class="list-inline-item"><a href="javascript: void(0);">Support</a></li>
      <li class="list-inline-item"><a href="javascript: void(0);">Contacts</a></li>
    </ul>
  </div>
</div>
<!-- END: pages/register -->

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
        $('.cui-register').toggleClass('cui-register-fullscreen')
      })

      // Change BG
      $('.random-bg-image').on('click', function() {
        var min = 1,
          max = 5,
          next = Math.floor($('.random-bg-image').data('img')) + 1,
          final = next > max ? min : next

        $('.random-bg-image').data('img', final)
        $('.cui-register')
          .data('img', final)
          .css('backgroundImage', 'url(/cleanui/components/pages/common/img/login/' + final + '.jpeg)')
      })
    })
  })(jQuery)
</script>
<!-- START: page scripts -->

@endsection