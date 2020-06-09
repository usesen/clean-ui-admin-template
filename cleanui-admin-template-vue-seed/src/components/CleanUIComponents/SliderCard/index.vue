<template>
  <div :class="[$style.card, inverse ? $style.inverse : '']">
    <a-carousel :autoplay="true">
      <div :class="$style.item">
        <a href="javascript: void(0);" :class="$style.body">
          <div :class="$style.icon">
            <i class="icmn-accessibility"/>
          </div>
          <h2>Sales Growth</h2>
          <p>View Report</p>
        </a>
      </div>
      <div :class="$style.item">
        <a href="javascript: void(0);" :class="$style.body">
          <div :class="$style.icon">
            <i class="icmn-download"/>
          </div>
          <h2>All Reports</h2>
          <p>Pdf Download</p>
        </a>
      </div>
    </a-carousel>
  </div>
</template>

<script>
export default {
  props: {
    inverse: {
      type: Boolean,
      default: false,
    },
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
