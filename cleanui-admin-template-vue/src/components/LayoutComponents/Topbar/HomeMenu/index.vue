<template>
  <a-dropdown :trigger="['click']" placement="bottomLeft">
    <div :class="$style.dropdown">
      <i class="icmn-home"></i>
    </div>
    <a-menu slot="overlay" :class="$style.activity">
      <a-menu-item :class="$style.item">
        <i :class="$style.icon" class="icmn-star-full"></i>
        <div :class="$style.inner">
          <div :class="$style.title">
            <span class="pull-right">now</span>
            <a href="javascript: void(0);">
              Update Status:
              <span class="badge badge-danger">New</span>
            </a>
            <div :class="$style.descr">
              Failed to get available update data. To ensure the proper functioning of your
              application, update now.
            </div>
          </div>
        </div>
      </a-menu-item>
      <a-menu-item :class="$style.item">
        <i :class="$style.icon" class="icmn-stack"></i>
        <div :class="$style.inner">
          <div :class="$style.title">
            <span class="pull-right">24 min ago</span>
            <a href="javascript: void(0);">
              Income:
              <span class="badge badge-default">$299.00</span>
            </a>
            <div :class="$style.descr">
              Failed to get available update data. To ensure the proper functioning of your
              application, update now.
            </div>
          </div>
        </div>
      </a-menu-item>
      <a-menu-item :class="$style.item">
        <i :class="$style.icon" class="icmn-list"></i>
        <div :class="$style.inner">
          <div :class="$style.title">
            <span class="pull-right">30 min ago</span>
            <a href="javascript: void(0);">Inbox Message</a>
            <div :class="$style.descr">
              From:
              <a href="javascript: void(0);">David Bowie</a>
            </div>
          </div>
        </div>
      </a-menu-item>
      <a-menu-item :class="$style.item">
        <i :class="$style.icon" class="icmn-home"></i>
        <div :class="$style.inner">
          <div :class="$style.title">
            <span class="pull-right">now</span>
            <a href="javascript: void(0);">
              Update Status:
              <span class="badge badge-primary">New</span>
            </a>
            <div :class="$style.descr">
              Failed to get available update data. To ensure the proper functioning of your
              application, update now.
            </div>
          </div>
        </div>
      </a-menu-item>
      <a-menu-item :class="$style.item">
        <i :class="$style.icon" class="icmn-loop"></i>
        <div :class="$style.inner">
          <div :class="$style.title">
            <span class="pull-right">24 min ago</span>
            <a href="javascript: void(0);">
              Income:
              <span class="badge badge-warning">$299.00</span>
            </a>
            <div :class="$style.descr">
              Failed to get available update data. To ensure the proper functioning of your
              application, update now.
            </div>
          </div>
        </div>
      </a-menu-item>
      <a-menu-item :class="$style.item">
        <i :class="$style.icon" class="icmn-cog"></i>
        <div :class="$style.inner">
          <div :class="$style.title">
            <a href="javascript: void(0);">Settings</a>
          </div>
        </div>
      </a-menu-item>
    </a-menu>
  </a-dropdown>
</template>

<style lang="scss" module>
@import "./style.module.scss";
</style>
