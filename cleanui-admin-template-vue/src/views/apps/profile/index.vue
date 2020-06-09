<template>
  <div :class="$style.profile">
    <div class="row">
      <div class="col-xl-4">
        <div
          class="card"
          :class="$style.header"
          :style="{ backgroundImage: 'url(' + background + ')'}"
        >
          <div class="card-body text-center">
            <cui-avatar :src="photo" size="110" bordered="true" :borderColor="white"/>
            <br>
            <br>
            <a-button-group>
              <a-button style="width: 150px;">Follow</a-button>
              <a-button style="width: 150px;">Add to Friend</a-button>
            </a-button-group>
            <br>
            <p class="text-white mt-2">Last activity: {{lastActivity}}</p>
            <p class="text-white mt-2">
              <cui-donut :name="status" :type="status === 'Online' ? 'success' : 'danger'"/>
            </p>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="mb-3 text-black">
              <strong>Actions</strong>
            </h5>
            <div :class="$style.actions">
              <a-button style="display: block; width: 100%;">Send Message</a-button>
              <a-button style="display: block; width: 100%;">Send File</a-button>
              <a-button style="display: block; width: 100%;">Access History</a-button>
              <a-button style="display: block; width: 100%;">Rename User</a-button>
              <a-button style="display: block; width: 100%;">Ban User</a-button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="mb-3 text-black">
              <strong>Skills</strong>
            </h5>
            <div v-for="(skill, index) in skills" :key="index">
              <div class="mb-1">{{skill.name}}</div>
              <a-progress :percent="skill.value" :showInfo="false"/>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="mb-3 text-black">
              <strong>Information</strong>
            </h5>
            <dl class="row">
              <dt class="col-xl-3">Courses End:</dt>
              <dd class="col-xl-9">{{coursesEnd}}</dd>
              <dt class="col-xl-3">Address:</dt>
              <dd class="col-xl-9">{{adress}}</dd>
              <dt class="col-xl-3">Skills:</dt>
              <dd class="col-xl-9">
                <span
                  class="badge badge-default mr-1"
                  :key="index"
                  v-for="(skill, index) in profSkills"
                >{{skill}}</span>
              </dd>
              <dt class="col-xl-3">Last companies:</dt>
              <dd class="col-xl-9">{{lastCompanies}}</dd>
              <dt class="col-xl-3">Personal Information:</dt>
              <dd class="col-xl-9">{{personal}}</dd>
            </dl>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="mb-3 text-black">
              <strong>Calendar</strong>
            </h5>
            <a-calendar :fullscreen="false"/>
          </div>
        </div>
      </div>
      <div class="col-xl-8">
        <div :class="$style.socialInfo" class="card card-body mb-4">
          <div>
            <h2>
              <span class="text-black mr-2">
                <strong>{{name}}</strong>
              </span>
              <small class="text-muted">{{nickname}}</small>
            </h2>
            <p class="mb-1">{{post}}</p>
          </div>
          <div :class="$style.socialCounts">
            <div class="text-center mr-3">
              <h2>{{followersCount}}</h2>
              <p class="mb-0">Followers</p>
            </div>
            <div class="text-center mr-3">
              <h2>{{postsCount}}</h2>
              <p class="mb-0">Followers</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <a-tabs defaultActiveKey="1">
              <a-tab-pane key="1">
                <span slot="tab">
                  <span>
                    <i class="icmn-menu"/> Wall
                  </span>
                </span>
                <div class="py-3">
                  <a-textarea placeholder="Basic usage" :rows="4"/>
                  <div class="mt-3">
                    <a-button class="mr-2" type="primary" style="width: 200px">
                      <i class="fa fa-send mr-2"/>
                      Create Post
                    </a-button>
                    <a-upload
                      name="file"
                      :multiple="true"
                      action="//jsonplaceholder.typicode.com/posts/"
                      :headers="headers"
                      @change="handleChange"
                    >
                      <a-button>
                        <a-icon type="upload"/>Click to Upload
                      </a-button>
                    </a-upload>
                  </div>
                </div>
                <div v-for="(item, index) in posts" :key="index">
                  <div :class="$style.wallItem" class="clearfix">
                    <div :class="$style.wallAvatar">
                      <cui-avatar size="50" :src="item.avatar" :bordered="false"/>
                    </div>
                    <div :class="$style.wallContent">
                      <div class="mb-3">
                        <div class="pull-right">
                          <a-dropdown>
                            <a class="ant-dropdown-link" href="javascript: void(0);">Actions
                              <a-icon type="down"/>
                            </a>
                            <a-menu slot="overlay">
                              <a-menu-item>
                                <a href="javascript:void(0)">
                                  <a-icon type="edit"/>Edit Post
                                </a>
                              </a-menu-item>
                              <a-menu-item>
                                <a href="javascript:void(0)">
                                  <a-icon type="delete"/>Delete Post
                                </a>
                              </a-menu-item>
                              <a-menu-item>
                                <a href="javascript:void(0)">
                                  <a-icon type="frown-o"/>Mark as a Spam
                                </a>
                              </a-menu-item>
                            </a-menu>
                          </a-dropdown>
                        </div>
                        <strong>{{item.name}}</strong> posted:
                        <br>
                        <small class="text-muted">{{item.date}}</small>
                      </div>
                      <div class="mb-3" v-html="item.content"></div>
                      <a href="javascript: void(0);" class="mr-3">
                        <i class="icmn-heart mr-2"/>
                        <span v-if="item.likesCount > 0">{{item.likesCount}} Likes</span>
                        <span v-if="item.likesCount === 0">{{item.likesCount}} Like</span>
                      </a>
                      <a href="javascript: void(0);" class="mr-3">
                        <i class="icmn-bubble mr-2"/>
                        <span v-if="item.commentsCount > 0">{{item.commentsCount}} Comments</span>
                        <span v-if="item.commentsCount === 0">{{item.commentsCount}} Comment</span>
                      </a>
                    </div>
                  </div>
                  <div :class="[$style.wallContent, $style.wallInnerContent]">
                    <div :class="$style.wallComments">
                      <div
                        :class="$style.wallItem"
                        class="clearfix"
                        v-for="(postComment, index) in item.comments"
                        :key="index"
                      >
                        <div :class="$style.wallAvatar">
                          <cui-avatar size="50" :src="postComment.avatar" :bordered="false"/>
                        </div>
                        <div :class="$style.wallContent">
                          <div class="clearfix">
                            <div class="pull-right">
                              <a-dropdown>
                                <a class="ant-dropdown-link" href="javascript: void(0);">Actions
                                  <a-icon type="down"/>
                                </a>
                                <a-menu slot="overlay">
                                  <a-menu-item>
                                    <a href="javascript:void(0)">
                                      <a-icon type="edit"/>Edit Post
                                    </a>
                                  </a-menu-item>
                                  <a-menu-item>
                                    <a href="javascript:void(0)">
                                      <a-icon type="delete"/>Delete Post
                                    </a>
                                  </a-menu-item>
                                  <a-menu-item>
                                    <a href="javascript:void(0)">
                                      <a-icon type="frown-o"/>Mark as a Spam
                                    </a>
                                  </a-menu-item>
                                </a-menu>
                              </a-dropdown>
                            </div>
                            <strong>{{postComment.name}}</strong> posted:
                            <br>
                            <small class="text-muted">{{postComment.date}}</small>
                          </div>
                          <div class="mb-3" v-html="postComment.content"></div>
                          <a href="javascript: void(0);" class="mr-3">
                            <i class="icmn-heart mr-2"/>
                            <span v-if="postComment.likesCount > 0">{{postComment.likesCount}} Likes</span>
                            <span
                              v-if="postComment.likesCount === 0"
                            >{{postComment.likesCount}} Like</span>
                          </a>
                          <a href="javascript: void(0);" class="mr-3">
                            <i class="icmn-bubble mr-2"/>
                            <span
                              v-if="postComment.commentsCount > 0"
                            >{{postComment.commentsCount}} Comments</span>
                            <span
                              v-if="postComment.commentsCount === 0"
                            >{{postComment.commentsCount}} Comment</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </a-tab-pane>
              <a-tab-pane key="2">
                <span slot="tab">
                  <span>
                    <i class="icmn-bubbles"/> Messages
                  </span>
                </span>
                <cui-chat/>
              </a-tab-pane>
              <a-tab-pane key="3">
                <span slot="tab">
                  <i class="icmn-cog"/> Settings
                </span>
                <a-form :form="form">
                  <h5 class="text-black mt-2 mb-3">
                    <strong>Personal Information</strong>
                  </h5>
                  <div class="row">
                    <div class="col-lg-6">
                      <a-form-item label="Username">
                        <a-input placeholder="Username" v-decorator="['username']"/>
                      </a-form-item>
                    </div>
                    <div class="col-lg-6">
                      <a-form-item label="Email">
                        <a-input placeholder="Email" v-decorator="['discount']"/>
                      </a-form-item>
                    </div>
                  </div>
                  <h5 class="text-black mt-2 mb-3">
                    <strong>New Password</strong>
                  </h5>
                  <div class="row">
                    <div class="col-lg-6">
                      <a-form-item label="Password">
                        <a-input placeholder="Password" v-decorator="['password']"/>
                      </a-form-item>
                    </div>
                    <div class="col-lg-6">
                      <a-form-item label="Confirm Password">
                        <a-input placeholder="Confirm Password" v-decorator="['confirmPassword']"/>
                      </a-form-item>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <h5 class="text-black mt-2 mb-3">
                        <strong>Profile Avatar</strong>
                      </h5>
                      <a-form-item>
                        <a-upload
                          name="file"
                          :multiple="true"
                          action="//jsonplaceholder.typicode.com/posts/"
                          :headers="headers"
                          @change="handleChange"
                        >
                          <a-button>
                            <a-icon type="upload"/>Click to Upload
                          </a-button>
                        </a-upload>
                      </a-form-item>
                    </div>
                    <div class="col-lg-6">
                      <h5 class="text-black mt-2 mb-3">
                        <strong>Profile Background</strong>
                      </h5>
                      <a-form-item>
                        <a-upload
                          name="file"
                          :multiple="true"
                          action="//jsonplaceholder.typicode.com/posts/"
                          :headers="headers"
                          @change="handleChange"
                        >
                          <a-button>
                            <a-icon type="upload"/>Click to Upload
                          </a-button>
                        </a-upload>
                      </a-form-item>
                    </div>
                  </div>
                  <div class="form-actions mt-0">
                    <a-button
                      style="width: 150px;"
                      type="primary"
                      htmlType="submit"
                      class="mr-3"
                    >Submit</a-button>
                    <a-button htmlType="submit">Cancel</a-button>
                  </div>
                </a-form>
              </a-tab-pane>
            </a-tabs>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import {
  name,
  nickname,
  photo,
  background,
  post,
  postsCount,
  followersCount,
  lastActivity,
  status,
  skills,
  coursesEnd,
  adress,
  profSkills,
  lastCompanies,
  personal,
  posts,
} from './data.json'
import CuiAvatar from '@/components/CleanUIComponents/Avatar'
import CuiDonut from '@/components/CleanUIComponents/Donut'
import CuiChat from '@/components/CleanUIComponents/Chat'

export default {
  components: {
    CuiAvatar,
    CuiDonut,
    CuiChat,
  },
  data: function () {
    return {
      name,
      nickname,
      photo,
      background,
      post,
      postsCount,
      followersCount,
      lastActivity,
      status,
      skills,
      coursesEnd,
      adress,
      profSkills,
      lastCompanies,
      personal,
      posts,
      form: this.$form.createForm(this),
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
