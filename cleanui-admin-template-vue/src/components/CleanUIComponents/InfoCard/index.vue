<template>
  <div>
    <div v-if="form === 'stats'">
      <div :class="[$style.infoCard, type.length > 0 ? $style[type] : '']">
        <span v-if="icon !== false" :class="$style.digit">
          <i :class="'icmn-' + icon"></i>
        </span>
        <div :class="$style.desc">
          <span :class="$style.title">{{stats.title}}</span>
          <p>Total: {{stats.count}}</p>
        </div>
      </div>
    </div>
    <div v-if="form === 'stats-large'">
      <div :class="[$style.infoCard, type.length > 0 ? $style[type] : '']">
        <h5 class="text-uppercase mb-3 text-white">{{commerceStats.title}}</h5>
        <div class="clearfix"></div>
        <div>
          <span class="pull-right font-size-36">
            <strong>{{commerceStats.count}}</strong>
          </span>
          <i v-if="icon !== false" class="font-size-36" :class="'icmn-' + icon"></i>
        </div>
      </div>
    </div>
    <div v-if="form === 'interactive'">
      <div :class="[$style.infoCard, type.length > 0 ? $style[type] : '', 'px-3', 'py-5']">
        <div v-if="icon !== false" class="text-center font-size-30">
          <i :class="'icmn-' + icon"></i>
        </div>
        <div class="mt-2 text-center">
          <div class="mb-2">
            <p>Lorem Ipsum is simply dummy text of printing the printing and typesetti...</p>
          </div>
          <a href="javascript: void(0);" :class="['btn', 'btn-outline-' + btnType,]">Information</a>
        </div>
      </div>
    </div>
    <div v-if="form === 'bordered'">
      <div :class="[$style.infoCard, type.length > 0 ? $style[type] : '', $style.bordered]">
        <span v-if="icon !== false" :class="$style.digit">
          <i :class="'icmn-' + icon"></i>
        </span>
        <div :class="$style.desc">
          <span :class="$style.title">{{stats.title}}</span>
          <p>{{stats.descr}}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { stats, information, commerceStats } from './data.json'

export default {
  name: 'CuiInfoCard',
  props: {
    form: {
      type: String,
      default: 'stats',
    },
    icon: {
      default: 'bullhorn',
    },
    type: {
      type: String,
      default: '',
    },
    btnType: {
      type: String,
      default: 'default',
    },
  },
  data: function () {
    return {
      stats,
      information,
      commerceStats,
    }
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
