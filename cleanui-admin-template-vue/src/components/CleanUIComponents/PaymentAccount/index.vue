<template>
  <a href="javascript: void(0);" class="card card--withShadow" :class="$style.account">
    <div v-if="icon" :class="$style.icon">
      <i :class="icon"></i>
    </div>
    <span :class="$style.number" v-if="number">{{number}}</span>
    <span :class="$style.sum" v-if="sum">{{sum}}</span>
    <span :class="$style.footer" v-if="footer">{{footer}}</span>
  </a>
</template>

<script>
export default {
  name: 'CuiPaymentAccount',
  props: {
    icon: String,
    number: String,
    sum: String,
    footer: String,
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
