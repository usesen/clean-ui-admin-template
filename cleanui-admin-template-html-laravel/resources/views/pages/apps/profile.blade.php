@extends ('layouts.app')

@section('content')
<!-- START: apps/profile -->
<div class="row">
  <div class="col-xl-4">
    <div
      class="card cui-apps-profile-card"
      style="background-image: url(/cleanui/components/dummy-assets/common/img/photos/4.jpeg)"
    >
      <div class="card-body text-center">
        <a class="cui-avatar cui-avatar-border-white cui-avatar-110" href="javascript:void(0);">
          <img
            src="/cleanui/components/dummy-assets/common/img/avatars/1.jpg"
            alt="Alternative text to the image"
          />
        </a>
        <br />
        <br />
        <div class="btn-group btn-group-justified" aria-label="" role="group">
          <div class="btn-group">
            <button type="button" class="btn width-150 swal-btn-success">Follow</button>
          </div>
          <div class="btn-group">
            <button type="button" class="btn width-150 swal-btn-success-2">Add to Friend</button>
          </div>
        </div>
        <br />
        <p class="text-white">
          Last activity: 13 May 2016 7:26PM
        </p>
        <p class="text-white">
          <span class="cui-utils-donut cui-utils-donut-success"></span>
          Online
        </p>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="mb-3 text-black">
          <strong>Actions</strong>
        </h5>
        <div class="btn-group-vertical btn-group-justified">
          <button type="button" class="btn">Send Message</button>
          <button type="button" class="btn">Send File</button>
          <button type="button" class="btn">Access History</button>
          <button type="button" class="btn">Rename User</button>
          <button type="button" class="btn">Ban User</button>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="mb-3 text-black">
          <strong>Skills</strong>
        </h5>
        <div class="mb-1">Management</div>
        <div class="progress mb-3" style="height: 7px;">
          <div
            class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
            role="progressbar"
            aria-valuenow="74"
            aria-valuemin="0"
            aria-valuemax="100"
            style="width: 74%"
          ></div>
        </div>
        <div class="mb-1">Investing</div>
        <div class="progress mb-3" style="height: 7px;">
          <div
            class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
            role="progressbar"
            aria-valuenow="82"
            aria-valuemin="0"
            aria-valuemax="100"
            style="width: 82%"
          ></div>
        </div>
        <div class="mb-1">Programming</div>
        <div class="progress mb-3" style="height: 7px;">
          <div
            class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
            role="progressbar"
            aria-valuenow="67"
            aria-valuemin="0"
            aria-valuemax="100"
            style="width: 67%"
          ></div>
        </div>
        <div class="mb-1">Leading</div>
        <div class="progress mb-3" style="height: 7px;">
          <div
            class="progress-bar progress-bar-striped progress-bar-animated bg-success"
            role="progressbar"
            aria-valuenow="90"
            aria-valuemin="0"
            aria-valuemax="100"
            style="width: 90%"
          ></div>
        </div>
        <div class="mb-1">Learning</div>
        <div class="progress mb-3" style="height: 7px;">
          <div
            class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
            role="progressbar"
            aria-valuenow="27"
            aria-valuemin="0"
            aria-valuemax="100"
            style="width: 27%"
          ></div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="mb-3 text-black">
          <strong>Information</strong>
        </h5>
        <dl class="row">
          <dt class="col-xl-3">Courses End</dt>
          <dd class="col-xl-9">Digital Ocean, Nokia</dd>
          <dt class="col-xl-3">Address</dt>
          <dd class="col-xl-9">New York, US</dd>
          <dt class="col-xl-3">Skills</dt>
          <dd class="col-xl-9">
            <span class="badge badge-default">html</span>
            <span class="badge badge-default">css</span>
            <span class="badge badge-default">design</span>
            <span class="badge badge-default">javascript</span>
          </dd>
          <dt class="col-xl-3">Last companies</dt>
          <dd class="col-xl-9">Microsoft, Soft Mailstorm</dd>
          <dt class="col-xl-3">Personal Information</dt>
          <dd class="col-xl-9">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
            has been the industry's standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has
            survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.
          </dd>
        </dl>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="example-calendar-block"></div>
      </div>
    </div>
  </div>
  <div class="col-xl-8">
    <div class="card">
      <div class="card-body">
        <div class="width-100 text-center pull-right hidden-md-down">
          <h2>154</h2>
          <p class="mb-0">Followers</p>
        </div>
        <div class="width-100 text-center pull-right hidden-md-down">
          <h2>17</h2>
          <p class="mb-0">Posts</p>
        </div>
        <h2>
          <span class="text-black">
            <strong>Artour Scott</strong>
          </span>
          <small class="text-muted">@arteezy</small>
        </h2>
        <p class="mb-1">Founder / CEO</p>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="nav-tabs-horizontal">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                href="javascript: void(0);"
                data-toggle="tab"
                data-target="#posts"
                role="tab"
              >
                <i class="icmn-menu"></i>
                Wall
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="javascript: void(0);"
                data-toggle="tab"
                data-target="#messaging"
                role="tab"
              >
                <i class="icmn-bubbles"></i>
                Messages
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="javascript: void(0);"
                data-toggle="tab"
                data-target="#settings"
                role="tab"
              >
                <i class="icmn-cog"></i>
                Settings
              </a>
            </li>
          </ul>
          <div class="tab-content py-4">
            <div class="tab-pane active" id="posts">
              <div class="py-3">
                <textarea
                  class="form-control adjustable-textarea"
                  placeholder="Type and press enter"
                ></textarea>
                <div class="mt-3">
                  <button class="btn btn-primary width-200">
                    <i class="fa fa-send mr-2"></i>
                    Create Post
                  </button>
                  <button class="btn btn-link">
                    Attach File
                  </button>
                </div>
              </div>
              <hr />
              <div class="cui-apps-profile-wall mt-3">
                <div class="cui-apps-profile-wall-item clearfix">
                  <div class="cui-apps-profile-wall-avatar">
                    <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                      <img
                        src="/cleanui/components/dummy-assets/common/img/avatars/3.jpg"
                        alt="Alternative text to the image"
                      />
                    </a>
                  </div>
                  <div class="cui-apps-profile-wall-content">
                    <div class="mb-3">
                      <div class="dropdown pull-right">
                        <a
                          href=""
                          class="dropdown-toggle"
                          data-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <span>Action</span>
                          <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
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
                      <strong>Donald Trump</strong> posted:
                      <br />
                      <small class="text-muted">Five seconds ago</small>
                    </div>
                    <div>
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
                      <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        <br />
                        Ipsum is simply dummy lorem
                      </p>
                    </div>
                    <div>
                      <a href="javascript: void(0);" class="mr-2">
                        <i class="icmn-heart"></i>
                        26 Likes
                      </a>
                      <a href="javascript: void(0);">
                        <i class="icmn-bubble"></i>
                        17 Comments
                      </a>
                    </div>
                    <div class="cui-apps-profile-wall-comments">
                      <div class="cui-apps-profile-wall-item clearfix">
                        <div class="cui-apps-profile-wall-avatar">
                          <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                            <img
                              src="/cleanui/components/dummy-assets/common/img/avatars/1.jpg"
                              alt="Alternative text to the image"
                            />
                          </a>
                        </div>
                        <div class="cui-apps-profile-wall-content">
                          <div class="mb-3">
                            <div class="dropdown pull-right">
                              <a
                                href=""
                                class="dropdown-toggle"
                                data-toggle="dropdown"
                                aria-expanded="false"
                              >
                                <span>Action</span>
                                <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" role="menu">
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
                            <strong>John Blake</strong> posted:
                            <br />
                            <small class="text-muted">15 minutes ago</small>
                          </div>
                          <div>
                            <p>
                              Lorem Ipsum is simply dummy text of the printing and typesetting
                              industry.
                              <br />
                              Ipsum is simply dummy lorem
                            </p>
                          </div>
                          <div>
                            <a href="javascript: void(0);" class="mr-2">
                              <i class="icmn-heart"></i>
                              65 Likes
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="cui-apps-profile-wall-item clearfix">
                        <div class="cui-apps-profile-wall-avatar">
                          <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                            <img
                              src="/cleanui/components/dummy-assets/common/img/avatars/2.jpg"
                              alt="Alternative text to the image"
                            />
                          </a>
                        </div>
                        <div class="cui-apps-profile-wall-content">
                          <div class="mb-3">
                            <div class="dropdown pull-right">
                              <a
                                href=""
                                class="dropdown-toggle"
                                data-toggle="dropdown"
                                aria-expanded="false"
                              >
                                <span>Action</span>
                                <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" role="menu">
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
                            <strong>Barak Obama</strong> posted:
                            <br />
                            <small class="text-muted">11 minutes ago</small>
                          </div>
                          <div>
                            <p>
                              Lorem Ipsum is simply dummy text of the printing and typesetting
                              industry.
                              <br />
                              Ipsum is simply dummy lorem
                            </p>
                          </div>
                          <div>
                            <a href="javascript: void(0);" class="mr-2">
                              <i class="icmn-heart"></i>
                              26 Likes
                            </a>
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

                <div class="cui-apps-profile-wall-item clearfix">
                  <div class="cui-apps-profile-wall-avatar">
                    <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                      <img
                        src="/cleanui/components/dummy-assets/common/img/avatars/3.jpg"
                        alt="Alternative text to the image"
                      />
                    </a>
                  </div>
                  <div class="cui-apps-profile-wall-content">
                    <div class="mb-3">
                      <div class="dropdown pull-right">
                        <a
                          href=""
                          class="dropdown-toggle"
                          data-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <span>Action</span>
                          <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
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
                      <br />
                      <small class="text-muted">10 May 2016 11:03AM</small>
                    </div>
                    <div>
                      <div class="cui-apps-profile-wall-media-object">
                        [VIDEOPLAYER]
                      </div>
                    </div>
                    <div>
                      <a href="javascript: void(0);" class="mr-2">
                        <i class="icmn-heart"></i>
                        3 Likes
                      </a>
                      <a href="javascript: void(0);">
                        <i class="icmn-bubble"></i>
                        6 Comments
                      </a>
                    </div>
                  </div>
                </div>

                <div class="cui-apps-profile-wall-item clearfix">
                  <div class="cui-apps-profile-wall-avatar">
                    <a class="cui-avatar cui-avatar-50" href="javascript:void(0);">
                      <img
                        src="/cleanui/components/dummy-assets/common/img/avatars/4.jpg"
                        alt="Alternative text to the image"
                      />
                    </a>
                  </div>
                  <div class="cui-apps-profile-wall-content">
                    <div class="mb-3">
                      <div class="dropdown pull-right">
                        <a
                          href=""
                          class="dropdown-toggle"
                          data-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <span>Action</span>
                          <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
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
                      <strong>Chris Scott</strong> posted:
                      <br />
                      <small class="text-muted">10 May 2016 11:03AM</small>
                    </div>
                    <div>
                      <div class="cui-apps-profile-wall-media-object">
                        [AUDIOPLAYER]
                      </div>
                    </div>
                    <div>
                      <a href="javascript: void(0);" class="mr-2">
                        <i class="icmn-heart"></i>
                        7 Likes
                      </a>
                      <a href="javascript: void(0);">
                        <i class="icmn-bubble"></i>
                        11 Comments
                      </a>
                    </div>
                  </div>
                </div>

                <a href="javascript: void(0);" class="btn btn-default btn-block">Load More</a>
              </div>
            </div>
            <div class="tab-pane" id="messaging">
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
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry
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
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      Lorem Ipsum is simply dummy
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
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry
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
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      Lorem Ipsum is simply dummy
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
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry
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
            <div class="tab-pane" id="settings">
              <h5 class="text-black mt-4">
                <strong>Personal Information</strong>
              </h5>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="l0">Username</label>
                    <input type="text" class="form-control" id="l0" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="l1">Email</label>
                    <input type="email" class="form-control" id="l1" />
                  </div>
                </div>
              </div>
              <h5 class="text-black mt-4">
                <strong>Password</strong>
              </h5>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="l3">Password</label>
                    <input type="password" class="form-control" id="l3" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="l4">Password</label>
                    <input type="password" class="form-control" id="l4" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <h5 class="text-black mt-4">
                    <strong>Profile Avatar</strong>
                  </h5>
                  <div class="form-group">
                    <label class="form-control-label" for="l6">File Upload</label>
                    <input type="file" id="l6" />
                  </div>
                </div>
                <div class="col-lg-6">
                  <h5 class="text-black mt-4">
                    <strong>Profile Background</strong>
                  </h5>
                  <div class="form-group">
                    <label class="form-control-label" for="l5">File Upload</label>
                    <input type="file" id="l5" />
                  </div>
                </div>
              </div>
              <div class="form-actions">
                <div class="form-group">
                  <button type="button" class="btn width-200 btn-primary">Submit</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END: apps/profile -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      ///////////////////////////////////////////////////////////
      // ADJUSTABLE TEXTAREA
      autosize($('.adjustable-textarea'))

      ///////////////////////////////////////////////////////////
      // CALENDAR
      $('.example-calendar-block').fullCalendar({
        //aspectRatio: 2,
        height: 450,
        header: {
          left: 'prev, next',
          center: 'title',
          right: 'month, agendaWeek, agendaDay',
        },
        buttonIcons: {
          prev: 'none fa fa-arrow-left',
          next: 'none fa fa-arrow-right',
          prevYear: 'none fa fa-arrow-left',
          nextYear: 'none fa fa-arrow-right',
        },
        Actionable: true,
        eventLimit: true, // allow "more" link when too many events
        viewRender: function(view, element) {
          if (!/Mobi/.test(navigator.userAgent) && jQuery().jScrollPane) {
            $('.fc-scroller').jScrollPane({
              autoReinitialise: true,
              autoReinitialiseDelay: 100,
            })
          }
        },
        eventClick: function(calEvent, jsEvent, view) {
          if (!$(this).hasClass('event-clicked')) {
            $('.fc-event').removeClass('event-clicked')
            $(this).addClass('event-clicked')
          }
        },
        defaultDate: '2016-05-12',
        events: [
          {
            title: 'All Day Event',
            start: '2016-05-01',
            className: 'fc-event-success',
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2016-05-09T16:00:00',
            className: 'fc-event-default',
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2016-05-16T16:00:00',
            className: 'fc-event-success',
          },
          {
            title: 'Conference',
            start: '2016-05-11',
            end: '2016-05-14',
            className: 'fc-event-danger',
          },
        ],
      })

      ///////////////////////////////////////////////////////////
      // SWAL ALERTS
      $('.swal-btn-success').on('click', function(e) {
        e.preventDefault()
        swal({
          title: 'Following',
          text: 'Now you are following Artour Scott',
          type: 'success',
          confirmButtonClass: 'btn-success',
          confirmButtonText: 'Ok',
        })
      })

      $('.swal-btn-success-2').on('click', function(e) {
        e.preventDefault()
        swal({
          title: 'Friends request',
          text: 'Friends request was succesfully sent to Artour Scott',
          type: 'success',
          confirmButtonClass: 'btn-success',
          confirmButtonText: 'Ok',
        })
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection