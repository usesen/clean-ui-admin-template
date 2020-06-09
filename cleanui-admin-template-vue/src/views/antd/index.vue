<template>
  <section class="card">
    <div class="card-header">
      <div class="utils__title">
        <strong>AntDesign Components</strong>
        <a
          href="https://vue.ant.design/docs/vue/introduce/"
          target="_blank"
          class="btn btn-sm btn-primary ml-4"
        >
          Official Documentation
          <i class="icmn-link ml-1"/>
        </a>
      </div>
      <div class="utils__titleDescription">
        A design system with values of Nature and Determinacy for better user experience of
        enterprise applications
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-12" v-for="category in data" :key="category.name">
          <div :class="$style.block">
            <div :class="$style.label">{{category.name}}</div>
            <div class="row">
              <div class="col-md-6" v-for="item in category.items" :key="item.name">
                <div :class="$style.item">
                  <h5 class="text-black" :class="$style.itemTitle">
                    <strong>{{item.name}}</strong>
                  </h5>
                  <div>
                    {{item.description}}
                    <a
                      :href="item.link"
                      target="_blank"
                      class="utils__link--blue utils__link--underlined"
                    >
                      Examples
                      <small>
                        <i class="icmn-link ml-1"/>
                      </small>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { data } from './data.json'
export default {
  data: function () {
    return {
      data,
    }
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
