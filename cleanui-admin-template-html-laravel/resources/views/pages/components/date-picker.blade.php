@extends ('layouts.app')

@section('content')
<!-- START: components/date-picker -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Date Picker</strong>
      <a
        href="https://tempusdominus.github.io/bootstrap-4/Usage/"
        target="_blank"
        class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Date Picker Only</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://tempusdominus.github.io/bootstrap-4/Usage/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              placeholder="Select Date"
              id="datepicker-only-init"
              data-toggle="datetimepicker"
              data-target="#datepicker-only-init"
            />
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Time Picker Only</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://tempusdominus.github.io/bootstrap-4/Usage/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              placeholder="Select Time"
              id="timepicker-init"
              data-toggle="datetimepicker"
              data-target="#timepicker-init"
            />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Date & Time Picker</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://tempusdominus.github.io/bootstrap-4/Usage/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div class="form-group">
            <input
              type="text"
              class="form-control"
              placeholder="Select Date"
              id="datetimepicker-init"
              data-toggle="datetimepicker"
              data-target="#datetimepicker-init"
            />
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Inline Date Picker</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://tempusdominus.github.io/bootstrap-4/Usage/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div class="form-group">
            <div id="datepicker-inline-init"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h5 class="text-black"><strong>Inline Time Picker</strong></h5>
        <p class="text-muted">
          Element: read
          <a href="https://tempusdominus.github.io/bootstrap-4/Usage/" target="_blank"
            >official documentation<small
              ><i class="icmn-link ml-1"><!-- --></i></small
            ></a
          >
        </p>
        <div class="mb-5">
          <div class="form-group">
            <div id="timepicker-inline-init"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- END: components/date-picker -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      $('#timepicker-init').datetimepicker({
        icons: {
          time: 'fa fa-clock-o',
          date: 'fa fa-calendar',
          up: 'fa fa-arrow-up',
          down: 'fa fa-arrow-down',
          previous: 'fa fa-arrow-left',
          next: 'fa fa-arrow-right',
        },
        format: 'LT',
      })

      $('#datepicker-only-init').datetimepicker({
        icons: {
          time: 'fa fa-clock-o',
          date: 'fa fa-calendar',
          up: 'fa fa-arrow-up',
          down: 'fa fa-arrow-down',
          previous: 'fa fa-arrow-left',
          next: 'fa fa-arrow-right',
        },
        format: 'LL',
      })

      $('#datetimepicker-init').datetimepicker({
        icons: {
          time: 'fa fa-clock-o',
          date: 'fa fa-calendar',
          up: 'fa fa-arrow-up',
          down: 'fa fa-arrow-down',
          previous: 'fa fa-arrow-left',
          next: 'fa fa-arrow-right',
        },
      })

      $('#datepicker-inline-init').datetimepicker({
        icons: {
          time: 'fa fa-clock-o',
          date: 'fa fa-calendar',
          up: 'fa fa-arrow-up',
          down: 'fa fa-arrow-down',
          previous: 'fa fa-arrow-left',
          next: 'fa fa-arrow-right',
        },
        inline: true,
        sideBySide: false,
      })

      $('#timepicker-inline-init').datetimepicker({
        icons: {
          time: 'fa fa-clock-o',
          date: 'fa fa-calendar',
          up: 'fa fa-arrow-up',
          down: 'fa fa-arrow-down',
          previous: 'fa fa-arrow-left',
          next: 'fa fa-arrow-right',
        },
        format: 'LT',
        inline: true,
        sideBySide: false,
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection