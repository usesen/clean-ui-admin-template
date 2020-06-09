@extends ('layouts.app')

@section('content')
<!-- START: apps/calendar -->
<section class="card cui-utils-card-with-sidebar cui-utils-card-with-sidebar-right">
  <div class="cui-utils-card-sidebar d-none d-lg-block">
    <div class="px-3 py-1">
      <h5 class="mb-3">
        <strong>Calendars</strong>
      </h5>
      <ul class="list-unstyled">
        <li>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="example6" checked="" />
              Gmail
            </label>
          </div>
        </li>
        <li>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="example6" checked="" />
              Apple Calendar
            </label>
          </div>
        </li>
        <li>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="example6" checked="" />
              Birthdays
            </label>
          </div>
        </li>
        <li>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="example6" />
              Weekends
            </label>
          </div>
        </li>
      </ul>
      <h5 class="mb-3">
        <strong>Events</strong>
      </h5>
      <ul class="list-unstyled">
        <li class="mb-2">
          <span class="cui-utils-donut cui-utils-donut-default"></span>
          Default
        </li>
        <li class="mb-2">
          <span class="cui-utils-donut cui-utils-donut-primary"></span>
          Primary
        </li>
        <li class="mb-2">
          <span class="cui-utils-donut cui-utils-donut-secondary"></span>
          Secondary
        </li>
        <li class="mb-2">
          <span class="cui-utils-donut cui-utils-donut-success"></span>
          Success
        </li>
        <li class="mb-2">
          <span class="cui-utils-donut cui-utils-donut-danger"></span>
          Danger
        </li>
        <li class="mb-2">
          <span class="cui-utils-donut cui-utils-donut-info"></span>
          Info
        </li>
        <li class="mb-2">
          <span class="cui-utils-donut cui-utils-donut-warning"></span>
          Warning
        </li>
      </ul>
    </div>
  </div>
  <div class="card-header">
    <div class="pull-right">
      <div class="dropdown mt-2 d-inline-block">
        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <i class="icmn-database mr-2"></i>
          <span class="hidden-lg-down">Dashboards</span>
          <span class="caret"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" role="menu">
          <div class="dropdown-header">Active</div>
          <a class="dropdown-item" href="javascript:void(0)">Project Management</a>
          <a class="dropdown-item" href="javascript:void(0)">User Inetrface Development</a>
          <a class="dropdown-item" href="javascript:void(0)">Documentation</a>
          <div class="dropdown-header">Inactive</div>
          <a class="dropdown-item" href="javascript:void(0)">Marketing</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="javascript:void(0)"
            ><i class="dropdown-icon icmn-cog"></i> Settings</a
          >
        </div>
      </div>
    </div>
    <h4 class="mt-1 mb-1 text-black">
      <strong>Calendar App</strong>
    </h4>
  </div>
  <div class="card-body">
    <div class="cui-apps-calendar"></div>
  </div>
</section>
<!-- END: apps/calendar -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      ///////////////////////////////////////////////////
      // FULL CALENDAR
      $('.cui-apps-calendar').fullCalendar({
        //aspectRatio: 2,
        height: 800,
        header: {
          left: 'prev, next',
          center: 'title',
          right: 'month, agendaWeek, agendaDay',
        },
        buttonIcons: {
          prev: 'none fa fa-arrow-left',
          next: 'none fa fa-arrow-right',
          prevYear: 'none fa fa-arrow-left',
          nextYear: 'none fa fa-arrow-right',
        },
        defaultDate: '2016-05-12',
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        viewRender: function(view, element) {
          if (!/Mobi/.test(navigator.userAgent) && jQuery().jScrollPane) {
            $('.fc-scroller').jScrollPane({
              autoReinitialise: true,
              autoReinitialiseDelay: 100,
            })
          }
        },
        events: [
          {
            title: 'All Day Event',
            start: '2016-05-01',
            className: 'fc-event-success',
          },
          {
            title: 'Long Event',
            start: '2016-05-07',
            end: '2016-05-10',
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2016-05-09T16:00:00',
            className: 'fc-event-default',
          },
          {
            id: 999,
            title: 'Repeating Event',
            start: '2016-05-16T16:00:00',
            className: 'fc-event-success',
          },
          {
            title: 'Conference',
            start: '2016-05-11',
            end: '2016-05-13',
            className: 'fc-event-danger',
          },
          {
            title: 'Meeting',
            start: '2016-05-12T10:30:00',
            end: '2016-05-12T12:30:00',
            className: 'fc-event-default',
          },
          {
            title: 'Lunch',
            start: '2016-05-12T12:00:00',
            className: 'fc-event-default',
          },
          {
            title: 'Meeting',
            start: '2016-05-12T14:30:00',
            className: 'fc-event-info',
          },
          {
            title: 'Happy Hour',
            start: '2016-05-12T17:30:00',
          },
          {
            title: 'Dinner',
            start: '2016-05-12T20:00:00',
          },
          {
            title: 'Birthday Party',
            start: '2016-05-13T07:00:00',
            className: 'fc-event-danger',
          },
          {
            title: 'Click for Google',
            url: 'javascript: alert("Clicked: External URL");',
            start: '2016-05-28',
            className: 'fc-event-warning',
          },
        ],
        eventClick: function(calEvent, jsEvent, view) {
          if (!$(this).hasClass('event-clicked')) {
            $('.fc-event').removeClass('event-clicked')
            $(this).addClass('event-clicked')
          }
        },
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection