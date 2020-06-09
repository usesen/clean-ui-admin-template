@extends ('layouts.app')

@section('content')
<!-- START: layout/cards -->
<!-- Default Card -->
<div class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Cards</strong>
      <a
        href="https://getbootstrap.com/docs/4.2/components/card/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <span>Default Card Body</span>
  </div>
  <div class="card-footer">
    <span>Default Card Footer</span>
  </div>
</div>
<!-- End Default Card -->

<!-- Default Card w/ Nav -->
<div class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Default Card Heading w/ Nav</strong>
    </span>
    <br />
    <br />
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" href="javascript: void(0);">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript: void(0);">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="javascript: void(0);">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <span>Default Card Body</span>
  </div>
  <div class="card-footer">
    <span>Default Card Footer</span>
  </div>
</div>
<!-- End Default Card w/ Nav -->

<!-- Default Card -->
<div class="card">
  <div class="card-header">
    <div class="pull-right mt-2">
      <span class="mr-3">
        User:
        <a href="javascript: void(0);">Administrator</a>
      </span>
      <div class="dropdown d-inline-block">
        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <i class="icmn-database mr-2"></i>
          <span class="hidden-lg-down">Dashboards</span>
          <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" role="menu">
          <div class="dropdown-header">Active</div>
          <a class="dropdown-item" href="javascript:void(0)">Project Management</a>
          <a class="dropdown-item" href="javascript:void(0)">User Inetrface Development</a>
          <a class="dropdown-item" href="javascript:void(0)">Documentation</a>
          <div class="dropdown-header">Inactive</div>
          <a class="dropdown-item" href="javascript:void(0)">Marketing</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)"
            ><i class="dropdown-icon icmn-cog"></i> Settings</a
          >
        </div>
      </div>
    </div>
    <span class="cui-utils-title">
      <strong>Default Card Heading w/ Controls</strong>
    </span>
  </div>
  <div class="card-body">
    <span>Default Card Body</span>
  </div>
  <div class="card-footer">
    <span>Default Card Footer</span>
  </div>
</div>
<!-- End Default Card -->

<!-- Default Card -->
<div class="row">
  <div class="col-lg-4">
    <section class="card">
      <div class="card-header">
        <span class="cui-utils-title">
          <strong>Card in Grid</strong>
        </span>
      </div>
      <div class="card-body">
        <span>Grid: <code>.col-lg-4</code></span>
      </div>
      <div class="card-footer">
        <span>Default Card footer</span>
      </div>
    </section>
  </div>
  <div class="col-lg-8">
    <section class="card">
      <div class="card-header">
        <span class="cui-utils-title">
          <strong>Card in Grid</strong>
        </span>
      </div>
      <div class="card-body">
        <span>Grid: <code>.col-lg-8</code></span>
      </div>
      <div class="card-footer">
        <span>Default Card footer</span>
      </div>
    </section>
  </div>
</div>
<!-- End Default Card -->

<!-- Nested Cards -->
<div class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Nested Cards</strong>
    </span>
  </div>
  <div class="card-body">
    <section class="card">
      <div class="card-header">
        <span class="cui-utils-title">
          <strong>Nested Card Heading: Level 1</strong>
        </span>
      </div>
      <div class="card-body">
        <section class="card">
          <div class="card-header">
            <span class="cui-utils-title">
              <strong>Nested Card Heading: Level 2</strong>
            </span>
          </div>
          <div class="card-body">
            <span>Nested Card body: Level 2</span>
          </div>
          <div class="card-footer">
            <span>Nested Card footer: Level 2</span>
          </div>
        </section>
        <section class="card">
          <div class="card-header">
            <span class="cui-utils-title">
              <strong>Nested Card Heading: Level 2</strong>
            </span>
          </div>
          <div class="card-body">
            <span>Nested Card body: Level 2</span>
          </div>
          <div class="card-footer">
            <span>Nested Card footer: Level 2</span>
          </div>
        </section>
      </div>
      <div class="card-footer">
        <span>Nested Card footer: Level 1</span>
      </div>
    </section>
  </div>
  <div class="card-footer">
    <span>Nested Cards footer</span>
  </div>
</div>
<!-- End Nested Cards -->
<!-- END: layout/cards -->

@endsection