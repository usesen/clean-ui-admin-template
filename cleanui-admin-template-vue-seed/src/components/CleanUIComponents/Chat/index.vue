<template>
  <div :class="$style.chat">
    <div :class="$style.messaging" class="height-300">
      <div
        v-for="(message, index) in chats"
        :key="index"
        :class="[$style.message, message.username === username ? $style.me : $style.companion]"
      >
        <div>
          <cui-avatar :src="message.img" :size="50" :bordered="false"/>
        </div>
        <div :class="$style.messageContent">
          <strong>{{message.username}}</strong>
          <p>{{message.content}}</p>
        </div>
      </div>
    </div>
    <a-form :form="form" class="mt-4 mb-0">
      <a-form-item class="mb-2">
        <a-textarea placeholder="Type message..." :rows="3"/>
      </a-form-item>
      <a-form-item>
        <button type="submit" class="btn btn-primary width-200">
          <i class="fa fa-send mr-2"/>
          Send
        </button>
        <button type="button" class="btn btn-link">Attach File</button>
      </a-form-item>
    </a-form>
  </div>
</template>

<script>
import CuiAvatar from '@/components/CleanUIComponents/Avatar'
import { chats } from './data.json'

export default {
  name: 'CuiChat',
  components: {
    CuiAvatar,
  },
  data: function () {
    return {
      chats,
      form: this.$form.createForm(this),
      username: 'Chris Evans',
    }
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
