<template>
  <div class="card">
    <div class="card-body">
      <div :class="$style.head">
        <div :class="$style.name">
          <h2 v-if="title" :class="$style.title">{{title}}</h2>
          <p v-if="note" :class="$style.note">{{note}}</p>
        </div>
        <div v-if="currentValue">
          <div class="text-primary" :class="$style.value">
            <span :style="{ color: dataColor}">{{currentValue}}</span>
          </div>
        </div>
      </div>
      <div :class="$style.line">
        <a-progress
          type="line"
          :percent="percent"
          :showInfo="false"
          :strokeWidth="8"
          :strokeColor="dataColor"
        />
      </div>
      <div v-if="percent" :class="$style.lineDescr">
        <span>Change</span>
        <span>{{percent}}%</span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'CuiProgressCard',
  props: {
    title: String,
    note: String,
    currentValue: String,
    percent: Number,
    dataColor: String,
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
