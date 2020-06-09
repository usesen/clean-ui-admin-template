@extends ('layouts.app')

@section('content')
<!-- START: dashboard gamma -->
<div class="row">
  <div class="col-xl-12">
    <div class="cui-utils-title mb-3">
      <span class="text-uppercase font-size-16">
        <strong>Progress Information</strong>
      </span>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <div class="cui-progress-card card">
          <div class="card-body">
            <div class="cui-progress-card-head">
              <div class="porgressCard-name">
                <h2 class="cui-progress-card-title">Total Profit</h2>
                <p class="cui-progress-card-note">Profit</p>
              </div>
              <div class="cui-progress-card-value text-primary">
                <span class="cui-progress-card-valueText">$18M</span>
              </div>
            </div>
            <div class="cui-progress-card-line progress">
              <div
                class="progress-bar"
                role="progressbar"
                style="width: 78%"
                aria-valuenow="78"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
            <div class="cui-progress-card-line-descr">
              <span class="cui-progress-card-line-descr-title">Change</span>
              <span class="cui-progress-card-lineValue">78%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="cui-progress-card card">
          <div class="card-body">
            <div class="cui-progress-card-head">
              <div class="porgressCard-name">
                <h2 class="cui-progress-card-title">Feedbacks</h2>
                <p class="cui-progress-card-note">Customer review</p>
              </div>
              <div class="cui-progress-card-value text-success">
                <span class="cui-progress-card-valueText">134</span>
              </div>
            </div>
            <div class="cui-progress-card-line progress">
              <div
                class="progress-bar bg-success"
                role="progressbar"
                style="width: 89%"
                aria-valuenow="89"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
            <div class="cui-progress-card-line-descr">
              <span class="cui-progress-card-line-descr-title">Change</span>
              <span class="cui-progress-card-lineValue">89%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="cui-progress-card card">
          <div class="card-body">
            <div class="cui-progress-card-head">
              <div class="porgressCard-name">
                <h2 class="cui-progress-card-title">New Orders</h2>
                <p class="cui-progress-card-note">Orders progress</p>
              </div>
              <div class="cui-progress-card-value text-danger">
                <span class="cui-progress-card-valueText">160</span>
              </div>
            </div>
            <div class="cui-progress-card-line progress">
              <div
                class="progress-bar bg-danger"
                role="progressbar"
                style="width: 55%"
                aria-valuenow="55"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
            <div class="cui-progress-card-line-descr">
              <span class="cui-progress-card-line-descr-title">Change</span>
              <span class="cui-progress-card-lineValue">55%</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="cui-progress-card card">
          <div class="card-body">
            <div class="cui-progress-card-head">
              <div class="porgressCard-name">
                <h2 class="cui-progress-card-title">New Users</h2>
                <p class="cui-progress-card-note">Joined Users</p>
              </div>
              <div class="cui-progress-card-value text-default">
                <span class="cui-progress-card-valueText">382</span>
              </div>
            </div>
            <div class="cui-progress-card-line progress">
              <div
                class="progress-bar bg-default"
                role="progressbar"
                style="width: 77%"
                aria-valuenow="77"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
            <div class="cui-progress-card-line-descr">
              <span class="cui-progress-card-line-descr-title">Change</span>
              <span class="cui-progress-card-lineValue">77%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-4">
    <div class="card card-full-height">
      <div class="card-header">
        <div class="cui-utils-title">
          <span class="text-uppercase font-size-16">
            <strong>New Users</strong>
          </span>
        </div>
      </div>
      <div class="card-body">
        <div class="cui-short-item-info">
          <div class="cui-short-item-info-img">
            <img
              src="/cleanui/components/dummy-assets/common/img/avatars/5.jpg"
              alt="Alternative text to the image"
            />
          </div>
          <div class="cui-short-item-info-description">
            <h2 class="cui-short-item-info-name">Anna Strong</h2>
            <p class="cui-short-item-info-note">Visual Designer, Google Inc</p>
          </div>
          <div class="cui-short-item-info-action-data">
            <a href="javascript: void(0);" class="btn btn-sm btn-outline-default">Follow</a>
          </div>
        </div>
        <div class="cui-short-item-info">
          <div class="cui-short-item-info-img">
            <img
              src="/cleanui/components/dummy-assets/common/img/avatars/1.jpg"
              alt="Alternative text to the image"
            />
          </div>
          <div class="cui-short-item-info-description">
            <h2 class="cui-short-item-info-name">William Vargas</h2>
            <p class="cui-short-item-info-note">Visual Designer, Mediatec</p>
          </div>
          <div class="cui-short-item-info-action-data">
            <a href="javascript: void(0);" class="btn btn-sm btn-outline-default">Follow</a>
          </div>
        </div>
        <div class="cui-short-item-info">
          <div class="cui-short-item-info-img">
            <img
              src="/cleanui/components/dummy-assets/common/img/avatars/4.jpg"
              alt="Alternative text to the image"
            />
          </div>
          <div class="cui-short-item-info-description">
            <h2 class="cui-short-item-info-name">John Faries</h2>
            <p class="cui-short-item-info-note">Project Manager, Google Inc</p>
          </div>
          <div class="cui-short-item-info-action-data">
            <a href="javascript: void(0);" class="btn btn-sm btn-outline-default">Follow</a>
          </div>
        </div>
        <div class="cui-short-item-info">
          <div class="cui-short-item-info-img">
            <img
              src="/cleanui/components/dummy-assets/common/img/avatars/2.jpg"
              alt="Alternative text to the image"
            />
          </div>
          <div class="cui-short-item-info-description">
            <h2 class="cui-short-item-info-name">Dana Porter</h2>
            <p class="cui-short-item-info-note">Developer, Twitter Inc</p>
          </div>
          <div class="cui-short-item-info-action-data">
            <a href="javascript: void(0);" class="btn btn-sm btn-outline-default">Follow</a>
          </div>
        </div>
        <div class="cui-short-item-info">
          <div class="cui-short-item-info-img">
            <img
              src="/cleanui/components/dummy-assets/common/img/avatars/3.jpg"
              alt="Alternative text to the image"
            />
          </div>
          <div class="cui-short-item-info-description">
            <h2 class="cui-short-item-info-name">Cesara Lawson</h2>
            <p class="cui-short-item-info-note">Developer, Facebook Inc</p>
          </div>
          <div class="cui-short-item-info-action-data">
            <a href="javascript: void(0);" class="btn btn-sm btn-outline-default">Follow</a>
          </div>
        </div>
        <div class="cui-short-item-info">
          <div class="cui-short-item-info-img">
            <img
              src="/cleanui/components/dummy-assets/common/img/avatars/1.jpg"
              alt="Alternative text to the image"
            />
          </div>
          <div class="cui-short-item-info-description">
            <h2 class="cui-short-item-info-name">William Vargas</h2>
            <p class="cui-short-item-info-note">Visual Designer, Mediatec</p>
          </div>
          <div class="cui-short-item-info-action-data">
            <a href="javascript: void(0);" class="btn btn-sm btn-outline-default">Follow</a>
          </div>
        </div>
        <div class="cui-short-item-info">
          <div class="cui-short-item-info-img">
            <img
              src="/cleanui/components/dummy-assets/common/img/avatars/4.jpg"
              alt="Alternative text to the image"
            />
          </div>
          <div class="cui-short-item-info-description">
            <h2 class="cui-short-item-info-name">John Faries</h2>
            <p class="cui-short-item-info-note">Project Manager, Google Inc</p>
          </div>
          <div class="cui-short-item-info-action-data">
            <a href="javascript: void(0);" class="btn btn-sm btn-outline-default">Follow</a>
          </div>
        </div>
        <div class="cui-short-item-info">
          <div class="cui-short-item-info-img">
            <img
              src="/cleanui/components/dummy-assets/common/img/avatars/2.jpg"
              alt="Alternative text to the image"
            />
          </div>
          <div class="cui-short-item-info-description">
            <h2 class="cui-short-item-info-name">Dana Porter</h2>
            <p class="cui-short-item-info-note">Developer, Twitter Inc</p>
          </div>
          <div class="cui-short-item-info-action-data">
            <a href="javascript: void(0);" class="btn btn-sm btn-outline-default">Follow</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4">
    <div class="row">
      <div class="col-xl-12">
        <div class="cui-graph-card card">
          <div class="card-header">
            <div class="cui-utils-title mb-3">
              <span class="text-uppercase font-size-16">
                <strong>Inbound Bandwidth</strong>
              </span>
            </div>
          </div>
          <div class="card-body">
            <span class="cui-graph-card-lonely-value text-primary">
              246
            </span>
          </div>
          <div class="cui-graph-card-chartist cui-graph-card-chartist-primary">
            <div class="cui-graph-card-chartistArea-1 chartist"></div>
          </div>
        </div>
      </div>
      <div class="col-xl-12">
        <div class="cui-graph-card card">
          <div class="card-header">
            <div class="cui-utils-title mb-3">
              <span class="text-uppercase font-size-16">
                <strong>Outbound Bandwidth</strong>
              </span>
            </div>
          </div>
          <div class="card-body">
            <span class="cui-graph-card-lonely-value text-success">
              52
            </span>
          </div>
          <div class="cui-graph-card-chartist cui-graph-card-chartist-success">
            <div class="cui-graph-card-chartistArea-2 chartist"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4">
    <div class="card cui-graph-card card-full-height">
      <div class="card-header">
        <div class="cui-utils-title">
          <span class="text-uppercase font-size-16">
            <strong>Top photos</strong>
          </span>
        </div>
      </div>
      <div class="card-body">
        <div class="cui-short-item-info">
          <div class="cui-short-item-info-img">
            <img
              src="/cleanui/components/dummy-assets/common/img/photos/1.jpeg"
              alt="Alternative text to the image"
            />
          </div>
          <div class="cui-short-item-info-description">
            <h2 class="cui-short-item-info-name">Serene mountains</h2>
            <p class="cui-short-item-info-note">Author: Anna Strong</p>
          </div>
          <div class="cui-short-item-info-action-data">
            <span class="text-danger">+1000$</span>
          </div>
        </div>
        <div class="cui-short-item-info">
          <div class="cui-short-item-info-img">
            <img
              src="/cleanui/components/dummy-assets/common/img/photos/2.jpeg"
              alt="Alternative text to the image"
            />
          </div>
          <div class="cui-short-item-info-description">
            <h2 class="cui-short-item-info-name">The beauty of the lilies</h2>
            <p class="cui-short-item-info-note">Author: William Vargas</p>
          </div>
          <div class="cui-short-item-info-action-data">
            <span class="text-warning">+7500</span>
          </div>
        </div>
        <div class="cui-short-item-info">
          <div class="cui-short-item-info-img">
            <img
              src="/cleanui/components/dummy-assets/common/img/photos/3.jpeg"
              alt="Alternative text to the image"
            />
          </div>
          <div class="cui-short-item-info-description">
            <h2 class="cui-short-item-info-name">At full power</h2>
            <p class="cui-short-item-info-note">Author: John Faries</p>
          </div>
          <div class="cui-short-item-info-action-data">
            <span class="text-default">+500$</span>
          </div>
        </div>
      </div>
      <div class="cui-graph-card-chartist cui-graph-card-chartist-danger">
        <div class="cui-graph-card-chartistArea-3 chartist"></div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="card card-full-height">
      <div class="card-header">
        <div class="cui-utils-title">
          <span class="text-uppercase font-size-16">
            <strong>Support Cases</strong>
          </span>
        </div>
      </div>
      <div class="card-body cui-graph-card">
        <div class="row">
          <div class="col-xl-6">
            <table class="table cui-graph-card-table">
              <thead>
                <tr>
                  <th>Type</th>
                  <th class="font-weight-bold text-right">Amount</th>
                </tr>
              </thead>
              <tr>
                <td>EPS</td>
                <td class="text-primary font-weight-bold text-right">+12,42%</td>
              </tr>
              <tr>
                <td>PDO</td>
                <td class="text-primary font-weight-bold text-right">21,700</td>
              </tr>
              <tr>
                <td>OPL Status</td>
                <td class="text-danger font-weight-bold text-right">Negative</td>
              </tr>
              <tr>
                <td>Priority</td>
                <td class="text-primary font-weight-bold text-right">+235,200</td>
              </tr>
              <tr>
                <td>Net Prifit</td>
                <td class="text-primary font-weight-bold text-right">$19,235,516</td>
              </tr>
            </table>
          </div>
          <div class="col-xl-6">
            <div
              class="cui-graph-card-donut-chartist cui-graph-card-donut-chartist-example h-100 cui-graph-card-donut-chartist-with-center-data cui-graph-card-chartist-centered"
            >
              <div class="cui-graph-card-donut-chartist-area-1 ct-chart-pie mb-3"></div>
              <div class="cui-graph-card-donuts text-center">
                <span class="text-nowrap mr-2 mb-2">
                  <span class="cui-utils-donut cui-utils-donut-success"></span>
                  Ready
                </span>
                <span class="text-nowrap mr-2 mb-2">
                  <span class="cui-utils-donut cui-utils-donut-primary"></span>
                  In progress
                </span>
                <span class="text-nowrap mr-2 mb-2">
                  <span class="cui-utils-donut cui-utils-donut-danger"></span>
                  Defected
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="card card-full-height">
      <div class="card-header">
        <div class="cui-utils-title">
          <span class="text-uppercase font-size-16">
            <strong>Finance Stats</strong>
          </span>
        </div>
      </div>
      <div class="card-body">
        <div class="cui-short-item-info cui-short-item-info-large">
          <div class="cui-short-item-info-description">
            <h2 class="cui-short-item-info-name">IPO Margin</h2>
            <p class="cui-short-item-info-note">Awerage IPO Margin</p>
          </div>
          <div class="cui-short-item-info-action-data">
            <span class="text-success">+36%</span>
          </div>
        </div>
        <div class="cui-short-item-info cui-short-item-info-large">
          <div class="cui-short-item-info-description">
            <h2 class="cui-short-item-info-name">Payments</h2>
            <p class="cui-short-item-info-note">Yearly Expenses</p>
          </div>
          <div class="cui-short-item-info-action-data">
            <span class="text-danger">-235$</span>
          </div>
        </div>
        <div class="cui-short-item-info cui-short-item-info-large">
          <div class="cui-short-item-info-description">
            <h2 class="cui-short-item-info-name">Logistics</h2>
            <p class="cui-short-item-info-note">Overall Regional Logistics</p>
          </div>
          <div class="cui-short-item-info-action-data">
            <span class="text-warning">+37%</span>
          </div>
        </div>
        <div class="cui-short-item-info cui-short-item-info-large">
          <div class="cui-short-item-info-description">
            <h2 class="cui-short-item-info-name">Expenses</h2>
            <p class="cui-short-item-info-note">Balance</p>
          </div>
          <div class="cui-short-item-info-action-data">
            <span class="text-primary">+1623$</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END: dashboard gamma -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    var chart = new Chartist.Pie(
      '.cui-graph-card-donut-chartist-area-1',
      {
        labels: ['Ready', 'In Progress', 'Defected'],
        series: [90, 35, 18],
      },
      {
        donut: true,
        donutWidth: 25,
        labelInterpolationFnc: function(value, index) {
          var total = chart.data.series.reduce(function(pv, cv) {
            return pv + cv
          }, 0)
          return Math.round((chart.data.series[index] / total) * 100) + '%'
        },
      },
    )
    chart.on('draw', function(ctx) {
      if (ctx.type === 'label') {
        ctx.element.addClass('ct-label-pie')
        ctx.element.attr({
          dx: ctx.element.root().width() / 2,
          dy: ctx.element.root().height() / 2,
          id: 'ct-label-pie-' + ctx.index,
        })
      } else if (ctx.type === 'slice') {
        ctx.element.attr({
          id: 'ct-slice-pie-' + ctx.index,
        })
      }
    })

    $(document).on('mouseenter', '.ct-slice-donut', function() {
      $(this).css({
        opacity: '0.8',
      })
      var index = $(this)
        .attr('id')
        .slice(-1)
      $('.ct-label-pie').css({
        display: 'none',
      })
      $('#ct-label-pie-' + index).css({
        display: 'block',
      })
    })

    $(document).on('mouseleave', '.ct-slice-donut', function() {
      $(this).css({
        opacity: '1',
      })
    })

    new Chartist.Line(
      '.cui-graph-card-chartistArea-1',
      {
        series: [[232, 111, 138, 144, 118, 210, 236]],
      },
      {
        lineSmooth: Chartist.Interpolation.none({
          fillHoles: false,
        }),
        height: '150px',

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
        plugins: [Chartist.plugins.tooltip()],
      },
    )

    new Chartist.Line(
      '.cui-graph-card-chartistArea-2',
      {
        series: [[3, 14, 37, 26, 48, 8, 63, 21, 24, 52]],
      },
      {
        lineSmooth: Chartist.Interpolation.none({
          fillHoles: false,
        }),
        height: '150px',

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
        plugins: [Chartist.plugins.tooltip()],
      },
    )
    new Chartist.Line(
      '.cui-graph-card-chartistArea-3',
      {
        series: [[51, 8, 50, 45, 95, 90, 43, 13, 37, 52]],
      },
      {
        height: '250px',

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
        plugins: [Chartist.plugins.tooltip()],
      },
    )
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection