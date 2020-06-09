<template>
  <div class="card">
    <div class="card-header">
      <div class="utils__title">
        <strong>Orders</strong>
      </div>
    </div>
    <div class="card-body">
      <a-table
        :columns="columns"
        :dataSource="data"
        class="utils__scrollTable"
        :scroll="{ x: '100%' }"
      >
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
        <a
          slot="id"
          slot-scope="text"
          href="javascript: void(0);"
          class="utils__link--underlined"
        >#{{text}}</a>
        <span slot="total" slot-scope="text">${{text}}</span>
        <span slot="tax" slot-scope="text">${{text}}</span>
        <span slot="shipping" slot-scope="text">${{text}}</span>
        <span
          slot="status"
          slot-scope="text"
          :class="[text === 'Processing' ? 'font-size-12 badge badge-primary' : 'font-size-12 badge badge-default']"
        >{{text}}</span>
        <span slot="action">
          <a-button icon="edit" class="mr-1" size="small">View</a-button>
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
          scopedSlots: { customRender: 'id' },
        },
        {
          title: 'Purchase Date',
          dataIndex: 'date',
          key: 'date',
        },
        {
          title: 'Customer',
          dataIndex: 'customer',
          key: 'customer',
          sorter: (a, b) => a.name.length - b.name.length,
          scopedSlots: {
            filterDropdown: 'filterDropdown',
            filterIcon: 'filterIcon',
            customRender: 'customer',
          },
          onFilter: (value, record) => record.customer.toLowerCase().includes(value.toLowerCase()),
          onFilterDropdownVisibleChange: (visible) => {
            if (visible) {
              setTimeout(() => {
                this.searchInput.focus()
              }, 0)
            }
          },
        },
        {
          title: 'Grand Total',
          dataIndex: 'total',
          key: 'total',
          scopedSlots: { customRender: 'total' },
          sorter: (a, b) => a.total - b.total,
        },
        {
          title: 'Tax',
          dataIndex: 'tax',
          key: 'tax',
          sorter: (a, b) => a.tax - b.tax,
          scopedSlots: { customRender: 'tax' },

        },
        {
          title: 'Shipping',
          dataIndex: 'shipping',
          key: 'shipping',
          scopedSlots: { customRender: 'shipping' },
          sorter: (a, b) => a.shipping - b.shipping,
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
          scopedSlots: { customRender: 'status' },
        },
        {
          title: 'Action',
          key: 'action',
          scopedSlots: { customRender: 'action' },
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

<style lang="scss" module>
@import "./style.module.scss";
</style>
