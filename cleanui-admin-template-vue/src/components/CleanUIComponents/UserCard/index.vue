<template>
  <div
    class="px-3 py-5"
    :class="[$style.userCard, type.length > 0 ? $style.typed : '', type.length > 0 ? 'bg-' + type : '',]"
  >
    <button type="button" :class="$style.plusBtn">Add</button>
    <cui-avatar
      :src="user.avatar"
      :bordered="true"
      :borderColor="type.length > 0 ? 'white' : ''"
      :size="90"
    />
    <div class="my-3 text-center">
      <div class="font-size-18" :class="$style.userName">{{user.name}}</div>
      <div :class="$style.post">{{user.post}}</div>
    </div>
    <div class="text-center">
      <div class="btn-group text-center">
        <a-radio-group size="small">
          <a-radio-button value="add">Add</a-radio-button>
          <a-radio-button value="remove">Remove</a-radio-button>
        </a-radio-group>
      </div>
    </div>
  </div>
</template>

<script>
import { user } from './data.json'
import CuiAvatar from '@/components/CleanUIComponents/Avatar'

export default {
  name: 'CuiUserCard',
  components: {
    CuiAvatar,
  },
  props: {
    type: {
      type: String,
      default: '',
    },
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
