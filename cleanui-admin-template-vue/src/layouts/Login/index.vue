<template>
  <a-layout>
    <a-layout-content>
      <div
        :class="[$style.layout, backgroundEnabled ? $style.light : '']"
        :style="{backgroundImage: backgroundEnabled ? `url(\'resources/images/photos/${backgroundNumber}.jpeg\')` : 'none'}"
      >
        <div :class="$style.header">
          <div :class="$style.logo">
            <router-link to="/">
              <img
                v-if="!backgroundEnabled"
                src="resources/images/logo.png"
                alt="Clean UI Admin Template"
              >
              <img
                v-if="backgroundEnabled"
                src="resources/images/logo-inverse.png"
                alt="Clean UI Admin Template"
              >
            </router-link>
          </div>
          <div :class="$style.controls">
            <div class="d-inline-block mr-3">
              <a-button type="default" @click="changeBackground">Change Background</a-button>
            </div>
            <div class="d-inline-block">
              <a-button type="default" @click="toggleBackground">Toggle Background</a-button>
            </div>
          </div>
          <nav :class="$style.navigation">
            <ul :class="$style.navigationItems">
              <li>
                <a href="javascript: void(0);">&larr; Back</a>
              </li>
              <li>
                <a :class="$style.navigationActive" href="javascript: void(0);">Login</a>
              </li>
              <li>
                <a href="javascript: void(0);">About</a>
              </li>
              <li>
                <a href="javascript: void(0);">Support</a>
              </li>
            </ul>
          </nav>
        </div>
        <div :class="$style.content">
          <router-view/>
        </div>
        <div :class="[$style.footer, 'text-center']">
          <ul class="list-unstyled list-inline mb-3">
            <li class="list-inline-item">
              <a href="javascript: void(0);">Terms of Use</a>
            </li>
            <li class="active list-inline-item">
              <a href="javascript: void(0);">Compliance</a>
            </li>
            <li class="list-inline-item">
              <a href="javascript: void(0);">Confidential Information</a>
            </li>
            <li class="list-inline-item">
              <a href="javascript: void(0);">Support</a>
            </li>
            <li class="list-inline-item">
              <a href="javascript: void(0);">Contacts</a>
            </li>
          </ul>
          <p>&copy; 2019 Mediatec. All rights reserved.</p>
        </div>
      </div>
    </a-layout-content>
  </a-layout>
</template>

<script>
export default {
  name: 'LoginLayout',
  data: function () {
    return {
      backgroundEnabled: false,
      backgroundNumber: 1,
    }
  },
  methods: {
    changeBackground() {
      this.backgroundEnabled = true
      if (this.backgroundNumber === 5) {
        this.backgroundNumber = 1
      } else {
        this.backgroundNumber += 1
      }
    },
    toggleBackground() {
      this.backgroundEnabled = !this.backgroundEnabled
    },
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
