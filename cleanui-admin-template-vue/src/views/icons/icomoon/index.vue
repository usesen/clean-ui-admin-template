<template>
  <section class="card">
    <div class="card-header">
      <div class="utils__title">
        <strong>Icomoon Free</strong>
        <a
          href="https://icomoon.io/#icons-icomoon"
          target="_blank"
          class="btn btn-sm btn-primary ml-4"
        >
          Official Documentation
          <i class="icmn-link ml-1"/>
        </a>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-xl-6 offset-xl-3">
          <ul class="utils__iconsBlock list-unstyled">
            <a-tooltip v-for="icon in iconsData" :key="icon">
              <template slot="title">{{icon}}</template>
              <li>
                <i :class="icon"/>
              </li>
            </a-tooltip>
          </ul>
        </div>
      </div>
    </div>
  </section>
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
