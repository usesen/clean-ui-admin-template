<template>
  <div :class="[$style.item, extended ? $style.extended : '', type ? $style[type] : '']">
    <div :class="$style.header">
      <div :class="$style.price">
        <span :class="$style.currency">{{item.currency}}</span>
        <span :class="$style.amount">{{item.amount}}</span>
        <span :class="$style.period">{{item.period}}</span>
      </div>
      <div :class="$style.title">{{item.title}}</div>
    </div>
    <ul :class="$style.features">
      <li v-for="(feature,index) in item.features" :key="index">
        <strong>{{feature.main}}</strong>
        {{feature.descr}}
      </li>
    </ul>
    <div :class="$style.footer">
      <a href="javascript: void(0);" class="btn" role="button">
        <i class="icmn-download mr-3" aria-hidden="true"/>
        {{item.btnText}}
      </a>
    </div>
  </div>
</template>

<script>
import { item } from './data.json'

export default {
  name: 'CuiPricingItem',
  props: {
    type: {
      type: String,
      default: '',
    },
    extended: {
      type: Boolean,
      default: false,
    },
  },
  data: function () {
    return {
      item,
    }
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
