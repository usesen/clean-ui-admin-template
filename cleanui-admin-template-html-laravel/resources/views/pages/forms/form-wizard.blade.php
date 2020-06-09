@extends ('layouts.app')

@section('content')
<!-- START: forms/form-wizard -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Form Wizard</strong>
      <a href="http://www.jquery-steps.com/" target="_blank" class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Form Wizard w/ Icons</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="http://www.jquery-steps.com/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div id="example-icons" class="wizard">
            <h3>
              <i class="icmn-user wizard-steps-icon"></i>
              <span class="wizard-steps-title">Account Info</span>
            </h3>
            <section class="text-center">
              <h3 class="d-none">Title</h3>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
            </section>
            <h3>
              <i class="icmn-book wizard-steps-icon"></i>
              <span class="wizard-steps-title">Billing Info</span>
            </h3>
            <section class="text-center">
              <h3 class="d-none">Title</h3>
              <p>Wonderful transition effects.</p>
            </section>
            <h3>
              <i class="icmn-checkmark wizard-steps-icon"></i>
              <span class="wizard-steps-title">Confirmation</span>
            </h3>
            <section class="text-center">
              <h3 class="d-none">Title</h3>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Form Wizard w/ Numbers</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="http://www.jquery-steps.com/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div id="example-numbers" class="wizard wizard-numbers">
            <h3>
              <span class="wizard-steps-title">Account Info</span>
            </h3>
            <section class="text-center">
              <h3 class="d-none">Title</h3>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
            </section>
            <h3>
              <span class="wizard-steps-title">Billing Info</span>
            </h3>
            <section class="text-center">
              <h3 class="d-none">Title</h3>
              <p>Wonderful transition effects.</p>
            </section>
            <h3>
              <span class="wizard-steps-title">Confirmation</span>
            </h3>
            <section class="text-center">
              <h3 class="d-none">Title</h3>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: forms/form-wizard -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      $('#example-icons').steps({
        headerTag: 'h3',
        bodyTag: 'section',
        transitionEffect: 'slideLeft',
        autoFocus: true,
      })

      $('#example-numbers').steps({
        headerTag: 'h3',
        bodyTag: 'section',
        transitionEffect: 'slideLeft',
        autoFocus: true,
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection