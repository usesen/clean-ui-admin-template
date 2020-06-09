<template>
  <div :class="$style.productCard">
    <div :class="$style.img">
      <div v-if="productStatus === 'new'" :class="$style.status">
        <span :class="$style.statusTitle">New</span>
      </div>
      <div :class="$style.like">
        <i class="icmn-heart"></i>
      </div>
      <a href="javascript: void(0);">
        <img :src="productImg">
      </a>
    </div>
    <div :class="$style.title">
      <a href="javascript: void(0);">{{productName}}</a>
      <div :class="$style.price">
        {{productPrice}}
        <div :class="$style.oldPrice">{{productOldPrice}}</div>
      </div>
    </div>
    <div :class="$style.descr">
      <div :class="$style.sizes">
        <a-tooltip placement="top">
          <template slot="title">
            <span>Size S</span>
          </template>
          <span style="cursor: pointer;">S</span>
        </a-tooltip>
        <a-tooltip placement="top">
          <template slot="title">
            <span>Size M</span>
          </template>
          <span style="cursor: pointer;">M</span>
        </a-tooltip>
        <a-tooltip placement="top">
          <template slot="title">
            <span>Size XL</span>
          </template>
          <span style="cursor: pointer;">XL</span>
        </a-tooltip>
      </div>
      {{productNote}}
    </div>
  </div>
</template>

<script>
import {
  productImg,
  productName,
  productPrice,
  productOldPrice,
  productNote,
  productStatus,
} from './data.json'

export default {
  name: 'CuiProductCard',
  data: function () {
    return {
      productImg,
      productName,
      productPrice,
      productOldPrice,
      productNote,
      productStatus,
    }
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
