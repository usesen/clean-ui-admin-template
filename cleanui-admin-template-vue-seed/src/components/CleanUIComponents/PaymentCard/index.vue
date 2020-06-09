<template>
  <a href="javascript: void(0);" class="card card--withShadow" :class="$style.paymentCard">
    <span :class="$style.sum" v-if="sum">{{sum}}</span>
    <div :class="$style.icon" v-if="icon">
      <i :class="icon"></i>
    </div>
    <span :class="$style.name" v-if="name">{{name}}</span>
    <span :class="$style.number" v-if="number">{{number}}</span>
    <span :class="$style.type" v-if="type">{{type}}</span>
    <span :class="$style.footer" v-if="footer">{{footer}}</span>
  </a>
</template>

<script>
export default {
  name: 'CuiPaymentCard',
  props: {
    sum: String,
    icon: String,
    name: String,
    number: String,
    type: String,
    footer: String,
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
