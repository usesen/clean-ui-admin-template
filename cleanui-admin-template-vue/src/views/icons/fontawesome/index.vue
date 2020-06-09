<template>
  <div>
    <section class="card">
      <div class="card-header">
        <div class="utils__title">
          <strong>FontAwesome</strong>
          <a href="http://fontawesome.io/" target="_blank" class="btn btn-sm btn-primary ml-4">
            Official Documentation
            <i class="icmn-link ml-1"/>
          </a>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-12">
            <h5 class="text-black">
              <strong>The iconic font</strong>
            </h5>
            <p class="text-muted">
              The complete set of 634 icons in Font Awesome 4.6.3
              <br>License: MIT License. You can use it for commercial projects, open source
              projects, or really just about whatever you want
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-6 offset-xl-3">
            <div class="text-center" v-for="iconsSet in iconsData" :key="iconsSet.setName">
              <h3 class="text-block mt-5 mb-4">
                <strong>{{iconsSet.setName}}</strong>
              </h3>
              <ul class="utils__iconsBlock list-unstyled">
                <a-tooltip v-for="icon in iconsSet.icons" :key="icon">
                  <template slot="title">fa {{icon}}</template>
                  <li>
                    <i :class="['fa', icon]"/>
                  </li>
                </a-tooltip>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import { iconsData } from './data.json'
export default {
  data: function () {
    return {
      iconsData,
    }
  },
}
</script>
