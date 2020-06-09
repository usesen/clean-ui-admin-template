@extends ('layouts.app')

@section('content')
<!-- START: Blog/view -->
<section class="card">
  <div class="card-header">
    <div class="cui-utils-title">
      <strong>Add / Edit Post</strong>
    </div>
  </div>
  <div class="card-body">
    <div class="cui-add-post">
      <div class="container">
        <form action="#" class="cui-add-post-form">
          <div class="form-group">
            <label for="input-post-title"><strong>Post Title</strong></label>
            <input
              type="text"
              class="form-control"
              id="input-post-title"
              placeholder="Enter title"
            />
          </div>
          <div class="form-group">
            <label><strong>Post Type</strong></label>
            <ul class="cui-add-post-type-list">
              <li class="cui-add-post-type-item">
                <input type="radio" id="post-type-1" name="post-type" value="" />
                <label for="post-type-1">Text</label>
              </li>
              <li class="cui-add-post-type-item">
                <input type="radio" id="post-type-2" name="post-type" value="" />
                <label for="post-type-2">Video</label>
              </li>
              <li class="cui-add-post-type-item">
                <input type="radio" id="post-type-3" name="post-type" value="" />
                <label for="post-type-3">Image</label>
              </li>
              <li class="cui-add-post-type-item">
                <input type="radio" id="post-type-4" name="post-type" value="" />
                <label for="post-type-4">Audio</label>
              </li>
              <li class="cui-add-post-type-item">
                <input type="radio" id="post-type-5" name="post-type" value="" />
                <label for="post-type-5">Vimeo</label>
              </li>
            </ul>
          </div>
          <div class="form-group">
            <div class="cui-add-post-description">
              <label><strong>Description</strong></label>
              <div class="cui-add-post-edit-section"></div>
            </div>
          </div>
          <div class="form-group">
            <label><strong>Post category</strong></label>
            <select class="cui-add-post-category-select" multiple>
              <option selected>Travel</option>
              <option>Music</option>
              <option selected>Nature</option>
              <option>Cars</option>
              <option selected>Video</option>
            </select>
          </div>
          <div class="form-group">
            <label><strong>File Uploads</strong></label>
            <input type="file" class="dropify" data-height="170" />
          </div>
          <div class="form-group">
            <button class="btn btn-success mr-2" type="button">Save and post</button>
            <button class="btn btn-danger mr-2" type="button">Discard</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- END: Blog/view -->

@endsection