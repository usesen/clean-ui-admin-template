import React from 'react'
import { Layout } from 'antd'
import { withRouter } from 'react-router-dom'
import styles from './style.module.scss'

@withRouter
class LoginLayout extends React.PureComponent {
  state = {
    backgroundNumber: 1,
    backgroundEnabled: false,
  }

  changeBackground = () => {
    const { backgroundNumber } = this.state
    this.setState({
      backgroundEnabled: true,
      backgroundNumber: backgroundNumber === 5 ? 1 : backgroundNumber + 1,
    })
  }

  toggleBackground = () => {
    const { backgroundEnabled } = this.state
    this.setState({
      backgroundEnabled: !backgroundEnabled,
    })
  }

  render() {
    const { children } = this.props
    const { backgroundNumber, backgroundEnabled } = this.state

    return (
      <Layout>
        <Layout.Content>
         
          <div
            className={backgroundEnabled ? `${styles.layout} ${styles.light}` : `${styles.layout}`}
            style={{
              backgroundImage: backgroundEnabled
                ? `url('resources/images/photos/${backgroundNumber}.jpeg')`
                : `none`,
            }}
          >
            <div className={styles.content}>{children}</div>
          </div>
        </Layout.Content>
      </Layout>
    )
  }
}

export default LoginLayout
