@extends ('layouts.app')

@section('content')
<!-- START: apps/gallery -->
<section class="card">
  <div class="card-header">
    <a
      href="javascript: void(0);"
      class="btn btn-sm btn-primary pull-right"
      data-toggle="modal"
      data-target="#upload"
    >
      <small><i class="icmn-plus mr-1"></i></small>
      Upload File
    </a>
    <h4 class="mt-1 mb-1 text-black">
      <strong>Gallery App</strong>
    </h4>
  </div>
  <div class="card-body">
    <div class="cui-apps-gallery clearfix">
      <div
        class="cui-apps-gallery-item cui-apps-gallery-item-with-controls"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/1.jpeg)"
      >
        <div class="cui-apps-gallery-item-controls">
          <div class="btn-group cui-apps-gallery-item-controls-inner">
            <button type="button" class="btn">
              <i class="icmn-pencil"></i>
            </button>
            <button type="button" class="btn">
              <i class="icmn-bin"></i>
            </button>
          </div>
        </div>
      </div>
      <div
        class="cui-apps-gallery-item"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/2.jpeg)"
      ></div>
      <div
        class="cui-apps-gallery-item"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/3.jpeg)"
      ></div>
      <div
        class="cui-apps-gallery-item cui-apps-gallery-item-with-controls"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/5.jpeg)"
      >
        <div class="cui-apps-gallery-item-controls">
          <div class="btn-group">
            <button type="button" class="btn">
              <i class="icmn-pencil"></i>
            </button>
            <button type="button" class="btn">
              <i class="icmn-bin"></i>
            </button>
          </div>
        </div>
      </div>
      <div
        class="cui-apps-gallery-item cui-apps-gallery-item-with-controls"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/2.jpeg)"
      >
        <div class="cui-apps-gallery-item-controls">
          <div class="btn-group">
            <button type="button" class="btn">
              <i class="icmn-pencil"></i>
            </button>
            <button type="button" class="btn">
              <i class="icmn-bin"></i>
            </button>
          </div>
        </div>
      </div>
      <div
        class="cui-apps-gallery-item"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/4.jpeg)"
      ></div>
      <div
        class="cui-apps-gallery-item"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/4.jpeg)"
      ></div>
      <div
        class="cui-apps-gallery-item cui-apps-gallery-item-with-controls"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/5.jpeg)"
      >
        <div class="cui-apps-gallery-item-controls">
          <div class="btn-group">
            <button type="button" class="btn">
              <i class="icmn-pencil"></i>
            </button>
            <button type="button" class="btn">
              <i class="icmn-bin"></i>
            </button>
          </div>
        </div>
      </div>
      <div
        class="cui-apps-gallery-item"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/2.jpeg)"
      ></div>
      <div
        class="cui-apps-gallery-item"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/4.jpeg)"
      ></div>
      <div
        class="cui-apps-gallery-item"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/1.jpeg)"
      ></div>
      <div
        class="cui-apps-gallery-item cui-apps-gallery-item-with-controls"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/2.jpeg)"
      >
        <div class="cui-apps-gallery-item-controls">
          <div class="btn-group">
            <button type="button" class="btn">
              <i class="icmn-pencil"></i>
            </button>
            <button type="button" class="btn">
              <i class="icmn-bin"></i>
            </button>
          </div>
        </div>
      </div>
      <div
        class="cui-apps-gallery-item cui-apps-gallery-item-with-controls"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/3.jpeg)"
      >
        <div class="cui-apps-gallery-item-controls">
          <div class="btn-group">
            <button type="button" class="btn">
              <i class="icmn-pencil"></i>
            </button>
            <button type="button" class="btn">
              <i class="icmn-bin"></i>
            </button>
          </div>
        </div>
      </div>
      <div
        class="cui-apps-gallery-item"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/5.jpeg)"
      ></div>
      <div
        class="cui-apps-gallery-item"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/2.jpeg)"
      ></div>
      <div
        class="cui-apps-gallery-item cui-apps-gallery-item-with-controls"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/4.jpeg)"
      >
        <div class="cui-apps-gallery-item-controls">
          <div class="btn-group">
            <button type="button" class="btn">
              <i class="icmn-pencil"></i>
            </button>
            <button type="button" class="btn">
              <i class="icmn-bin"></i>
            </button>
          </div>
        </div>
      </div>
      <div
        class="cui-apps-gallery-item"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/4.jpeg)"
      ></div>
      <div
        class="cui-apps-gallery-item"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/5.jpeg)"
      ></div>
      <div
        class="cui-apps-gallery-item"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/2.jpeg)"
      ></div>
      <div
        class="cui-apps-gallery-item"
        style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/4.jpeg)"
      ></div>
    </div>
  </div>
</section>

<!-- START: upload file modal -->
<div class="modal fade modal-size-large" id="upload" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Upload File</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="file" class="dropify" data-default-file="" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn width-200 btn-primary">
          <i class="icmn-arrow-up mr-"></i> Upload
        </button>
        <button type="button" class="btn btn-link">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!-- END: upload file modal -->
<!-- END: cui-apps/gallery -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      $('.dropify').dropify()
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection