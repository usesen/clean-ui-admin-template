<template>
  <a-dropdown :trigger="['click']" placement="bottomLeft">
    <div :class="$style.dropdown">
      <i class="icmn-folder-open" :class="$style.icon"></i>
      <span class="d-none d-xl-inline">
        <strong>Issues History</strong>
      </span>
    </div>
    <a-menu slot="overlay">
      <a-menu-item key="1">
        <a href="javascript: void(0);">Current search</a>
      </a-menu-item>
      <a-menu-item>
        <a href="javascript: void(0);">Search for issues</a>
      </a-menu-item>
      <a-menu-divider/>
      <a-menu-item-group title="Opened">
        <a-menu-item>
          <a href="javascript: void(0);">
            <i class="icmn-checkmark" :class="$style.menuIcon"/>
            CLNUI-253 Project implemen...
          </a>
        </a-menu-item>
        <a-menu-item>
          <a href="javascript: void(0);">
            <i class="icmn-checkmark" :class="$style.menuIcon"/>
            CLNUI-234 Active history iss...
          </a>
        </a-menu-item>
        <a-menu-item>
          <a href="javascript: void(0);">
            <i class="icmn-checkmark" :class="$style.menuIcon"/>
            CLNUI-424 Ionicons intergrat...
          </a>
        </a-menu-item>
        <a-menu-item>
          <a href="javascript: void(0);">More...</a>
        </a-menu-item>
      </a-menu-item-group>
      <a-menu-divider/>
      <a-menu-item-group title="Filters">
        <a-menu-item>
          <a href="javascript: void(0);">My open issues</a>
        </a-menu-item>
        <a-menu-item>
          <a href="javascript: void(0);">Reported by me</a>
        </a-menu-item>
      </a-menu-item-group>
      <a-menu-divider/>
      <a-menu-item>
        <a href="javascript: void(0);">
          <i class="icmn-cog" :class="$style.menuIcon"/>
          Settings
        </a>
      </a-menu-item>
    </a-menu>
  </a-dropdown>
</template>

<style lang="scss" module>
@import "./style.module.scss";
</style>
