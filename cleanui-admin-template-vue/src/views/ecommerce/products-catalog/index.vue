<template>
  <div class="card">
    <div class="card-header">
      <div class="utils__title">
        <strong>Products Catalog</strong>
      </div>
      <div class="row mb-5 mt-3">
        <div class="col-lg-2">
          <cui-info-card form="bordered" type="primary" :icon="false"/>
        </div>
        <div class="col-lg-2">
          <cui-info-card form="bordered" type="default" :icon="false"/>
        </div>
        <div class="col-lg-2">
          <cui-info-card form="bordered" type="danger" :icon="false"/>
        </div>
        <div class="col-lg-2">
          <cui-info-card form="bordered" type="default" :icon="false"/>
        </div>
        <div class="col-lg-2">
          <cui-info-card form="bordered" type="warning" :icon="false"/>
        </div>
        <div class="col-lg-2">
          <cui-info-card form="bordered" type="success" :icon="false"/>
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="productsCatalog">
        <div class="row">
          <div class="col-xl-4 col-lg-6 col-md-12">
            <cui-product-card/>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-12">
            <cui-product-card/>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-12">
            <cui-product-card/>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-12">
            <cui-product-card/>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-12">
            <cui-product-card/>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-12">
            <cui-product-card/>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-12">
            <cui-product-card/>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-12">
            <cui-product-card/>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-12">
            <cui-product-card/>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-12">
            <cui-product-card/>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-12">
            <cui-product-card/>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-12">
            <cui-product-card/>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import CuiInfoCard from '@/components/CleanUIComponents/InfoCard'
import CuiProductCard from '@/components/CleanUIComponents/ProductCard'

export default {
  components: {
    CuiInfoCard,
    CuiProductCard,
  },
}
</script>
