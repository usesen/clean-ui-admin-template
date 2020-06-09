<template>
  <div :class="$style.bitcoinPrice">
    <span>Bitcoin:</span>
    <span :class="$style.bitcoinGraph">
      <peity
        :type="'line'"
        :options="{ 'fill': ['#72cfff'], 'stroke': '#01a8fe', 'height': 15, 'width': 40, 'strokeWidth': 1, }"
        :data="lineDataDinamycFirst"
      ></peity>
    </span>
    <span>+20%</span>
  </div>
</template>

<script>
import Peity from 'vue-peity'

export default {
  components: {
    Peity,
  },
  data: function () {
    return {
      dynamicDataFirst: [5, 3, 9, 6, 5, 9, 7, 3, 5, 2, 5, 3, 9, 6, 5, 9, 7, 3, 5, 2],
    }
  },
  computed: {
    lineDataDinamycFirst() {
      return this.dynamicDataFirst.toString()
    },
  },
  created() {
    setInterval(() => {
      this.dynamicDataFirst.unshift(this.dynamicDataFirst.pop())
    }, 377)
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
