<template>
  <div class="mb-5">
    <div :class="$style.pricingTable">
      <cui-pricing-item :class="$style.pricingTableItem" type="success" :extended="true"/>
      <cui-pricing-item :class="$style.pricingTableItem"/>
      <cui-pricing-item :class="$style.pricingTableItem"/>
      <cui-pricing-item :class="$style.pricingTableItem" type="default" :extended="true"/>
    </div>
    <div :class="$style.pricingTable">
      <cui-pricing-item :class="$style.pricingTableItem" type="warning"/>
      <cui-pricing-item :class="$style.pricingTableItem"/>
      <cui-pricing-item :class="$style.pricingTableItem" :extended="true"/>
      <cui-pricing-item :class="$style.pricingTableItem"/>
    </div>
  </div>
</template>

<script>
import CuiPricingItem from '@/components/CleanUIComponents/PricingItem'

export default {
  components: {
    CuiPricingItem,
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
