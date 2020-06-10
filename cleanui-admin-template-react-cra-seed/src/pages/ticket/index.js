import React from 'react'
import { Helmet } from 'react-helmet'
import Authorize from 'components/LayoutComponents/Authorize'

class Ticket extends React.Component {
  render() {
    return (
      <Authorize roles={['admin','technican','Manager','Office']} redirect to="/ticket">
        <Helmet title="Ticket Page" />
        <div className="utils__title utils__title--flat mb-3">
          <strong className="text-uppercase font-size-16">Ticket Page</strong>
        </div>
        <div className="row">
          <div className="col-lg-12">
            <div className="card">
              <div className="card-body">
                [src\pages\ticket\index.js]
              </div>
            </div>
          </div>
        </div>
      </Authorize>
    )
  }
}

export default Ticket