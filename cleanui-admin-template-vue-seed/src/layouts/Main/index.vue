<template>
  <a-layout
    :class="{
      'settings__borderLess': settings.isBorderless,
      'settings__squaredBorders': settings.isSquaredBorders,
      'settings__fixedWidth': settings.isFixedWidth,
      'settings__menuShadow': settings.isMenuShadow,
      'settings__menuTop': settings.isMenuTop
    }"
  >
    <!-- left menu -->
    <a-layout-sider
      v-if="!settings.isMobileView && !settings.isMenuTop"
      :width="256"
      :class="settings.isLightTheme ? [$style.sider, $style.light] : $style.sider"
      collapsible
      :collapsed="settings.isMenuCollapsed"
      @collapse="onCollapse"
    >
      <cui-menu-left :settings="settings"/>
    </a-layout-sider>
    <!-- left menu mobile -->
    <div v-if="settings.isMobileView">
      <div :class="$style.handler" @click="toggleMobileMenu">
        <div :class="$style.handlerIcon"></div>
      </div>
      <a-drawer
        :closable="false"
        :visible="settings.isMobileMenuOpen"
        placement="left"
        :wrapClassName="$style.mobileMenu"
        @close="toggleMobileMenu"
      >
        <cui-menu-left :settings="settings" :withDrawer="true"/>
      </a-drawer>
    </div>
    <!-- top menu -->
    <cui-menu-top v-if="settings.isMenuTop && !settings.isMobileView" :settings="settings"/>

    <cui-settings :settings="settings"/>
    <a-layout>
      <a-layout-header>
        <cui-topbar/>
      </a-layout-header>
      <cui-breadcrumbs :settings="settings"/>
      <a-layout-content>
        <div class="utils__content">
          <router-view/>
        </div>
      </a-layout-content>
      <a-layout-footer>
        <cui-footer/>
      </a-layout-footer>
    </a-layout>
  </a-layout>
</template>

<script>
import { mapState } from 'vuex'
import CuiTopbar from '@/components/LayoutComponents/Topbar'
import CuiBreadcrumbs from '@/components/LayoutComponents/Breadcrumbs'
import CuiFooter from '@/components/LayoutComponents/Footer'
import CuiSettings from '@/components/LayoutComponents/Settings'
import CuiMenuLeft from '@/components/LayoutComponents/Menu/MenuLeft'
import CuiMenuTop from '@/components/LayoutComponents/Menu/MenuTop'

export default {
  name: 'MainLayout',
  components: { CuiFooter, CuiTopbar, CuiMenuLeft, CuiMenuTop, CuiBreadcrumbs, CuiSettings },
  computed: mapState(['settings']),
  mounted() {
    this.detectViewPort(true)
    window.addEventListener('resize', this.detectViewPortListener)
  },
  beforeDestroy() {
    window.removeEventListener('resize', this.detectViewPortListener)
  },
  methods: {
    toggleMobileMenu() {
      const value = !this.settings['isMobileMenuOpen']
      this.$store.commit('CHANGE_SETTING', { setting: 'isMobileMenuOpen', value })
    },
    onCollapse: function (collapsed, type) {
      const value = !this.settings['isMenuCollapsed']
      this.$store.commit('CHANGE_SETTING', { setting: 'isMenuCollapsed', value })
    },
    changeSetting: function (setting, value) {
      this.$store.commit('CHANGE_SETTING', { setting, value })
    },
    setViewPort: function (isMobileView = false, isTabletView = false) {
      this.$store.commit('CHANGE_SETTING', { setting: 'isMobileView', value: isMobileView })
      this.$store.commit('CHANGE_SETTING', { setting: 'isTabletView', value: isTabletView })
    },
    detectViewPortListener: function () {
      this.detectViewPort(false)
    },
    detectViewPort: function (firstLoad = false) {
      const isMobile = this.settings['isMobileView']
      const isTablet = this.settings['isTabletView']
      const width = window.innerWidth
      const state = {
        next: {
          mobile: width < 768,
          tablet: width < 992,
          desktop: !(width < 768) && !(width < 992),
        },
        prev: {
          mobile: isMobile,
          tablet: isTablet,
          desktop: !(isMobile) && !(isTablet),
        },
      }
      // desktop
      if (state.next.desktop && ((state.next.desktop !== state.prev.desktop) || firstLoad)) {
        this.setViewPort(false, false)
      }
      // tablet & collapse menu
      if (state.next.tablet && !state.next.mobile && ((state.next.tablet !== state.prev.tablet) || firstLoad)) {
        this.setViewPort(false, true)
        this.$store.commit('CHANGE_SETTING', { setting: 'isMenuCollapsed', value: true })
      }
      // mobile
      if (state.next.mobile && ((state.next.mobile !== state.prev.mobile) || firstLoad)) {
        this.setViewPort(true, false)
      }
    },
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
