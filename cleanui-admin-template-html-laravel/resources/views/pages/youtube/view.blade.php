@extends ('layouts.app')

@section('content')
<!-- START: youtube/view -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>YouTube View</strong>
    </span>
  </div>
  <div class="card-body">
    <div class="cui-video-page clearfix">
      <div class="cui-video-page-main-content">
        <div class="cui-video-page-content">
          <img src="/cleanui/components/dummy-assets/common/img/photos/2.jpeg" alt="" />
        </div>
        <div class="cui-video-page-descr">
          <div class="cui-video-page-descr-wrapper card">
            <div class="cui-video-page-published mb-2">
              <strong
                >Published on <span class="cui-video-page-published-time">Jan 9, 2017</span></strong
              >
              <div class="dropdown pull-right">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  data-toggle="dropdown"
                  data-target="#"
                  aria-expanded="false"
                >
                  <span>Action</span>
                  <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="dropdown-icon icmn-pencil"></i> Edit Post</a
                  >
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="dropdown-icon icmn-bin"></i> Delete Post</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="javascript:void(0)"
                    ><i class="dropdown-icon fa fa-recycle"></i> Mark as Spam</a
                  >
                </div>
              </div>
            </div>
            <p class="cui-video-page-descr-text mb-0">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam dolorum ut quia itaque
              voluptate officiis, dolorem qui repellat numquam, nam natus, mollitia explicabo minus
              minima dicta quaerat molestias ab. Tempora nobis nostrum voluptatem voluptatibus
              libero sint nulla labore aliquid enim et, deleniti distinctio amet aut dolores
              perferendis eum totam voluptatum.
            </p>
          </div>
        </div>
        <div class="cui-video-page-comments">
          <div class="cui-video-page-comments-wrapper card">
            <div class="cui-video-page-add-comment">
              <div class="cui-video-page-comment-user">
                <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                  <img
                    alt="Alternative text to the image"
                    src="/cleanui/components/dummy-assets/common/img/avatars/5.jpg"
                  />
                </a>
              </div>
              <div class="cui-video-page-comment-form">
                <textarea
                  class="cui-video-page-comment-input form-control adjustable-textarea"
                  rows="3"
                  placeholder="Add a comment..."
                ></textarea>
              </div>
              <div class="cui-video-page-comment-send">
                <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                  <i class="fa fa-send mr-2"></i>
                  Send
                </a>
              </div>
            </div>
            <div class="cui-video-page-comments-content">
              <div class="cui-apps-chat-block-item clearfix">
                <div class="cui-apps-chat-block-avatar">
                  <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                    <img
                      alt="Alternative text to the image"
                      src="/cleanui/components/dummy-assets/common/img/avatars/1.jpg"
                    />
                  </a>
                </div>
                <div class="cui-apps-chat-block-content">
                  <strong
                    >David Scott
                    <span class="cui-video-page-comment-time text-muted">11 minutes ago</span>
                  </strong>
                  <p class="mb-0">
                    Thank you so much I've been having a horrible time recently and this video
                    really helped me get by.
                  </p>
                  <div class="cui-video-page-comment-like">
                    <a class="mr-2" href="javascript: void(0);">
                      <i class="icmn-heart"></i>
                      15 Likes
                    </a>
                  </div>
                </div>
              </div>
              <div class="cui-apps-chat-block-item clearfix">
                <div class="cui-apps-chat-block-avatar">
                  <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                    <img
                      alt="Alternative text to the image"
                      src="/cleanui/components/dummy-assets/common/img/avatars/2.jpg"
                    />
                  </a>
                </div>
                <div class="cui-apps-chat-block-content">
                  <strong
                    >Mia Chapman
                    <span class="cui-video-page-comment-time text-muted">1 day ago</span>
                  </strong>
                  <p class="mb-0">My love! I just look at it, I will feel happy!</p>
                  <div class="cui-video-page-comment-like">
                    <a class="mr-2" href="javascript: void(0);">
                      <i class="icmn-heart"></i>
                      16 Likes
                    </a>
                  </div>
                </div>
              </div>
              <div class="cui-apps-chat-block-item clearfix">
                <div class="cui-apps-chat-block-avatar">
                  <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                    <img
                      alt="Alternative text to the image"
                      src="/cleanui/components/dummy-assets/common/img/avatars/3.jpg"
                    />
                  </a>
                </div>
                <div class="cui-apps-chat-block-content">
                  <strong
                    >Sofia Cramer
                    <span class="cui-video-page-comment-time text-muted">6 months ago</span>
                  </strong>
                  <p class="mb-0">Wow, Youtube's new onion-dispensing feature is amazing.</p>
                  <div class="cui-video-page-comment-like">
                    <a class="mr-2" href="javascript: void(0);">
                      <i class="icmn-heart"></i>
                      18 Likes
                    </a>
                  </div>
                </div>
              </div>
              <div class="cui-apps-chat-block-item clearfix">
                <div class="cui-apps-chat-block-avatar">
                  <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                    <img
                      alt="Alternative text to the image"
                      src="/cleanui/components/dummy-assets/common/img/avatars/4.jpg"
                    />
                  </a>
                </div>
                <div class="cui-apps-chat-block-content">
                  <strong
                    >Edward Foster
                    <span class="cui-video-page-comment-time text-muted">6 months ago</span>
                  </strong>
                  <p class="mb-0">
                    This is what I wanna do when I grow up. I don't want to sit on a computer screen
                    and do work. I want to have a real adventure and explore the world. I want to
                    Live!
                  </p>
                  <div class="cui-video-page-comment-like">
                    <a class="mr-2" href="javascript: void(0);">
                      <i class="icmn-heart"></i>
                      29 Likes
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cui-video-page-sidebar card">
        <div class="cui-video-page-sidebar-head">
          <strong class="cui-video-page-sidebar-title">Up next</strong>
          <div class="cui-video-page-autoplay pull-right">
            <input
              class="cui-video-page-autoplay-checkbox"
              type="checkbox"
              name="autoplay"
              id="autoplay-video"
            />
            <label class="cui-video-page-autoplay-text" for="autoplay-video">Autoplay</label>
          </div>
        </div>
        <ul class="cui-video-page-watch-next">
          <li class="cui-video-page-next-item clearfix">
            <a href="#" class="cui-video-page-next-item-link">
              <div class="cui-video-page-item-thumb">
                <img
                  class="cui-video-page-item-thumb-img"
                  src="http://cleanhtmlplayer.com/cdn/video/media/2.jpg"
                  alt="video thumb"
                />
              </div>
              <div class="cui-video-page-item-descr">
                <span class="cui-video-page-item-name">Gym training - best exercises</span>
                <span class="cui-video-page-item-author">Emily Dodson</span>
                <span class="cui-video-page-item-status">
                  <span class="cui-video-page-item-live badge badge-danger">Live</span>
                </span>
              </div>
            </a>
          </li>

          <li class="cui-video-page-next-item clearfix">
            <a href="#" class="cui-video-page-next-item-link">
              <div class="cui-video-page-item-thumb">
                <img
                  class="cui-video-page-item-thumb-img"
                  src="http://cleanhtmlplayer.com/cdn/video/media/1.jpg"
                  alt="video thumb"
                />
              </div>
              <div class="cui-video-page-item-descr">
                <span class="cui-video-page-item-name">Stay in Malibu</span>
                <span class="cui-video-page-item-author">Samuel Lewin</span>
                <span class="cui-video-page-item-views text-muted">
                  <span class="cui-video-page-item-count">
                    682,079
                  </span>
                  views
                </span>
              </div>
            </a>
          </li>
          <li class="cui-video-page-next-item clearfix">
            <a href="#" class="cui-video-page-next-item-link">
              <div class="cui-video-page-item-thumb">
                <img
                  class="cui-video-page-item-thumb-img"
                  src="/cleanui/components/dummy-assets/common/img/photos/1.jpeg"
                  alt="video thumb"
                />
              </div>
              <div class="cui-video-page-item-descr">
                <span class="cui-video-page-item-name">The climb into the mountains</span>
                <span class="cui-video-page-item-author">Kayla Mercer</span>
                <span class="cui-video-page-item-views text-muted">
                  <span class="cui-video-page-item-count">
                    24,921
                  </span>
                  views
                </span>
              </div>
            </a>
          </li>
          <li class="cui-video-page-next-item clearfix">
            <a href="#" class="cui-video-page-next-item-link">
              <div class="cui-video-page-item-thumb">
                <img
                  class="cui-video-page-item-thumb-img"
                  src="/cleanui/components/dummy-assets/common/img/photos/2.jpeg"
                  alt="video thumb"
                />
              </div>
              <div class="cui-video-page-item-descr">
                <span class="cui-video-page-item-name">The art of macro photography</span>
                <span class="cui-video-page-item-author">Jennifer Neal</span>
                <span class="cui-video-page-item-views text-muted">
                  <span class="cui-video-page-item-count">
                    322,234
                  </span>
                  views
                </span>
              </div>
            </a>
          </li>
          <li class="cui-video-page-next-item clearfix">
            <a href="#" class="cui-video-page-next-item-link">
              <div class="cui-video-page-item-thumb">
                <img
                  class="cui-video-page-item-thumb-img"
                  src="/cleanui/components/dummy-assets/common/img/photos/3.jpeg"
                  alt="video thumb"
                />
              </div>
              <div class="cui-video-page-item-descr">
                <span class="cui-video-page-item-name">Downhill</span>
                <span class="cui-video-page-item-author">Kevin Addington</span>
                <span class="cui-video-page-item-views text-muted">
                  <span class="cui-video-page-item-count">
                    864,092
                  </span>
                  views
                </span>
              </div>
            </a>
          </li>
          <li class="cui-video-page-next-item clearfix">
            <a href="#" class="cui-video-page-next-item-link">
              <div class="cui-video-page-item-thumb">
                <img
                  class="cui-video-page-item-thumb-img"
                  src="/cleanui/components/dummy-assets/common/img/photos/4.jpeg"
                  alt="video thumb"
                />
              </div>
              <div class="cui-video-page-item-descr">
                <span class="cui-video-page-item-name">The ascent of Elbrus</span>
                <span class="cui-video-page-item-author">Jason Walter</span>
                <span class="cui-video-page-item-views text-muted">
                  <span class="cui-video-page-item-count">
                    411,011
                  </span>
                  views
                </span>
              </div>
            </a>
          </li>
          <li class="cui-video-page-next-item clearfix">
            <a href="#" class="cui-video-page-next-item-link">
              <div class="cui-video-page-item-thumb">
                <img
                  class="cui-video-page-item-thumb-img"
                  src="/cleanui/components/dummy-assets/common/img/photos/5.jpeg"
                  alt="video thumb"
                />
              </div>
              <div class="cui-video-page-item-descr">
                <span class="cui-video-page-item-name">Trip to the zoo</span>
                <span class="cui-video-page-item-author">Trinity Parson</span>
                <span class="cui-video-page-item-views text-muted">
                  <span class="cui-video-page-item-count">
                    26,013
                  </span>
                  views
                </span>
              </div>
            </a>
          </li>
          <li class="cui-video-page-next-item clearfix">
            <a href="#" class="cui-video-page-next-item-link">
              <div class="cui-video-page-item-thumb">
                <img
                  class="cui-video-page-item-thumb-img"
                  src="/cleanui/components/dummy-assets/common/img/photos/6.jpeg"
                  alt="video thumb"
                />
              </div>
              <div class="cui-video-page-item-descr">
                <span class="cui-video-page-item-name">A shadow in the night</span>
                <span class="cui-video-page-item-author">Isaac Owen</span>
                <span class="cui-video-page-item-views text-muted">
                  <span class="cui-video-page-item-count">
                    65,832
                  </span>
                  views
                </span>
              </div>
            </a>
          </li>
          <li class="cui-video-page-next-item clearfix">
            <a href="#" class="cui-video-page-next-item-link">
              <div class="cui-video-page-item-thumb">
                <img
                  class="cui-video-page-item-thumb-img"
                  src="/cleanui/components/dummy-assets/common/img/photos/3.jpeg"
                  alt="video thumb"
                />
              </div>
              <div class="cui-video-page-item-descr">
                <span class="cui-video-page-item-name">Attractions of our city</span>
                <span class="cui-video-page-item-author">Adrian Mason</span>
                <span class="cui-video-page-item-views text-muted">
                  <span class="cui-video-page-item-count">
                    65,832
                  </span>
                  views
                </span>
              </div>
            </a>
          </li>
          <li class="cui-video-page-next-item clearfix">
            <a href="#" class="cui-video-page-next-item-link">
              <div class="cui-video-page-item-thumb">
                <img
                  class="cui-video-page-item-thumb-img"
                  src="/cleanui/components/dummy-assets/common/img/photos/1.jpeg"
                  alt="video thumb"
                />
              </div>
              <div class="cui-video-page-item-descr">
                <span class="cui-video-page-item-name">Photo shoot cats</span>
                <span class="cui-video-page-item-author">Richard Otis</span>
                <span class="cui-video-page-item-views text-muted">
                  <span class="cui-video-page-item-count">
                    65,832
                  </span>
                  views
                </span>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- END: youtube/view -->

@endsection