<template>
  <div class="card" :class="$style.card">
    <div :class="$style.chart">
      <vue-chartist :data="chartData" :options="chartOptions" type="Line"/>
    </div>
    <div v-if="amount" :class="$style.amount">{{amount}}</div>
    <div v-if="title" :class="$style.title">{{title}}</div>
  </div>
</template>

<script>
import VueChartist from 'v-chartist'

export default {
  components: {
    'vue-chartist': VueChartist,
  },
  name: 'CuiChartCard',
  props: {
    chartData: Object,
    amount: String,
    title: String,
  },
  data: function () {
    return {
      chartOptions: {
        axisX: {
          showLabel: false,
          showGrid: false,
          offset: 0,
        },
        axisY: {
          showLabel: false,
          showGrid: false,
          offset: 0,
        },
        showArea: true,
        high: {
          top: 0,
          right: 0,
          bottom: 0,
          left: 0,
        },
        chartPadding: {
          top: 0,
          right: 0,
          bottom: 0,
          left: 0,
        },
        fullWidth: true,
        height: '110px',
        showPoint: false,
      },
    }
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
