<template>
  <div>
    <section class="card">
      <div class="card-header">
        <div class="utils__title">
          <strong>Cards</strong>
          <a
            href="https://getbootstrap.com/docs/4.2/components/card/"
            target="_blank"
            rel="noopener noreferrer"
            class="btn btn-sm btn-primary ml-4"
          >
            Official Documentation
            <i class="icmn-link ml-1"/>
          </a>
        </div>
      </div>
      <div class="card-body">
        <span>Default Card Body</span>
      </div>
      <div class="card-footer">
        <span>Default Card Footer</span>
      </div>
    </section>
    <section class="card">
      <div class="card-header">
        <div class="pull-right mt-2">
          <span class="mr-3">
            User:
            <a href="javascript: void(0);">Administrator</a>
          </span>
          <div class="d-inline-block">
            <a-dropdown>
              <a class="ant-dropdown-link" href="#">
                <i class="icmn-database mr-2"/>
                <span class="hidden-lg-down mr-2">Dashboards</span>
                <a-icon type="down"/>
              </a>
              <a-menu slot="overlay">
                <a-menu-item>
                  <a href="javascript:void(0)">Project Management</a>
                </a-menu-item>
                <a-menu-item>
                  <a href="javascript:void(0)">User Inetrface Development</a>
                </a-menu-item>
                <a-menu-item>
                  <a href="javascript:void(0)">Documentation</a>
                </a-menu-item>
                <a-menu-item>
                  <a href="javascript:void(0)">Marketing</a>
                </a-menu-item>
                <a-menu-item>
                  <a href="javascript:void(0)">
                    <i class="dropdown-icon icmn-cog"/> Settings
                  </a>
                </a-menu-item>
              </a-menu>
            </a-dropdown>
          </div>
        </div>
        <div class="utils__title">
          <strong>Default Card Heading w/ Controls</strong>
        </div>
      </div>
      <div class="card-body">
        <span>Default Card Body</span>
      </div>
      <div class="card-footer">
        <span>Default Card Footer</span>
      </div>
    </section>
    <section class="row">
      <div class="col-lg-4">
        <section class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Card in Grid</strong>
            </div>
          </div>
          <div class="card-body">
            <span>
              Grid:
              <code>.col-lg-4</code>
            </span>
          </div>
          <div class="card-footer">
            <span>Default Card footer</span>
          </div>
        </section>
      </div>
      <div class="col-lg-8">
        <section class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Card in Grid</strong>
            </div>
          </div>
          <div class="card-body">
            <span>
              Grid:
              <code>.col-lg-8</code>
            </span>
          </div>
          <div class="card-footer">
            <span>Default Card footer</span>
          </div>
        </section>
      </div>
    </section>
    <section class="card">
      <div class="card-header">
        <div class="utils__title">
          <strong>Nested Cards</strong>
        </div>
      </div>
      <div class="card-body">
        <section class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Nested Card Heading: Level 1</strong>
            </div>
          </div>
          <div class="card-body">
            <section class="card">
              <div class="card-header">
                <div class="utils__title">
                  <strong>Nested Card Heading: Level 2</strong>
                </div>
              </div>
              <div class="card-body">
                <span>Nested Card body: Level 2</span>
              </div>
              <div class="card-footer">
                <span>Nested Card footer: Level 2</span>
              </div>
            </section>
            <section class="card">
              <div class="card-header">
                <div class="utils__title">
                  <strong>Nested Card Heading: Level 2</strong>
                </div>
              </div>
              <div class="card-body">
                <span>Nested Card body: Level 2</span>
              </div>
              <div class="card-footer">
                <span>Nested Card footer: Level 2</span>
              </div>
            </section>
          </div>
          <div class="card-footer">
            <span>Nested Card footer: Level 1</span>
          </div>
        </section>
      </div>
      <div class="card-footer">
        <span>Nested Cards footer</span>
      </div>
    </section>
  </div>
</template>
