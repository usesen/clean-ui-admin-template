<template>
  <div :class="$style.card">
    <div :class="$style.head" :style="{ backgroundImage: 'url(' + user.cover + ')'}">
      <h2 class="text-white">
        <strong>{{user.mind}}</strong>
      </h2>
    </div>
    <div :class="$style.left">
      <cui-avatar :src="user.avatar" :size="90" :borderColor="'white'" :bordered="true"/>
      <strong class="d-block">{{user.name}}</strong>
      <span class="text-muted">{{user.link}}</span>
    </div>
    <div :class="$style.right">
      <p>{{user.description}}</p>
    </div>
  </div>
</template>

<script>
import { user } from './data.json'
import CuiAvatar from '@/components/CleanUIComponents/Avatar'

export default {
  name: 'CuiProfileHeadCard',
  components: {
    CuiAvatar,
  },
  data: function () {
    return {
      user,
    }
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
