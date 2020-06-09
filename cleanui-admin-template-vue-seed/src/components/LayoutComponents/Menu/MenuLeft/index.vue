<template>
  <div>
    <div :class="$style.logo">
      <div :class="$style.logoContainer">
        <img
          v-if="!settings.isMenuCollapsed || withDrawer"
          src="resources/images/logo-inverse.png"
          alt
        >
        <img
          v-if="settings.isMenuCollapsed && !withDrawer"
          src="resources/images/logo-inverse-mobile.png"
          alt
        >
      </div>
    </div>
    <div :class="settings.isLightTheme ? [$style.navigation, $style.light] : $style.navigation">
      <vue-custom-scrollbar
        :class="settings.isMobileView ? $style.scrollbarMobile : $style.scrollbarDesktop"
      >
        <a-menu
          :theme="settings.isLightTheme ? 'light' : 'dark'"
          :inlineCollapsed="withDrawer ? false : settings.isMenuCollapsed"
          :mode="'inline'"
          :selectedKeys="selectedKeys"
          :openKeys.sync="openKeys"
          @click="handleClick"
          @openChange="handleOpenChange"
        >
          <a-menu-item :key="'settings'">
            <span>
              <span :class="$style.title">Settings</span>
              <i :class="[$style.icon, 'icmn icmn-cog']"></i>
            </span>
          </a-menu-item>
          <a-menu-item :key="'docs'">
            <a href="https://docs.cleanuitemplate.com" target="_blank">
              <span :class="$style.title">Documentation</span>
              <i :class="[$style.icon, 'icmn icmn-books']"></i>
            </a>
          </a-menu-item>
          <a-menu-divider/>
          <template v-for="(item, index) in menuData">
            <item
              v-if="!item.children && !item.divider"
              :menu-info="item"
              :styles="$style"
              :key="item.key"
            />
            <a-menu-divider v-if="item.divider" :key="index"/>
            <sub-menu v-if="item.children" :menu-info="item" :styles="$style" :key="item.key"/>
          </template>
        </a-menu>
        <div :class="$style.buyPro">
          <p>
            <strong>More components, more styles, more themes, and premium support!</strong>
          </p>
          <a
            href="https://themeforest.net/item/clean-ui-react-admin-template/21938700"
            target="_blank"
            rel="noopener noreferrer"
            class="btn btn-sm btn-danger"
          >Buy Bundle 26$</a>
        </div>
      </vue-custom-scrollbar>
    </div>
  </div>
</template>

<script>
import store from 'store'
import _ from 'lodash'
import vueCustomScrollbar from 'vue-custom-scrollbar'
import { getLeftMenuData } from '@/services/menu'
import SubMenu from './partials/submenu'
import Item from './partials/item'

export default {
  name: 'menu-left',
  components: { vueCustomScrollbar, SubMenu, Item },
  props: {
    settings: Object,
    withDrawer: {
      type: Boolean,
      default: false,
    },
  },
  mounted() {
    this.openKeys = store.get('app.menu.openedKeys') || []
    this.selectedKeys = store.get('app.menu.selectedKeys') || []
    this.setSelectedKeys()
  },
  data() {
    return {
      menuData: getLeftMenuData,
      selectedKeys: [],
      openKeys: [],
    }
  },
  watch: {
    'settings.isMenuCollapsed'() {
      this.openKeys = []
    },
    '$route'() {
      this.setSelectedKeys()
    },
  },
  methods: {
    handleClick(e) {
      if (e.key === 'settings') {
        this.$store.commit('CHANGE_SETTING', { setting: 'isSettingsOpen', value: true })
        return
      }
      store.set('app.menu.selectedKeys', [e.key])
      this.selectedKeys = [e.key]
    },
    handleOpenChange(openKeys) {
      store.set('app.menu.openedKeys', openKeys)
      this.openKeys = openKeys
    },
    setSelectedKeys() {
      const pathname = this.$route.path
      const menuData = this.menuData.concat()
      const flattenItems = (items, key) =>
        items.reduce((flattenedItems, item) => {
          flattenedItems.push(item)
          if (Array.isArray(item[key])) {
            return flattenedItems.concat(flattenItems(item[key], key))
          }
          return flattenedItems
        }, [])
      const selectedItem = _.find(flattenItems(menuData, 'children'), [
        'url',
        pathname,
      ])
      this.selectedKeys = selectedItem ? [selectedItem.key] : []
    },
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
