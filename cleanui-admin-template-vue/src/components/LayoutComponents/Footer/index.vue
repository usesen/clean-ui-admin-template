<template>
  <div :class="$style.footer">
    <div :class="$style.inner">
      <div class="row">
        <div class="col-lg-9">
          <p>
            <strong>Clean UI Vue Admin Template - Best Solution for Your App!</strong>
          </p>
          <p>
            Clean UI – a modern professional admin template, based on Bootstrap
            4 framework. Clean UI is a powerful and super flexible tool, which
            suits best for any kind of web application: Web Applications; CRM;
            CMS; Admin Panels; Dashboards; etc. Clean UI is fully responsive,
            which means that it looks perfect on mobiles and tablets.
          </p>
          <p>
            Clean UI is fully based on SASS pre-processor, includes 50+
            commented SASS files. Each file corresponds to a single component,
            layout, page, plugin or extension – so you can easily find necessary
            piece of code and edit it for your needs. The package includes both
            normal and minified CSS files, compiled from SASS.
          </p>
        </div>
      </div>
      <div :class="$style.bottom">
        <div class="row">
          <div class="col-sm-6">
            <a
              href="https://themeforest.net/item/clean-ui-react-admin-template/21938700"
              target="_blank"
              rel="noopener noreferrer"
              class="mr-4"
            >
              <a-button type="danger">Buy Bundle 26$</a-button>
            </a>
          </div>
          <div class="col-sm-6">
            <div :class="$style.copyright">
              <img
                src="resources/images/mediatec.png"
                rel="noopener noreferrer"
                alt="Mediatec Software"
              />
              <span>
                © 2019
                <a
                  href="http://mediatec.org/"
                  target="_blank"
                  rel="noopener noreferrer"
                >Mediatec Software</a>
                <br />All rights reserved
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="scss" module>
@import "./style.module.scss";
</style>
