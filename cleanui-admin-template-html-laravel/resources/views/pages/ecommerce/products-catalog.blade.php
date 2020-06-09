@extends ('layouts.app')

@section('content')
<!-- START: ecommerce/products-catalog -->
<div class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Products Catalog</strong>
    </span>

    <div class="row mb-5 mt-3">
      <div class="col-lg-2">
        <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-primary">
          <div class="cui-utils-step-desc">
            <span class="cui-utils-step-title">Creative Chairs</span>
            <p>Some description</p>
          </div>
        </a>
      </div>
      <div class="col-lg-2">
        <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-default">
          <div class="cui-utils-step-desc">
            <span class="cui-utils-step-title">Beautiful Tables</span>
            <p>Good news for you!</p>
          </div>
        </a>
      </div>
      <div class="col-lg-2">
        <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-danger">
          <div class="cui-utils-step-desc">
            <span class="cui-utils-step-title">Nice Beds</span>
            <p>Clean and simple</p>
          </div>
        </a>
      </div>
      <div class="col-lg-2">
        <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-default">
          <div class="cui-utils-step-desc">
            <span class="cui-utils-step-title">Good Tables</span>
            <p>Full modular</p>
          </div>
        </a>
      </div>
      <div class="col-lg-2">
        <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-default">
          <div class="cui-utils-step-desc">
            <span class="cui-utils-step-title">Awesome Chairs</span>
            <p>Some description</p>
          </div>
        </a>
      </div>
      <div class="col-lg-2">
        <a href="javascript: void(0);" class="cui-utils-step cui-utils-step-default">
          <div class="cui-utils-step-desc">
            <span class="cui-utils-step-title">Pretty Tables</span>
            <p>Good news for you!</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div class="cui-ecommerce-catalog">
      <div class="row">
        <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="cui-ecommerce-catalog-item">
            <div class="cui-ecommerce-catalog-item-img">
              <div class="cui-ecommerce-catalog-item-status">
                <span class="cui-ecommerce-catalog-item-status-title">New</span>
              </div>
              <div class="cui-ecommerce-catalog-item-like cui-ecommerce-catalog-item-like-selected">
                <i class="icmn-heart"><!-- --></i>
              </div>
              <a href="javascript: void(0);">
                <img src="/cleanui/components/ecommerce/common/img/001.jpg" alt="" />
              </a>
            </div>
            <div class="cui-ecommerce-catalog-item-title">
              <a href="javascript: void(0);">Elliot Glasses</a>
              <div class="cui-ecommerce-catalog-item-price">
                $678.00
                <div class="cui-ecommerce-catalog-item-price-old">
                  $754.00
                </div>
              </div>
            </div>
            <div class="cui-ecommerce-catalog-item-descr">
              <div class="cui-ecommerce-catalog-item-descr-sizes">
                <span data-toggle="tooltip" data-placement="right" title="Size S">S</span>
                <span data-toggle="tooltip" data-placement="right" title="Size M">M</span>
                <span data-toggle="tooltip" data-placement="right" title="Size XL">XL</span>
              </div>
              Including Lenses
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="cui-ecommerce-catalog-item">
            <div class="cui-ecommerce-catalog-item-img">
              <div class="cui-ecommerce-catalog-item-status">
                <span class="cui-ecommerce-catalog-item-status-title">New</span>
              </div>
              <div class="cui-ecommerce-catalog-item-like">
                <i class="icmn-heart"><!-- --></i>
              </div>
              <a href="javascript: void(0);">
                <img src="/cleanui/components/ecommerce/common/img/002.jpg" alt="" />
              </a>
            </div>
            <div class="cui-ecommerce-catalog-item-title">
              <a href="javascript: void(0);">Maxtor Chair</a>
              <div class="cui-ecommerce-catalog-item-price">
                $245.00
                <div class="cui-ecommerce-catalog-item-price-old">
                  $166.00
                </div>
              </div>
            </div>
            <div class="cui-ecommerce-catalog-item-descr">
              <div class="cui-ecommerce-catalog-item-descr-sizes">
                <span data-toggle="tooltip" data-placement="right" title="Size S">S</span>
                <span data-toggle="tooltip" data-placement="right" title="Size M">M</span>
                <span data-toggle="tooltip" data-placement="right" title="Size XL">XL</span>
              </div>
              Including Lenses
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="cui-ecommerce-catalog-item">
            <div class="cui-ecommerce-catalog-item-img">
              <div class="cui-ecommerce-catalog-item-like cui-ecommerce-catalog-item-like-selected">
                <i class="icmn-heart"><!-- --></i>
              </div>
              <a href="javascript: void(0);">
                <img src="/cleanui/components/ecommerce/common/img/003.jpg" alt="" />
              </a>
            </div>
            <div class="cui-ecommerce-catalog-item-title">
              <a href="javascript: void(0);">Manroad Glasses</a>
              <div class="cui-ecommerce-catalog-item-price">
                $199.00
              </div>
            </div>
            <div class="cui-ecommerce-catalog-item-descr">
              <div class="cui-ecommerce-catalog-item-descr-sizes">
                <span data-toggle="tooltip" data-placement="right" title="Size S">S</span>
                <span data-toggle="tooltip" data-placement="right" title="Size M">M</span>
                <span data-toggle="tooltip" data-placement="right" title="Size XL">XL</span>
              </div>
              Including Lenses
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="cui-ecommerce-catalog-item">
            <div class="cui-ecommerce-catalog-item-img">
              <div class="cui-ecommerce-catalog-item-status">
                <span class="cui-ecommerce-catalog-item-status-title">New</span>
              </div>
              <div class="cui-ecommerce-catalog-item-like">
                <i class="icmn-heart"><!-- --></i>
              </div>
              <a href="javascript: void(0);">
                <img src="/cleanui/components/ecommerce/common/img/004.jpg" alt="" />
              </a>
            </div>
            <div class="cui-ecommerce-catalog-item-title">
              <a href="javascript: void(0);">Align Glasses</a>
              <div class="cui-ecommerce-catalog-item-price">
                $542.00
                <div class="cui-ecommerce-catalog-item-price-old">
                  $356.00
                </div>
              </div>
            </div>
            <div class="cui-ecommerce-catalog-item-descr">
              <div class="cui-ecommerce-catalog-item-descr-sizes">
                <span data-toggle="tooltip" data-placement="right" title="Size S">S</span>
                <span data-toggle="tooltip" data-placement="right" title="Size M">M</span>
                <span data-toggle="tooltip" data-placement="right" title="Size XL">XL</span>
              </div>
              Including Lenses
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="cui-ecommerce-catalog-item">
            <div class="cui-ecommerce-catalog-item-img">
              <div class="cui-ecommerce-catalog-item-like cui-ecommerce-catalog-item-like-selected">
                <i class="icmn-heart"><!-- --></i>
              </div>
              <a href="javascript: void(0);">
                <img src="/cleanui/components/ecommerce/common/img/003.jpg" alt="" />
              </a>
            </div>
            <div class="cui-ecommerce-catalog-item-title">
              <a href="javascript: void(0);">Manroad Glasses</a>
              <div class="cui-ecommerce-catalog-item-price">
                $199.00
              </div>
            </div>
            <div class="cui-ecommerce-catalog-item-descr">
              <div class="cui-ecommerce-catalog-item-descr-sizes">
                <span data-toggle="tooltip" data-placement="right" title="Size S">S</span>
                <span data-toggle="tooltip" data-placement="right" title="Size M">M</span>
                <span data-toggle="tooltip" data-placement="right" title="Size XL">XL</span>
              </div>
              Including Lenses
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="cui-ecommerce-catalog-item">
            <div class="cui-ecommerce-catalog-item-img">
              <div class="cui-ecommerce-catalog-item-status">
                <span class="cui-ecommerce-catalog-item-status-title">New</span>
              </div>
              <div class="cui-ecommerce-catalog-item-like">
                <i class="icmn-heart"><!-- --></i>
              </div>
              <a href="javascript: void(0);">
                <img src="/cleanui/components/ecommerce/common/img/004.jpg" alt="" />
              </a>
            </div>
            <div class="cui-ecommerce-catalog-item-title">
              <a href="javascript: void(0);">Align Glasses</a>
              <div class="cui-ecommerce-catalog-item-price">
                $542.00
                <div class="cui-ecommerce-catalog-item-price-old">
                  $356.00
                </div>
              </div>
            </div>
            <div class="cui-ecommerce-catalog-item-descr">
              <div class="cui-ecommerce-catalog-item-descr-sizes">
                <span data-toggle="tooltip" data-placement="right" title="Size S">S</span>
                <span data-toggle="tooltip" data-placement="right" title="Size M">M</span>
                <span data-toggle="tooltip" data-placement="right" title="Size XL">XL</span>
              </div>
              Including Lenses
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="cui-ecommerce-catalog-item">
            <div class="cui-ecommerce-catalog-item-img">
              <div class="cui-ecommerce-catalog-item-status">
                <span class="cui-ecommerce-catalog-item-status-title">New</span>
              </div>
              <div class="cui-ecommerce-catalog-item-like cui-ecommerce-catalog-item-like-selected">
                <i class="icmn-heart"><!-- --></i>
              </div>
              <a href="javascript: void(0);">
                <img src="/cleanui/components/ecommerce/common/img/001.jpg" alt="" />
              </a>
            </div>
            <div class="cui-ecommerce-catalog-item-title">
              <a href="javascript: void(0);">Elliot Glasses</a>
              <div class="cui-ecommerce-catalog-item-price">
                $678.00
                <div class="cui-ecommerce-catalog-item-price-old">
                  $754.00
                </div>
              </div>
            </div>
            <div class="cui-ecommerce-catalog-item-descr">
              <div class="cui-ecommerce-catalog-item-descr-sizes">
                <span data-toggle="tooltip" data-placement="right" title="Size S">S</span>
                <span data-toggle="tooltip" data-placement="right" title="Size M">M</span>
                <span data-toggle="tooltip" data-placement="right" title="Size XL">XL</span>
              </div>
              Including Lenses
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="cui-ecommerce-catalog-item">
            <div class="cui-ecommerce-catalog-item-img">
              <div class="cui-ecommerce-catalog-item-status">
                <span class="cui-ecommerce-catalog-item-status-title">New</span>
              </div>
              <div class="cui-ecommerce-catalog-item-like">
                <i class="icmn-heart"><!-- --></i>
              </div>
              <a href="javascript: void(0);">
                <img src="/cleanui/components/ecommerce/common/img/002.jpg" alt="" />
              </a>
            </div>
            <div class="cui-ecommerce-catalog-item-title">
              <a href="javascript: void(0);">Maxtor Chair</a>
              <div class="cui-ecommerce-catalog-item-price">
                $245.00
                <div class="cui-ecommerce-catalog-item-price-old">
                  $166.00
                </div>
              </div>
            </div>
            <div class="cui-ecommerce-catalog-item-descr">
              <div class="cui-ecommerce-catalog-item-descr-sizes">
                <span data-toggle="tooltip" data-placement="right" title="Size S">S</span>
                <span data-toggle="tooltip" data-placement="right" title="Size M">M</span>
                <span data-toggle="tooltip" data-placement="right" title="Size XL">XL</span>
              </div>
              Including Lenses
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="cui-ecommerce-catalog-item">
            <div class="cui-ecommerce-catalog-item-img">
              <div class="cui-ecommerce-catalog-item-status">
                <span class="cui-ecommerce-catalog-item-status-title">New</span>
              </div>
              <div class="cui-ecommerce-catalog-item-like cui-ecommerce-catalog-item-like-selected">
                <i class="icmn-heart"><!-- --></i>
              </div>
              <a href="javascript: void(0);">
                <img src="/cleanui/components/ecommerce/common/img/001.jpg" alt="" />
              </a>
            </div>
            <div class="cui-ecommerce-catalog-item-title">
              <a href="javascript: void(0);">Elliot Glasses</a>
              <div class="cui-ecommerce-catalog-item-price">
                $678.00
                <div class="cui-ecommerce-catalog-item-price-old">
                  $754.00
                </div>
              </div>
            </div>
            <div class="cui-ecommerce-catalog-item-descr">
              <div class="cui-ecommerce-catalog-item-descr-sizes">
                <span data-toggle="tooltip" data-placement="right" title="Size S">S</span>
                <span data-toggle="tooltip" data-placement="right" title="Size M">M</span>
                <span data-toggle="tooltip" data-placement="right" title="Size XL">XL</span>
              </div>
              Including Lenses
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="cui-ecommerce-catalog-item">
            <div class="cui-ecommerce-catalog-item-img">
              <div class="cui-ecommerce-catalog-item-status">
                <span class="cui-ecommerce-catalog-item-status-title">New</span>
              </div>
              <div class="cui-ecommerce-catalog-item-like">
                <i class="icmn-heart"><!-- --></i>
              </div>
              <a href="javascript: void(0);">
                <img src="/cleanui/components/ecommerce/common/img/002.jpg" alt="" />
              </a>
            </div>
            <div class="cui-ecommerce-catalog-item-title">
              <a href="javascript: void(0);">Maxtor Chair</a>
              <div class="cui-ecommerce-catalog-item-price">
                $245.00
                <div class="cui-ecommerce-catalog-item-price-old">
                  $166.00
                </div>
              </div>
            </div>
            <div class="cui-ecommerce-catalog-item-descr">
              <div class="cui-ecommerce-catalog-item-descr-sizes">
                <span data-toggle="tooltip" data-placement="right" title="Size S">S</span>
                <span data-toggle="tooltip" data-placement="right" title="Size M">M</span>
                <span data-toggle="tooltip" data-placement="right" title="Size XL">XL</span>
              </div>
              Including Lenses
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="cui-ecommerce-catalog-item">
            <div class="cui-ecommerce-catalog-item-img">
              <div class="cui-ecommerce-catalog-item-like cui-ecommerce-catalog-item-like-selected">
                <i class="icmn-heart"><!-- --></i>
              </div>
              <a href="javascript: void(0);">
                <img src="/cleanui/components/ecommerce/common/img/003.jpg" alt="" />
              </a>
            </div>
            <div class="cui-ecommerce-catalog-item-title">
              <a href="javascript: void(0);">Manroad Glasses</a>
              <div class="cui-ecommerce-catalog-item-price">
                $199.00
              </div>
            </div>
            <div class="cui-ecommerce-catalog-item-descr">
              <div class="cui-ecommerce-catalog-item-descr-sizes">
                <span data-toggle="tooltip" data-placement="right" title="Size S">S</span>
                <span data-toggle="tooltip" data-placement="right" title="Size M">M</span>
                <span data-toggle="tooltip" data-placement="right" title="Size XL">XL</span>
              </div>
              Including Lenses
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
          <div class="cui-ecommerce-catalog-item">
            <div class="cui-ecommerce-catalog-item-img">
              <div class="cui-ecommerce-catalog-item-status">
                <span class="cui-ecommerce-catalog-item-status-title">New</span>
              </div>
              <div class="cui-ecommerce-catalog-item-like">
                <i class="icmn-heart"><!-- --></i>
              </div>
              <a href="javascript: void(0);">
                <img src="/cleanui/components/ecommerce/common/img/004.jpg" alt="" />
              </a>
            </div>
            <div class="cui-ecommerce-catalog-item-title">
              <a href="javascript: void(0);">Align Glasses</a>
              <div class="cui-ecommerce-catalog-item-price">
                $542.00
                <div class="cui-ecommerce-catalog-item-price-old">
                  $356.00
                </div>
              </div>
            </div>
            <div class="cui-ecommerce-catalog-item-descr">
              <div class="cui-ecommerce-catalog-item-descr-sizes">
                <span data-toggle="tooltip" data-placement="right" title="Size S">S</span>
                <span data-toggle="tooltip" data-placement="right" title="Size M">M</span>
                <span data-toggle="tooltip" data-placement="right" title="Size XL">XL</span>
              </div>
              Including Lenses
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END: ecommerce/products-catalog -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      $('.cui-ecommerce-catalog-item-like').on('click', function() {
        $(this).toggleClass('cui-ecommerce-catalog-item-like-selected')
      })

      $('[data-toggle=tooltip]').tooltip()
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection