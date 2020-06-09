<template>
  <div class="card">
    <div class="card-header clearfix">
      <div class="pull-right">
        <a-upload
          name="file"
          :multiple="true"
          action="//jsonplaceholder.typicode.com/posts/"
          @change="handleChange"
        >
          <a-button>
            <a-icon type="upload"/>Click to Upload
          </a-button>
        </a-upload>
      </div>
      <div class="utils__title">
        <strong>Photo Gallery</strong>
      </div>
    </div>
    <div class="card-body">
      <div :class="$style.gallery">
        <div
          v-for="(image, index) in images"
          :key="index"
          :class="[$style.item, image.editable === true ? $style.withControls : '']"
          :style="{ backgroundImage: 'url(' + image.path + ')'}"
        >
          <div :class="$style.itemControls" v-if="image.editable">
            <a-button-group>
              <a-button icon="edit"/>
              <a-button icon="delete"/>
            </a-button-group>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { images } from './data.json'

export default {
  data: function () {
    return {
      images,
    }
  },
  methods: {
    handleChange(info) {
      if (info.file.status !== 'uploading') {
        console.log(info.file, info.fileList)
      }
      if (info.file.status === 'done') {
        this.$message.success(`${info.file.name} file uploaded successfully`)
      } else if (info.file.status === 'error') {
        this.$message.error(`${info.file.name} file upload failed.`)
      }
    },
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
