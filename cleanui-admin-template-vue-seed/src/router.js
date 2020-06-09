import Vue from 'vue'
import Router from 'vue-router'
import LoginLayout from '@/layouts/Login'
import MainLayout from '@/layouts/Main'
import store from '@/store'

Vue.use(Router)

const router = new Router({
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      redirect: 'dashboard/alpha',
      component: MainLayout,
      meta: {
        authRequired: true,
        hidden: true,
      },
      children: [
        // Dashboards
        {
          path: '/dashboard/alpha',
          meta: {
            title: 'Dashboard Alpha',
          },
          component: () => import('./views/dashboard/alpha'),
        },

        // 404
        {
          path: '/404',
          meta: {
            title: '404',
          },
          component: () => import('./views/404'),
        },
      ],
    },

    // System Pages
    {
      path: '/user',
      component: LoginLayout,
      redirect: '/user/login',
      children: [
        {
          path: '/user/login',
          meta: {
            title: 'Login',
          },
          component: () => import('./views/user/login'),
        },
        {
          path: '/user/forgot',
          meta: {
            title: 'Forgot Password',
          },
          component: () => import('./views/user/forgot'),
        },
      ],
    },

    // Redirect to 404
    {
      path: '*', redirect: '/404', hidden: true,
    },
  ],
})

router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.authRequired)) {
    if (!store.state.user.user) {
      next({
        path: '/user/login',
        query: { redirect: to.fullPath },
      })
    } else {
      next()
    }
  } else {
    next()
  }
})

export default router
