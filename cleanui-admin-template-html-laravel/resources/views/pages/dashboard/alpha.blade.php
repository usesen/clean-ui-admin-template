@extends ('layouts.app')

@section('content')
<!-- START: dashboard alpha -->
<div class="row">
  <div class="col-lg-12">
    <div class="cui-utils-title mb-3">
      <strong class="text-uppercase font-size-16">Last Week Statistics</strong>
    </div>
    <div class="row">
      <div class="col-xl-4">
        <div class="card cui-chart-card">
          <div class="cui-chart-card-chart">
            <div class="chart-area-1 chartist"></div>
          </div>
          <div class="cui-chart-card-amount">1240</div>
          <div class="cui-chart-card-title">Transactions</div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card cui-chart-card">
          <div class="cui-chart-card-chart">
            <div class="chart-area-2 chartist"></div>
          </div>
          <div class="cui-chart-card-amount">$1240</div>
          <div class="cui-chart-card-title">Income</div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="card cui-chart-card">
          <div class="cui-chart-card-chart">
            <div class="chart-area-3 chartist"></div>
          </div>
          <div class="cui-chart-card-amount">$240.56</div>
          <div class="cui-chart-card-title">Outcome</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <div class="cui-utils-title">
          <strong>Recently Referrals</strong>
        </div>
        <div class="cui-utils-title-description">
          Block with important Recently Referrals information
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead class="thead-default">
              <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Age</th>
                <th>Office</th>
                <th>Date</th>
                <th>Salary</th>
              </tr>
            </thead>
            <tr>
              <td>Damon</td>
              <td>5516 Adolfo Green</td>
              <td>18</td>
              <td>Littelhaven</td>
              <td>2014/06/13</td>
              <td>553.536</td>
            </tr>
            <tr>
              <td>Miracle</td>
              <td>176 Hirthe Squares</td>
              <td>35</td>
              <td>Ryleetown</td>
              <td>2013/09/27</td>
              <td>784.802</td>
            </tr>
            <tr>
              <td>Torrey</td>
              <td>1995 Richie Neck</td>
              <td>15</td>
              <td>West Sedrickstad</td>
              <td>2014/09/12</td>
              <td>344.302</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="cui-utils-title mb-3">
      <span class="text-uppercase font-size-16">
        <strong>Your Cards (3)</strong>
      </span>
      <button class="ml-3 btn btn-outline-default btn-sm">View All</button>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <a href="javascript: void(0);" class="card card-with-shadow cui-payment-card">
          <span class="cui-payment-card-sum">$560,245.35</span>
          <div class="cui-payment-card-icon">
            <i class="lnr lnr-bookmark"></i>
          </div>
          <span class="cui-payment-card-name">David Beckham</span>
          <span class="cui-payment-card-number">8748-XXXX-1678-5416</span>
          <span class="cui-payment-card-type">MASTERCARD</span>
          <div class="cui-payment-card-footer">Expires at 03/22</div>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="javascript: void(0);" class="card card-with-shadow cui-payment-card">
          <span class="cui-payment-card-sum">$2,156.78</span>
          <div class="cui-payment-card-icon">
            <i class="lnr lnr-bookmark"></i>
          </div>
          <span class="cui-payment-card-name">Matt Daemon</span>
          <span class="cui-payment-card-number">4512-XXXX-1678-7528</span>
          <span class="cui-payment-card-type">VISA</span>
          <div class="cui-payment-card-footer">Expires at 02/20</div>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="javascript: void(0);" class="card card-with-shadow cui-payment-card">
          <span class="cui-payment-card-sum">$1,467,98</span>
          <div class="cui-payment-card-icon">
            <i class="lnr lnr-hourglass"></i>
          </div>
          <span class="cui-payment-card-name">Mrs. Angelina Jolie</span>
          <span class="cui-payment-card-number">4512-XXXX-1678-7528</span>
          <span class="cui-payment-card-type">VISA</span>
          <div class="cui-payment-card-footer">Locked Temporary</div>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="cui-utils-title mb-3">
      <span class="text-uppercase font-size-16">
        <strong>your accounts (6)</strong>
      </span>
      <button class="ml-3 btn btn-outline-default btn-sm">View All</button>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <a href="javascript: void(0);" class="card card-with-shadow cui-payment-account">
          <div class="cui-payment-account-icon">
            <i class="lnr lnr-inbox"></i>
          </div>
          <span class="cui-payment-account-number">US 4658-1678-7528</span>
          <span class="cui-payment-account-sum">$2,156.78</span>
          <div class="cui-payment-account-footer">Current month charged: $10,200.00</div>
        </a>
      </div>
      <div class="col-lg-6">
        <a href="javascript: void(0);" class="card card-with-shadow cui-payment-account">
          <div class="cui-payment-account-icon">
            <i class="lnr lnr-inbox"></i>
          </div>
          <span class="cui-payment-account-number">IBAN 445646-8748-4664-1678-5416</span>
          <span class="cui-payment-account-sum">$560,245.35</span>
          <div class="cui-payment-account-footer">Current month charged: $1,276.00</div>
        </a>
      </div>
      <div class="col-lg-6">
        <a href="javascript: void(0);" class="card card-with-shadow cui-payment-account">
          <div class="cui-payment-account-icon">
            <i class="lnr lnr-inbox"></i>
          </div>
          <span class="cui-payment-account-number">US 4658-1678-7528</span>
          <span class="cui-payment-account-sum">$2,156.78</span>
          <div class="cui-payment-account-footer">Current month charged: $10,200.00</div>
        </a>
      </div>
      <div class="col-lg-6">
        <a href="javascript: void(0);" class="card card-with-shadow cui-payment-account">
          <div class="cui-payment-account-icon">
            <i class="lnr lnr-inbox"></i>
          </div>
          <span class="cui-payment-account-number">IBAN 445646-8748-4664-1678-5416</span>
          <span class="cui-payment-account-sum">$560,245.35</span>
          <div class="cui-payment-account-footer">Current month charged: $1,276.00</div>
        </a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="cui-utils-title mb-3">
      <span class="text-uppercase font-size-16">
        <strong>recent transactions (167)</strong>
      </span>
      <button class="ml-3 btn btn-outline-default btn-sm">View All</button>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <a href="javascript: void(0);" class="income card card-with-shadow cui-payment-transaction">
          <div class="cui-payment-transaction-icon">
            <i class="lnr lnr-arrow-right"></i>
          </div>
          <div>
            <span class="cui-payment-transaction-amount">-$100.00</span>
            <sup class="cui-payment-transaction-info">US 4658-1678-7528</sup>
          </div>
          <div class="cui-payment-transaction-footer">To AMAZON COPR, NY, 1756</div>
        </a>
      </div>
      <div class="col-lg-12">
        <a
          href="javascript: void(0);"
          class="income card card-with-shadow cui-payment-transaction cui-payment-transaction-income"
        >
          <div class="cui-payment-transaction-icon">
            <i class="lnr lnr-arrow-left"></i>
          </div>
          <div>
            <span class="cui-payment-transaction-amount">+27,080.00</span>
            <sup class="cui-payment-transaction-info">4512-XXXX-1678-7528</sup>
          </div>
          <div class="cui-payment-transaction-footer">
            To DigitalOcean Cloud Hosting, Winnetka, LA
          </div>
        </a>
      </div>
      <div class="col-lg-12">
        <a
          href="javascript: void(0);"
          class="income card card-with-shadow cui-payment-transaction cui-payment-transaction-income"
        >
          <div class="cui-payment-transaction-icon">
            <i class="lnr lnr-arrow-left"></i>
          </div>
          <div>
            <span class="cui-payment-transaction-amount">+100,000.00</span>
            <sup class="cui-payment-transaction-info">6245-XXXX-1678-3256</sup>
          </div>
          <div class="cui-payment-transaction-footer">To Tesla Cars, LA, USA</div>
        </a>
      </div>
    </div>
    <div class="text-center pb-5">
      <button class="btn disabled btn-primary width-200">Load More...</button>
    </div>
  </div>
</div>
<!-- END: dashboard alpha -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      ///////////////////////////////////////////////////////////
      // tooltips
      $('[data-toggle=tooltip]').tooltip()

      ///////////////////////////////////////////////////////////
      // ladda buttons
      Ladda.bind('.ladda-button', { timeout: 2000 })

      ///////////////////////////////////////////////////////////
      // Chartistcard

      new Chartist.Line(
        '.chart-area-1',
        {
          series: [[2, 11, 8, 14, 18, 20, 26]],
        },
        {
          width: '120px',
          height: '107px',

          showPoint: false,
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
          plugins: [Chartist.plugins.tooltip()],
        },
      )

      new Chartist.Line(
        '.chart-area-2',
        {
          series: [[20, 80, 67, 120, 132, 66, 97]],
        },
        {
          width: '120px',
          height: '107px',

          showPoint: false,
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
        },
      )

      new Chartist.Line(
        '.chart-area-3',
        {
          series: [[42, 40, 80, 67, 84, 20, 97]],
        },
        {
          width: '120px',
          height: '107px',

          showPoint: false,
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
        },
      )
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection