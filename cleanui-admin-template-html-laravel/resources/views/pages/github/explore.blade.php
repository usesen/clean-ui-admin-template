@extends ('layouts.app')

@section('content')
<!-- START: GitHub/explore -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>GitHub Explore</strong>
    </span>
  </div>
  <div class="card-body">
    <div class="cui-github-explore">
      <ul class="cui-github-explore-menu nav nav-tabs mb-3" role="tablist">
        <li class="nav-item">
          <a
            class="nav-link active"
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
            class="nav-link"
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
      <div class="cui-github-explore-descr">
        <p class="cui-github-explore-descr-text">
          No description, website, or topics provided.
        </p>
        <button class="btn btn-sm pull-right">Edit</button>
      </div>
      <div class="cui-github-explore-overall-data">
        <ul class="cui-github-explore-overall-data-list">
          <li class="cui-github-explore-overall-data-item">
            <a href="#" class="cui-github-explore-overall-data-link">
              <i class="cui-github-explore-overall-data-icon fa fa-check-circle-o"></i>
              35 commits
            </a>
          </li>
          <li class="cui-github-explore-overall-data-item">
            <a href="#" class="cui-github-explore-overall-data-link">
              <i class="cui-github-explore-overall-data-icon fa fa-th-list"></i>
              1 branch
            </a>
          </li>
          <li class="cui-github-explore-overall-data-item">
            <a href="#" class="cui-github-explore-overall-data-link">
              <i class="cui-github-explore-overall-data-icon fa fa-window-maximize"></i>
              0 releases
            </a>
          </li>
          <li class="cui-github-explore-overall-data-item">
            <a href="#" class="cui-github-explore-overall-data-link">
              <i class="cui-github-explore-overall-data-icon fa fa-bell"></i>
              0 contributors
            </a>
          </li>
        </ul>
      </div>
      <div class="cui-github-explore-sort clearfix">
        <div class="cui-github-explore-sort-left">
          <select class="cui-github-explore-sort-option selectpicker" data-live-search="true">
            <option>HTML</option>
            <option>CSS</option>
            <option>JavaScript</option>
          </select>
          <button class="cui-github-explore-sort-option btn btn-sm">New request</button>
        </div>
        <div class="cui-github-explore-sort-right">
          <div class="cui-github-explore-sort-option">
            <div class="btn-group">
              <button type="button" class="btn btn-sm">Create new file</button>
              <button type="button" class="btn btn-sm">Upload files</button>
              <button type="button" class="btn btn-sm">Find file</button>
            </div>
          </div>
          <div class="dropdown cui-github-explore-sort-option">
            <button
              type="button"
              class="btn btn-sm dropdown-toggle"
              data-toggle="dropdown"
              aria-expanded="false"
            >
              Download
            </button>
            <ul class="dropdown-menu" aria-labelledby="" role="menu">
              <a class="dropdown-item" href="javascript: void(0)">Action</a>
              <a class="dropdown-item" href="javascript: void(0)">Another action</a>
              <a class="dropdown-item" href="javascript: void(0)">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript: void(0)">Separated link</a>
            </ul>
          </div>
        </div>
      </div>
      <table class="cui-github-explore-nav table table-hover">
        <tbody>
          <tr>
            <td class="cui-github-explore-nav-icon">
              <i class="fa fa-folder"></i>
            </td>
            <td class="cui-github-explore-nav-content">
              <a href="#" class="cui-github-explore-nav-link">
                css
              </a>
            </td>
            <td class="cui-github-explore-nav-descr">information about file</td>
            <td class="cui-github-explore-nav-time">10 minutes ago</td>
          </tr>
          <tr>
            <td class="cui-github-explore-nav-icon">
              <i class="fa fa-folder"></i>
            </td>
            <td class="cui-github-explore-nav-content">
              <a href="#" class="cui-github-explore-nav-link">
                fonts
              </a>
            </td>
            <td class="cui-github-explore-nav-descr">information about file</td>
            <td class="cui-github-explore-nav-time">18 minutes ago</td>
          </tr>
          <tr>
            <td class="cui-github-explore-nav-icon">
              <i class="fa fa-folder"></i>
            </td>
            <td class="cui-github-explore-nav-content">
              <a href="#" class="cui-github-explore-nav-link">
                resources
              </a>
            </td>
            <td class="cui-github-explore-nav-descr">information about file</td>
            <td class="cui-github-explore-nav-time">18 minutes ago</td>
          </tr>
          <tr>
            <td class="cui-github-explore-nav-icon">
              <i class="fa fa-folder"></i>
            </td>
            <td class="cui-github-explore-nav-content">
              <a href="#" class="cui-github-explore-nav-link">
                dist
              </a>
            </td>
            <td class="cui-github-explore-nav-descr">information about file</td>
            <td class="cui-github-explore-nav-time">18 minutes ago</td>
          </tr>
          <tr>
            <td class="cui-github-explore-nav-icon">
              <i class="fa fa-folder"></i>
            </td>
            <td class="cui-github-explore-nav-content">
              <a href="#" class="cui-github-explore-nav-link">
                img
              </a>
            </td>
            <td class="cui-github-explore-nav-descr">information about file</td>
            <td class="cui-github-explore-nav-time">6 month ago</td>
          </tr>
          <tr>
            <td class="cui-github-explore-nav-icon">
              <i class="fa fa-folder"></i>
            </td>
            <td class="cui-github-explore-nav-content">
              <a href="#" class="cui-github-explore-nav-link">
                js
              </a>
            </td>
            <td class="cui-github-explore-nav-descr">information about file</td>
            <td class="cui-github-explore-nav-time">3 month ago</td>
          </tr>
          <tr>
            <td class="cui-github-explore-nav-icon">
              <i class="fa fa-file-o"></i>
            </td>
            <td class="cui-github-explore-nav-content">
              <a href="#" class="cui-github-explore-nav-link">
                Specificuiion.md
              </a>
            </td>
            <td class="cui-github-explore-nav-descr">information about file</td>
            <td class="cui-github-explore-nav-time">6 minutes ago</td>
          </tr>
          <tr>
            <td class="cui-github-explore-nav-icon">
              <i class="fa fa-file-o"></i>
            </td>
            <td class="cui-github-explore-nav-content">
              <a href="#" class="cui-github-explore-nav-link">
                Readme.md
              </a>
            </td>
            <td class="cui-github-explore-nav-descr">information about file</td>
            <td class="cui-github-explore-nav-time">1 day ago</td>
          </tr>
          <tr>
            <td class="cui-github-explore-nav-icon">
              <i class="fa fa-file-o"></i>
            </td>
            <td class="cui-github-explore-nav-content">
              <a href="#" class="cui-github-explore-nav-link">
                index.html
              </a>
            </td>
            <td class="cui-github-explore-nav-descr">information about file</td>
            <td class="cui-github-explore-nav-time">11 minutes ago</td>
          </tr>
          <tr>
            <td class="cui-github-explore-nav-icon">
              <i class="fa fa-file-o"></i>
            </td>
            <td class="cui-github-explore-nav-content">
              <a href="#" class="cui-github-explore-nav-link">
                text.html
              </a>
            </td>
            <td class="cui-github-explore-nav-descr">information about file</td>
            <td class="cui-github-explore-nav-time">10 minutes ago</td>
          </tr>
          <tr>
            <td class="cui-github-explore-nav-icon">
              <i class="fa fa-file-o"></i>
            </td>
            <td class="cui-github-explore-nav-content">
              <a href="#" class="cui-github-explore-nav-link">
                gulp.js
              </a>
            </td>
            <td class="cui-github-explore-nav-descr">project structure</td>
            <td class="cui-github-explore-nav-time">10 minutes ago</td>
          </tr>
          <tr>
            <td class="cui-github-explore-nav-icon">
              <i class="fa fa-file-o"></i>
            </td>
            <td class="cui-github-explore-nav-content">
              <a href="#" class="cui-github-explore-nav-link">
                autoload.php
              </a>
            </td>
            <td class="cui-github-explore-nav-descr">project structure</td>
            <td class="cui-github-explore-nav-time">10 minutes ago</td>
          </tr>
          <tr>
            <td class="cui-github-explore-nav-icon">
              <i class="fa fa-file-o"></i>
            </td>
            <td class="cui-github-explore-nav-content">
              <a href="#" class="cui-github-explore-nav-link">
                bower.git
              </a>
            </td>
            <td class="cui-github-explore-nav-descr">project structure</td>
            <td class="cui-github-explore-nav-time">10 minutes ago</td>
          </tr>
          <tr>
            <td class="cui-github-explore-nav-icon">
              <i class="fa fa-file-o"></i>
            </td>
            <td class="cui-github-explore-nav-content">
              <a href="#" class="cui-github-explore-nav-link">
                -exclude.js
              </a>
            </td>
            <td class="cui-github-explore-nav-descr">project structure</td>
            <td class="cui-github-explore-nav-time">10 minutes ago</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
<!-- END: Github/explore -->

@endsection