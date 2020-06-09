@extends ('layouts.app')

@section('content')
<!-- START: dashboard beta -->
<div class="row">
  <div class="col-lg-6">
    <div class="cui-utils-sortable" id="left-col">
      <div class="card" data-order-id="card-1">
        <div class="card-header">
          <div class="pull-right cui-utils-sortable-control">
            <i
              class="icmn-minus mr-2 cui-utils-sortable-collapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Collapse"
            ></i>
            <i
              class="icmn-plus mr-2 cui-utils-sortable-uncollapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Uncollapse"
            ></i>
            <i
              class="icmn-cross cui-utils-sortable__close"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Remove"
            ></i>
          </div>
          <div class="cui-utils-title"><strong>Account Information</strong></div>
          <div class="cui-utils-title-description">All cards are draggable and sortable!</div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-12">
              <div class="cui-profile-head-card">
                <div
                  class="cui-profile-head-card-head"
                  style="background-image: url('/cleanui/components/dummy-assets/common/img/photos/6.jpeg');"
                >
                  <h2 class="text-white">
                    <strong>
                      Clean. Simple <br />
                      Responsive
                    </strong>
                  </h2>
                </div>
                <div class="cui-profile-head-card-content">
                  <div class="cui-profile-head-card-left">
                    <a
                      class="d-block mx-auto mb-2 cui-avatar cui-avatar-90 cui-avatar-bordered cui-avatar-border-white"
                      href="javascript: void(0);"
                    >
                      <img
                        src="/cleanui/components/dummy-assets/common/img/avatars/5.jpg"
                        alt="Alternative text to the image"
                      />
                    </a>
                    <strong>Helen Maggie</strong>
                    <br />
                    <span class="text-muted">@helen_m</span>
                  </div>
                  <div class="cui-profile-head-card-right">
                    <p>
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                      Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card" data-order-id="card-2">
        <div class="card-header">
          <div class="pull-right cui-utils-sortable-control">
            <i
              class="icmn-minus mr-2 cui-utils-sortable-collapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Collapse"
            ></i>
            <i
              class="icmn-plus mr-2 cui-utils-sortable-uncollapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Uncollapse"
            ></i>
            <i
              class="icmn-cross cui-utils-sortable__close"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Remove"
            ></i>
          </div>
          <div class="cui-utils-title"><strong>Work progress</strong></div>
          <div class="cui-utils-title-description">
            Block with important Work Progress information
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-12">
              <strong>Work Progress:</strong>
              <p class="text-muted">Ipsum is simply dummy</p>
              <div class="progress mb-3" style="height: 7px">
                <div
                  class="progress-bar progress-bar-striped progress-bar-animated"
                  role="progressbar"
                  aria-valuenow="40"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: 87%"
                ></div>
              </div>
              <strong>Airplanes:</strong>
              <p class="text-muted">Typesetting industry</p>
              <div class="progress mb-3" style="height: 7px">
                <div
                  class="progress-bar progress-bar-striped progress-bar-animated"
                  role="progressbar"
                  aria-valuenow="40"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: 20%"
                ></div>
              </div>
              <strong>Robots:</strong>
              <p class="text-muted">Typesetting industry</p>
              <div class="progress mb-3" style="height: 7px">
                <div
                  class="progress-bar progress-bar-striped progress-bar-animated"
                  role="progressbar"
                  aria-valuenow="40"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: 35%"
                ></div>
              </div>
              <strong>Automotive:</strong>
              <p class="text-muted">Typesetting industry</p>
              <div class="progress mb-3" style="height: 7px">
                <div
                  class="progress-bar progress-bar-striped progress-bar-animated"
                  role="progressbar"
                  aria-valuenow="40"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: 56%"
                ></div>
              </div>
              <strong>Total Time:</strong>
              <p class="text-muted">Printing and typesetting</p>
              <div class="progress mb-3" style="height: 7px">
                <div
                  class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                  role="progressbar"
                  aria-valuenow="40"
                  aria-valuemin="0"
                  aria-valuemax="100"
                  style="width: 18%"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card" data-order-id="card-3">
        <div class="card-header">
          <div class="pull-right cui-utils-sortable-control">
            <i
              class="icmn-minus mr-2 cui-utils-sortable-collapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Collapse"
            ></i>
            <i
              class="icmn-plus mr-2 cui-utils-sortable-uncollapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Uncollapse"
            ></i>
            <i
              class="icmn-cross cui-utils-sortable__close"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Remove"
            ></i>
          </div>
          <div class="cui-utils-title"><strong>Employees</strong></div>
          <div class="cui-utils-title-description">Can you drag me now?</div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6">
              <div class="cui-user-card px-3 py-5 mb-4 cui-user-card-white-font bg-primary">
                <button class="cui-user-card-plus-btn">Add</button>
                <a
                  class="d-block mx-auto mb-2 cui-avatar cui-avatar-90 cui-avatar-bordered"
                  href="javascript: void(0);"
                >
                  <img
                    src="/cleanui/components/dummy-assets/common/img/avatars/2.jpg"
                    alt="Alternative text to the image"
                  />
                </a>
                <div class="my-3 text-center">
                  <div class="cui-user-card-user-name font-size-18">Anna Gray</div>
                  <div class="cui-user-card-post">CEO</div>
                </div>
                <div class="text-center">
                  <div class="btn-group text-center">
                    <button type="button" class="btn btn-sm btn-rounded">Add</button>
                    <button type="button" class="btn btn-sm btn-rounded">Inbox</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="cui-user-card px-3 py-5 mb-4">
                <button class="cui-user-card-plus-btn">Add</button>
                <a
                  class="d-block mx-auto mb-2 cui-avatar cui-avatar-90 cui-avatar-bordered"
                  href="javascript: void(0);"
                >
                  <img
                    src="/cleanui/components/dummy-assets/common/img/avatars/5.jpg"
                    alt="Alternative text to the image"
                  />
                </a>
                <div class="my-3 text-center">
                  <div class="cui-user-card-user-name font-size-18">Lee Aniston</div>
                  <div class="cui-user-card-post">Project Manager</div>
                </div>
                <div class="text-center">
                  <div class="btn-group text-center">
                    <button type="button" class="btn btn-sm btn-rounded">Add</button>
                    <button type="button" class="btn btn-sm btn-rounded">Inbox</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cui-utils-margin-fix">
            <!-- -->
          </div>
        </div>
      </div>
      <div class="card" data-order-id="card-4">
        <div class="card-header">
          <div class="pull-right cui-utils-sortable-control">
            <i
              class="icmn-minus mr-2 cui-utils-sortable-collapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Collapse"
            ></i>
            <i
              class="icmn-plus mr-2 cui-utils-sortable-uncollapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Uncollapse"
            ></i>
            <i
              class="icmn-cross cui-utils-sortable__close"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Remove"
            ></i>
          </div>
          <div class="cui-utils-title"><strong>Task Table</strong></div>
          <div class="cui-utils-title-description">Block with important Task Table information</div>
        </div>
        <div class="card-body">
          <table class="table mb-0">
            <thead>
              <tr>
                <th class="border-top-0">#</th>
                <th class="border-top-0">First Name</th>
                <th class="border-top-0">Username</th>
                <th class="border-top-0 hidden-lg-down">Levels</th>
                <th class="border-top-0"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">
                  <input type="checkbox" />
                </th>
                <td>
                  <a
                    href="javascript: void(0);"
                    class="cui-utils-link-underlined cui-utils-link-blue"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                    data-original-title="User #1"
                    >Mark Stevenson</a
                  >
                </td>
                <td>@mdo</td>
                <td class="hidden-lg-down">
                  <div class="cui-utils-steps-inline d-block">
                    <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-success"
                      >1</a
                    >
                    <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-success"
                      >2</a
                    >
                  </div>
                </td>
                <td>
                  <div class="dropdown pull-right">
                    <button
                      type="button"
                      class="btn btn-sm dropdown-toggle"
                      data-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Actions
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a class="dropdown-item" href="javascript: void(0)">Action</a>
                      <a class="dropdown-item" href="javascript: void(0)">Another action</a>
                      <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <input type="checkbox" />
                </th>
                <td>
                  <a
                    href="javascript: void(0);"
                    class="cui-utils-link-underlined cui-utils-link-blue"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                    data-original-title="User #2"
                    >Jacob Hoffman</a
                  >
                </td>
                <td>@fat</td>
                <td class="hidden-lg-down">
                  <div class="cui-utils-steps-inline d-block">
                    <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-success"
                      >1</a
                    >
                    <a href="javascript: void(0);" class="cui-utils-step">2</a>
                  </div>
                </td>
                <td>
                  <div class="dropdown pull-right">
                    <button
                      type="button"
                      class="btn btn-sm dropdown-toggle"
                      data-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Actions
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a class="dropdown-item" href="javascript: void(0)">Action</a>
                      <a class="dropdown-item" href="javascript: void(0)">Another action</a>
                      <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <input type="checkbox" />
                </th>
                <td>
                  <a
                    href="javascript: void(0);"
                    class="cui-utils-link-underlined cui-utils-link-blue"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                    data-original-title="User #3"
                    >Larry Page</a
                  >
                </td>
                <td>@twitter</td>
                <td class="hidden-lg-down">
                  <div class="cui-utils-steps-inline d-block">
                    <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-primary"
                      >1</a
                    >
                    <a href="javascript: void(0);" class="cui-utils-step">2</a>
                  </div>
                </td>
                <td>
                  <div class="dropdown pull-right">
                    <button
                      type="button"
                      class="btn btn-sm dropdown-toggle"
                      data-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Actions
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a class="dropdown-item" href="javascript: void(0)">Action</a>
                      <a class="dropdown-item" href="javascript: void(0)">Another action</a>
                      <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
                    </div>
                  </div>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <input type="checkbox" />
                </th>
                <td>
                  <a
                    href="javascript: void(0);"
                    class="cui-utils-link-underlined cui-utils-link-blue"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                    data-original-title="User #1"
                    >Mark Stevenson</a
                  >
                </td>
                <td>@mdo</td>
                <td class="hidden-lg-down">
                  <div class="cui-utils-steps-inline d-block">
                    <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-success"
                      >1</a
                    >
                    <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-success"
                      >2</a
                    >
                  </div>
                </td>
                <td>
                  <div class="dropdown pull-right">
                    <button
                      type="button"
                      class="btn btn-sm dropdown-toggle"
                      data-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Actions
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a class="dropdown-item" href="javascript: void(0)">Action</a>
                      <a class="dropdown-item" href="javascript: void(0)">Another action</a>
                      <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card" data-order-id="card-5">
        <div class="card-header">
          <div class="pull-right cui-utils-sortable-control">
            <i
              class="icmn-minus mr-2 cui-utils-sortable-collapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Collapse"
            ></i>
            <i
              class="icmn-plus mr-2 cui-utils-sortable-uncollapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Uncollapse"
            ></i>
            <i
              class="icmn-cross cui-utils-sortable__close"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Remove"
            ></i>
          </div>
          <div class="cui-utils-title"><strong>Recent Works</strong></div>
          <div class="cui-utils-title-description">
            Block with important Recent Works information
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6">
              <div
                class="cui-info-card cui-info-card-interactive cui-info-card-white-font cui-info-card-around-border bg-danger"
              >
                <div class="cui-info-card-icon text-center font-size-30">
                  <i class="icmn-users"></i>
                </div>
                <div class="mt-2 text-center">
                  <div class="mb-2">
                    <p>
                      Lorem Ipsum is simply dummy text of printing the printing and typesetti...
                    </p>
                  </div>
                  <a href="javascript: void(0);" class="btn btn-outline-danger">
                    Information
                  </a>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div
                class="cui-info-card cui-info-card-interactive cui-info-card-white-font cui-info-card-around-border bg-success"
              >
                <div class="cui-info-card-icon text-center font-size-30">
                  <i class="icmn-home"></i>
                </div>
                <div class="mt-2 text-center">
                  <div class="mb-2">
                    <p>
                      Lorem Ipsum is simply dummy text of printing the printing and typesetti...
                    </p>
                  </div>
                  <a href="javascript: void(0);" class="btn btn-outline-success">
                    Information
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="cui-utils-margin-fix">
            <!-- -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="cui-utils-sortable" id="right-col">
      <div class="card" data-order-id="card-6">
        <div class="card-header">
          <div class="pull-right cui-utils-sortable-control">
            <i
              class="icmn-minus mr-2 cui-utils-sortable-collapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Collapse"
            ></i>
            <i
              class="icmn-plus mr-2 cui-utils-sortable-uncollapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Uncollapse"
            ></i>
            <i
              class="icmn-cross cui-utils-sortable__close"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Remove"
            ></i>
          </div>
          <div class="cui-utils-title"><strong>Server Info</strong></div>
          <div class="cui-utils-title-description">
            Block with important Server info information
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="cui-slider-card bg-default mb-4">
                <div class="carousel slide" id="carousel-1" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1" class=""></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <a href="javascript: void(0);" class="cui-slider-card-body text-white">
                        <div class="cui-slider-card-icon">
                          <i class="icmn-accessibility"></i>
                        </div>
                        <h2>Sales Growth</h2>
                        <p>View Report</p>
                      </a>
                    </div>
                    <div class="carousel-item">
                      <a href="javascript: void(0);" class="cui-slider-card-body text-white">
                        <div class="cui-slider-card-icon">
                          <i class="icmn-download"></i>
                        </div>
                        <h2>All Reports</h2>
                        <p>Pdf Download</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="cui-slider-card bg-default mb-4">
                <div class="carousel slide" id="carousel-2" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-2" data-slide-to="1" class=""></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                      <a href="javascript: void(0);" class="cui-slider-card-body text-white">
                        <div class="cui-slider-card-icon">
                          <i class="icmn-books"></i>
                        </div>
                        <h2><i class="icmn-books"></i> Todo</h2>
                        <p>
                          1. Upgrade
                          <br />
                          2. Finish
                        </p>
                      </a>
                    </div>
                    <div class="carousel-item">
                      <a href="javascript: void(0);" class="cui-slider-card-body text-white">
                        <div class="cui-slider-card-icon">
                          <i class="icmn-download"></i>
                        </div>
                        <h2><i class="icmn-download"></i> Finish</h2>
                        <p>
                          1. Upgrade
                          <br />
                          2. Prepare
                        </p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cui-utils-margin-fix">
            <!-- -->
          </div>
        </div>
      </div>
      <div class="card" data-order-id="card-7">
        <div class="card-header">
          <div class="pull-right cui-utils-sortable-control">
            <i
              class="icmn-minus mr-2 cui-utils-sortable-collapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Collapse"
            ></i>
            <i
              class="icmn-cross cui-utils-sortable__close"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Remove"
            ></i>
          </div>
          <div class="cui-utils-title"><strong>Server Statistics</strong></div>
          <div class="cui-utils-title-description">
            Block with important Server Statistics information
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-6">
              <div class="cui-info-card cui-info-card-white-font bg-success">
                <span class="cui-info-card-digit">
                  <i class="icmn-database"></i>
                </span>
                <div class="cui-info-card-desc">
                  <span class="cui-info-card-title">Databases</span>
                  <p>Total: 78181</p>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="cui-info-card cui-info-card-white-font bg-primary">
                <span class="cui-info-card-digit">
                  <i class="icmn-bullhorn"></i>
                </span>
                <div class="cui-info-card-desc">
                  <span class="cui-info-card-title">Databases</span>
                  <p>Total: 23573</p>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="cui-info-card cui-info-card-white-font bg-default">
                <span class="cui-info-card-digit">
                  <i class="icmn-users"></i>
                </span>
                <div class="cui-info-card-desc">
                  <span class="cui-info-card-title">Databases</span>
                  <p>Total: 34508</p>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="cui-info-card cui-info-card-white-font bg-danger">
                <span class="cui-info-card-digit">
                  <i class="icmn-home"></i>
                </span>
                <div class="cui-info-card-desc">
                  <span class="cui-info-card-title">Databases</span>
                  <p>Total: 2352</p>
                </div>
              </div>
            </div>
          </div>
          <div class="cui-utils-margin-fix">
            <!-- -->
          </div>
        </div>
      </div>
      <div class="card" data-order-id="card-8">
        <div class="card-header">
          <div class="pull-right cui-utils-sortable-control">
            <i
              class="icmn-minus mr-2 cui-utils-sortable-collapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Collapse"
            ></i>
            <i
              class="icmn-plus mr-2 cui-utils-sortable-uncollapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Uncollapse"
            ></i>
            <i
              class="icmn-cross cui-utils-sortable__close"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Remove"
            ></i>
          </div>
          <div class="cui-utils-title"><strong>Server Configuration</strong></div>
          <div class="cui-utils-title-description">
            Block with important Server Configuration information
          </div>
        </div>
        <div class="card-body">
          <div class="my-3">
            <div class="mb-3">
              <input type="text" id="slider-1" class="form-control" name="example_name" value="" />
            </div>
            <div>
              <input type="text" id="slider-2" class="form-control" name="example_name" value="" />
            </div>
          </div>
        </div>
      </div>
      <div class="card cui-utils-sortable-collapsed" id="duck-game" data-order-id="card-9">
        <div class="card-header">
          <div class="pull-right cui-utils-sortable-control">
            <i
              class="icmn-minus mr-2 cui-utils-sortable-collapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Collapse"
            ></i>
            <i
              class="icmn-plus mr-2 cui-utils-sortable-uncollapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Uncollapse"
            ></i>
            <i
              class="icmn-cross cui-utils-sortable__close"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Remove"
            ></i>
          </div>
          <div class="cui-utils-title"><strong>Collapsed Card</strong></div>
          <div class="cui-utils-title-description">Uncollapse me by icon or double click</div>
        </div>
        <div class="card-body">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
          been the industry's standard dummy text ever since the 1500s, when an unknown printer took
          a galley of type and scrambled it to make a type specimen book. It has survived not only
          five centuries, but also the leap into electronic typesetting, remaining essentially
          unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
          Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
          PageMaker including versions of Lorem Ipsum.
        </div>
      </div>
      <div class="card" data-order-id="card-10">
        <div class="card-header">
          <div class="pull-right cui-utils-sortable-control">
            <i
              class="icmn-minus mr-2 cui-utils-sortable-collapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Collapse"
            ></i>
            <i
              class="icmn-plus mr-2 cui-utils-sortable-uncollapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Uncollapse"
            ></i>
            <i
              class="icmn-cross cui-utils-sortable__close"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Remove"
            ></i>
          </div>
          <div class="cui-utils-title"><strong>Week Revenue Statistics, Billions</strong></div>
          <span class="mr-2 nowrap">
            <span class="cui-utils-donut cui-utils-donut-success"></span>
            Nuts
          </span>
          <span class="mr-2 nowrap">
            <span class="cui-utils-donut cui-utils-donut-primary"></span>
            Apples
          </span>
          <span class="mr-2 nowrap">
            <span class="cui-utils-donut cui-utils-donut-danger"></span>
            Peaches
          </span>
        </div>
        <div class="card-body">
          <div class="chart-line height-300 chartist"></div>
        </div>
      </div>
      <div class="card" data-order-id="card-11">
        <div class="card-header">
          <div class="pull-right cui-utils-sortable-control">
            <i
              class="icmn-minus mr-2 cui-utils-sortable-collapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Collapse"
            ></i>
            <i
              class="icmn-plus mr-2 cui-utils-sortable-uncollapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Uncollapse"
            ></i>
            <i
              class="icmn-cross cui-utils-sortable__close"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Remove"
            ></i>
          </div>
          <div class="cui-utils-title"><strong>Month Site Visits Growth, %</strong></div>
          <span class="mr-2 nowrap">
            <span class="cui-utils-donut cui-utils-donut-primary"></span>
            Income
          </span>
          <span class="mr-2 nowrap">
            <span class="cui-utils-donut cui-utils-donut-success"></span>
            Outcome
          </span>
        </div>
        <div class="card-body">
          <div class="chart-overlapping-bar height-300 chartist"></div>
        </div>
      </div>
      <div class="card" data-order-id="card-12">
        <div class="card-header">
          <div class="pull-right cui-utils-sortable-control">
            <i
              class="icmn-minus mr-2 cui-utils-sortable-collapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Collapse"
            ></i>
            <i
              class="icmn-plus mr-2 cui-utils-sortable-uncollapse"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Uncollapse"
            ></i>
            <i
              class="icmn-cross cui-utils-sortable__close"
              data-toggle="tooltip"
              data-placement="left"
              title=""
              data-original-title="Remove"
            ></i>
          </div>
          <div class="cui-utils-title"><strong>Chat</strong></div>
          <div class="cui-utils-title-description">Block with important Chat information</div>
        </div>
        <div class="card-body">
          <div class="cui-apps-messaging">
            <div class="height-400 custom-scroll cui-utils-scrollable">
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
            </div>
            <div class="form-group mt-4 mb-0">
              <textarea
                class="form-control adjustable-textarea"
                placeholder="Type and press enter"
              ></textarea>
              <div class="mt-3">
                <button class="btn btn-sm btn-primary width-100">
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
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="cui-utils-sortable" id="bottom-col">
      <div class="card" data-order-id="card-13">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-3">
              <!-- Example State Done -->
              <div class="cui-utils-step cui-utils-step-squared cui-utils-step-success">
                <span class="cui-utils-step-digit">
                  <i class="icmn-home"> <!-- --></i>
                </span>
                <div class="cui-utils-step-desc">
                  <span class="cui-utils-step-title">Block Title</span>
                  <p>Waiting for review</p>
                </div>
              </div>
              <!-- End Example State Done -->
            </div>
            <div class="col-lg-3">
              <!-- Example State Error -->
              <div class="cui-utils-step cui-utils-step-squared cui-utils-step-primary">
                <span class="cui-utils-step-digit">
                  <i class="icmn-key"> <!-- --></i>
                </span>
                <div class="cui-utils-step-desc">
                  <span class="cui-utils-step-title">Block Title</span>
                  <p>Waiting for review</p>
                </div>
              </div>
              <!-- End Example State Error -->
            </div>
            <div class="col-lg-3">
              <!-- Example State Current -->
              <div class="cui-utils-step cui-utils-step-squared cui-utils-step-warning">
                <span class="cui-utils-step-digit">
                  <i class="icmn-play2"> <!-- --></i>
                </span>
                <div class="cui-utils-step-desc">
                  <span class="cui-utils-step-title">Block Title</span>
                  <p>Waiting for review</p>
                </div>
              </div>
              <!-- End Example State Current -->
            </div>
            <div class="col-lg-3">
              <!-- Example State Disabled -->
              <div class="cui-utils-step cui-utils-step-disabled">
                <span class="cui-utils-step-digit">
                  <i class="icmn-database"> <!-- --></i>
                </span>
                <div class="cui-utils-step-desc">
                  <span class="cui-utils-step-title">Block Title</span>
                  <p>Waiting for review</p>
                </div>
              </div>
              <!-- End Example State Disabled -->
            </div>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-hover nowrap" id="example1">
            <thead>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Damon</td>
                <td>5516 Adolfo Green</td>
                <td>Littelhaven</td>
                <td>85</td>
                <td>2014/06/13</td>
                <td>$553,536</td>
              </tr>
              <tr>
                <td>Torrey</td>
                <td>1995 Richie Neck</td>
                <td>West Sedrickstad</td>
                <td>77</td>
                <td>2014/09/12</td>
                <td>$243,577</td>
              </tr>
              <tr>
                <td>Miracle</td>
                <td>176 Hirthe Squares</td>
                <td>Ryleetown</td>
                <td>82</td>
                <td>2013/09/27</td>
                <td>$784,802</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="card" data-order-id="card-14">
      <div class="card-header">
        <div class="pull-right cui-utils-sortable-control">
          <i
            class="icmn-minus mr-2 cui-utils-sortable-collapse"
            data-toggle="tooltip"
            data-placement="left"
            title=""
            data-original-title="Collapse"
          ></i>
          <i
            class="icmn-plus mr-2 cui-utils-sortable-uncollapse"
            data-toggle="tooltip"
            data-placement="left"
            title=""
            data-original-title="Uncollapse"
          ></i>
          <i
            class="icmn-cross cui-utils-sortable__close"
            data-toggle="tooltip"
            data-placement="left"
            title=""
            data-original-title="Remove"
          ></i>
        </div>
        <div class="cui-utils-title"><strong>Calendar</strong></div>
        <div class="cui-utils-title-description">Block with important Calendar information</div>
      </div>
      <div class="card-body">
        <div class="example-calendar-block"></div>
      </div>
    </div>
  </div>
</div>
<!-- END: dashboard alpha -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      ///////////////////////////////////////////////////////////
      // tooltips
      $('[data-toggle=tooltip]').tooltip()

      ///////////////////////////////////////////////////////////
      // jquery ui sortable
      $('#left-col, #right-col, #bottom-col').each(function() {
        $(this).sortable({
          // connect left and right containers
          connectWith: '.cui-utils-sortable',
          tolerance: 'pointer',
          scroll: true,

          // set initial order from localStorage
          create: function() {
            var that = $(this),
              id = $(this).attr('id'),
              orderLs = localStorage.getItem('order-' + id)

            if (orderLs) {
              var order = orderLs.split(',')

              $.each(order, function(key, val) {
                var el = $('[data-order-id=' + val + ']')
                that.append(el)
              })
            }
          },

          // save order state on order update to localStorage
          update: function() {
            var orderArray = $(this).sortable('toArray', { attribute: 'data-order-id' }),
              prefix = $(this).attr('id')

            localStorage.setItem('order-' + prefix, orderArray)
          },

          // handler
          handle: '.card-header',
        })
      })

      ///////////////////////////////////////////////////////////
      // reset dashboard
      $('.reset-button').on('click', function() {
        localStorage.removeItem('order-left-col')
        localStorage.removeItem('order-right-col')
        localStorage.removeItem('order-bottom-col')
        setTimeout(function() {
          location.reload()
        }, 500)
      })

      ///////////////////////////////////////////////////////////
      // card controls
      $('.cui-utils-sortable-collapse, .cui-utils-sortable-uncollapse').on('click', function() {
        $(this)
          .closest('.card')
          .toggleClass('cui-utils-sortable-collapsed')
      })
      $('.cui-utils-sortable__close').on('click', function() {
        $(this)
          .closest('.card')
          .remove()
        $('.tooltip').remove()
      })

      // header double click
      $('.cui-utils-sortable .card-header').on('dblclick', function() {
        $(this)
          .closest('.card')
          .toggleClass('cui-utils-sortable-collapsed')
      })

      ///////////////////////////////////////////////////////////
      // datatables
      $('#example1').DataTable({
        responsive: true,
      })

      ///////////////////////////////////////////////////////////
      // calendar
      $('.example-calendar-block').fullCalendar({
        //aspectRatio: 2,
        height: 475,
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
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        viewRender: function(view, element) {
          if (!('ontouchstart' in document.documentElement) && jQuery().jScrollPane) {
            $('.fc-scroller').jScrollPane({
              autoReinitialise: true,
              autoReinitialiseDelay: 100,
            })
          }
        },
        defaultDate: '2017-05-12',
        events: [
          {
            title: 'All Day Event',
            start: '2017-05-01',
            class: 'fc-event-success',
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2017-05-09T16:00:00',
            class: 'fc-event-default',
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2017-05-16T16:00:00',
            class: 'fc-event-success',
          },
          {
            title: 'Conference',
            start: '2017-05-11',
            end: '2017-05-14',
            class: 'fc-event-danger',
          },
        ],
        eventClick: function(calEvent, jsEvent, view) {
          if (!$(this).hasClass('event-clicked')) {
            $('.fc-event').removeClass('event-clicked')
            $(this).addClass('event-clicked')
          }
        },
      })

      ///////////////////////////////////////////////////////////
      // ladda buttons
      Ladda.bind('.ladda-button', { timeout: 2000 })

      ///////////////////////////////////////////////////////////
      // chart1
      new Chartist.Line(
        '.chart-line',
        {
          labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
          series: [[5, 0, 7, 8, 12], [2, 1, 3.5, 7, 3], [1, 3, 4, 5, 6]],
        },
        {
          fullWidth: !0,
          chartPadding: {
            right: 40,
          },
          plugins: [Chartist.plugins.tooltip()],
        },
      )

      ///////////////////////////////////////////////////////////
      // chart 2
      var overlappingData = {
          labels: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'Mai',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec',
          ],
          series: [[5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8], [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]],
        },
        overlappingOptions = {
          seriesBarDistance: 10,
          plugins: [Chartist.plugins.tooltip()],
        },
        overlappingResponsiveOptions = [
          [
            '',
            {
              seriesBarDistance: 5,
              axisX: {
                labelInterpolationFnc: function(value) {
                  return value[0]
                },
              },
            },
          ],
        ]

      new Chartist.Bar(
        '.chart-overlapping-bar',
        overlappingData,
        overlappingOptions,
        overlappingResponsiveOptions,
      )

      ///////////////////////////////////////////////////////////
      // custom scroll
      if (!('ontouchstart' in document.documentElement) && jQuery().jScrollPane) {
        $('.custom-scroll').each(function() {
          $(this).jScrollPane({
            contentWidth: '100%',
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
      // adjustable textarea
      autosize($('.adjustable-textarea'))

      ///////////////////////////////////////////////////////////
      // slider
      $('#slider-1').ionRangeSlider({
        min: 0,
        max: 16000,
        from: 12000,
        step: 1000,
        grid: true,
        grid_num: 8,
      })

      $('#slider-2').ionRangeSlider({
        type: 'double',
        min: 0,
        max: 100,
        from: 20,
        from_min: 10,
        from_max: 30,
        from_shadow: true,
        to: 60,
        to_min: 50,
        to_max: 70,
        to_shadow: true,
        grid: true,
        grid_num: 10,
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection