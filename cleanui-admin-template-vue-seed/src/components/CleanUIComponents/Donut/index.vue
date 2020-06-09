<template>
  <span class="mr-2 text-nowrap">
    <span
      :class="[$style.donut, color === undefined ? $style[type] : '']"
      :style="[color !== undefined ? { borderColor: color } : {}]"
    />
    {{name}}
  </span>
</template>

<script>
export default {
  name: 'CuiDonut',
  props: {
    name: {
      type: String,
      default: 'Donut',
    },
    type: {
      type: String,
      default: 'default',
    },
    color: {
      type: String,
      default: undefined,
    },
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
