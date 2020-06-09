<template>
  <div>
    <div class="row">
      <div class="col-md-6">
        <h4 class="text-black mb-3">
          <strong>{{invoiceData.senderName}}</strong>
          <br>
          <br>
          <img class="mr-2" :src="invoiceData.senderLogo" height="50" alt="Amazon">
        </h4>
        <address>
          {{invoiceData.senderAdress}}
          <br>
          <abbr class="mr-2" title="Mail">E-mail:</abbr>
          {{invoiceData.senderEmail}}
          <br>
          <abbr class="mr-2" title="Phone">Phone:</abbr>
          {{invoiceData.senderPhone}}
          <br>
          <abbr class="mr-2" title="Fax">Fax:</abbr>
          {{invoiceData.senderFax}}
          <br>
          <br>
        </address>
      </div>
      <div class="col-md-6 text-right">
        <h4 class="text-black mb-3">
          <strong>Invoice Info</strong>
        </h4>
        <p>
          <a class="font-size-20" href="javascript: void(0);">{{invoiceData.invoiceNumber}}</a>
          <br>
          <span class="font-size-20">{{invoiceData.recipientName}}</span>
        </p>
        <address>
          {{invoiceData.recipientAdress}}
          <br>
          <abbr class="mr-2" title="Phone">P:</abbr>
          {{invoiceData.recipientPhone}}
          <br>
        </address>
        <span>Invoice Date: {{invoiceData.invoiceDate}}</span>
        <br>
        <span>Due Date: {{invoiceData.invoiceDueDate}}</span>
        <br>
        <br>
      </div>
    </div>
    <a-table
      :columns="columns"
      :dataSource="invoiceContent"
      :pagination="false"
      class="utils__scrollTable"
      :scroll="{ x: '100%' }"
    ></a-table>
    <div class="text-right clearfix mt-5">
      <div class="pull-right">
        <p>
          Sub - Total amount:
          <strong>
            <span>{{invoiceData.invoiceAmount}}</span>
          </strong>
        </p>
        <p>
          VAT:
          <strong>
            <span>{{invoiceData.invoiceVAT}}</span>
          </strong>
        </p>
        <p>
          <strong>
            Grand Total:
            <span>{{invoiceData.invoiceTotal}}</span>
          </strong>
        </p>
        <br>
      </div>
    </div>
    <div class="text-right">
      <a-button class="mr-2" type="primary">
        <a-icon type="check-circle-o"/>Proceed to payment
      </a-button>
      <a-button type="default">
        <a-icon type="printer"/>Print
      </a-button>
    </div>
  </div>
</template>

<script>
import { invoiceData } from './data.json'

const { invoiceContent } = invoiceData
const columns = [
  {
    title: '#',
    dataIndex: 'number',
    key: 'number',
  },
  {
    title: 'Description',
    dataIndex: 'description',
    key: 'description',
  },
  {
    title: 'Quantity',
    dataIndex: 'quantity',
    key: 'quantity',
  },
  {
    title: 'Unit Cost',
    dataIndex: 'unitcost',
    key: 'unitcost',
  },
  {
    title: 'Total',
    dataIndex: 'total',
    key: 'total',
  },
]

export default {
  name: 'CuiInvoice',
  data: function () {
    return {
      columns,
      invoiceData,
      invoiceContent,
    }
  },
}
</script>
