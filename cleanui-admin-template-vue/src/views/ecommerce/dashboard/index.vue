<template>
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-xl-8 col-lg-12">
          <div class="mb-5">
            <a-tabs defaultActiveKey="1">
              <a-tab-pane tab="Orders" key="1">
                <a-select defaultValue="lastDay" style="width: 120px">
                  <a-select-option value="lastDay">Last Day</a-select-option>
                  <a-select-option value="lastWeek">Last Week</a-select-option>
                  <a-select-option value="lastMonth">Last Month</a-select-option>
                  <a-select-option value="last3Month">Last 3 Month</a-select-option>
                </a-select>
                <vue-chartist
                  class="height-200 mt-4"
                  type="Line"
                  :data="ordersGraph"
                  :options="chartistOptions"
                />
                <div class="row">
                  <div class="col-lg-3 col-6">
                    <div class="mb-3">
                      <div class="font-size-16 mb-2">Revenue</div>
                      <div class="font-size-20 text-black">
                        <strong>{{ordersInfo.revenue}}</strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="mb-3">
                      <div class="font-size-16 mb-2">Tax</div>
                      <div class="font-size-20 text-black">
                        <strong>{{ordersInfo.tax}}</strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="mb-3">
                      <div class="font-size-16 mb-2">Shipping</div>
                      <div class="font-size-20 text-black">
                        <strong>{{ordersInfo.shipping}}</strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="mb-3">
                      <div class="font-size-16 mb-2">Quantity</div>
                      <div class="font-size-20 text-black">
                        <strong>{{ordersInfo.quantity}}</strong>
                      </div>
                    </div>
                  </div>
                </div>
              </a-tab-pane>
              <a-tab-pane tab="Amount" key="2">
                <a-select defaultValue="lastDay" style="width: 120px">
                  <a-select-option value="lastDay">Last Day</a-select-option>
                  <a-select-option value="lastWeek">Last Week</a-select-option>
                  <a-select-option value="lastMonth">Last Month</a-select-option>
                  <a-select-option value="last3Month">Last 3 Month</a-select-option>
                </a-select>
                <vue-chartist
                  class="height-200 mt-4"
                  type="Line"
                  :data="amountGraph"
                  :options="chartistOptions"
                />
                <div class="row">
                  <div class="col-lg-3 col-6">
                    <div class="mb-3">
                      <div class="font-size-16 mb-2">Revenue</div>
                      <div class="font-size-20 text-black">
                        <strong>{{amountInfo.revenue}}</strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="mb-3">
                      <div class="font-size-16 mb-2">Tax</div>
                      <div class="font-size-20 text-black">
                        <strong>{{amountInfo.tax}}</strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="mb-3">
                      <div class="font-size-16 mb-2">Shipping</div>
                      <div class="font-size-20 text-black">
                        <strong>{{amountInfo.shipping}}</strong>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <div class="mb-3">
                      <div class="font-size-16 mb-2">Quantity</div>
                      <div class="font-size-20 text-black">
                        <strong>{{amountInfo.quantity}}</strong>
                      </div>
                    </div>
                  </div>
                </div>
              </a-tab-pane>
            </a-tabs>
          </div>
          <div>
            <a-tabs defaultActiveKey="1">
              <a-tab-pane tab="Bestsellers" key="1">
                <a-table
                  :columns="bestsellersColumns"
                  :dataSource="bestsellersData"
                  class="utils__scrollTable"
                  :scroll="{ x: '100%' }"
                >
                  <a slot="product" slot-scope="text" href="javascript: void(0);">{{text}}</a>
                  <span slot="price" slot-scope="text">${{text}}</span>
                </a-table>
              </a-tab-pane>
              <a-tab-pane tab="Most Viewed Products" key="2">
                <a-table
                  :columns="mostViewedColumns"
                  :dataSource="mostViewedData"
                  class="utils__scrollTable"
                  :scroll="{ x: '100%' }"
                >
                  <a slot="product" slot-scope="text" href="javascript: void(0);">{{text}}</a>
                  <span slot="price" slot-scope="text">${{text}}</span>
                </a-table>
              </a-tab-pane>
              <a-tab-pane tab="New Customers" key="3">
                <a-table
                  :columns="customersColumns"
                  :dataSource="newCustomersData"
                  class="utils__scrollTable"
                  :scroll="{ x: '100%' }"
                >
                  <a slot="name" slot-scope="text" href="javascript: void(0);">{{text}}</a>
                  <span slot="total" slot-scope="text">${{text}}</span>
                </a-table>
              </a-tab-pane>
              <a-tab-pane tab="Top Customers" key="4">
                <a-table
                  :columns="customersColumns"
                  :dataSource="topCustomersData"
                  class="utils__scrollTable"
                  :scroll="{ x: '100%' }"
                >
                  <span slot="total" slot-scope="text">${{text}}</span>
                </a-table>
              </a-tab-pane>
            </a-tabs>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12">
          <div class="row mb-5">
            <div class="col-xl-12 col-lg-6 col-sm-12">
              <cui-info-card form="stats-large" icon="download" type="primary"/>
            </div>
            <div class="col-xl-12 col-lg-6 col-sm-12">
              <cui-info-card form="stats-large" icon="stack" type="default"/>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-lg-12">
              <div class="font-size-16 text-black mb-3">
                <strong>Last Orders</strong>
              </div>
              <a-table
                :columns="lastOrdersColumns"
                :dataSource="lastOrdersData"
                :pagination="false"
                class="utils__scrollTable"
                :scroll="{ x: '100%' }"
              ></a-table>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-lg-12">
              <div class="font-size-16 text-black mb-3">
                <strong>Last Search Terms</strong>
              </div>
              <a-table
                :columns="searchColumns"
                :dataSource="lastSearchData"
                :pagination="false"
                class="utils__scrollTable"
                :scroll="{ x: '100%' }"
              ></a-table>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-lg-12">
              <div class="font-size-16 text-black mb-3">
                <strong>Top Search Terms</strong>
              </div>
              <a-table
                :columns="searchColumns"
                :dataSource="topSearchData"
                :pagination="false"
                class="utils__scrollTable"
                :scroll="{ x: '100%' }"
              ></a-table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import {
  ordersGraph,
  amountGraph,
  ordersInfo,
  amountInfo,
  bestsellersData,
  mostViewedData,
  newCustomersData,
  topCustomersData,
  lastOrdersData,
  lastSearchData,
  topSearchData,
} from './data.json'
import VueChartist from 'v-chartist'
import ChartistTooltip from 'chartist-plugin-tooltips-updated'
import CuiInfoCard from '@/components/CleanUIComponents/InfoCard'
const chartistOptions = {
  fullWidth: true,
  showArea: true,
  chartPadding: {
    right: 30,
    left: 0,
  },
  plugins: [
    ChartistTooltip({
      anchorToPoint: false,
      appendToBody: true,
      seriesName: false,
    }),
  ],
}

const bestsellersColumns = [
  {
    title: 'ID',
    dataIndex: 'id',
    key: 'id',
    sorter: (a, b) => a.id - b.id,
  },
  {
    title: 'Product',
    dataIndex: 'product',
    key: 'product',
    sorter: (a, b) => a.product - b.product,
    scopedSlots: { customRender: 'product' },
  },
  {
    title: 'Price',
    dataIndex: 'price',
    key: 'price',
    sorter: (a, b) => a.price - b.price,
    scopedSlots: { customRender: 'price' },
  },
  {
    title: 'Order Quantity',
    dataIndex: 'orderquantity',
    key: 'orderquantity',
    sorter: (a, b) => a.orderquantity - b.orderquantity,
  },
]

const mostViewedColumns = [
  {
    title: 'ID',
    dataIndex: 'id',
    key: 'id',
    sorter: (a, b) => a.id - b.id,
  },
  {
    title: 'Product',
    dataIndex: 'product',
    key: 'product',
    sorter: (a, b) => a.product - b.product,
    scopedSlots: { customRender: 'product' },
  },
  {
    title: 'Price',
    dataIndex: 'price',
    key: 'price',
    sorter: (a, b) => a.price - b.price,
    scopedSlots: { customRender: 'price' },
  },
  {
    title: 'Views',
    dataIndex: 'views',
    key: 'views',
    sorter: (a, b) => a.views - b.views,
  },
]

const customersColumns = [
  {
    title: 'ID',
    dataIndex: 'id',
    key: 'id',
    sorter: (a, b) => a.id - b.id,
  },
  {
    title: 'Name',
    dataIndex: 'name',
    key: 'name',
    sorter: (a, b) => a.name - b.name,
    scopedSlots: { customRender: 'name' },

  },
  {
    title: 'Date',
    dataIndex: 'date',
    key: 'date',
    sorter: (a, b) => a.date - b.date,
  },
  {
    title: 'Total',
    dataIndex: 'total',
    key: 'total',
    sorter: (a, b) => a.total - b.total,
    scopedSlots: { customRender: 'total' },
  },
]

const lastOrdersColumns = [
  {
    title: 'Customers',
    dataIndex: 'customer',
    key: 'customer',
  },
  {
    title: 'Items',
    dataIndex: 'items',
    key: 'items',
  },
  {
    title: 'Total',
    dataIndex: 'total',
    key: 'total',
    scopedSlots: { customRender: 'total' },
  },
]

const searchColumns = [
  {
    title: 'Search Term',
    dataIndex: 'searchTerm',
    key: 'searchTerm',
  },
  {
    title: 'Results',
    dataIndex: 'result',
    key: 'result',
  },
  {
    title: 'Uses',
    dataIndex: 'uses',
    key: 'uses',
  },
]

export default {
  components: {
    'vue-chartist': VueChartist,
    CuiInfoCard,
  },
  data: function () {
    return {
      ordersGraph,
      amountGraph,
      ordersInfo,
      amountInfo,
      bestsellersData,
      mostViewedData,
      newCustomersData,
      topCustomersData,
      lastOrdersData,
      lastSearchData,
      topSearchData,
      chartistOptions,
      bestsellersColumns,
      mostViewedColumns,
      customersColumns,
      lastOrdersColumns,
      searchColumns,
    }
  },
}
</script>
