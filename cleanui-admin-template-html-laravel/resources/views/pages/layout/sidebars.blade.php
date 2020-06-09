@extends ('layouts.app')

@section('content')
<!-- START: layout/sidebars -->
<!-- Panel with Left Sidebar -->
<div class="card cui-utils-card-with-sidebar">
  <div class="cui-utils-card-sidebar">
    <div class="btn-group-vertical btn-group-justified">
      <button type="button" class="btn">Provide Files</button>
      <button type="button" class="btn">User Action</button>
      <button type="button" class="btn">Access History</button>
    </div>
    <br />
    <p>
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
      been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
      galley of type and scrambled it to make a type specimen book.
    </p>
  </div>
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
      <strong>Panel w/ Left Sidebar</strong>
    </span>
  </div>
  <div class="card-body">
    <p>
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
      been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
      galley of type and scrambled it to make a type specimen book. It has survived not only five
      centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It
      was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
      passages, and more recently with desktop publishing software like Aldus PageMaker including
      versions of Lorem Ipsum.
    </p>
    <p>
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
      been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
      galley of type and scrambled it to make a type specimen book. It has survived not only five
      centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It
      was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
      passages.
    </p>
  </div>
</div>
<!-- End Panel with Left Sidebar -->

<!-- Panel with Right Sidebar -->
<div class="card cui-utils-card-with-sidebar cui-utils-card-with-sidebar-right">
  <div class="cui-utils-card-sidebar">
    <div class="btn-group-vertical btn-group-justified">
      <button type="button" class="btn">Provide Files</button>
      <button type="button" class="btn">User Action</button>
      <button type="button" class="btn">Access History</button>
    </div>
    <br />
    <p>
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
      been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
      galley of type and scrambled it to make a type specimen book.
    </p>
  </div>
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
      <strong>Panel w/ Right Sidebar</strong>
    </span>
  </div>
  <div class="card-body">
    <p>
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
      been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
      galley of type and scrambled it to make a type specimen book. It has survived not only five
      centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It
      was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
      passages.
    </p>
    <p>
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
      been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
      galley of type and scrambled it to make a type specimen book. It has survived not only five
      centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It
      was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
      passages, and more recently with desktop publishing software like Aldus PageMaker including
      versions of Lorem Ipsum.
    </p>
  </div>
</div>
<!-- End Panel with Right Sidebar -->
<!-- END: layout/sidebars -->

@endsection