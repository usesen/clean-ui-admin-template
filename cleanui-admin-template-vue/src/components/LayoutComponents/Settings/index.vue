<template>
  <a-drawer
    title="Clean UI Settings"
    placement="right"
    :closable="true"
    @close="onClose"
    :visible="settings.isSettingsOpen"
    :zIndex="1010"
  >
    <div :class="$style.description">
      This component "Settings" gives possibility to construct custom blocks with any widgets, components and elements
      inside, like this theme settings
    </div>
    <div :class="$style.item">
      <a-switch :checked="settings.isMenuTop" @click="settingChange($event, 'isMenuTop')"/>
      <span :class="$style.itemLabel">Menu Top (Horizontal)</span>
    </div>
    <div :class="$style.item">
      <a-switch
        :checked="settings.isMenuCollapsed"
        @click="settingChange($event, 'isMenuCollapsed')"
      />
      <span :class="$style.itemLabel">Collapsed Menu</span>
    </div>
    <div :class="$style.item">
      <a-switch :checked="settings.isMenuShadow" @click="settingChange($event, 'isMenuShadow')"/>
      <span :class="$style.itemLabel">Menu Shadow</span>
    </div>
    <div :class="$style.item">
      <a-switch :checked="settings.isLightTheme" @click="settingChange($event, 'isLightTheme')"/>
      <span :class="$style.itemLabel">Light Theme</span>
    </div>
    <div :class="$style.item">
      <a-switch :checked="settings.isBorderless" @click="settingChange($event, 'isBorderless')"/>
      <span :class="$style.itemLabel">Borderless Cards</span>
    </div>
    <div :class="$style.item">
      <a-switch
        :checked="settings.isSquaredBorders"
        @click="settingChange($event, 'isSquaredBorders')"
      />
      <span :class="$style.itemLabel">Squared Borders</span>
    </div>
    <div :class="$style.item">
      <a-switch :checked="settings.isFixedWidth" @click="settingChange($event, 'isFixedWidth')"/>
      <span :class="$style.itemLabel">Fixed Width</span>
    </div>
  </a-drawer>
</template>

<script>
export default {
  name: 'cui-settings',
  props: {
    settings: Object,
  },
  methods: {
    onClose() {
      const isSettingsOpen = this.settings.isSettingsOpen
      this.$store.commit('CHANGE_SETTING', { setting: 'isSettingsOpen', value: !isSettingsOpen })
    },
    settingChange(e, setting) {
      const value = !this.settings[setting]
      this.$store.commit('CHANGE_SETTING', { setting, value })
    },
  },
}
</script>

<style lang="scss" module>
@import "@/assets/styles/mixins.scss";

.description {
  font-size: 12px;
  margin-bottom: rem(20);
  color: $text-lighten;
}

.item {
  margin-bottom: rem(15);
}

.itemLabel {
  position: relative;
  top: 2px;
  margin-left: 10px;
}
</style>
