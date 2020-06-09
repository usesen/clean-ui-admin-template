import React, { PureComponent } from 'react'
import Redirect from 'umi/redirect'

export default class Index extends PureComponent {
  render() {
    return <Redirect to="/dashboard/alpha" />
  }
}
