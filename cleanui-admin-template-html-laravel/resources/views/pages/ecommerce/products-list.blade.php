@extends ('layouts.app')

@section('content')
<!-- START: ecommerce/products-list -->
<div class="card">
  <div class="card-header">
    <div class="dropdown pull-right">
      <button
        type="button"
        class="btn btn-primary btn-sm dropdown-toggle"
        data-toggle="dropdown"
        aria-expanded="false"
      >
        Add Product
      </button>
      <div class="dropdown-menu dropdown-menu-right" role="menu">
        <a class="dropdown-item" href="javascript: void(0)">Simple Product</a>
        <a class="dropdown-item" href="javascript: void(0)">Configurable Product</a>
        <a class="dropdown-item" href="javascript: void(0)">Grouped Product</a>
        <a class="dropdown-item" href="javascript: void(0)">Virtual Product</a>
        <a class="dropdown-item" href="javascript: void(0)">Bundle Product</a>
        <a class="dropdown-item" href="javascript: void(0)">Downloadable Product</a>
      </div>
    </div>
    <span class="cui-utils-title">
      <strong>Products List</strong>
    </span>
  </div>
  <div class="card-body">
    <table class="table table-hover nowrap" id="example1">
      <thead class="thead-default">
        <tr>
          <th>ID</th>
          <th>Thumbnail</th>
          <th>Name</th>
          <th>Type</th>
          <th>Attribute Set</th>
          <th>SKU</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000010</a></td>
          <td>
            <a href="javascript: void(0);" class="cui-ecommerce-dashboard-list-img"
              ><img src="/cleanui/components/ecommerce/common/img/001.jpg" alt=""
            /></a>
          </td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">CK Glasses</a></td>
          <td>Simple Product</td>
          <td>Glasses</td>
          <td>ITEM-0001</td>
          <td>$120.00</td>
          <td>85.000</td>
          <td>
            <span class="label label-success"
              ><span class="font-size-12 badge badge-success">Enabled</span></span
            >
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-3"
              ><i class="icmn-pencil"> <!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"> <!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000011</a></td>
          <td>
            <a href="javascript: void(0);" class="cui-ecommerce-dashboard-list-img"
              ><img src="/cleanui/components/ecommerce/common/img/002.jpg" alt=""
            /></a>
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined">Harmann Glasses</a>
          </td>
          <td>Simple Product</td>
          <td>Glasses</td>
          <td>ITEM-0002</td>
          <td>$149.00</td>
          <td>64.000</td>
          <td>
            <span class="label label-success"
              ><span class="font-size-12 badge badge-success">Enabled</span></span
            >
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-3"
              ><i class="icmn-pencil"> <!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"> <!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000012</a></td>
          <td>
            <a href="javascript: void(0);" class="cui-ecommerce-dashboard-list-img"
              ><img src="/cleanui/components/ecommerce/common/img/003.jpg" alt=""
            /></a>
          </td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">D&G Glasses</a></td>
          <td>Simple Product</td>
          <td>Glasses</td>
          <td>ITEM-0003</td>
          <td>$89.00</td>
          <td>42.000</td>
          <td>
            <span class="label label-success"
              ><span class="font-size-12 badge badge-success">Enabled</span></span
            >
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-3"
              ><i class="icmn-pencil"> <!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"> <!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000013</a></td>
          <td>
            <a href="javascript: void(0);" class="cui-ecommerce-dashboard-list-img"
              ><img src="/cleanui/components/ecommerce/common/img/004.jpg" alt=""
            /></a>
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined">Adidas Glasses</a>
          </td>
          <td>Simple Product</td>
          <td>Glasses</td>
          <td>ITEM-0004</td>
          <td>$67.00</td>
          <td>421.000</td>
          <td>
            <span class="label label-success"
              ><span class="font-size-12 badge badge-success">Enabled</span></span
            >
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-3"
              ><i class="icmn-pencil"> <!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"> <!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000014</a></td>
          <td>
            <a href="javascript: void(0);" class="cui-ecommerce-dashboard-list-img"
              ><img src="/cleanui/components/ecommerce/common/img/003.jpg" alt=""
            /></a>
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined">Gucci Glasses</a>
          </td>
          <td>Simple Product</td>
          <td>Glasses</td>
          <td>ITEM-0005</td>
          <td>$91.00</td>
          <td>124.000</td>
          <td>
            <span class="label label-default"
              ><span class="font-size-12 badge badge-danger">Disabled</span></span
            >
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-3"
              ><i class="icmn-pencil"> <!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"> <!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000015</a></td>
          <td>
            <a href="javascript: void(0);" class="cui-ecommerce-dashboard-list-img"
              ><img src="/cleanui/components/ecommerce/common/img/001.jpg" alt=""
            /></a>
          </td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">CK Glasses</a></td>
          <td>Simple Product</td>
          <td>Glasses</td>
          <td>ITEM-0001</td>
          <td>$120.00</td>
          <td>85.000</td>
          <td>
            <span class="label label-success"
              ><span class="font-size-12 badge badge-success">Enabled</span></span
            >
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-3"
              ><i class="icmn-pencil"> <!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"> <!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000016</a></td>
          <td>
            <a href="javascript: void(0);" class="cui-ecommerce-dashboard-list-img"
              ><img src="/cleanui/components/ecommerce/common/img/002.jpg" alt=""
            /></a>
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined">Harmann Glasses</a>
          </td>
          <td>Simple Product</td>
          <td>Glasses</td>
          <td>ITEM-0002</td>
          <td>$149.00</td>
          <td>64.000</td>
          <td>
            <span class="label label-success"
              ><span class="font-size-12 badge badge-success">Enabled</span></span
            >
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-3"
              ><i class="icmn-pencil"> <!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"> <!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000017</a></td>
          <td>
            <a href="javascript: void(0);" class="cui-ecommerce-dashboard-list-img"
              ><img src="/cleanui/components/ecommerce/common/img/003.jpg" alt=""
            /></a>
          </td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">D&G Glasses</a></td>
          <td>Simple Product</td>
          <td>Glasses</td>
          <td>ITEM-0003</td>
          <td>$89.00</td>
          <td>42.000</td>
          <td>
            <span class="label label-success"
              ><span class="font-size-12 badge badge-success">Enabled</span></span
            >
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-3"
              ><i class="icmn-pencil"> <!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"> <!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000018</a></td>
          <td>
            <a href="javascript: void(0);" class="cui-ecommerce-dashboard-list-img"
              ><img src="/cleanui/components/ecommerce/common/img/004.jpg" alt=""
            /></a>
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined">Adidas Glasses</a>
          </td>
          <td>Simple Product</td>
          <td>Glasses</td>
          <td>ITEM-0004</td>
          <td>$67.00</td>
          <td>421.000</td>
          <td>
            <span class="label label-success"
              ><span class="font-size-12 badge badge-success">Enabled</span></span
            >
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-3"
              ><i class="icmn-pencil"> <!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"> <!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000019</a></td>
          <td>
            <a href="javascript: void(0);" class="cui-ecommerce-dashboard-list-img"
              ><img src="/cleanui/components/ecommerce/common/img/003.jpg" alt=""
            /></a>
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined">Gucci Glasses</a>
          </td>
          <td>Simple Product</td>
          <td>Glasses</td>
          <td>ITEM-0005</td>
          <td>$91.00</td>
          <td>124.000</td>
          <td>
            <span class="label label-default"
              ><span class="font-size-12 badge badge-danger">Disabled</span></span
            >
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-3"
              ><i class="icmn-pencil"> <!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"> <!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000020</a></td>
          <td>
            <a href="javascript: void(0);" class="cui-ecommerce-dashboard-list-img"
              ><img src="/cleanui/components/ecommerce/common/img/001.jpg" alt=""
            /></a>
          </td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">CK Glasses</a></td>
          <td>Simple Product</td>
          <td>Glasses</td>
          <td>ITEM-0001</td>
          <td>$120.00</td>
          <td>85.000</td>
          <td>
            <span class="label label-success"
              ><span class="font-size-12 badge badge-success">Enabled</span></span
            >
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-3"
              ><i class="icmn-pencil"> <!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"> <!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000021</a></td>
          <td>
            <a href="javascript: void(0);" class="cui-ecommerce-dashboard-list-img"
              ><img src="/cleanui/components/ecommerce/common/img/002.jpg" alt=""
            /></a>
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined">Harmann Glasses</a>
          </td>
          <td>Simple Product</td>
          <td>Glasses</td>
          <td>ITEM-0002</td>
          <td>$149.00</td>
          <td>64.000</td>
          <td>
            <span class="label label-success"
              ><span class="font-size-12 badge badge-success">Enabled</span></span
            >
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-3"
              ><i class="icmn-pencil"> <!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"> <!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000022</a></td>
          <td>
            <a href="javascript: void(0);" class="cui-ecommerce-dashboard-list-img"
              ><img src="/cleanui/components/ecommerce/common/img/003.jpg" alt=""
            /></a>
          </td>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">D&G Glasses</a></td>
          <td>Simple Product</td>
          <td>Glasses</td>
          <td>ITEM-0003</td>
          <td>$89.00</td>
          <td>42.000</td>
          <td>
            <span class="label label-success"
              ><span class="font-size-12 badge badge-success">Enabled</span></span
            >
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-3"
              ><i class="icmn-pencil"> <!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"> <!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000023</a></td>
          <td>
            <a href="javascript: void(0);" class="cui-ecommerce-dashboard-list-img"
              ><img src="/cleanui/components/ecommerce/common/img/004.jpg" alt=""
            /></a>
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined">Adidas Glasses</a>
          </td>
          <td>Simple Product</td>
          <td>Glasses</td>
          <td>ITEM-0004</td>
          <td>$67.00</td>
          <td>421.000</td>
          <td>
            <span class="label label-success"
              ><span class="font-size-12 badge badge-success">Enabled</span></span
            >
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-3"
              ><i class="icmn-pencil"> <!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"> <!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
        <tr>
          <td><a href="javascript: void(0);" class="cui-utils-link-underlined">000024</a></td>
          <td>
            <a href="javascript: void(0);" class="cui-ecommerce-dashboard-list-img"
              ><img src="/cleanui/components/ecommerce/common/img/003.jpg" alt=""
            /></a>
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined">Gucci Glasses</a>
          </td>
          <td>Simple Product</td>
          <td>Glasses</td>
          <td>ITEM-0005</td>
          <td>$91.00</td>
          <td>124.000</td>
          <td>
            <span class="label label-default"
              ><span class="font-size-12 badge badge-danger">Disabled</span></span
            >
          </td>
          <td>
            <a href="javascript: void(0);" class="cui-utils-link-underlined mr-3"
              ><i class="icmn-pencil"> <!-- --></i> View</a
            >
            <a href="javascript: void(0);" class="cui-utils-link-underlined"
              ><small
                ><i class="icmn-cross"> <!-- --></i></small
              >
              Remove</a
            >
          </td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>ID</th>
          <th>Thumbnail</th>
          <th>Name</th>
          <th>Type</th>
          <th>Attribute Set</th>
          <th>SKU</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<!-- END: ecommerce/products-list -->

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