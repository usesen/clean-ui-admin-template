<template>
  <div>
    <div class="row">
      <div class="col-lg-12 col-xl-6">
        <div class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Account Information</strong>
            </div>
            <div class="utils__titleDescription">Block with important Account information</div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-xl-12">
                <cui-profile-head-card/>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Work Progress</strong>
            </div>
            <div class="utils__titleDescription">Block with important Work Progress information</div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-xl-12">
                <cui-progress-group/>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Employees</strong>
            </div>
            <div class="utils__titleDescription">Block with Employees important information</div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <cui-user-card type="primary"/>
              </div>
              <div class="col-md-6">
                <cui-user-card/>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Task Table</strong>
            </div>
            <div class="utils__titleDescription">Block with important Task Table information</div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <a-table
                  :columns="taskTableColumns"
                  :dataSource="taskTableData"
                  :pagination="false"
                  :rowSelection="rowSelection"
                  class="utils__scrollTable"
                  :scroll="{ x: '100%' }"
                >
                  <a slot="name" slot-scope="text" href="javascript: void(0);">{{text}}</a>
                  <a slot="username" slot-scope="username" href="javascript: void(0);">{{username}}</a>
                  <a-dropdown slot="actions">
                    <a-button size="small">Actions
                      <a-icon type="down"/>
                    </a-button>
                    <a-menu slot="overlay">
                      <a-menu-item>
                        <a href="javascript:;">1st menu item</a>
                      </a-menu-item>
                      <a-menu-item>
                        <a href="javascript:;">2nd menu item</a>
                      </a-menu-item>
                      <a-menu-item>
                        <a href="javascript:;">3rd menu item</a>
                      </a-menu-item>
                    </a-menu>
                  </a-dropdown>
                </a-table>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Information Cards</strong>
            </div>
            <div class="utils__titleDescription">Block with important Information Cards information</div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <cui-info-card form="interactive" icon="database" type="danger"/>
              </div>
              <div class="col-md-6">
                <cui-info-card form="interactive" icon="database" btnType="success" type="success"/>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-xl-6">
        <div class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Server Info</strong>
            </div>
            <div class="utils__titleDescription">Block with important Server Info information</div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <cui-slider-card/>
              </div>
              <div class="col-lg-6">
                <cui-slider-card :inverse="true"/>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Server Statistics</strong>
            </div>
            <div class="utils__titleDescription">Block with important Server Statistics information</div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <cui-info-card form="stats" icon="database" type="primary"/>
                <cui-info-card form="stats" icon="users" type="empty"/>
              </div>
              <div class="col-lg-6">
                <cui-info-card form="stats" icon="bullhorn" type="success"/>
                <cui-info-card form="stats" icon="price-tags" type="empty"/>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Server Configuration</strong>
            </div>
            <div
              class="utils__titleDescription"
            >Block with important Server Configuration information</div>
          </div>
          <div class="card-body">
            <div class="mb-5">
              <a-slider :marks="rangeMarks" :defaultValue="rangeSlider.first"/>
            </div>
            <div class="mb-5">
              <a-slider range :marks="rangeMarks" :defaultValue="rangeSlider.second"/>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Week Revenue Statistics, Billions</strong>
            </div>
            <cui-donut type="primary" name="Nuts"/>
            <cui-donut type="success" name="Apples"/>
            <cui-donut color="yellow" name="Peaches"/>
          </div>
          <div class="card-body">
            <vue-chartist
              class="height-300 mt-4"
              type="Line"
              :data="weekChartistData"
              :options="weekChartistOptions"
            />
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Month Site Visits Growth, %</strong>
            </div>
            <cui-donut type="primary" name="Income"/>
            <cui-donut type="success" name="Outcome"/>
          </div>
          <div class="card-body">
            <vue-chartist
              class="height-300 mt-4"
              type="Bar"
              :data="monthCartistData"
              :options="monthChartistOptions"
            />
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Chat</strong>
            </div>
            <div class="utils__titleDescription">Block with important Information Cards information</div>
          </div>
          <div class="card-body">
            <cui-chat/>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <div class="col-lg-3">
                <cui-info-card form="bordered" icon="home" type="danger"/>
              </div>
              <div class="col-lg-3">
                <cui-info-card form="bordered" icon="key" type="primary"/>
              </div>
              <div class="col-lg-3">
                <cui-info-card form="bordered" icon="play2" type="warning"/>
              </div>
              <div class="col-lg-3">
                <cui-info-card form="bordered" icon="database" type="sucess"/>
              </div>
            </div>
          </div>
          <div class="card-body">
            <a-table
              :columns="tableColumns"
              :dataSource="tableData"
              :pagination="false"
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
                <a-button
                  @click="() => handleReset(clearFilters)"
                  size="small"
                  style="width: 90px"
                >Reset</a-button>
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
            </a-table>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Calendar</strong>
            </div>
            <div class="utils__titleDescription">Block with important Calendar information</div>
          </div>
          <div class="card-body">
            <a-calendar>
              <ul class="events" slot="dateCellRender" slot-scope="value">
                <li v-for="item in getListData(value)" :key="item.content">
                  <a-badge :status="item.type" :text="item.content"/>
                </li>
              </ul>
              <template slot="monthCellRender" slot-scope="value">
                <div v-if="getMonthData(value)" class="notes-month">
                  <section>{{getMonthData(value)}}</section>
                  <span>Backlog number</span>
                </div>
              </template>
            </a-calendar>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import CuiProfileHeadCard from '@/components/CleanUIComponents/ProfileHeadCard'
import CuiProgressGroup from '@/components/CleanUIComponents/ProgressGroup'
import CuiUserCard from '@/components/CleanUIComponents/UserCard'
import CuiInfoCard from '@/components/CleanUIComponents/InfoCard'
import CuiSliderCard from '@/components/CleanUIComponents/SliderCard'
import CuiDonut from '@/components/CleanUIComponents/Donut'
import CuiChat from '@/components/CleanUIComponents/Chat'
import VueChartist from 'v-chartist'
import { taskTableData, tableData, rangeSlider, weekChartistData, monthCartistData } from './data.json'

const taskTableColumns = [
  {
    title: 'Name',
    dataIndex: 'name',
    key: 'name',
    scopedSlots: { customRender: 'name' },
  },
  {
    title: 'Username',
    dataIndex: 'username',
    key: 'username',
    scopedSlots: { customRender: 'username' },
  },
  {
    title: 'Actions',
    dataIndex: 'actions',
    key: 'actions',
    scopedSlots: { customRender: 'actions' },
  },
]

const tableColumns = [
  {
    title: 'Name',
    dataIndex: 'name',
    key: 'name',
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
    title: 'Position',
    dataIndex: 'position',
    key: 'position',
  },
  {
    title: 'Age',
    dataIndex: 'age',
    key: 'age',
    sorter: (a, b) => a.age - b.age,
  },
  {
    title: 'Office',
    dataIndex: 'office',
    key: 'office',
  },
  {
    title: 'Date',
    dataIndex: 'date',
    key: 'date',
  },
  {
    title: 'Salary',
    dataIndex: 'salary',
    key: 'salary',
    sorter: (a, b) => a.salary - b.salary,
  },
]

const rowSelection = {
  onChange: (selectedRowKeys, selectedRows) => {
    console.log(`selectedRowKeys: ${selectedRowKeys}`, 'selectedRows: ', selectedRows)
  },
  onSelect: (record, selected, selectedRows) => {
    console.log(record, selected, selectedRows)
  },
  onSelectAll: (selected, selectedRows, changeRows) => {
    console.log(selected, selectedRows, changeRows)
  },
}

const rangeMarks = {
  0: '0',
  10: '10',
  20: '20',
  30: '30',
  40: '40',
  50: '50',
  60: '60',
  70: '70',
  80: '80',
  90: '90',
  100: '100',
}

const weekChartistOptions = {
  fullWidth: true,
  showArea: false,
  chartPadding: {
    right: 30,
    left: 0,
  },
}

const monthChartistOptions = {
  seriesBarDistance: 10,
}

export default {
  components: {
    'vue-chartist': VueChartist,
    CuiProfileHeadCard,
    CuiProgressGroup,
    CuiUserCard,
    CuiInfoCard,
    CuiSliderCard,
    CuiDonut,
    CuiChat,
  },
  data: function () {
    return {
      taskTableColumns,
      taskTableData,
      rowSelection,
      tableData,
      tableColumns,
      searchText: '',
      searchInput: null,
      rangeMarks,
      rangeSlider,
      weekChartistData,
      weekChartistOptions,
      monthCartistData,
      monthChartistOptions,
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
    getListData(value) {
      let listData
      switch (value.date()) {
        case 8:
          listData = [
            { type: 'warning', content: 'This is warning event.' },
            { type: 'success', content: 'This is usual event.' },
          ]; break
        case 10:
          listData = [
            { type: 'warning', content: 'This is warning event.' },
            { type: 'success', content: 'This is usual event.' },
            { type: 'error', content: 'This is error event.' },
          ]; break
        case 15:
          listData = [
            { type: 'warning', content: 'This is warning event' },
            { type: 'success', content: 'This is very long usual event。。....' },
            { type: 'error', content: 'This is error event 1.' },
            { type: 'error', content: 'This is error event 2.' },
            { type: 'error', content: 'This is error event 3.' },
            { type: 'error', content: 'This is error event 4.' },
          ]; break
        default:
      }
      return listData || []
    },
    getMonthData(value) {
      if (value.month() === 8) {
        return 1394
      }
    },
  },
}
</script>

<style scoped>
.custom-filter-dropdown {
  padding: 8px;
  border-radius: 4px;
  background: #fff;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
}

.highlight {
  background-color: rgb(255, 192, 105);
  padding: 0px;
}

.events {
  list-style: none;
  margin: 0;
  padding: 0;
}
.events .ant-badge-status {
  overflow: hidden;
  white-space: nowrap;
  width: 100%;
  text-overflow: ellipsis;
  font-size: 12px;
}
.notes-month {
  text-align: center;
  font-size: 28px;
}
.notes-month section {
  font-size: 28px;
}
</style>
