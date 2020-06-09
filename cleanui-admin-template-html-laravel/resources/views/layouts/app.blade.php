@include('components.head')
<body class="cui-config-borderless cui-menu-colorful cui-menu-left-shadow">
<div class="cui-initial-loading"></div>
<div class="cui-layout cui-layout-has-sider">
@include('components.menuRight')
@include('components.menuLeft')
<div class="cui-layout">
<div class="cui-layout-header">
@include('components.topBar')
</div>
<div class="cui-layout-content">
@include('components.breadcrumbs')
<div class="cui-utils-content">
@yield('content')
</div>
</div>
<div class="cui-layout-footer">
@include('components.footer')
</div>
</div>
</div>
</body>
</html>