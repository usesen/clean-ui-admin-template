@extends ('layouts.app')

@section('content')
<!-- START: pages/lockscreen -->
<div
  class="cui-lockscreen"
  style="background-image: url(/cleanui/components/pages/common/img/login/1.jpeg)"
>
  <div class="cui-lockscreen-header">
    <div class="row">
      <div class="col-lg-8">
        <div class="cui-lockscreen-header-logo">
          <a href="javascript: void(0);" class="btn btn-sm btn-outline switch-to-fullscreen"
            >Switch Fullscreen / Windowed</a
          >
          <a
            href="javascript: void(0);"
            class="btn btn-sm btn-outline ml-3 random-bg-image"
            data-img="1"
            >Randomize Background Image</a
          >
        </div>
      </div>
    </div>
  </div>
  <div class="cui-lockscreen-block">
    <div class="row">
      <div class="col-xl-12">
        <div class="cui-lockscreen-block-inner">
          <div class="cui-lockscreen-block-form">
            <form id="form-validation" name="form-validation" method="POST">
              <div class="text-center mb-3">
                <span class="cui-avatar cui-avatar-border cui-avatar-90" href="javascript:void(0);">
                  <img
                    src="/cleanui/components/pages/common/img/login/avatar.jpg"
                    alt="Alternative text to the image"
                  />
                </span>
              </div>
              <h2 class="text-center">
                <i class="icmn-lock"></i>
                <strong>Artour Arteezy</strong>
              </h2>
              <br />
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
              <div class="form-actions text-center">
                <button type="submit" class="btn btn-success">Unlock</button>
              </div>
              <div class="form-group text-center">
                <a href="javascript: void(0);">Or sign in as a different user</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cui-lockscreen-footer text-center"></div>
</div>
<!-- END: pages/cui-lockscreen -->

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
        $('.cui-lockscreen').toggleClass('cui-lockscreen-fullscreen')
      })

      // Change BG
      $('.random-bg-image').on('click', function() {
        var min = 1,
          max = 5,
          next = Math.floor($('.random-bg-image').data('img')) + 1,
          final = next > max ? min : next

        $('.random-bg-image').data('img', final)
        $('.cui-lockscreen')
          .data('img', final)
          .css('backgroundImage', 'url(/cleanui/components/pages/common/img/login/' + final + '.jpeg)')
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection