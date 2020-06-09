<template>
  <div :class="$style.messaging" class="card">
    <div :class="$style.sidebar">
      <div :class="$style.sidebarHeader">
        <a-input-search placeholder="Input search text" style="width: 100%"/>
      </div>
      <div :class="$style.tabs">
        <a-tabs tabPosition="left" v-model="activeChatKey" @change="changeChat">
          <a-tab-pane v-for="chat in chats" :key="chat.companionName">
            <div :class="$style.tab" class="clearfix" slot="tab">
              <div :class="$style.tabAvatar">
                <cui-avatar
                  :src="chat.companionImg"
                  :size="50"
                  :borderColor="'white'"
                  :bordered="true"
                />
              </div>
              <div :class="$style.tabContent">
                <small :class="$style.tabTime">8:34PM</small>
                <div :class="$style.tabName">{{chat.companionName}}</div>
                <div
                  :class="$style.tabText"
                  v-html="chat.chatMessages[chat.chatMessages.length - 1].content"
                ></div>
              </div>
            </div>
          </a-tab-pane>
        </a-tabs>
      </div>
    </div>
    <div :class="$style.content">
      <div class="card-header clearfix">
        <h4 class="mt-1 mb-1 text-black d-inline-block">
          <strong>{{selectedChatData.companionName}}</strong>
        </h4>
        <div class="pull-right">
          <a-dropdown slot="actions">
            <a-button>Actions
              <a-icon type="setting"/>
            </a-button>
            <a-menu slot="overlay">
              <a-menu-item>
                <a-icon type="sound"/>Mute
              </a-menu-item>
              <a-menu-item>
                <a-icon type="delete"/>Delete chat
              </a-menu-item>
              <a-menu-item>
                <a-icon type="setting"/>Settings
              </a-menu-item>
            </a-menu>
          </a-dropdown>
        </div>
      </div>
      <div :class="$style.contentWrapper">
        <div :class="$style.chat" class="height-700">
          <div
            v-for="(message, index) in selectedChatData.chatMessages"
            :class="['clearfix', $style.item, chatsOwner === message.username ? $style.itemLeft : $style.itemRight]"
            :key="index"
          >
            <div :class="$style.itemAvatar">
              <cui-avatar :src="message.img" :bordered="false" :size="50"/>
            </div>
            <div :class="$style.itemContent">
              <strong>{{message.username}}</strong>
              <div v-html="message.content"></div>
            </div>
          </div>
        </div>
        <a-form :form="form">
          <a-form-item>
            <a-textarea placeholder="Type a message..." :rows="4"/>
            <div class="mt-3">
              <button type="submit" class="btn btn-primary width-200">
                <i class="fa fa-send mr-2"/>
                Send
              </button>
              <button class="btn btn-link" type="button">Attach File</button>
            </div>
          </a-form-item>
        </a-form>
      </div>
    </div>
  </div>
</template>

<script>
import { chatsOwner, chats } from './data.json'
import CuiAvatar from '@/components/CleanUIComponents/Avatar'

export default {
  components: {
    CuiAvatar,
  },
  data: function () {
    return {
      form: this.$form.createForm(this),
      chatsOwner,
      chats,
      activeChatKey: chats[0].companionName,
      selectedChatData: chats[0],
    }
  },
  methods: {
    changeChat(chatKey) {
      this.activeChatKey = chatKey
      this.selectedChatData = this.chats.find(item => item.companionName === chatKey)
    },
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
