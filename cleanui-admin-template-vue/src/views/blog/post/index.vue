<template>
  <section class="card">
    <div class="card-header">
      <div class="utils__title">
        <strong>Blog Post</strong>
      </div>
    </div>
    <div class="card-body">
      <div :class="$style.blogFeed">
        <div class="row">
          <div class="col-lg-8">
            <main>
              <article :class="$style.article">
                <div :class="$style.information">
                  <div :clas="$style.title">
                    <h1>
                      <a href="javascript: void(0)">{{articleData.name}}</a>
                    </h1>
                  </div>
                  <ul :class="$style.meta">
                    <li :class="$style.metaInf">
                      <span>
                        Post By
                        <a href="javascript: void(0);">{{articleData.author}}</a>
                      </span>
                    </li>
                    <li :class="$style.metaInf">
                      <span :class="$style.articleData">On {{articleData.date}}</span>
                    </li>
                  </ul>
                </div>
                <div :class="$style.content">
                  <div v-html="articleData.content"></div>
                </div>
                <footer :class="$style.footer">
                  <div class="row">
                    <div class="col-8">
                      <div :class="$style.hashtags">
                        <a
                          href="javascript: void(0);"
                          v-for="(tag, index) in articleData.tags"
                          :key="index"
                        >{{tag}}</a>
                      </div>
                    </div>
                    <div class="col-4">
                      <ul :class="$style.share">
                        <li :class="$style.shareItem">
                          <a href="javascript: void(0);">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>
                        <li :class="$style.shareItem">
                          <a href="javascript: void(0);">
                            <i class="fa fa-twitter"></i>
                          </a>
                        </li>
                        <li :class="$style.shareItem">
                          <a href="javascript: void(0);">
                            <i class="fa fa-pinterest-p"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </footer>
              </article>
            </main>
            <div :class="$style.authorCard" class="clearfix">
              <div :class="$style.authorPhoto">
                <cui-avatar :src="articleData.authorAvatar" :size="110"/>
              </div>
              <div :class="$style.authorInf">
                <span :class="$style.authorName">{{articleData.author}}</span>
                <p :class="$style.authorWords">&ldquo;{{articleData.authorStatus}}&rdquo;</p>
                <div>
                  <a href="javascript: void(0);" class="btn btn-sm btn-primary">View Profile</a>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div :class="$style.commentsTitle">Leave a comment</div>
              <div :class="$style.addCommentForm">
                <a-form :form="form">
                  <a-form-item>
                    <a-input
                      placeholder="Username"
                      v-decorator="['username', {rules: [{ required: true, message: 'Please input your username!' }]}]"
                    >
                      <a-icon slot="prefix" type="user" style="color: rgba(0,0,0,.25);"/>
                    </a-input>
                  </a-form-item>
                  <a-form-item>
                    <a-input placeholder="Email" v-decorator="['email']">
                      <a-icon slot="prefix" type="mail" style="color: rgba(0,0,0,.25);"/>
                    </a-input>
                  </a-form-item>
                  <a-form-item>
                    <a-textarea :rows="3" placeholder="Your message"></a-textarea>
                  </a-form-item>
                  <a-form-item>
                    <a-button class="mr-2" type="primary" style="width: 200px;">
                      <i class="fa fa-send mr-2"></i> Send
                    </a-button>
                    <a-upload>
                      <a-button>
                        <a-icon type="upload"/>Attach File
                      </a-button>
                    </a-upload>
                  </a-form-item>
                </a-form>
              </div>
            </div>
            <div class="mb-4">
              <div :class="$style.commentsTitle">Comments</div>
              <div class="mt-3">
                <div
                  class="clearfix"
                  :class="[$style.commentItem, postComment.subComments !== undefined ? 'pb-0' : '']"
                  v-for="(postComment, index) in comments"
                  :key="index"
                >
                  <div :class="$style.commentAvatar">
                    <cui-avatar :src="postComment.avatar" :size="50" :bordered="false"/>
                  </div>
                  <div :class="$style.commentContent">
                    <div class="clearfix">
                      <div class="pull-left">
                        <strong>{{postComment.name}}</strong>
                        <br>
                        <small class="tet-muted">{{postComment.date}}</small>
                      </div>
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
                    <div v-html="postComment.content"></div>
                    <div>
                      <a href="javascript: void(0);" class="mr-3">
                        <i class="icmn-heart mr-2"/>
                        <span v-if="postComment.likesCount > 0">{{postComment.likesCount}} Likes</span>
                        <span v-if="postComment.likesCount === 0">{{postComment.likesCount}} Like</span>
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
                      <a href="javascript: void(0);">
                        <i class="icmn-reply mr-2"/>
                        <span>Reply</span>
                      </a>
                    </div>
                    <div v-if="postComment.subComments">
                      <div :class="$style.subcommentsContent">
                        <div
                          class="clearfix"
                          :class="$style.commentItem"
                          v-for="(subComment, index) in postComment.subComments"
                          :key="index"
                        >
                          <div :class="$style.commentAvatar">
                            <cui-avatar :src="subComment.avatar" :size="50" :bordered="false"/>
                          </div>
                          <div :class="$style.commentContent">
                            <div class="clearfix">
                              <div class="pull-left">
                                <strong>{{postComment.name}}</strong>
                                <br>
                                <small class="tet-muted">{{postComment.date}}</small>
                              </div>
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
                            <div v-html="subComment.content">
                              <div>
                                <a href="javascript: void(0);" class="mr-3">
                                  <i class="icmn-heart mr-2"/>
                                  <span
                                    v-if="postComment.likesCount > 0"
                                  >{{postComment.likesCount}} Likes</span>
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
                                <a href="javascript: void(0);">
                                  <i class="icmn-reply mr-2"/>
                                  <span>Reply</span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="mb-5 pb-2">
                  <a href="javascript: void(0);" class="btn btn-default btn-block mb-5">Load More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div :class="$style.sidebar">
              <div :class="$style.partition">
                <div :class="$style.partitionHead">
                  <span :class="$style.partitionName">Search</span>
                </div>
                <div class="input-group">
                  <a-input-search placeholder="Search ...">
                    <a-button slot="enterButton" type="primary">
                      <a-icon type="search"/>Search
                    </a-button>
                  </a-input-search>
                </div>
              </div>
              <div :class="$style.partition">
                <div :class="$style.partitionHead">
                  <span :class="$style.partitionName">Categories</span>
                </div>
                <ul :class="$style.categoriesList">
                  <li
                    :class="$style.categoriesItem"
                    v-for="(category, index) in articlesCategories"
                    :key="index"
                  >
                    <a :class="$style.categoriesLink" href="javascript: void(0);">{{category}}</a>
                  </li>
                </ul>
              </div>
              <div :class="$style.partition">
                <div :class="$style.partitionHead">
                  <span :class="$style.partitionName">Latest Post</span>
                </div>
                <article
                  :class="$style.latestPost"
                  v-for="(latestArticle, index) in latesArticlesData"
                  :key="index"
                >
                  <div :class="$style.latestImg">
                    <a href="javascript: void(0);">
                      <img :src="latestArticle.cover" :alt="latestArticle.name">
                    </a>
                  </div>
                  <div :class="$style.latestData">
                    <div :class="$style.latestName">
                      <h2>
                        <a href="javascript: void(0);">{{latestArticle.name}}</a>
                      </h2>
                    </div>
                    <ul :class="[$style.latestArticleMeta, $style.meta]">
                      <li :class="$style.metaInf">
                        <span>
                          Post By
                          <a href="javascript: void(0);">{{latestArticle.author}}</a>
                        </span>
                      </li>
                      <li :class="$style.metaInf">
                        <span :class="$style.articleData">On {{latestArticle.date}}</span>
                      </li>
                    </ul>
                  </div>
                </article>
              </div>
              <div :class="$style.partition">
                <div :class="$style.partitionHead">
                  <span :class="$style.partitionName">Subscribe</span>
                </div>
                <div class="input-group">
                  <a-input placeholder="Email adress">
                    <a-icon type="mail" slot="addonAfter"/>
                  </a-input>
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
import { articleData, articlesCategories, latesArticlesData, comments } from './data.json'
import CuiAvatar from '@/components/CleanUIComponents/Avatar'

export default {
  components: {
    CuiAvatar,
  },
  data: function () {
    return {
      form: this.$form.createForm(this),
      articleData,
      articlesCategories,
      latesArticlesData,
      comments,
    }
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
