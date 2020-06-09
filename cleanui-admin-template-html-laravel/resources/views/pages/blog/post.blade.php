@extends ('layouts.app')

@section('content')
<!-- START: Blog/post -->
<section class="card">
  <div class="card-header">
    <div class="cui-utils-title">
      <strong>Blog Post</strong>
    </div>
  </div>
  <div class="card-body">
    <div class="cui-blog-feed">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <article class="cui-blog-feed-article">
              <div class="cui-blog-feed-article-information">
                <div class="cui-blog-feed-article-title">
                  <h1>
                    <a href="#">Voice of mountains</a>
                  </h1>
                </div>
                <ul class="cui-blog-feed-article-meta">
                  <li class="cui-blog-feed-article-meta-inf">
                    <span class="cui-blog-feed-article-author">
                      Post By <a href="#">Trinity Parson</a>
                    </span>
                  </li>
                  <li class="cui-blog-feed-article-meta-inf">
                    <span class="cui-blog-feed-article-date">
                      On June 12, 2017
                    </span>
                  </li>
                </ul>
              </div>
              <div class="cui-blog-feed-article-media">
                <a href="#" class="cui-blog-feed-article-link">
                  <img
                    src="/cleanui/components/dummy-assets/common/img/photos/1.jpeg"
                    alt="Man on mountains"
                  />
                </a>
              </div>
              <div class="cui-blog-feed-article-content">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil laborum est
                  perferendis consectetur corporis esse labore minima molestias, exercitationem
                  consequuntur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil
                  laborum est perferendis consectetur corporis esse labore minima molestias,
                  exercitationem consequuntur!
                </p>
                <blockquote class="blockquote">
                  <p class="mb-0">
                    Led cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum
                    imperdiet. Duis sagittis ipsum. Praesent mauris. at nibh elementum imperdiet.
                    Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.
                    Mauris massa.
                  </p>
                  <footer class="blockquote-footer">
                    Someone famous in
                    <cite title="Source Title">Source Title</cite>
                  </footer>
                </blockquote>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil laborum est
                  perferendis consectetur corporis esse labore minima molestias, exercitationem
                  consequuntur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil
                  laborum est perferendis consectetur corporis esse labore minima molestias,
                  exercitationem consequuntur!
                </p>
                <div class="cui-blog-feed-article-media">
                  <img
                    src="/cleanui/components/dummy-assets/common/img/photos/3.jpeg"
                    alt="Man on mountains"
                  />
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil laborum est
                  perferendis consectetur corporis esse labore minima molestias, exercitationem
                  consequuntur! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil
                  laborum est perferendis consectetur corporis esse labore minima molestias,
                  exercitationem consequuntur!
                </p>
                <blockquote class="blockquote blockquote-reverse">
                  <p class="mb-0">
                    Led cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum
                    imperdiet. Duis sagittis ipsum. Praesent mauris. at nibh elementum imperdiet.
                    Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta.
                    Mauris massa.
                  </p>
                  <footer class="blockquote-footer">
                    Someone famous in
                    <cite title="Source Title">Source Title</cite>
                  </footer>
                </blockquote>
              </div>
              <footer class="cui-blog-feed-article-footer">
                <div class="row">
                  <div class="col-8">
                    <div class="cui-blog-feed-article-hashtags">
                      <a href="#">Travel</a>
                      <a href="#">Ideas</a>
                      <a href="#">Lifestyle</a>
                    </div>
                  </div>
                  <div class="col-4">
                    <ul class="cui-blog-feed-share">
                      <li class="cui-blog-feed-share-item">
                        <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                      </li>
                      <li class="cui-blog-feed-share-item">
                        <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                      </li>
                      <li class="cui-blog-feed-share-item">
                        <a href="#">
                          <i class="fa fa-pinterest-p"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </footer>
            </article>
            <div class="cui-blog-feed-author-card clearfix">
              <div class="cui-blog-feed-author-photo cui-avatar cui-avatar-110">
                <img src="/cleanui/components/dummy-assets/common/img/avatars/2.jpg" alt="" />
              </div>
              <div class="cui-blog-feed-author-inf">
                <span class="cui-blog-feed-author-name">
                  Trinity Parson
                </span>
                <p class="cui-blog-feed-author-words">
                  &ldquo;I hope you enjoy reading this as much as I enjoyed writing this.&rdquo;
                </p>
                <div class="cui-blog-feed-author-profile">
                  <a href="#" class="cui-blog-feed-author-profile-btn btn btn-sm btn-primary"
                    >View Profile</a
                  >
                </div>
              </div>
            </div>
            <div class="cui-blog-feed-add-comment mb-4">
              <div class="cui-blog-feed-add-comment-title mb-3">
                Leave a comment
              </div>
              <div class="cui-blog-feed-add-comment-form">
                <div class="form-group">
                  <input class="form-control" id="l0" placeholder="Your name" type="text" />
                </div>
                <div class="form-group">
                  <input class="form-control mb-2" id="l0" placeholder="Your email" type="email" />
                </div>
                <textarea
                  class="form-control adjustable-textarea"
                  placeholder="Type message and press enter"
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
            <div class="cui-blog-feed-comments mb-4">
              <div class="cui-blog-feed-comments-title">
                Comments
              </div>
              <div class="cui-blog-feed-comments-content">
                <div class="cui-apps-profile-wall mt-3">
                  <div class="cui-apps-profile-wall-item pb-0 clearfix">
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
                            class="nav-link dropdown-toggle"
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
                        <strong>Donald Trump</strong> posted:
                        <br />
                        <small class="text-muted">Five seconds ago</small>
                      </div>
                      <div>
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
                        <a href="javascript: void(0);" class="mr-2">
                          <i class="icmn-bubble"></i>
                          17 Comments
                        </a>
                        <a href="javascript: void(0);">
                          <i class="icmn-reply"></i>
                          Reply
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
                                  class="nav-link dropdown-toggle"
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
                              <a href="javascript: void(0);">
                                <i class="icmn-reply"></i>
                                Reply
                              </a>
                            </div>
                          </div>
                        </div>
                        <div
                          class="cui-apps-profile-wall-item cui-apps-profile-wall-item-no-indent clearfix"
                        >
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
                                  class="nav-link dropdown-toggle"
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
                              <a href="javascript: void(0);">
                                <i class="icmn-reply"></i>
                                Reply
                              </a>
                            </div>
                          </div>
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
                            class="nav-link dropdown-toggle"
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
                        <br />
                        <small class="text-muted">10 May 2016 11:03AM</small>
                      </div>
                      <div>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. In rem vitae
                          delectus, atque ducimus, sequi unde mollitia voluptates.
                        </p>
                      </div>
                      <div>
                        <a href="javascript: void(0);" class="mr-2">
                          <i class="icmn-heart"></i>
                          3 Likes
                        </a>
                        <a href="javascript: void(0);" class="mr-2">
                          <i class="icmn-bubble"></i>
                          6 Comments
                        </a>
                        <a href="javascript: void(0);">
                          <i class="icmn-reply"></i>
                          Reply
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
                            class="nav-link dropdown-toggle"
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
                        <strong>Chris Scott</strong> posted:
                        <br />
                        <small class="text-muted">10 May 2016 11:03AM</small>
                      </div>
                      <div>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
                          laborum, sapiente illum doloremque accusantium necessitatibus.
                        </p>
                      </div>
                      <div>
                        <a href="javascript: void(0);" class="mr-2">
                          <i class="icmn-heart"></i>
                          7 Likes
                        </a>
                        <a href="javascript: void(0);" class="mr-2">
                          <i class="icmn-bubble"></i>
                          11 Comments
                        </a>
                        <a href="javascript: void(0);">
                          <i class="icmn-reply"></i>
                          Reply
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="mb-5">
                    <a href="javascript: void(0);" class="btn btn-default btn-block mb-5"
                      >Load More</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <aside class="cui-blog-feed-sidebar">
              <div class="cui-blog-feed-sidebar-partition">
                <div class="cui-blog-feed-partition-head">
                  <span class="cui-blog-feed-partition-name">Search</span>
                </div>
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search..."
                    style="height: inherit;"
                  />
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                      <i class="fa fa-search" aria-hidden="true"></i> Search
                    </button>
                  </div>
                </div>
              </div>
              <div class="cui-blog-feed-sidebar-partition">
                <div class="cui-blog-feed-partition-head">
                  <span class="cui-blog-feed-partition-name">categories</span>
                </div>
                <ul class="cui-blog-feed-categories-list">
                  <li class="cui-blog-feed-categories-item">
                    <a class="cui-blog-feed-categories-link" href="#">
                      Travel
                    </a>
                  </li>
                  <li class="cui-blog-feed-categories-item">
                    <a class="cui-blog-feed-categories-link" href="#">
                      Ideas
                    </a>
                  </li>
                  <li class="cui-blog-feed-categories-item">
                    <a class="cui-blog-feed-categories-link" href="#">
                      Lifestyle
                    </a>
                  </li>
                  <li class="cui-blog-feed-categories-item">
                    <a class="cui-blog-feed-categories-link" href="#">
                      Art
                    </a>
                  </li>
                  <li class="cui-blog-feed-categories-item">
                    <a class="cui-blog-feed-categories-link" href="#">
                      Music
                    </a>
                  </li>
                </ul>
              </div>
              <div class="cui-blog-feed-sidebar-partition">
                <div class="cui-blog-feed-partition-head">
                  <span class="cui-blog-feed-partition-name">Latest post</span>
                </div>
                <article class="cui-blog-feed-latest-post">
                  <div class="cui-blog-feed-latest-img">
                    <a href="#">
                      <img src="/cleanui/components/dummy-assets/common/img/photos/2.jpeg" alt="" />
                    </a>
                  </div>
                  <div class="cui-blog-feed-latest-data">
                    <div class="cui-blog-feed-latest-name">
                      <h2>
                        <a href="#">Web design tutorial</a>
                      </h2>
                    </div>
                    <ul class="cui-blog-feed-article-meta cui-blog-feed-article-meta--latest">
                      <li class="cui-blog-feed-article-meta-inf">
                        <span class="cui-blog-feed-article-author">
                          Post By <a href="#">Setch Morrison</a>
                        </span>
                      </li>
                      <li class="cui-blog-feed-article-meta-inf">
                        <span class="cui-blog-feed-article-date">
                          On June 11, 2017
                        </span>
                      </li>
                    </ul>
                  </div>
                </article>
                <article class="cui-blog-feed-latest-post">
                  <div class="cui-blog-feed-latest-img">
                    <a href="#">
                      <img src="/cleanui/components/dummy-assets/common/img/photos/3.jpeg" alt="" />
                    </a>
                  </div>
                  <div class="cui-blog-feed-latest-data">
                    <div class="cui-blog-feed-latest-name">
                      <h2>
                        <a href="#">cuis in my house</a>
                      </h2>
                    </div>
                    <ul class="cui-blog-feed-article-meta cui-blog-feed-article-meta--latest">
                      <li class="cui-blog-feed-article-meta-inf">
                        <span class="cui-blog-feed-article-author">
                          Post By <a href="#">Adrian Mason</a>
                        </span>
                      </li>
                      <li class="cui-blog-feed-article-meta-inf">
                        <span class="cui-blog-feed-article-date">
                          On June 10, 2017
                        </span>
                      </li>
                    </ul>
                  </div>
                </article>
                <article class="cui-blog-feed-latest-post">
                  <div class="cui-blog-feed-latest-img">
                    <a href="#">
                      <img src="/cleanui/components/dummy-assets/common/img/photos/1.jpeg" alt="" />
                    </a>
                  </div>
                  <div class="cui-blog-feed-latest-data">
                    <div class="cui-blog-feed-latest-name">
                      <h2>
                        <a href="#">Attractions of our city</a>
                      </h2>
                    </div>
                    <ul class="cui-blog-feed-article-meta cui-blog-feed-article-meta--latest">
                      <li class="cui-blog-feed-article-meta-inf">
                        <span class="cui-blog-feed-article-author">
                          Post By <a href="#">Isaac Owen</a>
                        </span>
                      </li>
                      <li class="cui-blog-feed-article-meta-inf">
                        <span class="cui-blog-feed-article-date">
                          On June 9, 2017
                        </span>
                      </li>
                    </ul>
                  </div>
                </article>
              </div>
              <div class="cui-blog-feed-sidebar-partition">
                <div class="cui-blog-feed-partition-head">
                  <span class="cui-blog-feed-partition-name">Subscribe</span>
                </div>
                <div class="input-group flex-nowrap">
                  <div class="input-group-prepend">
                    <span class="input-group-text cui-blog-feed-group-addon"
                      ><i class="fa fa-envelope-o"></i
                    ></span>
                  </div>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Email Address"
                    type="email"
                  />
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: Blog/post -->

@endsection