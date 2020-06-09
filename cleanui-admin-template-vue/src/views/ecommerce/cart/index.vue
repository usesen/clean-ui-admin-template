<template>
  <div class="card">
    <div class="card-body">
      <a-steps :current="current">
        <a-step title="Cart">
          <a-icon type="user" style="font-size: 40px;" slot="icon"/>Cart
        </a-step>
        <a-step title="Shipment and Payment">
          <a-icon type="tags" style="font-size: 40px;" slot="icon"/>Cart
        </a-step>
        <a-step title="Confirmation">
          <a-icon type="credit-card" style="font-size: 40px;" slot="icon"/>Cart
        </a-step>
      </a-steps>
      <div :class="$style.stepsContent">
        <div v-if="current === 0">
          <a-table
            :columns="columns"
            :dataSource="ordersTableData"
            :pagination="false"
            class="utils__scrollTable"
            :scroll="{ x: '100%' }"
          >
            <a
              href="javascript: void(0);"
              slot="description"
              slot-scope="text"
              class="utils__link"
            >{{text}}</a>
            <a-input-number
              slot="quantity"
              slot-scope="value"
              size="small"
              :min="1"
              :defaultValue="+value"
            />
            <a-button size="small" slot="actions">
              <a-icon type="cross"/>Remove
            </a-button>
          </a-table>
          <div class="text-right clearfix mt-4">
            <div class="pull-right">
              <p>
                Sub - Total amount:
                <strong>
                  <span>{{invoicePrices.invoiceAmount}}</span>
                </strong>
              </p>
              <p>
                VAT:
                <strong>
                  <span>{{invoicePrices.invoiceVAT}}</span>
                </strong>
              </p>
              <p>
                <strong>
                  Grand Total:
                  <span>{{invoicePrices.invoiceTotal}}</span>
                </strong>
              </p>
              <br>
            </div>
          </div>
        </div>
        <div v-if="current === 1">
          <div class="row">
            <div class="col-md-8">
              <h4 class="text-black mb-3">Shipment Details</h4>
              <a-form :form="form">
                <div class="row">
                  <div class="col-md-6">
                    <a-form-item label="Email">
                      <a-input
                        placeholder="Email"
                        v-decorator="['email', {rules: [{required: true, message: 'Please input your Email!'}]}]"
                      />
                    </a-form-item>
                  </div>
                  <div class="col-md-6">
                    <a-form-item label="Phone Number">
                      <a-input
                        placeholder="Phone Number"
                        v-decorator="['phoneNumber', {rules: [{required: true, message: 'Please input your Phone Number!'}]}]"
                      />
                    </a-form-item>
                  </div>
                  <div class="col-md-6">
                    <a-form-item label="Name">
                      <a-input
                        placeholder="Name"
                        v-decorator="['name', {rules: [{required: true, message: 'Please input your Name!'}]}]"
                      />
                    </a-form-item>
                  </div>
                  <div class="col-md-6">
                    <a-form-item label="Surname">
                      <a-input
                        placeholder="Surname"
                        v-decorator="['surname', {rules: [{required: true, message: 'Please input your Surname!'}]}]"
                      />
                    </a-form-item>
                  </div>
                  <div class="col-md-12">
                    <a-form-item label="City">
                      <a-input
                        placeholder="City"
                        v-decorator="['city', {rules: [{required: true, message: 'Please input your City!'}]}]"
                      />
                    </a-form-item>
                  </div>
                  <div class="col-md-12 mb-3">
                    <a-form-item label="Adress">
                      <a-input
                        placeholder="Adress"
                        v-decorator="['city', {rules: [{required: true, message: 'Please input your Adress!'}]}]"
                      />
                    </a-form-item>
                  </div>
                  <div class="col-12">
                    <h4 class="text-black mb-3">
                      <strong>Billing Details</strong>
                    </h4>
                  </div>
                  <div class="col-md-12">
                    <a-form-item label="Card Number">
                      <a-input
                        placeholder="Card Number"
                        v-decorator="['curdnum', {rules: [{required: true, message: 'Please input your Card Number!'}]}]"
                      >
                        <a-icon type="credit-card" slot="addonBefore"/>
                      </a-input>
                    </a-form-item>
                  </div>
                  <div class="col-md-7">
                    <a-form-item label="Expiration Date">
                      <a-input
                        placeholder="Surname"
                        v-decorator="['expirationdate', {rules: [{required: true, message: 'Please input Card Expiration Date!'}]}]"
                      />
                    </a-form-item>
                  </div>
                  <div class="col-md-5">
                    <a-form-item label="Card CVC">
                      <a-input
                        placeholder="CVC"
                        v-decorator="['cardcvc', {rules: [{required: true, message: 'Please input Card CVC!'}]}]"
                      />
                    </a-form-item>
                  </div>
                  <div class="col-md-12">
                    <a-form-item label="Card Holder Name">
                      <a-input
                        placeholder="Name and Surname"
                        v-decorator="['cardholdername', {rules: [{required: true, message: 'Please input Card Holder Name!'}]}]"
                      />
                    </a-form-item>
                  </div>
                </div>
              </a-form>
            </div>
            <div class="col-md-4">
              <h4 class="text-black mb-3">
                <strong>General Info</strong>
              </h4>
              <h2>
                <i class="fa fa-cc-visa text-primary mr-1"/>
                <i class="fa fa-cc-mastercard text-default mr-1"/>
                <i class="fa fa-cc-amex text-default"/>
              </h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.
              </p>
              <p>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.
              </p>
            </div>
          </div>
        </div>
        <div v-if="current === 2">
          <cui-invoice/>
        </div>
      </div>
      <div class="text-center" :class="$style.stepsAction">
        <a-button v-if="current > 0" style="margin-left: 8px" @click="prev" class="mr-2">Previous</a-button>
        <a-button v-if="current < 2" type="primary" @click="next">Next</a-button>
      </div>
    </div>
  </div>
</template>

<script>
import { ordersTableData, invoicePrices } from './data.json'
import CuiInvoice from '@/components/CleanUIComponents/Invoice'

const columns = [
  {
    title: '#',
    dataIndex: 'number',
  },
  {
    title: 'Description',
    dataIndex: 'description',
    scopedSlots: { customRender: 'description' },
  },
  {
    title: 'Quantity',
    dataIndex: 'quantity',
    scopedSlots: { customRender: 'quantity' },
  },
  {
    title: 'Unit Cost',
    dataIndex: 'unitcost',
  },
  {
    title: 'Total',
    dataIndex: 'total',
  },
  {
    title: '',
    dataIndex: '',
    scopedSlots: { customRender: 'actions' },
  },
]
export default {
  components: {
    CuiInvoice,
  },
  data: function () {
    return {
      ordersTableData,
      invoicePrices,
      current: 0,
      columns,
      form: this.$form.createForm(this),
    }
  },
  methods: {
    next() {
      this.current++
    },
    prev() {
      this.current--
    },
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
