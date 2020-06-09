import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

const STORED_SETTINGS = storedSettings => {
  const settings = {}
  Object.keys(storedSettings).forEach(key => {
    const item = JSON.parse(localStorage.getItem(`app.settings.${key}`))
    settings[key] = item === null ? storedSettings[key] : item
  })
  return settings
}

export default {
  state: {
    ...STORED_SETTINGS({
      isMobileView: false,
      isTabletView: false,
      isMobileMenuOpen: false,
      isLightTheme: true,
      isSettingsOpen: false,
      isMenuTop: false,
      isMenuCollapsed: false,
      isBorderless: true,
      isSquaredBorders: false,
      isFixedWidth: false,
      isMenuShadow: true,
    }),
  },
  mutations: {
    CHANGE_SETTING(state, payload) {
      window.localStorage.setItem(`app.settings.${payload.setting}`, payload.value)
      state[payload.setting] = payload.value
    },
    SETUP_URL_SETTINGS(state, payload) {
      let queryParams = payload
      let keys = false
      if (payload.redirect) {
        const str = payload.redirect
        const subs = str.substring(str.indexOf('?') + 1)
        if (str.indexOf('?') >= 0) {
          queryParams = JSON.parse('{"' + decodeURI(subs).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g, '":"') + '"}')
        }
      }
      delete queryParams['redirect']
      keys = Object.keys(queryParams)
      if (keys.length) {
        keys.forEach(key => {
          if (key in state) { state[key] = queryParams[key] === 'true' }
        })
      }
    },
  },
  actions: {},
  getters: {
    state: state => state,
  },
}
