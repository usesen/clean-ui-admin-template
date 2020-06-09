<template>
  <div class="card">
    <div class="card-header">
      <div class="utils__title">
        <strong>Product List</strong>
      </div>
    </div>
    <div class="card-body">
      <a-table
        :columns="columns"
        :dataSource="data"
        class="utils__scrollTable"
        :scroll="{ x: '100%' }"
      >
        <a
          slot="id"
          slot-scope="value"
          class="utils__link--underlined"
          href="javascript: void(0);"
        >#{{value}}</a>
        <a
          slot="thumbnail"
          slot-scope="value"
          :class="$style.thumbnail"
          href="javascript: void(0);"
        >
          <img :src="value">
        </a>
        <div
          slot="filterDropdown"
          slot-scope="{ setSelectedKeys, selectedKeys, confirm, clearFilters, column }"
          class="custom-filter-dropdown"
        >
          <a-input
            v-ant-ref="c => searchInput = c"
            :placeholder="`Search ${column.dataIndex}`"
            :value="selectedKeys[0]"
            @change="e => setSelectedKeys(e.target.value ? [e.target.value] : [])"
            @pressEnter="() => handleSearch(selectedKeys, confirm)"
            style="width: 188px; margin-bottom: 8px; display: block;"
          />
          <a-button
            type="primary"
            @click="() => handleSearch(selectedKeys, confirm)"
            icon="search"
            size="small"
            style="width: 90px; margin-right: 8px"
          >Search</a-button>
          <a-button @click="() => handleReset(clearFilters)" size="small" style="width: 90px">Reset</a-button>
        </div>
        <a-icon
          slot="filterIcon"
          slot-scope="filtered"
          type="search"
          :style="{ color: filtered ? '#108ee9' : undefined }"
        />
        <template slot="customRender" slot-scope="text">
          <span v-if="searchText">
            <template
              v-for="(fragment, i) in text.toString().split(new RegExp(`(?<=${searchText})|(?=${searchText})`, 'i'))"
            >
              <mark
                v-if="fragment.toLowerCase() === searchText.toLowerCase()"
                :key="i"
                class="highlight"
              >{{fragment}}</mark>
              <template v-else>{{fragment}}</template>
            </template>
          </span>
          <template v-else>{{text}}</template>
        </template>
        <span slot="price" slot-scope="value">${{value}}</span>
        <span
          slot="status"
          slot-scope="value"
          class="font-size-12 badge"
          :class="[value === 'Enabled' ? 'badge-success' : 'badge-danger']"
        >{{value}}</span>
        <span slot="action">
          <a-button icon="edit" size="small" class="mr-1">View</a-button>
          <a-button icon="cross" size="small">Remove</a-button>
        </span>
      </a-table>
    </div>
  </div>
</template>

<script>
import { data } from './data.json'

export default {
  data: function () {
    return {
      data,
      searchText: '',
      searchInput: null,
      columns: [
        {
          title: 'ID',
          dataIndex: 'id',
          key: 'id',
          sorter: (a, b) => a.id - b.id,
          scopedSlots: {
            customRender: 'id',
          },
        },
        {
          title: 'Thumbnail',
          dataIndex: 'thumbnail',
          key: 'thumbnail',
          scopedSlots: {
            customRender: 'thumbnail',
          },
        },
        {
          title: 'Name',
          dataIndex: 'name',
          key: 'name',
          sorter: (a, b) => a.name.length - b.name.length,
          scopedSlots: {
            filterDropdown: 'filterDropdown',
            filterIcon: 'filterIcon',
            customRender: 'customRender',
          },
          onFilter: (value, record) => record.name.toLowerCase().includes(value.toLowerCase()),
          onFilterDropdownVisibleChange: (visible) => {
            if (visible) {
              setTimeout(() => {
                this.searchInput.focus()
              }, 0)
            }
          },
        },
        {
          title: 'Type',
          dataIndex: 'type',
          key: 'type',
          sorter: (a, b) => a.type.length - b.type.length,
        },
        {
          title: 'Attribute Set',
          dataIndex: 'attribute',
          key: 'attribute',
          sorter: (a, b) => a.attribute.length - b.attribute.length,
        },
        {
          title: 'SKU',
          dataIndex: 'sku',
          key: 'sku',
          sorter: (a, b) => a.sku.length - b.sku.length,
        },
        {
          title: 'Price',
          dataIndex: 'price',
          key: 'price',
          scopedSlots: {
            customRender: 'price',
          },
        },
        {
          title: 'Quantity',
          dataIndex: 'quantity',
          key: 'quantity',
          sorter: (a, b) => a.quantity - b.quantity,
        },
        {
          title: 'Status',
          dataIndex: 'status',
          key: 'status',
          sorter: (a, b) => a.status.length - b.status.length,
          scopedSlots: {
            customRender: 'status',
          },
        },
        {
          title: 'Action',
          key: 'action',
          scopedSlots: {
            customRender: 'action',
          },
        },
      ],
    }
  },
  methods: {
    handleSearch(selectedKeys, confirm) {
      confirm()
      this.searchText = selectedKeys[0]
    },

    handleReset(clearFilters) {
      clearFilters()
      this.searchText = ''
    },
  },
}
</script>

<style lang="scss" module scoped>
@import "./style.module.scss";
</style>
