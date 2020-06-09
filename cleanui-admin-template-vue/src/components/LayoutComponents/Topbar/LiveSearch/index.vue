<template>
  <div class="d-inline-block mr-4" @keydown.esc="closeSearch()">
    <a-input
      :class="$style.extInput"
      placeholder="Inpit search text..."
      style="width: 200px;"
      @focus="openSearch"
      ref="outerInput"
    >
      <a-icon slot="prefix" type="search" />
    </a-input>
    <div :class="[$style.livesearch, showSearch ? $style.livesearchVisible : '']">
      <button @click="closeSearch" :class="$style.close" type="button">
        <span class="utils__visibilityHidden">Закрыть</span>
        <i class="icmn-cross"></i>
      </button>
      <div class="container-fluid">
        <div :class="$style.wrapper">
          <div :class="$style.logoContainer">
            <img :class="$style.logo" src="resources/images/logo.png" />
          </div>
          <a-input :class="$style.searchInput" placeholder="Type to search..." ref="innerInput" />
          <ul :class="$style.options">
            <li :class="[$style.option, $style.optionCheckbox]">
              <a-checkbox>Search within page</a-checkbox>
            </li>
            <li :class="$style.option">Press enter to search</li>
          </ul>
          <div :class="$style.results">
            <div :class="$style.resultsTitle">
              <span>Pages Search Results</span>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div :class="$style.resultContent">
                  <div
                    :class="$style.resultThumb"
                    :style="{backgroundImage: 'url(\'resources/images/photos/1.jpeg\')'}"
                  >#1</div>
                  <div :class="$style.result">
                    <div :class="$style.resultText">Text from input field must be here</div>
                    <div :class="$style.resultSource">In some partition</div>
                  </div>
                </div>
                <div :class="$style.resultContent">
                  <div
                    :class="$style.resultThumb"
                    :style="{backgroundImage: 'url(\'resources/images/photos/2.jpeg\')'}"
                  >#2</div>
                  <div :class="$style.result">
                    <div :class="$style.resultText">Text from input field must be here</div>
                    <div :class="$style.resultSource">In some partition</div>
                  </div>
                </div>
                <div :class="$style.resultContent">
                  <div
                    :class="$style.resultThumb"
                    :style="{backgroundImage: 'url(\'resources/images/photos/3.jpeg\')'}"
                  >#3</div>
                  <div :class="$style.result">
                    <div :class="$style.resultText">Text from input field must be here</div>
                    <div :class="$style.resultSource">In some partition</div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div :class="$style.resultContent">
                  <div :class="$style.resultThumb">01</div>
                  <div :class="$style.result">
                    <div :class="$style.resultText">Text from input field must be here</div>
                    <div :class="$style.resultSource">In some partition</div>
                  </div>
                </div>
                <div :class="$style.resultContent">
                  <div :class="$style.resultThumb">02</div>
                  <div :class="$style.result">
                    <div :class="$style.resultText">Text from input field must be here</div>
                    <div :class="$style.resultSource">In some partition</div>
                  </div>
                </div>
                <div :class="$style.resultContent">
                  <div :class="$style.resultThumb">03</div>
                  <div :class="$style.result">
                    <div :class="$style.resultText">Text from input field must be here</div>
                    <div :class="$style.resultSource">In some partition</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      showSearch: false,
    }
  },
  methods: {
    openSearch() {
      this.showSearch = true
      setTimeout(() => {
        this.$refs.innerInput.focus()
      }, 100)
    },
    closeSearch() {
      this.showSearch = false
    },
  },
}
</script>

<style lang="scss" module>
@import "./style.module.scss";
</style>
