<template>
  <div class="card" :class="$style.mail">
    <div :class="$style.sidebar">
      <div :class="$style.sidebarHeader">
        <a-input-search placeholder="Input search text" style="width: 100%"/>
      </div>
      <div :class="$style.tabs">
        <a-tabs tabPosition="left" v-model="activeCategory" @change="changeMailCategory">
          <a-tab-pane v-for="category in mailCategories" :key="category.key">
            <div :class="$style.tab" slot="tab">
              <div :class="$style.tabContent">
                <div class="mb-1">
                  <strong>{{category.mailCount > 0 ? category.title + '(' + category.mailCount + ')' : category.title}}</strong>
                </div>
                <div v-if="category.mailCount > 0">
                  <small :class="$style.tabTime">8:34PM</small>
                  <div :class="$style.tabName">Barak Obama</div>
                  <div
                    :class="$style.tabText"
                  >Hello! Where you are now? I want to talk. Hello! Where you are now? I want to talk</div>
                </div>
              </div>
            </div>
          </a-tab-pane>
        </a-tabs>
      </div>
    </div>
    <div :class="$style.content">
      <div :class="$style.contentHeader">
        <div class="card-header clearfix">
          <div class="pull-right">
            <a-button type="primary">Compose mail</a-button>
          </div>
          <a-tabs defaultActiveKey="2">
            <a-tab-pane key="1">
              <span slot="tab">
                <a-icon type="home"/>Primary
              </span>
            </a-tab-pane>
            <a-tab-pane key="2">
              <span slot="tab">
                <a-icon type="message"/>Social
              </span>
            </a-tab-pane>
            <a-tab-pane key="3">
              <span slot="tab">
                <a-icon type="tags"/>Promotion
              </span>
            </a-tab-pane>
          </a-tabs>
        </div>
      </div>
      <div :class="$style.contentWrapper">
        <a-table
          :columns="columns"
          :dataSource="mails"
          class="utils__scrollTable"
          :scroll="{ x: '100%' }"
        >
          <i
            slot="favorites"
            slot-scope="value"
            :class="[value === true ? 'icmn-star-full text-warning' : 'icmn-star-full text-default']"
          />
          <a slot="from" slot-scope="text" href="javascript: void(0);">{{text}}</a>
          <i
            slot="attachments"
            slot-scope="value"
            v-if="value=== true"
            class="icmn-attachment text-default"
          />
        </a-table>
      </div>
    </div>
  </div>
</template>

<script>
import { mailData } from './data.json'

const columns = [
  {
    title: '',
    dataIndex: 'favorites',
    key: 'favorites',
    scopedSlots: { customRender: 'favorites' },
  },
  {
    title: 'From',
    dataIndex: 'from',
    key: 'from',
    sorter: (a, b) => a.from.length - b.from.length,
    scopedSlots: { customRender: 'from' },
  },
  {
    title: 'Message',
    dataIndex: 'message',
    key: 'message',
    sorter: (a, b) => a.message.length - b.message.length,
  },
  {
    title: '',
    dataIndex: 'attachments',
    key: 'attachments',
    scopedSlots: { customRender: 'attachments' },
  },
  {
    title: '',
    dataIndex: 'time',
    key: 'time',
  },
]

export default {
  data: function () {
    return {
      mailData,
      mailCategories: mailData.mailCategories,
      activeCategory: 'inbox',
      mails: mailData.inbox,
      columns,
    }
  },
  methods: {
    changeMailCategory(key) {
      this.activeMailKey = key
      this.mails = mailData[key]
    },
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
