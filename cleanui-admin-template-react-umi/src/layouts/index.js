import React, { Fragment } from 'react'
import Redirect from 'umi/redirect'
import { connect } from 'dva'
import NProgress from 'nprogress'
import { Helmet } from 'react-helmet'
import PublicLayout from './Public'
import LoginLayout from './Login'
import MainLayout from './Main'
import Loader from '@/components/LayoutComponents/Loader'

const Layouts = {
  public: PublicLayout,
  login: LoginLayout,
  main: MainLayout,
}

@connect(({ user, loading }) => ({ user, loading }))
class IndexLayout extends React.PureComponent {
  previousPath = ''

  componentDidUpdate(prevProps) {
    const { location } = this.props
    const { prevLocation } = prevProps
    if (location !== prevLocation) {
      window.scrollTo(0, 0)
    }
  }

  render() {
    const {
      children,
      loading,
      location: { pathname, search },
      user,
    } = this.props

    // NProgress Management
    const currentPath = pathname + search
    if (currentPath !== this.previousPath || loading.global) {
      NProgress.start()
    }

    if (!loading.global) {
      NProgress.done()
      this.previousPath = currentPath
    }

    // Layout Rendering
    const getLayout = () => {
      if (pathname === '/') {
        return 'public'
      }
      if (/^\/user(?=\/|$)/i.test(pathname)) {
        return 'login'
      }
      return 'main'
    }

    const Container = Layouts[getLayout()]
    const isUserAuthorized = user.authorized
    const isUserLoading = loading.models.user
    const isLoginLayout = getLayout() === 'login'

    const BootstrappedLayout = () => {
      // show loader when user in check authorization process, not authorized yet and not on login pages
      if (isUserLoading && !isUserAuthorized && !isLoginLayout) {
        return <Loader />
      }
      // redirect to login page if current is not login page and user not authorized
      if (!isLoginLayout && !isUserAuthorized) {
        return <Redirect to="/user/login" />
      }
      // redirect to main dashboard when user on login page and authorized
      // if (isLoginLayout && isUserAuthorized) {
      //   return <Redirect to="/dashboard/alpha" />
      // }
      // in other case render previously set layout
      return <Container>{children}</Container>
    }

    return (
      <Fragment>
        <Helmet titleTemplate="Clean UI React Pro | %s" title="React Admin Template" />
        {BootstrappedLayout()}
      </Fragment>
    )
  }
}

export default IndexLayout
