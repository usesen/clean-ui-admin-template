<template>
  <div>
    <div :class="[$style.title, 'login-heading']">
      <h1>
        <strong>WELCOME TO CLEAN UI VUE - VUE REDUX ADMIN TEMPLATE</strong>
      </h1>
      <p>
        Pluggable enterprise-level vue application framework.
        <br>An excellent front-end solution for web applications built upon Ant Design.
        <br>Credentials for testing purposes -
        <strong>admin@mediatec.org</strong> /
        <strong>cleanui</strong>
      </p>
    </div>
    <div :class="$style.block">
      <div class="row">
        <div class="col-xl-12">
          <div :class="$style.inner">
            <div :class="$style.form">
              <h4 class="text-uppercase">
                <strong>Please log in</strong>
              </h4>
              <a-form class="login-form" :form="form" @submit="handleSubmit">
                <a-form-item label="Email">
                  <a-input
                    placeholder="Email"
                    v-decorator="['email', { initialValue: 'admin@mediatec.org', rules: [{ required: true, message: 'Please input your username!' }]}]"
                  >
                    <a-icon slot="prefix" type="user" style="color: rgba(0,0,0,.25);"/>
                  </a-input>
                </a-form-item>
                <a-form-item label="Password">
                  <a-input
                    placeholder="Password"
                    type="password"
                    v-decorator="['password', {initialValue: 'cleanui', rules: [{ required: true, message: 'Please input your Password!' }]}]"
                  >
                    <a-icon slot="prefix" type="lock" style="color: rgba(0,0,0,.25);"/>
                  </a-input>
                </a-form-item>
                <div>
                  <a-checkbox>Remember me</a-checkbox>
                  <router-link
                    class="pull-right text-primary utils__link--blue utils__link--underlined"
                    to="/user/forgot"
                  >Forgot password?</router-link>
                </div>
                <div class="form-actions">
                  <a-button
                    type="primary"
                    htmlType="submit"
                    class="login-form-button width-150"
                  >Sign in</a-button>
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
  methods: {
    handleSubmit(e) {
      e.preventDefault()
      this.form.validateFields((err, values) => {
        if (!err) {
          this.$nprogress.start()
          this.$auth.login(values.email, values.password)
            .then(() => {
              this.$nprogress.done()
              this.$notification['success']({
                message: 'Logged In',
                description: 'You have successfully logged in to Clean UI Vue Admin Template!',
              })
            })
            .catch((error) => {
              this.$nprogress.done()
              this.$notification['warning']({
                message: error.code,
                description: error.message,
              })
            })
        }
      })
    },
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
