<template>
  <section class="card">
    <div class="card-header">
      <div class="utils__title">
        <strong>YouTube Feed</strong>
      </div>
    </div>
    <div class="card-body">
      <div :class="$style.feed">
        <div :class="$style.partition" v-for="(partition, index) in partitions" :key="index">
          <h2 :class="$style.title">
            <img
              v-if="partition.cover"
              :src="partition.cover"
              class="mr-3"
              :class="$style.titleThumb"
            >
            {{partition.name}}
          </h2>
          <ul :class="$style.partitionContent">
            <li :class="$style.item" v-for="(video, index) in partition.videos" :key="index">
              <a href="javascript: void(0);" :class="$style.itemLink">
                <img :class="$style.itemThumb" :src="video.cover" :alt="video.name">
                <div :class="$style.itemDescr">
                  <span :class="$style.itemName">{{video.name}}</span>
                  <span :class="$style.itemAuthor">{{video.author}}</span>
                  <span :class="$style.itemViews" class="text-muted">{{video.views}} views</span>
                </div>
              </a>
            </li>
          </ul>
        </div>
        <div class="mb-5">
          <a-pagination :total="50"/>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { partitions } from './data.json'

export default {
  data: function () {
    return {
      partitions,
    }
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
