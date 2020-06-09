<template>
  <section class="card">
    <div class="card-header">
      <div class="utils__title">
        <strong>Blog Feed</strong>
      </div>
    </div>
    <div class="card-body">
      <div :class="$style.blogFeed">
        <div class="row">
          <div class="col-lg-8">
            <main>
              <article
                v-for="(article, index) in articlesData"
                :key="index"
                :class="$style.article"
              >
                <div :class="$style.information">
                  <div :clas="$style.title">
                    <h1>
                      <a href="javascript: void(0)">{{article.name}}</a>
                    </h1>
                  </div>
                  <ul :class="$style.meta">
                    <li :class="$style.metaInf">
                      <span>
                        Post By
                        <a href="javascript: void(0);">{{article.author}}</a>
                      </span>
                    </li>
                    <li :class="$style.metaInf">
                      <span :class="$style.articleData">On {{article.date}}</span>
                    </li>
                  </ul>
                </div>
                <div :class="$style.articleMedia">
                  <a href="javascript: void(0);" :class="$style.link">
                    <img :src="article.cover" :alt="article.name">
                  </a>
                </div>
                <div :class="$style.content">
                  <div v-html="article.shortContent"></div>
                  <div :class="$style.articleMore">
                    <a-button type="primary">
                      Read More
                      <i class="ml-2 fa fa-angle-right"></i>
                    </a-button>
                  </div>
                </div>
                <footer :class="$style.footer">
                  <div class="row">
                    <div class="col-8">
                      <div :class="$style.hashtags">
                        <a
                          href="javascript: void(0);"
                          v-for="(tag, index) in article.tags"
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
            <div class="mb-5">
              <a-pagination :total="50"/>
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
import { articlesData, articlesCategories, latesArticlesData } from './data.json'

export default {
  data: function () {
    return {
      articlesData,
      articlesCategories,
      latesArticlesData,
    }
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
