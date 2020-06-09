<template>
  <a
    href="javascript: void(0);"
    class="card card--withShadow"
    :class="[$style.paymentTransaction, income ? $style.income : '']"
  >
    <div :class="$style.icon">
      <i :class="[income ? 'lnr lnr-arrow-left' : 'lnr lnr-arrow-right']"></i>
    </div>
    <div v-if="amount">
      <span :class="$style.amount">{{amount}}</span>
      <span :class="$style.info">{{info}}</span>
    </div>
    <div v-if="footer" :class="$style.footer">{{footer}}</div>
  </a>
</template>

<script>
export default {
  name: 'CuiPaymentTransaction',
  props: {
    income: {
      type: Boolean,
      default: false,
    },
    amount: String,
    info: String,
    footer: String,
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
