<template>
  <div class="card">
    <div class="card-header">
      <div class="utils__title">
        <strong>Product Edit</strong>
      </div>
    </div>
    <div class="card-body">
      <h4 class="text-black mb-3">
        <strong>Main Parameters</strong>
      </h4>
      <a-form :form="form">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-lg-6">
                <a-form-item label="Title">
                  <a-input placeholder="Product title" v-decorator="['title']"/>
                </a-form-item>
              </div>
              <div class="col-lg-6">
                <a-form-item label="SKU">
                  <a-input placeholder="Product SKU" v-decorator="['sku']"/>
                </a-form-item>
              </div>
              <div class="col-lg-12">
                <a-form-item label="Category">
                  <a-tree-select
                    v-decorator="['category']"
                    showSearch
                    placeholder="Please select category"
                    allowClear
                    multiple
                    treeDefaultExpandAll
                  >
                    <a-tree-select-node value="furniture" title="Furniture" key="0">
                      <a-tree-select-node value="tables" title="Tables" key="0-0"/>
                      <a-tree-select-node value="chairs" title="Chairs" key="0-1">
                        <a-tree-select-node
                          value="roundedchairs"
                          title="Rounded Chairs"
                          key="0-1-0"
                        />
                        <a-tree-select-node
                          value="squaredchairs"
                          title="Squared Chairs"
                          key="0-1-1"
                        />
                      </a-tree-select-node>
                    </a-tree-select-node>
                    <a-tree-select-node value="electronics" title="Electronics" key="1">
                      <a-tree-select-node value="tv" title="TV" key="1-0"/>
                      <a-tree-select-node value="consoles" title="Consoles" key="1-1">
                        <a-tree-select-node value="playstation" title="Playstation" key="1-1-0"/>
                        <a-tree-select-node value="xbox" title="Xbox" key="1-1-1"/>
                      </a-tree-select-node>
                    </a-tree-select-node>
                  </a-tree-select>
                </a-form-item>
                <a-form-item label="Short Description">
                  <a-textarea
                    placeholder="Short Description"
                    :rows="4"
                    v-decorator="['shortDescr']"
                  />
                </a-form-item>
                <a-form-item label="Full Description">
                  <a-textarea placeholder="Full Description" :rows="4" v-decorator="['fullDescr']"/>
                </a-form-item>
              </div>
            </div>
            <h4 class="text-black mt-2 mb-3">
              <strong>Pricing</strong>
            </h4>
            <div class="row">
              <div class="col-lg-6">
                <a-form-item label="Total Price">
                  <a-input placeholder="Total Price" v-decorator="['total']"/>
                </a-form-item>
              </div>
              <div class="col-lg-6">
                <a-form-item label="Discount Price">
                  <a-input placeholder="Discount Price" v-decorator="['discount']"/>
                </a-form-item>
              </div>
            </div>
            <h4 class="text-black mt-2 mb-3">
              <strong>Attributes</strong>
            </h4>
            <div class="row">
              <div class="col-lg-6">
                <a-form-item label="Colors">
                  <a-select showSearch placeholder="Select a color">
                    <a-select-option value="red">Red</a-select-option>
                    <a-select-option value="black">Black</a-select-option>
                    <a-select-option value="cyan">Cyan</a-select-option>
                    <a-select-option value="blue">Blue</a-select-option>
                  </a-select>
                </a-form-item>
              </div>
              <div class="col-lg-6">
                <a-form-item label="Size">
                  <a-select showSearch placeholder="Select a size">
                    <a-select-option value="red">Red</a-select-option>
                    <a-select-option value="black">Black</a-select-option>
                    <a-select-option value="cyan">Cyan</a-select-option>
                    <a-select-option value="blue">Blue</a-select-option>
                  </a-select>
                </a-form-item>
              </div>
              <div class="col-lg-12">
                <div class="form-actions">
                  <a-button type="primary" class="mr-2">Save Product</a-button>
                  <a-button type="default">Cancel</a-button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="mb-4 height-300">
              <a-upload-dragger
                name="file"
                :multiple="true"
                action="//jsonplaceholder.typicode.com/posts/"
                @change="handleChange"
              >
                <p class="ant-upload-drag-icon">
                  <a-icon type="inbox"/>
                </p>
                <p class="ant-upload-text">Click or drag file to this area to upload</p>
                <p
                  class="ant-upload-hint"
                >Support for a single or bulk upload. Strictly prohibit from uploading company data or other band files</p>
              </a-upload-dragger>
            </div>
            <a-upload name="file" :multiple="true">
              <a-button>
                <a-icon type="upload"/>Click to Upload
              </a-button>
            </a-upload>
          </div>
        </div>
      </a-form>
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      form: this.$form.createForm(this),
    }
  },
  methods: {
    handleChange(info) {
      const status = info.file.status
      if (status !== 'uploading') {
        console.log(info.file, info.fileList)
      }
      if (status === 'done') {
        this.$message.success(`${info.file.name} file uploaded successfully.`)
      } else if (status === 'error') {
        this.$message.error(`${info.file.name} file upload failed.`)
      }
    },
  },
}
</script>
