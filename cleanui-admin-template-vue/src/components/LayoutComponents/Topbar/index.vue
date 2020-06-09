<template>
  <div :class="$style.topbar">
    <div class="mr-4">
      <cui-issues-history />
    </div>
    <div class="mr-4">
      <cui-project-management />
    </div>
    <div class="mr-auto">
      <cui-live-search />
    </div>
    <a
      href="https://themeforest.net/item/clean-ui-react-admin-template/21938700"
      target="_blank"
      rel="noopener noreferrer"
      class="mr-4 d-none d-sm-inline"
    >
      <a-button type="danger">Buy Bundle 26$</a-button>
    </a>
    <div class="mr-4">
      <cui-bitcoin-price />
    </div>
    <div class="mr-4">
      <cui-language-selector />
    </div>
    <div class="mr-4">
      <cui-home-menu />
    </div>
    <cui-profile-menu />
  </div>
</template>

<script>
import CuiIssuesHistory from '@/components/LayoutComponents/Topbar/IssuesHistory'
import CuiProjectManagement from '@/components/LayoutComponents/Topbar/ProjectManagement'
import CuiLiveSearch from '@/components/LayoutComponents/Topbar/LiveSearch'
import CuiBitcoinPrice from '@/components/LayoutComponents/Topbar/BitcoinPrice'
import CuiLanguageSelector from '@/components/LayoutComponents/Topbar/LanguageSelector'
import CuiHomeMenu from '@/components/LayoutComponents/Topbar/HomeMenu'
import CuiProfileMenu from '@/components/LayoutComponents/Topbar/ProfileMenu'

export default {
  components: {
    CuiIssuesHistory,
    CuiProjectManagement,
    CuiLiveSearch,
    CuiBitcoinPrice,
    CuiLanguageSelector,
    CuiHomeMenu,
    CuiProfileMenu,
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
