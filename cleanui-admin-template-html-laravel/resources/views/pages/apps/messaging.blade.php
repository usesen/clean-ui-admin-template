@extends ('layouts.app')

@section('content')
<!-- START: apps/messaging -->
<section class="card cui-utils-card-with-sidebar cui-utils-card-with-sidebar-large">
  <div class="cui-utils-card-sidebar">
    <div class="cui-apps-messaging-header">
      <input class="form-control cui-apps-messaging-header-input" placeholder="Search..." />
      <i class="icmn-search"></i>
      <button></button>
    </div>
    <div class="cui-apps-messaging-list">
      <div class="cui-apps-messaging-tab">
        <div class="cui-apps-messaging-tab-avatar">
          <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
            <img
              src="/cleanui/components/dummy-assets/common/img/avatars/1.jpg"
              alt="Alternative text to the image"
            />
          </a>
        </div>
        <div class="cui-apps-messaging-tab-content">
          <small class="cui-apps-messaging-tab-time">8:34PM</small>
          <div class="cui-apps-messaging-tab-name">Chris Obama</div>
          <div class="cui-apps-messaging-tab-text">
            Hello! Where you are now? I want to talk. Hello! Where you are now? I want to talk
          </div>
        </div>
      </div>
      <div class="cui-apps-messaging-tab cui-apps-messaging-tab-selected">
        <div class="cui-apps-messaging-tab-avatar">
          <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
            <img
              src="/cleanui/components/dummy-assets/common/img/avatars/2.jpg"
              alt="Alternative text to the image"
            />
          </a>
        </div>
        <div class="cui-apps-messaging-tab-content">
          <small class="cui-apps-messaging-tab-time">8:34PM</small>
          <div class="cui-apps-messaging-tab-name">David Scott</div>
          <div class="cui-apps-messaging-tab-text">
            Hello! Where you are now? I want to talk. Hello! Where you are now? I want to talk
          </div>
        </div>
      </div>
      <div class="cui-apps-messaging-tab">
        <div class="cui-apps-messaging-tab-avatar">
          <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
            <img
              src="/cleanui/components/dummy-assets/common/img/avatars/5.jpg"
              alt="Alternative text to the image"
            />
          </a>
        </div>
        <div class="cui-apps-messaging-tab-content">
          <small class="cui-apps-messaging-tab-time">8:34PM</small>
          <div class="cui-apps-messaging-tab-name">Barak Obama</div>
          <div class="cui-apps-messaging-tab-text">
            Hello! Where you are now? I want to talk. Hello! Where you are now? I want to talk
          </div>
        </div>
      </div>
      <div class="cui-apps-messaging-tab">
        <div class="cui-apps-messaging-tab-avatar">
          <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
            <img
              src="/cleanui/components/dummy-assets/common/img/avatars/4.jpg"
              alt="Alternative text to the image"
            />
          </a>
        </div>
        <div class="cui-apps-messaging-tab-content">
          <small class="cui-apps-messaging-tab-time">8:34PM</small>
          <div class="cui-apps-messaging-tab-name">Nick Cave</div>
          <div class="cui-apps-messaging-tab-text">
            Hello! Where you are now? I want to talk. Hello! Where you are now? I want to talk
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card-header">
    <div class="pull-right">
      <div class="dropdown mt-2 d-inline-block">
        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <i class="icmn-database mr-2"></i>
          <span class="hidden-lg-down">Actions</span>
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
    <h4 class="mt-1 mb-1 text-black">
      <strong>Messaging App</strong>
    </h4>
  </div>
  <div class="card-body">
    <div class="cui-apps-messaging">
      <div class="height-700 custom-scroll cui-utils-scrollable">
        <div class="cui-apps-chat-block">
          <div class="cui-apps-chat-block-item clearfix">
            <div class="cui-apps-chat-block-avatar">
              <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                <img
                  src="/cleanui/components/dummy-assets/common/img/avatars/3.jpg"
                  alt="Alternative text to the image"
                />
              </a>
            </div>
            <div class="cui-apps-chat-block-content">
              <strong>David Scott</strong>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum is simply dummy text of the printing and typesetting industry
              </p>
            </div>
          </div>
          <div class="cui-apps-chat-block-item clearfix">
            <div class="cui-apps-chat-block-avatar">
              <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                <img
                  src="/cleanui/components/dummy-assets/common/img/avatars/3.jpg"
                  alt="Alternative text to the image"
                />
              </a>
            </div>
            <div class="cui-apps-chat-block-content">
              <strong>Chris Smith</strong>
              <p>Lorem Ipsum is simply dummy text of the printing</p>
              <img
                class="cui-apps-profile-wall-message-img"
                src="/cleanui/components/dummy-assets/common/img/photos/4.jpeg"
                alt=""
              />
              <img
                class="cui-apps-profile-wall-message-img"
                src="/cleanui/components/dummy-assets/common/img/photos/3.jpeg"
                alt=""
              />
              <img
                class="cui-apps-profile-wall-message-img"
                src="/cleanui/components/dummy-assets/common/img/photos/2.jpeg"
                alt=""
              />
            </div>
          </div>
          <div class="cui-apps-chat-block-item clearfix">
            <div class="cui-apps-chat-block-avatar">
              <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                <img
                  src="/cleanui/components/dummy-assets/common/img/avatars/4.jpg"
                  alt="Alternative text to the image"
                />
              </a>
            </div>
            <div class="cui-apps-chat-block-content">
              <strong>Donald Trump</strong>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum is simply dummy
              </p>
              <div class="cui-apps-profile-wall-media-object">
                [VIDEOPLAYER]
              </div>
            </div>
          </div>
          <div class="cui-apps-chat-block-item clearfix">
            <div class="cui-apps-chat-block-avatar">
              <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                <img
                  src="/cleanui/components/dummy-assets/common/img/avatars/3.jpg"
                  alt="Alternative text to the image"
                />
              </a>
            </div>
            <div class="cui-apps-chat-block-content">
              <strong>David Scott</strong>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum is simply dummy text of the printing and typesetting industry
              </p>
              <div class="cui-apps-profile-wall-media-object">
                [AUDIOPLAYER]
              </div>
            </div>
          </div>
          <div class="cui-apps-chat-block-item cui-apps-chat-block-item-right clearfix">
            <div class="cui-apps-chat-block-avatar">
              <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                <img
                  src="/cleanui/components/dummy-assets/common/img/avatars/4.jpg"
                  alt="Alternative text to the image"
                />
              </a>
            </div>
            <div class="cui-apps-chat-block-content">
              <strong>Donald Trump</strong>
              <p>Ok. Thanks!</p>
            </div>
          </div>
          <div class="cui-apps-chat-block-item cui-apps-chat-block-item-right clearfix">
            <div class="cui-apps-chat-block-avatar">
              <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                <img
                  src="/cleanui/components/dummy-assets/common/img/avatars/4.jpg"
                  alt="Alternative text to the image"
                />
              </a>
            </div>
            <div class="cui-apps-chat-block-content">
              <strong>Donald Trump</strong>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum is simply dummy
              </p>
            </div>
          </div>
          <div class="cui-apps-chat-block-item clearfix">
            <div class="cui-apps-chat-block-avatar">
              <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                <img
                  src="/cleanui/components/dummy-assets/common/img/avatars/3.jpg"
                  alt="Alternative text to the image"
                />
              </a>
            </div>
            <div class="cui-apps-chat-block-content">
              <strong>David Scott</strong>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum is simply dummy text of the printing and typesetting industry
              </p>
            </div>
          </div>
          <div class="cui-apps-chat-block-item cui-apps-chat-block-item-right clearfix">
            <div class="cui-apps-chat-block-avatar">
              <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                <img
                  src="/cleanui/components/dummy-assets/common/img/avatars/4.jpg"
                  alt="Alternative text to the image"
                />
              </a>
            </div>
            <div class="cui-apps-chat-block-content">
              <strong>Donald Trump</strong>
              <p>Ok. Thanks!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group mt-4 mb-0">
        <textarea
          class="form-control adjustable-textarea"
          placeholder="Type and press enter"
        ></textarea>
        <div class="mt-3">
          <button class="btn btn-primary width-200">
            <i class="fa fa-send mr-2"></i>
            Send
          </button>
          <button class="btn btn-link">
            Attach File
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: cui-apps/messaging -->

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

      ///////////////////////////////////////////////////////////
      // CUSTOM SCROLL
      if (!/Mobi/.test(navigator.userAgent) && jQuery().jScrollPane) {
        $('.custom-scroll').each(function() {
          $(this).jScrollPane({
            autoReinitialise: true,
            autoReinitialiseDelay: 100,
          })
          var api = $(this).data('jsp'),
            throttleTimeout
          $(window).on('resize', function() {
            if (!throttleTimeout) {
              throttleTimeout = setTimeout(function() {
                api.reinitialise()
                throttleTimeout = null
              }, 50)
            }
          })
        })
      }

      ///////////////////////////////////////////////////////////
      // ADJUSTABLE TEXTAREA
      autosize($('.adjustable-textarea'))
    })
  })(jQuery)
</script>
<!-- END: Page Scripts -->

@endsection