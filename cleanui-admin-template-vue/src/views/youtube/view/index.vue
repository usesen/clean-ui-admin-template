<template>
  <section class="card">
    <div class="card-header">
      <div class="utils__title">
        <strong>YouTube View</strong>
      </div>
    </div>
    <div class="card-body">
      <div :class="$style.videoPage" class="clearfix">
        <div :class="$style.mainContent">
          <div :class="$style.player">
            <img src="resources/images/photos/4.jpeg">
          </div>
          <div :class="$style.descr">
            <div :class="$style.card">
              <div class="mb-2">
                <strong>
                  Published on
                  <span>{{viewData.date}}</span>
                </strong>
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
              </div>
              <p class="mb-0">{{viewData.description}}</p>
            </div>
          </div>
          <div :class="$style.card">
            <div :class="$style.addComment">
              <div :class="$style.commentUser">
                <cui-avatar :src="viewData.accountImg" :size="50" :bordered="false"/>
              </div>
              <div :class="$style.commentForm">
                <a-textarea placeholder="Write a comment..." :rows="3"/>
                <div class="mt-3">
                  <a-button class="mr-2" type="primary" style="width: 200px;">
                    <i class="fa fa-send mr-2"></i>
                    Send
                  </a-button>
                </div>
              </div>
            </div>
            <div
              :class="$style.commentItem"
              class="clearfix"
              v-for="(comment, index) in viewData.comments"
              :key="index"
            >
              <div :class="$style.commentAvatar">
                <cui-avatar :src="comment.avatar" :size="50" :bordered="false"/>
              </div>
              <div :class="$style.commentContent">
                <strong>
                  {{comment.name}}
                  <span
                    :class="$style.commentTime"
                    class="text-muted ml-2"
                  >{{comment.date}}</span>
                </strong>
                <p class="mb-0">{{comment.content}}</p>
                <div :class="$style.commentLike">
                  <a href="javascript: void(0);" class="mr-2">
                    <i class="icmn-heart mr-2"/>
                    <span v-if="comment.likesCount > 0">{{comment.likesCount}} Likes</span>
                    <span v-if="comment.likesCount === 0">{{comment.likesCount}} Like</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div :class="[$style.sidebar, $style.card]">
          <div :class="$style.sidebarHead">
            <strong :class="$style.sidebarTitle">Up next</strong>
            <div class="pull-right">
              <a-checkbox>Autoplay</a-checkbox>
            </div>
          </div>
          <ul :class="$style.watchNext">
            <li
              :class="$style.nextItem"
              class="clearfix"
              v-for="(video, index) in upNext"
              :key="index"
            >
              <a href="javascript: void(0);" :class="$style.nextItemLink">
                <div :class="$style.itemThumb">
                  <img :src="video.cover" :alt="video.name" :class="$style.itemThumbImg">
                </div>
                <div :class="$style.itemDescr">
                  <span :class="$style.itemName">{{video.name}}</span>
                  <span :class="$style.itemAuthor">{{video.author}}</span>
                  <span :class="$style.itemViews" class="text-muted">
                    <span :class="$style.itemCount">{{video.views}}</span> views
                  </span>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import CuiAvatar from '@/components/CleanUIComponents/Avatar'
import { viewData, upNext } from './data.json'

export default {
  components: {
    CuiAvatar,
  },
  data: function () {
    return {
      viewData,
      upNext,
    }
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
