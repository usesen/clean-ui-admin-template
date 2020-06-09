@extends ('layouts.app')

@section('content')
<!-- START: components/loading-progress -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Nprogress</strong>
      <a
        href="http://ricostacruz.com/nprogress/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <h5 class="text-black"><strong>Page Loading Progress Bar</strong></h5>
    <p class="text-muted">
      Element: read
      <a href="http://ricostacruz.com/nprogress/" target="_blank"
        >official documentation<small
          ><i class="icmn-link ml-1"><!-- --></i></small
        ></a
      >
    </p>
    <div class="mb-5">
      <button
        type="button"
        class="btn btn-default mr-2 mb-2"
        data-toggle="modal"
        onclick="NProgress.start();"
      >
        <i class="icmn-play2 mr-2"></i>
        NProgress Start
      </button>
      <button
        type="button"
        class="btn btn-default mr-2 mb-2"
        data-toggle="modal"
        onclick="NProgress.set(0.4);"
      >
        <i class="icmn-pencil mr-2"></i>
        NProgress Set 40%
      </button>
      <button
        type="button"
        class="btn btn-default mr-2 mb-2"
        data-toggle="modal"
        onclick="NProgress.inc();"
      >
        <i class="icmn-plus mr-2"></i>
        NProgress Increment
      </button>
      <button
        type="button"
        class="btn btn-default mr-2 mb-2"
        data-toggle="modal"
        onclick="NProgress.done();"
      >
        <i class="icmn-stop mr-2"></i>
        NProgress Done
      </button>
      <br />
      <button
        type="button"
        class="btn btn-default mr-2 mb-2"
        data-toggle="modal"
        onclick="NProgress.configure({ showSpinner: true });"
      >
        Show Spinner (needs to restart)
      </button>
      <button
        type="button"
        class="btn btn-default mr-2 mb-2"
        data-toggle="modal"
        onclick="NProgress.configure({ showSpinner: false });"
      >
        Hide Spinner (needs to restart)
      </button>
    </div>
  </div>
</section>
<!-- END: components/loading-progress -->

@endsection