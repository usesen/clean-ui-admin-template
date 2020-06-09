<template>
  <div>
    <div :class="$style.block">
      <div class="row">
        <div class="col-xl-12">
          <div :class="$style.inner">
            <div :class="$style.form">
              <h4 class="text-uppercase">
                <strong>Restore password</strong>
              </h4>
              <a-form class="login-form" :form="form">
                <a-form-item label="Email">
                  <a-input
                    placeholder="Email"
                    v-decorator="['email', { initialValue: 'admin@mediatec.org', rules: [{ required: true, message: 'Please input your username!' }]}]"
                  >
                    <a-icon slot="prefix" type="user" style="color: rgba(0,0,0,.25);"/>
                  </a-input>
                </a-form-item>
                <div>
                  <router-link
                    class="text-primary utils__link--blue utils__link--underlined"
                    to="/user/login"
                  >Forgot password?</router-link>
                </div>
                <div class="form-actions">
                  <a-button
                    type="primary"
                    htmlType="submit"
                    class="login-form-button width-150"
                  >Restore Password</a-button>
                </div>
              </a-form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      form: this.$form.createForm(this),
    }
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
