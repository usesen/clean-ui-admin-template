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
        {
          path: '/dashboard/beta',
          meta: {
            title: 'Dashboard Beta',
          },
          component: () => import('./views/dashboard/beta'),
        },
        {
          path: '/dashboard/crypto',
          meta: {
            title: 'Dashboard Crypto',
          },
          component: () => import('./views/dashboard/crypto'),
        },
        {
          path: '/dashboard/gamma',
          meta: {
            title: 'Dashboard Gamma',
          },
          component: () => import('./views/dashboard/gamma'),
        },
        {
          path: '/dashboard/docs',
          meta: {
            title: 'Dashboard Docs',
          },
          component: () => import('./views/dashboard/docs'),
        },

        // Default Pages
        {
          path: '/pages/login-alpha',
          meta: {
            title: 'Login Alpha',
          },
          component: () => import('./views/pages/login-alpha'),
        },
        {
          path: '/pages/login-beta',
          meta: {
            title: 'Login Beta',
          },
          component: () => import('./views/pages/login-beta'),
        },
        {
          path: '/pages/register',
          meta: {
            title: 'Register',
          },
          component: () => import('./views/pages/register'),
        },
        {
          path: '/pages/lockscreen',
          meta: {
            title: 'Lockscreen',
          },
          component: () => import('./views/pages/lockscreen'),
        },
        {
          path: '/pages/pricing-table',
          meta: {
            title: 'Pricing Tables',
          },
          component: () => import('./views/pages/pricing-table'),
        },
        {
          path: '/pages/invoice',
          meta: {
            title: 'Invoice',
          },
          component: () => import('./views/pages/invoice'),
        },

        // Apps
        {
          path: '/apps/messaging',
          meta: {
            title: 'Messaging',
          },
          component: () => import('./views/apps/messaging'),
        },
        {
          path: '/apps/mail',
          meta: {
            title: 'Mail',
          },
          component: () => import('./views/apps/mail'),
        },
        {
          path: '/apps/profile',
          meta: {
            title: 'Profile',
          },
          component: () => import('./views/apps/profile'),
        },
        {
          path: '/apps/gallery',
          meta: {
            title: 'Gallery',
          },
          component: () => import('./views/apps/gallery'),
        },

        // Ecommerce
        {
          path: '/ecommerce/dashboard',
          meta: {
            title: 'Ecommerce Dashboard',
          },
          component: () => import('./views/ecommerce/dashboard'),
        },
        {
          path: '/ecommerce/products-catalog',
          meta: {
            title: 'Ecommerce Catalog',
          },
          component: () => import('./views/ecommerce/products-catalog'),
        },
        {
          path: '/ecommerce/product-details',
          meta: {
            title: 'Ecommerce Product Details',
          },
          component: () => import('./views/ecommerce/product-details'),
        },
        {
          path: '/ecommerce/product-edit',
          meta: {
            title: 'Ecommerce Product Edit',
          },
          component: () => import('./views/ecommerce/product-edit'),
        },
        {
          path: '/ecommerce/products-list',
          meta: {
            title: 'Ecommerce Products List',
          },
          component: () => import('./views/ecommerce/products-list'),
        },
        {
          path: '/ecommerce/orders',
          meta: {
            title: 'Ecommerce Orders',
          },
          component: () => import('./views/ecommerce/orders'),
        },
        {
          path: '/ecommerce/cart',
          meta: {
            title: 'Ecommerce Cart',
          },
          component: () => import('./views/ecommerce/cart'),
        },

        // Layout
        {
          path: '/layout/bootstrap',
          meta: {
            title: 'Layout Bootstrap',
          },
          component: () => import('./views/layout/bootstrap'),
        },
        {
          path: '/layout/card',
          meta: {
            title: 'Layout Cards',
          },
          component: () => import('./views/layout/card'),
        },
        {
          path: '/layout/utilities',
          meta: {
            title: 'Layout Utilities',
          },
          component: () => import('./views/layout/utilities'),
        },
        {
          path: '/layout/typography',
          meta: {
            title: 'Layout Typography',
          },
          component: () => import('./views/layout/typography'),
        },
        {
          path: '/layout/mail-templates',
          meta: {
            title: 'Layout Mail Templates',
          },
          component: () => import('./views/layout/mail-templates'),
        },

        // Icons
        {
          path: '/icons/fontawesome',
          meta: {
            title: 'Fontawesome Icons',
          },
          component: () => import('./views/icons/fontawesome'),
        },
        {
          path: '/icons/linear',
          meta: {
            title: 'Linear Icons',
          },
          component: () => import('./views/icons/linear'),
        },
        {
          path: '/icons/icomoon',
          meta: {
            title: 'Icomoon Icons',
          },
          component: () => import('./views/icons/icomoon'),
        },

        // Charts
        {
          path: '/charts/chartist',
          meta: {
            title: 'Chartist.js',
          },
          component: () => import('./views/charts/chartist'),
        },
        {
          path: '/charts/chart',
          meta: {
            title: 'Chart.js',
          },
          component: () => import('./views/charts/chart'),
        },
        {
          path: '/charts/peity',
          meta: {
            title: 'Peity',
          },
          component: () => import('./views/charts/peity'),
        },
        {
          path: '/charts/c3',
          meta: {
            title: 'C3',
          },
          component: () => import('./views/charts/c3'),
        },

        // Blog
        {
          path: '/blog/feed',
          meta: {
            title: 'Blog Feed',
          },
          component: () => import('./views/blog/feed'),
        },
        {
          path: '/blog/post',
          meta: {
            title: 'Blog Post',
          },
          component: () => import('./views/blog/post'),
        },
        {
          path: '/blog/add-blog-post',
          meta: {
            title: 'Blog Add Post',
          },
          component: () => import('./views/blog/add-blog-post'),
        },

        // YouTube
        {
          path: '/youtube/feed',
          meta: {
            title: 'Youtube Feed',
          },
          component: () => import('./views/youtube/feed'),
        },
        {
          path: '/youtube/view',
          meta: {
            title: 'Youtube View',
          },
          component: () => import('./views/youtube/view'),
        },

        // GitHub
        {
          path: '/github/explore',
          meta: {
            title: 'Github Explore',
          },
          component: () => import('./views/github/explore'),
        },
        {
          path: '/github/discuss',
          meta: {
            title: 'Github Discuss',
          },
          component: () => import('./views/github/discuss'),
        },

        // AntDesign
        {
          path: '/antd',
          meta: {
            title: 'Antd',
          },
          component: () => import('./views/antd'),
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
