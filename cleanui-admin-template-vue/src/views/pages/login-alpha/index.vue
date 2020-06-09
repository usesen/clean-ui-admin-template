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
      <nav :class="$style.loginNav">
        <ul :class="$style.navItems">
          <li>
            <a href="javascript: void(0);">&larr; Back</a>
          </li>
          <li>
            <a :class="$style.active" href="javascript: void(0);">Login</a>
          </li>
          <li>
            <a href="javascript: void(0);">About</a>
          </li>
          <li>
            <a href="javascript: void(0);">Support</a>
          </li>
        </ul>
      </nav>
    </header>
    <div :class="$style.content">
      <div :class="$style.promo">
        <h1 class="mb-3 text-white">Welcome to Clean UI admin template</h1>
        <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
          Ipsum has been the industry&#39;s standard dummy text ever since the 1500s.
        </p>
      </div>
      <div :class="$style.form">
        <p :class="$style.formTitle">Please log in</p>
        <a-form class="login-form" :form="form">
          <a-form-item label="Username">
            <a-input
              placeholder="Username"
              v-decorator="['username', {rules: [{ required: true, message: 'Please input your username!' }]}]"
            >
              <a-icon slot="prefix" type="user" style="color: rgba(0,0,0,.25);"/>
            </a-input>
          </a-form-item>
          <a-form-item label="Password">
            <a-input
              placeholder="Password"
              v-decorator="['password', {rules: [{ required: true, message: 'Please input your Password!' }]}]"
            >
              <a-icon slot="prefix" type="lock" style="color: rgba(0,0,0,.25);"/>
            </a-input>
          </a-form-item>
          <a-form-item>
            <a-checkbox
              v-decorator="['remember', { valuePropName: 'checked', initialValue: true,}]"
            >Remember me</a-checkbox>
            <a
              class="pull-right text-primary"
              style="line-height: 39px;"
              href="javascript: void(0);"
            >Forgot password?</a>
          </a-form-item>
          <div class="form-actions">
            <a-button type="primary" htmlType="submit" class="login-form-button">Sign in</a-button>
            <span class="ml-3 register-link">
              <a
                href="javascript: void(0);"
                class="text-primary utils__link--underlined mr-1"
              >Register</a> if you don&#39;t have account
            </span>
          </div>
          <div class="form-group">
            <p>Use another service to Log In</p>
            <div class="mt-2">
              <a href="javascript: void(0);" class="btn btn-icon mr-2">
                <i class="icmn-facebook"/>
              </a>
              <a href="javascript: void(0);" class="btn btn-icon mr-2">
                <i class="icmn-google"/>
              </a>
              <a href="javascript: void(0);" class="btn btn-icon mr-2">
                <i class="icmn-windows"/>
              </a>
              <a href="javascript: void(0);" class="btn btn-icon mr-2">
                <i class="icmn-twitter"/>
              </a>
            </div>
          </div>
        </a-form>
      </div>
    </div>
    <footer :class="$style.footer">
      <ul :class="$style.footerNav">
        <li>
          <a href="javascript: void(0);">Terms of Use</a>
        </li>
        <li>
          <a href="javascript: void(0);">Compliance</a>
        </li>
        <li>
          <a href="javascript: void(0);">Confidential Information</a>
        </li>
        <li>
          <a href="javascript: void(0);">Support</a>
        </li>
        <li>
          <a href="javascript: void(0);">Contacts</a>
        </li>
      </ul>
    </footer>
  </section>
</template>

<script>
export default {
  data: function () {
    return {
      form: this.$form.createForm(this),
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
