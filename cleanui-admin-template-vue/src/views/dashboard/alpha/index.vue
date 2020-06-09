<template>
  <div>
    <div class="utils__title mb-3">
      <strong class="text-uppercase font-size-16">Last Week Statistics</strong>
    </div>
    <div class="row">
      <div class="col-xl-4" v-for="(chartCard, index) in chartCardData" :key="index">
        <cui-chart-card
          :title="chartCard.title"
          :amount="chartCard.amount"
          :chartData="chartCard.chartData"
        />
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <div class="utils__title">
              <strong>Recently Referrals</strong>
            </div>
            <div class="utils__titleDescription">Block with important Recently Referrals information</div>
          </div>
          <div class="card-body">
            <a-table
              :columns="referalsColumns"
              :dataSource="referalsData"
              :pagination="false"
              class="utils__scrollTable"
              :scroll="{ x: '100%' }"
            ></a-table>
          </div>
        </div>
      </div>
    </div>
    <div class="utils__title utils__title--flat mb-3">
      <strong class="text-uppercase font-size-16">Your Cards (3)</strong>
      <a-button class="ml-3">View All</a-button>
    </div>
    <div class="row">
      <div class="col-lg-4" v-for="(paymentCard, index) in paymentCardsData" :key="index">
        <cui-payment-card
          :sum="paymentCard.sum"
          :icon="paymentCard.icon"
          :name="paymentCard.name"
          :number="paymentCard.number"
          :type="paymentCard.type"
          :footer="paymentCard.footer"
        />
      </div>
    </div>
    <div class="utils__title utils__title--flat mb-3">
      <strong class="text-uppercase font-size-16">Your Accounts (6)</strong>
      <a-button class="ml-3">View All</a-button>
    </div>
    <div class="row">
      <div class="col-lg-6" v-for="(paymentAccount, index) in paymentAccountsData" :key="index">
        <cui-payment-account
          :sum="paymentAccount.sum"
          :icon="paymentAccount.icon"
          :number="paymentAccount.number"
          :footer="paymentAccount.footer"
        />
      </div>
    </div>
    <div class="utils__title utils__title--flat mb-3">
      <strong class="text-uppercase font-size-16">Recent Transactions (167)</strong>
      <a-button class="ml-3">View All</a-button>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <cui-payment-transaction
          v-for="(paymentTransaction, index) in paymentTransactionsData"
          :key="index"
          :income="paymentTransaction.income"
          :amount="paymentTransaction.amount"
          :info="paymentTransaction.info"
          :footer="paymentTransaction.footer"
        />
        <div class="text-center pb-5">
          <a-button type="primary" class="width-200" :loading="true">Load More...</a-button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import data from './data.json'
import CuiChartCard from '@/components/CleanUIComponents/ChartCard'
import CuiPaymentCard from '@/components/CleanUIComponents/PaymentCard'
import CuiPaymentAccount from '@/components/CleanUIComponents/PaymentAccount'
import CuiPaymentTransaction from '@/components/CleanUIComponents/PymentTransaction'

const referalsColumns = [
  {
    title: 'Name',
    dataIndex: 'name',
    key: 'name',
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

export default {
  components: {
    CuiPaymentTransaction,
    CuiChartCard,
    CuiPaymentCard,
    CuiPaymentAccount,
  },
  data() {
    return {
      chartCardData: data.chartCardData,
      paymentAccountsData: data.paymentAccountsData,
      paymentCardsData: data.paymentCardsData,
      paymentTransactionsData: data.paymentTransactionsData,
      progressCardsData: data.progressCardsData,
      referalsData: data.referalsData,
      referalsColumns,
    }
  },

}
</script>
