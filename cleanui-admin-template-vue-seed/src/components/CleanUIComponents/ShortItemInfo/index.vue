<template>
  <div :class="[$style.item, size === 'large' ? $style.large : '']">
    <div v-if="img" :class="$style.img">
      <img :src="img">
    </div>
    <div :class="$style.description">
      <h2 v-if="name" :class="$style.name">{{name}}</h2>
      <p v-if="note" :class="$style.note">{{note}}</p>
    </div>
    <div :class="$style.actionData">
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  name: 'CuiShortItemInfo',
  props: {
    name: String,
    note: String,
    img: String,
    size: String,
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
