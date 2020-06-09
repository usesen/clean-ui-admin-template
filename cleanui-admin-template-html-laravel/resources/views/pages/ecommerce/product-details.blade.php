@extends ('layouts.app')

@section('content')
<!-- START: ecommerce/product-details -->
<div class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Product Details</strong>
    </span>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-4">
        <div class="cui-ecommerce-catalog-item">
          <div class="cui-ecommerce-catalog-item-img">
            <div class="cui-ecommerce-catalog-item-status">
              <span class="cui-ecommerce-catalog-item-status-title">New</span>
            </div>
            <div class="cui-ecommerce-catalog-item-like cui-ecommerce-catalog-item-like-selected">
              <i class="icmn-heart"><!-- --></i>
            </div>
            <a href="javascript: void(0);">
              <img id="targetPhoto" src="/cleanui/components/ecommerce/common/img/001.jpg" alt="" />
            </a>
          </div>
        </div>
        <div class="cui-ecommerce-product-photos clearfix">
          <div class="cui-ecommerce-product-photos-item cui-ecommerce-product-photos-item-active">
            <img src="/cleanui/components/ecommerce/common/img/001.jpg" alt="" />
          </div>
          <div class="cui-ecommerce-product-photos-item">
            <img src="/cleanui/components/ecommerce/common/img/002.jpg" alt="" />
          </div>
          <div class="cui-ecommerce-product-photos-item">
            <img src="/cleanui/components/ecommerce/common/img/003.jpg" alt="" />
          </div>
          <div class="cui-ecommerce-product-photos-item">
            <img src="/cleanui/components/ecommerce/common/img/004.jpg" alt="" />
          </div>
          <div class="cui-ecommerce-product-photos-item">
            <img src="/cleanui/components/ecommerce/common/img/002.jpg" alt="" />
          </div>
          <div class="cui-ecommerce-product-photos-item">
            <img src="/cleanui/components/ecommerce/common/img/003.jpg" alt="" />
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <ul class="breadcrumb breadcrumb-custom">
          <li class="breadcrumb-item">
            <a href="javascript: void(0);">Catalog</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript: void(0);">Chairs</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript: void(0);">With background</a>
          </li>
          <li class="breadcrumb-item">
            <a href="javascript: void(0);">White</a>
          </li>
        </ul>
        <div class="cui-ecommerce-product-sku">
          SKU: #0000235
          <br />
          <div class="cui-ecommerce-product-rating">
            <i class="icmn-star-full"></i>
            <i class="icmn-star-full"></i>
            <i class="icmn-star-full"></i>
            <i class="icmn-star-full"></i>
            <i class="icmn-star-empty"></i>
          </div>
        </div>
        <h4 class="cui-ecommerce-product-main-title">
          <strong>Beautiful Chair for Kids</strong>
        </h4>
        <div class="cui-ecommerce-product-price">
          $189.95
          <div class="cui-ecommerce-product-price-before">
            $220.95
          </div>
        </div>
        <hr />
        <div class="cui-ecommerce-product-descr">
          <p>
            A chair is a piece of furniture with a raised surface, commonly used to seat a single
            person. Chairs are supported most often by four legs and have a back; however, a chair
            can have three legs or can have a different shape.
          </p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="cui-ecommerce-product-option_title">
              Color
            </div>
            <div class="cui-ecommerce-product-option">
              <select class="select2">
                <optgroup label="Group 1">
                  <option selected>Option 1</option>
                  <option>Option 2</option>
                </optgroup>
                <optgroup label="Group 2">
                  <option>Option 3</option>
                  <option>Option 4</option>
                  <option>Option 5</option>
                </optgroup>
              </select>
            </div>
            <div class="cui-ecommerce-product-option_title">
              Available Size
            </div>
            <div class="cui-ecommerce-product-option">
              <div class="cui-ecommerce-catalog-item-descr-sizes">
                <span
                  data-toggle="tooltip"
                  data-placement="right"
                  title=""
                  data-original-title="Size S"
                  >S</span
                >
                <span
                  data-toggle="tooltip"
                  data-placement="right"
                  title=""
                  data-original-title="Size M"
                  >M</span
                >
                <span
                  data-toggle="tooltip"
                  data-placement="right"
                  title=""
                  data-original-title="Size XL"
                  >XL</span
                >
              </div>
            </div>
          </div>
        </div>
        <hr />
        <div class="cui-ecommerce-product-controls">
          <button type="button" class="btn btn-icon btn-primary btn-lg mr-3">
            <i class="icmn-cart mr-3"></i>
            Buy Now
          </button>
          <a href="javascript: void(0);" class="btn btn-link">
            <i class="icmn-heart"></i>
            Add to Wishlist
          </a>
          <a href="javascript: void(0);" class="btn btn-link">
            <i class="icmn-stats-bars"></i>
            Add to Compare
          </a>
        </div>
        <div class="cui-ecommerce-product-info">
          <div class="nav-tabs-horizontal">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a
                  class="nav-link active"
                  href="javascript: void(0);"
                  data-toggle="tab"
                  data-target="#tab1"
                  role="tab"
                  >Information</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="javascript: void(0);"
                  data-toggle="tab"
                  data-target="#tab2"
                  role="tab"
                  >Description</a
                >
              </li>
            </ul>
            <div class="tab-content pt-3 pb-3">
              <div class="tab-pane active" id="tab1">
                <dl class="dl-horizontal user-profile-dl">
                  <dt>Description lists</dt>
                  <dd>A description list is perfect for defining terms</dd>
                  <dt>Euismod</dt>
                  <dd>
                    Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit
                  </dd>
                  <dd>Donec id elit non mi porta gravida</dd>
                  <dt>Malesuada porta</dt>
                  <dd>Etiam porta sem malesuada magna mollis euismod</dd>
                  <dt>Qui eiusmod magna</dt>
                  <dd>Lorem ipsum In enim nostrud ut in mollit sint cillum laborum ea quis qui</dd>
                </dl>
              </div>
              <div class="tab-pane" id="tab2">
                <p>
                  Mnesarchum velit cumanum utuntur tantam deterritum, democritum vulgo contumeliae
                  abest studuisse quanta telos. Inmensae. Arbitratu dixisset invidiae ferre
                  constituto gaudeat contentam, omnium nescius, consistat interesse animi, amet
                  fuisset numen graecos incidunt euripidis praesens, homines religionis dirigentur
                  postulant. Magnum utrumvis gravitate appareat fabulae facio perveniri fruenda
                  indicaverunt texit, frequenter probet diligenter sententia meam distinctio theseo
                  legerint corporis quoquo, optari futurove expedita.
                </p>
                <p>
                  Cumanum utuntur tantam deterritum, democritum vulgo contumeliae abest studuisse
                  quanta telos. Inmensae. Arbitratu dixisset invidiae ferre constituto gaudeat
                  contentam, omnium nescius, consistat interesse animi, amet fuisset numen graecos
                  incidunt euripidis praesens.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Related Products</strong>
    </span>
  </div>
  <div class="card-body">
    <div class="cui-ecommerce-catalog">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
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
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
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
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
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
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
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
<!-- END: ecommerce/product-details -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      // Heart toggle
      $('.cui-ecommerce-catalog-item-like').on('click', function() {
        $(this).toggleClass('cui-ecommerce-catalog-item-like-selected')
      })

      // Active photo toggle
      $('.cui-ecommerce-product-photos-item').on('click', function() {
        $('#targetPhoto').attr(
          'src',
          $(this)
            .find('img')
            .attr('src'),
        )
        $('.cui-ecommerce-product-photos-item').removeClass(
          'cui-ecommerce-product-photos-item-active',
        )
        $(this).addClass('cui-ecommerce-product-photos-item-active')
      })

      // Tooltip
      $('[data-toggle=tooltip]').tooltip()

      // Select 2
      $('.select2').select2()
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection