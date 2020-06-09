@extends ('layouts.app')

@section('content')
<!-- START: apps/mail -->
<div class="card cui-utils-card-with-sidebar cui-utils-card-with-sidebar-large">
  <div class="cui-utils-card-sidebar">
    <div class="cui-apps-messaging-header">
      <input class="form-control cui-apps-messaging-header-input" placeholder="Search..." />
      <i class="icmn-search"></i>
      <button></button>
    </div>
    <div class="cui-apps-messaging-list cui-apps-messaging-list-no-avatar">
      <div class="cui-apps-messaging-tab">
        <div class="cui-apps-messaging-tab-content">
          <div class="mb-1">
            <strong>Inbox (7)</strong>
          </div>
          <small class="cui-apps-messaging-tab-time">8:34PM</small>
          <div class="cui-apps-messaging-tab-name">Barak Obama</div>
          <div class="cui-apps-messaging-tab-text">
            Hello! Where you are now? I want to talk. Hello! Where you are now? I want to talk
          </div>
        </div>
      </div>
      <div class="cui-apps-messaging-tab cui-apps-messaging-tab-selected">
        <div class="cui-apps-messaging-tab-content">
          <div class="mb-1">
            <strong>Sent Mail</strong>
          </div>
          <small class="cui-apps-messaging-tab-time">8:34PM</small>
          <div class="cui-apps-messaging-tab-name">Barak Obama</div>
          <div class="cui-apps-messaging-tab-text">
            Hello! Where you are now? I want to talk. Hello! Where you are now? I want to talk
          </div>
        </div>
      </div>
      <div class="cui-apps-messaging-tab">
        <div class="cui-apps-messaging-tab-content">
          <div class="mb-1">
            <strong>Drafts (1)</strong>
          </div>
          <small class="cui-apps-messaging-tab-time">8:34PM</small>
          <div class="cui-apps-messaging-tab-name">Barak Obama</div>
          <div class="cui-apps-messaging-tab-text">
            Hello! Where you are now? I want to talk. Hello! Where you are now? I want to talk
          </div>
        </div>
      </div>
      <div class="cui-apps-messaging-tab">
        <div class="cui-apps-messaging-tab-content">
          <div class="mb-1">
            <strong>Spam (17)</strong>
          </div>
          <small class="cui-apps-messaging-tab-time">8:34PM</small>
          <div class="cui-apps-messaging-tab-name">Barak Obama</div>
          <div class="cui-apps-messaging-tab-text">
            Hello! Where you are now? I want to talk. Hello! Where you are now? I want to talk
          </div>
        </div>
      </div>
      <div class="cui-apps-messaging-tab">
        <div class="cui-apps-messaging-tab-content">
          <div class="mb-1">
            <strong>Deleted Messages</strong>
          </div>
          <small class="cui-apps-messaging-tab-time">8:34PM</small>
          <div class="cui-apps-messaging-tab-name">Barak Obama</div>
          <div class="cui-apps-messaging-tab-text">
            Hello! Where you are now? I want to talk. Hello! Where you are now? I want to talk
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card-header">
    <a
      href="javascript: void(0);"
      class="btn btn-sm btn-primary pull-right"
      data-toggle="modal"
      data-target="#compose"
      >Compose Mail</a
    >
    <div class="nav-tabs-horizontal cui-apps-messaging-nav-tabs pull-left">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a
            class="nav-link"
            href="javascript: void(0);"
            data-toggle="tab"
            data-target="#profile2"
            role="tab"
            aria-expanded="false"
          >
            <i class="icmn-home"></i>
            <span class="hidden-md-down">Primary</span>
          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link active"
            href="javascript: void(0);"
            data-toggle="tab"
            data-target="#messages2"
            role="tab"
            aria-expanded="true"
          >
            <i class="icmn-users"></i>
            <span class="hidden-md-down">Social</span>
          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            href="javascript: void(0);"
            data-toggle="tab"
            data-target="#settings2"
            role="tab"
          >
            <i class="icmn-price-tags"></i>
            <span class="hidden-md-down">Promotion</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="card-body">
    <table class="table table-hover nowrap" id="example1">
      <thead>
        <tr>
          <th class="no-sort width-10"></th>
          <th class="no-sort width-10"></th>
          <th class="width-150">From</th>
          <th>Message</th>
          <th class="no-sort width-10"></th>
          <th class="no-sort width-50"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-warning"></i></td>
          <td>GoDaddy</td>
          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry</td>
          <td><i class="icmn-attachment text-default"></i></td>
          <td>2:54AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-default"></i></td>
          <td>Hetzner</td>
          <td>Ipsum is simply dummy text of the printing and typesetting</td>
          <td><i class="icmn-attachment text-default"></i></td>
          <td>6:39AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-default"></i></td>
          <td>mail@google.com</td>
          <td>Lorem Ipsum is simply dummy text of the printing</td>
          <td></td>
          <td>1:48AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-default"></i></td>
          <td>Google.com</td>
          <td>Is simply dummy text of the printing and typesetting industry</td>
          <td><i class="icmn-attachment text-default"></i></td>
          <td>8:38AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-warning"></i></td>
          <td>GoDaddy</td>
          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry</td>
          <td><i class="icmn-attachment text-default"></i></td>
          <td>2:54AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-default"></i></td>
          <td>Hetzner</td>
          <td>Ipsum is simply dummy text of the printing and typesetting</td>
          <td><i class="icmn-attachment text-default"></i></td>
          <td>6:39AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-default"></i></td>
          <td>mail@google.com</td>
          <td>Lorem Ipsum is simply dummy text of the printing</td>
          <td></td>
          <td>1:48AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-default"></i></td>
          <td>Google.com</td>
          <td>Is simply dummy text of the printing and typesetting industry</td>
          <td><i class="icmn-attachment text-default"></i></td>
          <td>8:38AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-warning"></i></td>
          <td>GoDaddy</td>
          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry</td>
          <td><i class="icmn-attachment text-default"></i></td>
          <td>2:54AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-default"></i></td>
          <td>Hetzner</td>
          <td>Ipsum is simply dummy text of the printing and typesetting</td>
          <td><i class="icmn-attachment text-default"></i></td>
          <td>6:39AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-default"></i></td>
          <td>mail@google.com</td>
          <td>Lorem Ipsum is simply dummy text of the printing</td>
          <td></td>
          <td>1:48AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-default"></i></td>
          <td>Google.com</td>
          <td>Is simply dummy text of the printing and typesetting industry</td>
          <td><i class="icmn-attachment text-default"></i></td>
          <td>8:38AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-warning"></i></td>
          <td>GoDaddy</td>
          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry</td>
          <td><i class="icmn-attachment text-default"></i></td>
          <td>2:54AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-default"></i></td>
          <td>Hetzner</td>
          <td>Ipsum is simply dummy text of the printing and typesetting</td>
          <td><i class="icmn-attachment text-default"></i></td>
          <td>6:39AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-default"></i></td>
          <td>mail@google.com</td>
          <td>Lorem Ipsum is simply dummy text of the printing</td>
          <td></td>
          <td>1:48AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-default"></i></td>
          <td>Google.com</td>
          <td>Is simply dummy text of the printing and typesetting industry</td>
          <td><i class="icmn-attachment text-default"></i></td>
          <td>8:38AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-default"></i></td>
          <td>Google.com</td>
          <td>Is simply dummy text of the printing and typesetting industry</td>
          <td><i class="icmn-attachment text-default"></i></td>
          <td>8:38AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-warning"></i></td>
          <td>GoDaddy</td>
          <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry</td>
          <td><i class="icmn-attachment text-default"></i></td>
          <td>2:54AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-default"></i></td>
          <td>Hetzner</td>
          <td>Ipsum is simply dummy text of the printing and typesetting</td>
          <td><i class="icmn-attachment text-default"></i></td>
          <td>6:39AM</td>
        </tr>
        <tr>
          <td class="text-center"><input type="checkbox" /></td>
          <td><i class="icmn-star-full text-default"></i></td>
          <td>mail@google.com</td>
          <td>Lorem Ipsum is simply dummy text of the printing</td>
          <td></td>
          <td>1:48AM</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th></th>
          <th></th>
          <th>From</th>
          <th>Message</th>
          <th></th>
          <th></th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<!-- START: compose mail modal -->
<div
  class="modal fade modal-size-large"
  id="compose"
  tabindex="-1"
  role="dialog"
  aria-hidden="true"
>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4>Compose Message</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="To" />
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Subject" />
        </div>
        <div class="summernote"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn width-200 btn-primary">
          <i class="fa fa-send mr-2"></i> Send
        </button>
        <button type="button" class="btn btn-link">Attachment</button>
      </div>
    </div>
  </div>
</div>
<!-- END: compose mail modal -->
<!-- END: apps/mail -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      ///////////////////////////////////////////////////
      // SIDEBAR CURRENT STATE
      $('.cui-apps-messaging-tab').on('click', function() {
        $('.cui-apps-messaging-tab').removeClass('cui-apps-messaging-tab-selected')
        $(this).addClass('cui-apps-messaging-tab-selected')
      })

      ///////////////////////////////////////////////////
      // TEXT EDITOR
      $(function() {
        $('.summernote').summernote({
          height: 200,
        })
      })

      ///////////////////////////////////////////////////
      // DATATABLES
      $('#example1').DataTable({
        responsive: true,
        order: [],
        columnDefs: [
          {
            targets: 'no-sort',
            orderable: false,
          },
        ],
        lengthMenu: [[20, 50, 100, -1], [20, 50, 100, 'All']],
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection