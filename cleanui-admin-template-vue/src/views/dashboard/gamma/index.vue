<template>
  <div>
    <div class="row">
      <div class="col-xl-12">
        <div class="utils__title utils__title--flat mb-3">
          <strong class="text-uppercase font-size-16">Progress Information</strong>
        </div>
        <div class="row">
          <div class="col-lg-6" v-for="(item, index) in progressCardsData" :key="index">
            <cui-progress-card
              :title="item.title"
              :note="item.note"
              :currentValue="item.currentValue"
              :percent="+item.percent"
              :dataColor="item.dataColor"
            />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-4">
        <div class="row">
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <div class="utils__title utils__title--flat">
                  <strong class="text-uppercase font-size-16">Inbound Bandwidth</strong>
                </div>
              </div>
              <div class="card-body">
                <span class="font-size-36 font-weight-bold text-primary">246</span>
              </div>
              <vue-chartist
                class="height-200"
                type="Line"
                :data="inboundBandwidthData"
                :options="boundChartistOptions"
              />
            </div>
          </div>
          <div class="col-xl-12">
            <div class="card">
              <div class="card-header">
                <div class="utils__title utils__title--flat">
                  <strong class="text-uppercase font-size-16">Outbound Bandwidth</strong>
                </div>
              </div>
              <div class="card-body">
                <span class="font-size-36 font-weight-bold text-success">52</span>
              </div>
              <vue-chartist
                class="height-200"
                type="Line"
                :data="outboundBandwidthData"
                :options="boundChartistOptions"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card card--fullHeight">
          <div class="card-header">
            <div class="utils__title utils__title--flat">
              <strong class="text-uppercase font-size-16">Top photos</strong>
            </div>
          </div>
          <div class="card-body">
            <cui-short-item-info
              v-for="(item, index) in topPhotosData"
              :key="index"
              :img="item.img"
              :name="item.name"
              :note="item.name"
            >
              <span :style="{color: item.actionDataColor}">{{item.actionData}}</span>
            </cui-short-item-info>
          </div>
          <vue-chartist
            class="height-300"
            type="Line"
            :data="topPhotosGraphData"
            :options="boundChartistOptions"
          />
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card">
          <div class="card-header">
            <div class="utils__title utils__title--flat">
              <strong class="text-uppercase font-size-16">New Users</strong>
            </div>
          </div>
          <div class="card-body">
            <cui-short-item-info
              v-for="(item, index) in newUsersData"
              :key="index"
              :img="item.img"
              :name="item.name"
              :note="item.name"
            >
              <a href="javascript: void(0);" class="btn btn-sm btn-outline-default">Follow</a>
            </cui-short-item-info>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="card card--fullHeight">
          <div class="card-header">
            <div class="utils__title utils__title--flat">
              <strong class="text-uppercase font-size-16">Support cases</strong>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-xl-6">
                <div class="mb-3">
                  <a-table
                    :columns="supportCasesTableColumns"
                    :dataSource="supportCasesTableData"
                    :pagination="false"
                    class="utils__scrollTable"
                    :scroll="{ x: '100%' }"
                  >
                    <span
                      slot="amount"
                      slot-scope="data"
                      :class="[data === 'Negative' ? 'text-danger' : 'text-primary', 'font-weight-bold']"
                    >{{data}}</span>
                  </a-table>
                </div>
              </div>
              <div class="col-xl-6">
                <div
                  class="h-100 d-flex flex-column justify-content-center align-items-center"
                  :class="$style.chartPieExample"
                >
                  <vue-chartist
                    type="Pie"
                    :data="supportCasesPieData"
                    :options="supportCasesPieOptions"
                  />
                  <div class="text-center mt-2">
                    <span class="mr-2 mt-1 d-inline-block">
                      <cui-donut type="success" name="Ready"></cui-donut>
                    </span>
                    <span class="mr-2 mt-1 d-inline-block">
                      <cui-donut type="primary" name="In progress"></cui-donut>
                    </span>
                    <span class="mr-2 mt-1 d-inline-block">
                      <cui-donut type="danger" name="Defected"></cui-donut>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card card--fullHeight">
          <div class="card-header">
            <div class="utils__title utils__title--flat">
              <strong class="text-uppercase font-size-16">Finance Stats</strong>
            </div>
          </div>
          <div class="card-body">
            <cui-short-item-info
              v-for="(item, index) in financeStatsData"
              :key="index"
              :img="item.img"
              :name="item.name"
              :note="item.name"
              size="large"
            >
              <span :style="{color: item.actionDataColor}">{{item.actionData}}</span>
            </cui-short-item-info>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import VueChartist from 'v-chartist'
import CuiProgressCard from '@/components/CleanUIComponents/ProgressCard'
import CuiShortItemInfo from '@/components/CleanUIComponents/ShortItemInfo'
import CuiDonut from '@/components/CleanUIComponents/Donut'
import ChartistTooltip from 'chartist-plugin-tooltips-updated'
import {
  progressCardsData,
  newUsersData,
  inboundBandwidthData,
  outboundBandwidthData,
  topPhotosData,
  topPhotosGraphData,
  financeStatsData,
  supportCasesTableData,
  supportCasesPieData,
} from './data.json'

const boundChartistOptions = {
  showPoint: true,
  showLine: true,
  showArea: true,
  fullWidth: true,
  showLabel: false,
  axisX: {
    showGrid: false,
    showLabel: false,
    offset: 0,
  },
  axisY: {
    showGrid: false,
    showLabel: false,
    offset: 0,
  },
  chartPadding: 0,
  low: 0,
  plugins: [
    ChartistTooltip({
      anchorToPoint: false,
      appendToBody: true,
      seriesName: false,
    }),
  ],
}

const supportCasesPieOptions = {
  donut: true,
  donutWidth: 35,
  showLabel: false,
  fullWidth: true,
  plugins: [
    ChartistTooltip({
      anchorToPoint: false,
      appendToBody: true,
      seriesName: false,
    }),
  ],
}

const supportCasesTableColumns = [
  {
    title: 'Type',
    dataIndex: 'type',
    key: 'type',
  },
  {
    title: 'Amount',
    key: 'amount',
    dataIndex: 'amount',
    scopedSlots: { customRender: 'amount' },
  },
]

export default {
  components: {
    'vue-chartist': VueChartist,
    CuiProgressCard,
    CuiShortItemInfo,
    CuiDonut,
  },
  data: function () {
    return {
      progressCardsData,
      newUsersData,
      inboundBandwidthData,
      outboundBandwidthData,
      topPhotosData,
      topPhotosGraphData,
      financeStatsData,
      supportCasesTableData,
      supportCasesPieData,
      boundChartistOptions,
      supportCasesPieOptions,
      supportCasesTableColumns,
    }
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
