@extends ('layouts.app')

@section('content')
<!-- START: pages/page-404 -->
<div
  style="min-height: calc(100vh - 500px); display: flex; justify-content: center; align-items: center;"
>
  <div
    style="max-width: 560px; background-color: rgb(255, 255, 255); padding: 80px 30px; margin: 100px auto; border-radius: 10px; flex: 1 1 0%;"
  >
    <div style="max-width: 400px; margin: 0 auto;">
      <h1 class="font-size-36 mb-2">Page not found</h1>
      <p class="mb-3">The page is deprecated, deleted, or does not exist at all</p>
      <h1 class="font-size-80 mb-4 font-weight-bold">404 —</h1>
      <a class="btn" href="javascript: void(0);">← Go back to the home page</a>
    </div>
  </div>
</div>
<!-- END: pages/page-404 -->

@endsection