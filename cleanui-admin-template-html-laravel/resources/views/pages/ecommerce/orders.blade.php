@extends ('layouts.app')

@section('content')
<!-- END: ecommerce/orders -->
<div class="card">
  <div class="card-header">
    <a href="javascript: void(0);" class="pull-right btn btn-sm btn-primary">Create New Order</a>
    <span class="cui-utils-title">
      <strong>Orders</strong>
    </span>
  </div>
  <div class="card-body">
    <table class="table table-hover nowrap" id="example1">
      <thead class="thead-default">
        <tr>
          <th>ID</th>
          <th>Purchase Date</th>
          <th>Customer</th>
          <th>Grand Total</th>
          <th>Tax</th>
          <th>Shipping</th>
          <th>Quantity</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000010</a></td>
          <td>2014/06/13</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Damon</a></td>
          <td>$56.00</td>
          <td>$5.60</td>
          <td>$10.00</td>
          <td>85</td>
          <td><span class="font-size-12 badge badge-primary">Processing</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000011</a></td>
          <td>2014/09/12</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Torrey</a></td>
          <td>$63.40</td>
          <td>$6.34</td>
          <td>$10.00</td>
          <td>77</td>
          <td><span class="font-size-12 badge badge-primary">Processing</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000012</a></td>
          <td>2013/09/27</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Miracle</a></td>
          <td>$456.00</td>
          <td>$45.60</td>
          <td>$0.00</td>
          <td>82</td>
          <td><span class="font-size-12 badge badge-primary">Processing</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000013</a></td>
          <td>2013/06/28</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Wilhelmine</a></td>
          <td>$871.14</td>
          <td>$87.11</td>
          <td>$10.00</td>
          <td>68</td>
          <td><span class="font-size-12 badge badge-primary">Processing</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000014</a></td>
          <td>2013/05/28</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Hubert</a></td>
          <td>$19.10</td>
          <td>$1.91</td>
          <td>$10.00</td>
          <td>63</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000015</a></td>
          <td>2014/06/13</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Damon</a></td>
          <td>$56.00</td>
          <td>$5.60</td>
          <td>$10.00</td>
          <td>85</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000016</a></td>
          <td>2014/09/12</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Torrey</a></td>
          <td>$63.40</td>
          <td>$6.34</td>
          <td>$10.00</td>
          <td>77</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000017</a></td>
          <td>2013/09/27</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Miracle</a></td>
          <td>$456.00</td>
          <td>$45.60</td>
          <td>$0.00</td>
          <td>82</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000018</a></td>
          <td>2013/06/28</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Wilhelmine</a></td>
          <td>$871.14</td>
          <td>$87.11</td>
          <td>$10.00</td>
          <td>68</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000019</a></td>
          <td>2013/05/28</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Hubert</a></td>
          <td>$19.10</td>
          <td>$1.91</td>
          <td>$10.00</td>
          <td>63</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000021</a></td>
          <td>2014/06/13</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Damon</a></td>
          <td>$56.00</td>
          <td>$5.60</td>
          <td>$10.00</td>
          <td>85</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000022</a></td>
          <td>2014/09/12</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Torrey</a></td>
          <td>$63.40</td>
          <td>$6.34</td>
          <td>$10.00</td>
          <td>77</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000023</a></td>
          <td>2013/09/27</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Miracle</a></td>
          <td>$456.00</td>
          <td>$45.60</td>
          <td>$0.00</td>
          <td>82</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000024</a></td>
          <td>2013/06/28</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Wilhelmine</a></td>
          <td>$871.14</td>
          <td>$87.11</td>
          <td>$10.00</td>
          <td>68</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000025</a></td>
          <td>2013/05/28</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Hubert</a></td>
          <td>$19.10</td>
          <td>$1.91</td>
          <td>$10.00</td>
          <td>63</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000026</a></td>
          <td>2014/06/13</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Damon</a></td>
          <td>$56.00</td>
          <td>$5.60</td>
          <td>$10.00</td>
          <td>85</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000027</a></td>
          <td>2014/09/12</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Torrey</a></td>
          <td>$63.40</td>
          <td>$6.34</td>
          <td>$10.00</td>
          <td>77</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000028</a></td>
          <td>2013/09/27</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Miracle</a></td>
          <td>$456.00</td>
          <td>$45.60</td>
          <td>$0.00</td>
          <td>82</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000029</a></td>
          <td>2013/06/28</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Wilhelmine</a></td>
          <td>$871.14</td>
          <td>$87.11</td>
          <td>$10.00</td>
          <td>68</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000030</a></td>
          <td>2013/05/28</td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">Hubert</a></td>
          <td>$19.10</td>
          <td>$1.91</td>
          <td>$10.00</td>
          <td>63</td>
          <td><span class="font-size-12 badge badge-default">Complete</span></td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-2"
              ><i class="icmn-pencil"><!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"><!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>ID</th>
          <th>Date</th>
          <th>Customer</th>
          <th>Grand Total</th>
          <th>Tax</th>
          <th>Shipping</th>
          <th>Quantity</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<!-- END: ecommerce/orders -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      // Datatables
      $('#example1').DataTable({
        lengthMenu: [[50, 100, 200, -1], [50, 100, 200, 'All']],
        responsive: true,
        autoWidth: false,
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection