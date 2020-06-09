<template>
  <a
    href="javascript: void(0);"
    :class="[$style.avatar, bordered ? $style.bordered : '', $style[`size${size}`],]"
    :style="{borderColor}"
  >
    <img :src="src">
  </a>
</template>

<script>
export default {
  name: 'CuiAvatar',
  props: {
    size: {
      type: Number,
      validator: val => [20, 25, 35, 50, 70, 90, 110].includes(val),
      default: 110,
    },
    bordered: {
      type: Boolean,
      default: false,
    },
    borderColor: {
      type: String,
      default: '#d2d9e5',
    },
    src: String,
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
