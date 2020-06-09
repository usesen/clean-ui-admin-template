@extends ('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="/cleanui/components/github/common/github.cleanui.css" />

<!-- START: GitHub/discussion -->
<section class="card">
  <div class="card-header">
    <span class="cui-core-title">
      <strong>GitHub Discussion</strong>
    </span>
  </div>
  <div class="card-body">
    <div class="cui-github-discuss">
      <ul class="cui-explore-menu nav nav-tabs mb-3" role="tablist">
        <li class="nav-item">
          <a
            class="nav-link"
            href="javascript: void(0);"
            data-toggle="tab"
            data-target="#home5"
            role="tab"
          >
            <i class="fa fa-home"></i>
            Home
          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link active"
            href="javascript: void(0);"
            data-toggle="tab"
            data-target="#home5"
            role="tab"
          >
            <i class="fa fa-comments"></i>
            Discussion
          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            href="javascript: void(0);"
            data-toggle="tab"
            data-target="#profile5"
            role="tab"
          >
            <i class="fa fa-user" aria-hidden="true"></i>
            Profile
          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            href="javascript: void(0);"
            data-toggle="tab"
            data-target="#messages5"
            role="tab"
          >
            <i class="fa fa-envelope" aria-hidden="true"></i>
            Messages
          </a>
        </li>
        <li class="nav-item">
          <a
            class="nav-link"
            href="javascript: void(0);"
            data-toggle="tab"
            data-target="#settings5"
            role="tab"
          >
            <i class="fa fa-cog" aria-hidden="true"></i>
            Settings
          </a>
        </li>
      </ul>
      <div class="cui-github-discuss-header clearfix">
        <div class="cui-github-discuss-title">
          <h1 class="cui-github-discuss-title-text">Something happened with my browser</h1>
          <div class="cui-github-discuss-open">
            <button class="btn btn-sm btn-primary">New discussion</button>
          </div>
        </div>
        <div class="cui-github-discuss-meta">
          <span class="cui-github-discuss-status btn btn-success btn-sm">
            <i class="fa fa-check-circle-o"></i>
            Open
          </span>
          <div class="cui-github-discuss-meta-text">
            <a href="#" class="cui-github-discuss-owner">Mark Freeman</a>
            opened this discussion on
            <span class="cui-github-discuss-create-date">5 Apr 2017</span> ·
            <span class="cui-github-discuss-comments-count">8 comments</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-10">
          <div class="cui-github-discuss-comments">
            <div class="cui-github-discuss-comment-item">
              <div class="cui-apps-profile-wall-item mb-0 pb-0 clearfix">
                <div class="cui-apps-profile-wall-avatar">
                  <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                    <img
                      src="/cleanui/components/dummy-assets/common/img/avatars/1.jpg"
                      alt="Alternative text to the image"
                    />
                  </a>
                </div>
                <div class="cui-apps-profile-wall-content">
                  <div class="cui-github-discuss-comment-head">
                    <div class="dropdown pull-right">
                      <a
                        class="dropdown-toggle"
                        href="#"
                        data-toggle="dropdown"
                        data-target="#"
                        aria-expanded="false"
                      >
                        <span>Action</span>
                        <span class="caret"></span>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuLink"
                      >
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
                    <strong>Bill Gates</strong> posted:
                    <small class="text-muted ml-1">10 Apr 2016 11:03AM</small>
                  </div>
                  <div class="cui-github-discuss-comment-content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor
                      sit amet, consectetur adipisicing elit. Deleniti nihil quidem consequuntur
                      necessitatibus itaque commodi quasi, est voluptatum.
                    </p>
                    <ul>
                      <li>Led cursus ante dapibus diam. Sed nisi. Nulla quis sem</li>
                      <li>at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.</li>
                      <li>at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.</li>
                      <li>Fusce nec tellus sed augue semper porta. Mauris massa.</li>
                    </ul>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nihil
                      quidem consequuntur necessitatibus itaque commodi quasi, est voluptatum.
                    </p>
                  </div>
                  <div class="cui-github-discuss-comment-bottom">
                    <a href="javascript: void(0);" class="mr-2">
                      <i class="icmn-heart"></i>
                      123 Likes
                    </a>
                    <a href="javascript: void(0);" class="mr-2">
                      <i class="icmn-reply"></i>
                      Reply
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cui-github-discuss-comment-item">
              <div class="cui-apps-profile-wall-item mb-0 pb-0 clearfix">
                <div class="cui-apps-profile-wall-avatar">
                  <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                    <img
                      src="/cleanui/components/dummy-assets/common/img/avatars/3.jpg"
                      alt="Alternative text to the image"
                    />
                  </a>
                </div>
                <div class="cui-apps-profile-wall-content">
                  <div class="cui-github-discuss-comment-head">
                    <div class="dropdown pull-right">
                      <a
                        class="dropdown-toggle"
                        href="#"
                        data-toggle="dropdown"
                        data-target="#"
                        aria-expanded="false"
                      >
                        <span>Action</span>
                        <span class="caret"></span>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuLink"
                      >
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
                    <strong>Ann Gates</strong> posted:
                    <small class="text-muted ml-1">10 Apr 2016 11:03AM</small>
                  </div>
                  <div class="cui-github-discuss-comment-content">
                    <blockquote class="blockquote">
                      <p class="mb-0">
                        Led cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum
                        imperdiet. Duis sagittis ipsum. Praesent mauris. at nibh elementum
                        imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue
                        semper porta. Mauris massa.
                      </p>
                      <footer class="blockquote-footer">
                        Someone famous in
                        <cite title="Source Title">Source Title</cite>
                      </footer>
                    </blockquote>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nihil
                      quidem consequuntur necessitatibus itaque commodi quasi, est voluptatum.
                    </p>
                  </div>
                  <div class="cui-github-discuss-comment-bottom">
                    <a href="javascript: void(0);" class="mr-2">
                      <i class="icmn-heart"></i>
                      582 Likes
                    </a>
                    <a href="javascript: void(0);" class="mr-2">
                      <i class="icmn-reply"></i>
                      Reply
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cui-github-discuss-comment-item">
              <div class="cui-apps-profile-wall-item mb-0 pb-0 clearfix">
                <div class="cui-apps-profile-wall-avatar">
                  <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                    <img
                      src="/cleanui/components/dummy-assets/common/img/avatars/1.jpg"
                      alt="Alternative text to the image"
                    />
                  </a>
                </div>
                <div class="cui-apps-profile-wall-content">
                  <div class="cui-github-discuss-comment-head">
                    <div class="dropdown pull-right">
                      <a
                        class="dropdown-toggle"
                        href="#"
                        data-toggle="dropdown"
                        data-target="#"
                        aria-expanded="false"
                      >
                        <span>Action</span>
                        <span class="caret"></span>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuLink"
                      >
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
                    <strong>Alex May</strong> posted:
                    <small class="text-muted ml-1">on 2 May</small>
                  </div>
                  <div class="cui-github-discuss-comment-content">
                    <img
                      class="cui-apps-profile-wall-message-img"
                      src="/cleanui/components/dummy-assets/common/img/photos/4.jpeg"
                    />
                    <img
                      class="cui-apps-profile-wall-message-img"
                      src="/cleanui/components/dummy-assets/common/img/photos/3.jpeg"
                    />
                    <img
                      class="cui-apps-profile-wall-message-img"
                      src="/cleanui/components/dummy-assets/common/img/photos/2.jpeg"
                    />
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      <br />
                      Ipsum is simply dummy lorem
                    </p>
                  </div>
                  <div class="cui-github-discuss-comment-bottom">
                    <a href="javascript: void(0);" class="mr-2">
                      <i class="icmn-heart"></i>
                      376 Likes
                    </a>
                    <a href="javascript: void(0);" class="mr-2">
                      <i class="icmn-reply"></i>
                      Reply
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cui-github-discuss-comment-item">
              <div class="cui-apps-profile-wall-item mb-0 pb-0 clearfix">
                <div class="cui-apps-profile-wall-avatar">
                  <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                    <img
                      src="/cleanui/components/dummy-assets/common/img/avatars/4.jpg"
                      alt="Alternative text to the image"
                    />
                  </a>
                </div>
                <div class="cui-apps-profile-wall-content">
                  <div class="cui-github-discuss-comment-head">
                    <div class="dropdown pull-right">
                      <a
                        class="dropdown-toggle"
                        href="#"
                        data-toggle="dropdown"
                        data-target="#"
                        aria-expanded="false"
                      >
                        <span>Action</span>
                        <span class="caret"></span>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuLink"
                      >
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
                    <strong>John Luther</strong> posted:
                    <small class="text-muted ml-1">on 10 May</small>
                  </div>
                  <div class="cui-github-discuss-comment-content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem architecto
                      cupiditate quam perferendis tenetur, ipsum dolores quia, commodi corporis
                      soluta delectus eligendi nam itaque totam maiores fuga?
                    </p>
                  </div>
                  <div class="cui-github-discuss-comment-bottom">
                    <a href="javascript: void(0);" class="mr-2">
                      <i class="icmn-heart"></i>
                      983 Likes
                    </a>
                    <a href="javascript: void(0);" class="mr-2">
                      <i class="icmn-reply"></i>
                      Reply
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cui-github-discuss-comment-item">
              <div class="cui-apps-profile-wall-item mb-0 pb-0 clearfix">
                <div class="cui-apps-profile-wall-avatar">
                  <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                    <img
                      src="/cleanui/components/dummy-assets/common/img/avatars/2.jpg"
                      alt="Alternative text to the image"
                    />
                  </a>
                </div>
                <div class="cui-apps-profile-wall-content">
                  <div class="cui-github-discuss-comment-head">
                    <div class="dropdown pull-right">
                      <a
                        class="dropdown-toggle"
                        href="#"
                        data-toggle="dropdown"
                        data-target="#"
                        aria-expanded="false"
                      >
                        <span>Action</span>
                        <span class="caret"></span>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuLink"
                      >
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
                    <strong>Jennifier Neal</strong> posted:
                    <small class="text-muted ml-1">on 15 May</small>
                  </div>
                  <div class="cui-github-discuss-comment-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti nihil quidem
                    consequuntur necessitatibus itaque commodi quasi, est voluptatum.
                  </div>
                  <div class="cui-github-discuss-comment-bottom">
                    <a href="javascript: void(0);" class="mr-2">
                      <i class="icmn-heart"></i>
                      10 Likes
                    </a>
                    <a href="javascript: void(0);" class="mr-2">
                      <i class="icmn-reply"></i>
                      Reply
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cui-github-discuss-comment-item">
              <div class="cui-apps-profile-wall-item mb-0 pb-0 clearfix">
                <div class="cui-apps-profile-wall-avatar">
                  <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                    <img
                      src="/cleanui/components/dummy-assets/common/img/avatars/5.jpg"
                      alt="Alternative text to the image"
                    />
                  </a>
                </div>
                <div class="cui-apps-profile-wall-content">
                  <div class="cui-github-discuss-comment-head">
                    <div class="dropdown pull-right">
                      <a
                        class="dropdown-toggle"
                        href="#"
                        data-toggle="dropdown"
                        data-target="#"
                        aria-expanded="false"
                      >
                        <span>Action</span>
                        <span class="caret"></span>
                      </a>
                      <div
                        class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuLink"
                      >
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
                    <strong>Trinity Parson</strong> posted:
                    <small class="text-muted ml-1">on 2 June</small>
                  </div>
                  <div class="cui-github-discuss-comment-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem architecto
                    cupiditate quam perferendis tenetur, ipsum dolores quia, commodi corporis soluta
                    delectus eligendi nam itaque totam maiores fuga?
                  </div>
                  <div class="cui-github-discuss-comment-bottom">
                    <a href="javascript: void(0);" class="mr-2">
                      <i class="icmn-heart"></i>
                      18 Likes
                    </a>
                    <a href="javascript: void(0);" class="mr-2">
                      <i class="icmn-reply"></i>
                      Reply
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cui-github-discuss-add-comment">
            <div class="cui-apps-profile-wall-item mb-0 pb-0 clearfix">
              <div class="cui-apps-profile-wall-avatar">
                <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                  <img
                    src="/cleanui/components/dummy-assets/common/img/avatars/1.jpg"
                    alt="Alternative text to the image"
                  />
                </a>
              </div>
              <div class="cui-apps-profile-wall-content">
                <div
                  class="cui-github-discuss-comment-head cui-github-discuss-comment-head-empty"
                ></div>
                <div class="cui-github-discuss-comment-content">
                  <div class="cui-github-discuss-comment-add-field"></div>
                </div>
                <div class="cui-github-discuss-comment-bottom">
                  <button class="btn btn-sm btn-success">Comment</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2">
          <div class="cui-github-discuss-sidebar">
            <div class="cui-github-discuss-sidebar-item">
              <div class="cui-github-discuss-sidebar-head">Assignees</div>
              <div class="cui-github-discuss-sidebar-item-content">
                No one assigned
              </div>
            </div>
            <div class="cui-github-discuss-sidebar-item">
              <div class="cui-github-discuss-sidebar-head">Labels</div>
              <div class="cui-github-discuss-sidebar-item-content">
                None yet
              </div>
            </div>
            <div class="cui-github-discuss-sidebar-item">
              <div class="cui-github-discuss-sidebar-head">Projects</div>
              <div class="cui-github-discuss-sidebar-item-content">
                None yet
              </div>
            </div>
            <div class="cui-github-discuss-sidebar-item">
              <div class="cui-github-discuss-sidebar-head">Milenstone</div>
              <div class="cui-github-discuss-sidebar-item-content">
                No milestone
              </div>
            </div>
            <div class="cui-github-discuss-sidebar-item">
              <div class="cui-github-discuss-sidebar-head">Notifications</div>
              <div class="cui-github-discuss-sidebar-item-content">
                You’re ignoring this thread.
              </div>
            </div>
            <div class="cui-github-discuss-sidebar-item">
              <div class="cui-github-discuss-sidebar-head">Participants</div>
              <div class="cui-github-discuss-sidebar-item-content">
                <ul class="cui-github-discuss-participants-list">
                  <li class="cui-github-discuss-participants-item">
                    <a href="#" class="cui-github-discuss-participants-link">
                      <img
                        src="/cleanui/components/dummy-assets/common/img/avatars/1.jpg"
                        alt="Some avatar"
                        class="cui-github-discuss-participants-img"
                      />
                    </a>
                  </li>
                  <li class="cui-github-discuss-participants-item">
                    <a href="" class="cui-github-discuss-participants-link">
                      <img
                        src="/cleanui/components/dummy-assets/common/img/avatars/2.jpg"
                        alt="Some avatar"
                        class="cui-github-discuss-participants-img"
                      />
                    </a>
                  </li>
                  <li class="cui-github-discuss-participants-item">
                    <a href="#" class="cui-github-discuss-participants-link">
                      <img
                        src="/cleanui/components/dummy-assets/common/img/avatars/3.jpg"
                        alt="Some avatar"
                        class="cui-github-discuss-participants-img"
                      />
                    </a>
                  </li>
                  <li class="cui-github-discuss-participants-item">
                    <a href="#" class="cui-github-discuss-participants-link">
                      <img
                        src="/cleanui/components/dummy-assets/common/img/avatars/4.jpg"
                        alt="Some avatar"
                        class="cui-github-discuss-participants-img"
                      />
                    </a>
                  </li>
                  <li class="cui-github-discuss-participants-item">
                    <a href="#" class="cui-github-discuss-participants-link">
                      <img
                        src="/cleanui/components/dummy-assets/common/img/avatars/5.jpg"
                        alt="Some avatar"
                        class="cui-github-discuss-participants-img"
                      />
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: Github/discussion -->

@endsection