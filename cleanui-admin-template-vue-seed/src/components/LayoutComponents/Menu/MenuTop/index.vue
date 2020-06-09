<template>
  <div>
    <div :class="$style.logo">
      <div :class="$style.logoContainer">
        <img src="resources/images/logo-inverse.png" alt>
      </div>
    </div>
    <a-menu
      :theme="settings.isLightTheme ? 'light' : 'dark'"
      :mode="'horizontal'"
      :selectedKeys="selectedKeys"
      @click="handleClick"
    >
      <a-menu-item :key="'settings'">
        <span>
          <span :class="$style.title">Settings</span>
          <i :class="[$style.icon, 'icmn icmn-cog']"></i>
        </span>
      </a-menu-item>
      <a-menu-item :key="'docs'">
        <a href="https://docs.cleanuitemplate.com" target="_blank">
          <span :class="$style.title">Docs</span>
          <i :class="[$style.icon, 'icmn icmn-books']"></i>
        </a>
      </a-menu-item>
      <template v-for="item in menuData">
        <item
          v-if="!item.children && !item.divider"
          :menu-info="item"
          :styles="$style"
          :key="item.key"
        />
        <sub-menu v-if="item.children" :menu-info="item" :styles="$style" :key="item.key"/>
      </template>
    </a-menu>
  </div>
</template>

<script>
import store from 'store'
import _ from 'lodash'
import { getTopMenuData } from '@/services/menu'
import SubMenu from './partials/submenu'
import Item from './partials/item'

export default {
  name: 'menu-top',
  components: { SubMenu, Item },
  props: {
    settings: Object,
  },
  mounted() {
    this.selectedKeys = store.get('app.menu.selectedKeys') || []
    this.setSelectedKeys()
  },
  data() {
    return {
      menuData: getTopMenuData,
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
