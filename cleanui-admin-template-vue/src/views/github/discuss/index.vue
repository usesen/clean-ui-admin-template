<template>
  <section class="card">
    <div class="card-header">
      <div class="utils__title">
        <strong>GitHub Discussion</strong>
      </div>
    </div>
    <div class="card-body">
      <div :class="$style.discuss">
        <div class="mb-3">
          <a-tabs defaultActiveKey="2" type="card">
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
        <div :class="$style.header" class="clearfix">
          <div :class="$style.title">
            <h1 :class="$style.titleText">{{discuss.title}}</h1>
            <div :class="$style.open">
              <a-button type="primary" size="small">New discussion</a-button>
            </div>
          </div>
          <span
            v-if="discuss.status === 'open'"
            :class="$style.status"
            class="btn btn-success btn-sm"
          >
            <i class="fa fa-check-circle-o mr-2"/>
            Open
          </span>
          <span
            v-if="discuss.status === 'closed'"
            :class="$style.status"
            class="btn btn-danger btn-sm"
          >
            <i class="fa fa-times-circle mr-2"/>
            Closed
          </span>
          <div :class="$style.metaText">
            <a href="javascript: void(0);" class="mr-1">{{discuss.authorName}}</a>
            opened this discussion on
            <span class="ml-1">{{discuss.date}}</span>
            <span class="ml-1">{{discuss.commentsCount}} comments</span>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-10">
            <div
              v-for="(comment, index) in discuss.comments"
              :key="index"
              :class="$style.commentItem"
            >
              <div class="mb-0 pb-0 clearfix">
                <div :class="$style.commentAvatar">
                  <cui-avatar :src="comment.avatar" size="50"/>
                </div>
                <div :class="$style.contentWrapper">
                  <div :class="$style.commentHead">
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
                    <strong>{{comment.authorName}}</strong> posted:
                    <small class="text-muted ml-2">{{comment.date}}</small>
                  </div>
                  <div :class="$style.commentContent" v-html="comment.content"></div>
                  <div :class="$style.commentBottom">
                    <a href="javascript: void(0);" class="mr-2">
                      <i class="icmn-heart mr-1"/>
                      <span v-if="comment.likesCount > 0">{{comment.likesCount}} Likes</span>
                      <span v-if="comment.likesCount === 0">{{comment.likesCount}} Like</span>
                    </a>
                    <a href="javascript: void(0);" class="mr-2">
                      <i class="icmn-reply mr-1"/>
                      Reply
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div v-if="discuss.status === 'open'" :class="$style.addComment" class="clearfix">
              <div :class="$style.commentAvatar">
                <cui-avatar :src="discuss.authorImg" :size="50"/>
              </div>
              <div :class="$style.contentWrapper">
                <div
                  :class="[$style.commentHead, $style.emptyCommentHead, 'p-3']"
                  style="height: 290px;"
                >
                  <quill-editor style="height: 200px;"></quill-editor>
                </div>
                <div :class="$style.commentBottom">
                  <a-button type="primary">Comment</a-button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-2">
            <div>
              <div :class="$style.sidebarItem">
                <div :class="$style.sidebarHead">Assignees</div>
                <div>No one assigned</div>
              </div>
              <div :class="$style.sidebarItem">
                <div :class="$style.sidebarHead">Labels</div>
                <div>None yet</div>
              </div>
              <div :class="$style.sidebarItem">
                <div :class="$style.sidebarHead">Projects</div>
                <div>None yet</div>
              </div>
              <div :class="$style.sidebarItem">
                <div :class="$style.sidebarHead">Milenstone</div>
                <div>No milestone</div>
              </div>
              <div :class="$style.sidebarItem">
                <div :class="$style.sidebarHead">Notifications</div>
                <div>You’re ignoring this thread.</div>
              </div>
              <div :class="$style.sidebarItem">
                <div :class="$style.sidebarHead">Participants</div>
                <div>
                  <ul :class="$style.participantsList">
                    <li
                      :class="$style.participantsItem"
                      v-for="(participant, index) in discuss.participants"
                      :key="index"
                    >
                      <cui-avatar :size="25" :src="participant"/>
                    </li>
                  </ul>
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
import CuiAvatar from '@/components/CleanUIComponents/Avatar'
import { discuss } from './data.json'
import 'quill/dist/quill.core.css'
import 'quill/dist/quill.snow.css'
import { quillEditor } from 'vue-quill-editor'

export default {
  components: {
    CuiAvatar,
    quillEditor,
  },
  data: function () {
    return {
      discuss,
    }
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
