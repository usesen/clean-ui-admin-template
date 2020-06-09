<template>
  <section
    :class="[$style.login, fullscreen ? $style.fullscreen : $style.windowed]"
    :style="{backgroundImage: 'url(\'resources/images/photos/' + backgroundNumber + '.jpeg\')'}"
  >
    <header :class="$style.header">
      <a href="javascript: void(0);" :class="$style.logo">
        <img src="resources/images/logo-inverse.png" alt="Clean UI Admin Template">
      </a>
      <div :class="$style.styleControls">
        <a-button
          class="mt-3 mt-xl-0"
          @click="setFullscreen"
        >Set {{fullscreen ? 'Windowed' : 'Fullscreen'}}</a-button>
        <a-button class="ml-3 mt-3 mt-xl-0" @click="changeBackground">Change Background</a-button>
      </div>
    </header>
    <div :class="$style.content">
      <div :class="$style.form">
        <div :class="$style.user">
          <cui-avatar src="resources/images/avatars/1.jpg" :bordered="true" :size="90"/>
          <p>
            <i class="icmn-lock"/>
            <strong>Artour Arteezy</strong>
          </p>
        </div>
        <a-form class="login-form">
          <a-form-item>
            <a-input type="password" placeholder="Password">
              <a-icon slot="prefix" type="lock" style="color: rgba(0,0,0,.25);"/>
            </a-input>
          </a-form-item>
          <div class="form-actions text-center">
            <button type="submit" class="btn btn-success">Unlock</button>
          </div>
          <div class="text-center">
            <a href="javascript: void(0);" class="text-default">Or sign in as a different user</a>
          </div>
        </a-form>
      </div>
    </div>
  </section>
</template>

<script>
import CuiAvatar from '@/components/CleanUIComponents/Avatar'

export default {
  components: {
    CuiAvatar,
  },
  data: function () {
    return {
      fullscreen: false,
      backgroundNumber: 1,
    }
  },
  methods: {
    changeBackground() {
      if (this.backgroundNumber === 5) {
        this.backgroundNumber = 1
      } else {
        this.backgroundNumber += 1
      }
    },
    setFullscreen() {
      this.fullscreen = !this.fullscreen
    },
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
