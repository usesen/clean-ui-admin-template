<template>
  <section class="card">
    <div class="card-header">
      <div class="utils__title">
        <strong>GitHub Explore</strong>
      </div>
    </div>
    <div class="card-body">
      <div :class="$style.explore">
        <div class="mb-3">
          <a-tabs defaultActiveKey="1" type="card">
            <a-tab-pane key="1">
              <span slot="tab">
                <i class="mr-2 fa fa-home"/>
                Home
              </span>
            </a-tab-pane>
            <a-tab-pane key="2">
              <span slot="tab">
                <i class="mr-2 fa fa-comments"/>
                Discussion
              </span>
            </a-tab-pane>
            <a-tab-pane key="3">
              <span slot="tab">
                <i class="mr-2 fa fa-user"/>
                Profile
              </span>
            </a-tab-pane>
            <a-tab-pane key="4">
              <span slot="tab">
                <i class="mr-2 fa fa-envelope"/>
                Messages
              </span>
            </a-tab-pane>
            <a-tab-pane key="5">
              <span slot="tab">
                <i class="mr-2 fa fa-cog"/>
                Settings
              </span>
            </a-tab-pane>
          </a-tabs>
        </div>
        <div class="clearfix" :class="$style.descr">
          <p :class="$style.descrText">{{projectData.description}}</p>
          <span class="pull-right">
            <a-button>Edit</a-button>
          </span>
        </div>
        <div :class="$style.overallData">
          <ul :class="$style.overallDataList">
            <li :class="$style.overallDataItem">
              <a href="javascript: void(0);">
                <i class="fa fa-check-circle-o mr-2"/>
                {{projectData.commits}} commits
              </a>
            </li>
            <li :class="$style.overallDataItem">
              <a href="javascript: void(0);">
                <i class="fa fa-th-list mr-2"/>
                {{projectData.branches}} branch
              </a>
            </li>
            <li :class="$style.overallDataItem">
              <a href="javascript: void(0);">
                <i class="fa fa-window-maximize mr-2"/>
                {{projectData.releases}} releases
              </a>
            </li>
            <li :class="$style.overallDataItem">
              <a href="javascript: void(0);">
                <i class="fa fa-bell mr-2"/>
                {{projectData.contributors}} contributors
              </a>
            </li>
          </ul>
        </div>
        <div class="clearfix">
          <div :class="$style.sortLeft">
            <a-select
              class="mr-2 mb-2"
              showSearch
              allowClear
              placeholder="Select a type"
              optionFilterProp="children"
              style="width: 200px"
            >
              <a-select-option value="html">HTML</a-select-option>
              <a-select-option value="css">CSS</a-select-option>
              <a-select-option value="javascript">JavaScript</a-select-option>
            </a-select>
            <a-button>New request</a-button>
          </div>
          <div :class="$style.sortRight">
            <div :class="$style.sortOption" class="mr-2 mb-2">
              <a-radio-group>
                <a-radio-button value="create">Create new file</a-radio-button>
                <a-radio-button value="upload">Upload files</a-radio-button>
                <a-radio-button value="find">Find file</a-radio-button>
              </a-radio-group>
            </div>
            <div :class="$style.sortOption" class="mb-2">
              <a-dropdown slot="actions">
                <a-button>Download
                  <a-icon type="down"/>
                </a-button>
                <a-menu slot="overlay">
                  <a-menu-item>
                    <a href="javascript:;">1st menu item</a>
                  </a-menu-item>
                  <a-menu-item>
                    <a href="javascript:;">2nd menu item</a>
                  </a-menu-item>
                  <a-menu-item>
                    <a href="javascript:;">3rd menu item</a>
                  </a-menu-item>
                </a-menu>
              </a-dropdown>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table :class="$style.nav" class="table table-hover text-nowrap">
            <tbody>
              <tr v-for="(item, index) in projectData.explore" :key="index">
                <td :class="$style.navIcon">
                  <i :class="[item.type === 'folder' ? 'fa-folder' : 'fa-file-o', 'fa']"/>
                </td>
                <td>
                  <a href="javascript: void(0);">{{item.name}}</a>
                </td>
                <td>{{item.info}}</td>
                <td :class="$style.navTime">{{item.time}}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { projectData } from './data.json'

export default {
  data: function () {
    return {
      projectData,
    }
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
