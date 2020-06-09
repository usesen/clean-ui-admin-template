<template>
  <div class="card">
    <div class="card-header">
      <div class="utils__title">
        <strong>Product Details</strong>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-4">
          <div :class="$style.item">
            <div :class="$style.img">
              <div :class="$style.status">
                <span :class="$style.statusTitle">New</span>
              </div>
              <div :class="[$style.like]">
                <i class="icmn-heart"></i>
              </div>
              <a-carousel>
                <a slot="customPaging" slot-scope="props">
                  <img :src="getImgUrl(props.i)">
                </a>
                <a href="javascript: void(0)" v-for="(image, index) in images" :key="index">
                  <img :src="image">
                </a>
              </a-carousel>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div :class="$style.breadcrumbs">
            <a-breadcrumb separator=" ">
              <a-breadcrumb-item :class="$style.breadcrumbItem">
                <a href="javascript: void(0);">Catalog</a>
              </a-breadcrumb-item>
              <a-breadcrumb-item :class="$style.breadcrumbItem">
                <a href="javascript: void(0);">Chairs</a>
              </a-breadcrumb-item>
              <a-breadcrumb-item :class="$style.breadcrumbItem">
                <a href="javascript: void(0);">White</a>
              </a-breadcrumb-item>
            </a-breadcrumb>
          </div>
          <div :class="$style.sku">
            SKU: #{{sku}}
            <br>
            <div :class="$style.raiting">
              <a-rate :defaultValue="rate" disabled allowHalf/>
            </div>
          </div>
          <h4 :class="$style.mainTitle">
            <strong>{{name}}</strong>
          </h4>
          <div :class="$style.price">
            ${{price}}
            <div v-if="oldPrice" :class="$style.priceBefore">${{oldPrice}}</div>
          </div>
          <hr>
          <div :class="$style.descr" class="mb-1">
            <p>{{shortDescr}}</p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div :class="$style.optionTitle">Color</div>
              <div :class="$style.option">
                <a-select defaultValue="Red" style="width: 120px" size="small">
                  <a-select-option value="red">Red</a-select-option>
                  <a-select-option value="black">Black</a-select-option>
                  <a-select-option value="cyan">Cyan</a-select-option>
                  <a-select-option value="blue">Blue</a-select-option>
                </a-select>
              </div>
              <div :class="$style.optionTitle">Available Size</div>
              <div :class="$style.option">
                <div :class="$style.sizes">
                  <a-tooltip placement="top">
                    <template slot="title">
                      <span>Size S</span>
                    </template>
                    <span>S</span>
                  </a-tooltip>
                  <a-tooltip placement="top">
                    <template slot="title">
                      <span>Size M</span>
                    </template>
                    <span>M</span>
                  </a-tooltip>
                  <a-tooltip placement="top">
                    <template slot="title">
                      <span>Size XL</span>
                    </template>
                    <span>XL</span>
                  </a-tooltip>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div :class="$style.controls">
            <a-button type="primary" size="large">
              <a-icon type="shopping-cart"/>Buy now
            </a-button>
            <a href="javascript: void(0);" class="btn btn-link">
              <i class="icmn-heart mr-1"/>
              Add to Wishlist
            </a>
            <a href="javascript: void(0);" class="btn btn-link">
              <i class="icmn-stats-bars mr-1"/>
              Add to Compare
            </a>
          </div>
          <div :class="$style.info">
            <a-tabs defaultActiveKey="1">
              <a-tab-pane tab="Information" key="1">
                <div class="mb-1" v-for="(property, index) in properties" :key="index">
                  <strong class="mr-1">{{property.name}}:</strong>
                  {{property.value}}
                </div>
              </a-tab-pane>
              <a-tab-pane tab="Description" key="2">
                <p>{{description}}</p>
              </a-tab-pane>
            </a-tabs>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { images, sku, name, rate, price, oldPrice, shortDescr, description, properties } from './data.json'

export default {
  data: function () {
    return {
      activeImg: 0,
      images,
      sku,
      name,
      rate,
      price,
      oldPrice,
      shortDescr,
      description,
      properties,
    }
  },
  methods: {
    getImgUrl(i) {
      return this.images[i]
    },
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
