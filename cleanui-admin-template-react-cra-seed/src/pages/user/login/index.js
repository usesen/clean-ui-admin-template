import React, { Component } from 'react'
import { Form, Input, Button, Checkbox } from 'antd'
// import { Helmet } from 'react-helmet'
import { Link } from 'react-router-dom'
import { connect } from 'react-redux'
import styles from './style.module.scss'


 
@Form.create()
@connect(({ user }) => ({ user }))


class Login extends Component {
  

  onSubmit = event => {
    event.preventDefault()
    
    const { form, dispatch } = this.props
    form.validateFields((error, values) => {
      if (!error) {

        dispatch({
          type: 'user/LOGIN',
          payload: values,
        })
      }
    })
  }


  render() {
    const {
      form,
      user: { loading },
    } = this.props
    return (
      <div>
        <div className={styles.block}>
          <div className="row">
            <div className="col-xl-12">
              <div className={styles.inner}>
                <div className={styles.form}>
                  <h4 className="text-uppercase">
                    <strong>Please log in</strong>
                  </h4>
                  <br />
                  <Form layout="vertical" hideRequiredMark onSubmit={this.onSubmit}>
                    {/* initialValue: 'cleanui', admin@mediatec.org */}
                  
                    <Form.Item label="Email">
                      {form.getFieldDecorator('email', {
                        initialValue: 'usesen@hotmail.com.tr',
                        rules: [{ required: true, message: 'Please input your e-mail address' }],
                      })(<Input size="default" />)}
                    </Form.Item>
                    <Form.Item label="Password">
                      {form.getFieldDecorator('password', {
                        initialValue: '123456',
                        rules: [{ required: true, message: 'Please input your password' }],
                      })(<Input size="default" type="password" />)}
                    </Form.Item>
                    <Form.Item>
                      {form.getFieldDecorator('remember', {
                        valuePropName: 'checked',
                        initialValue: true,
                      })(<Checkbox>Remember me</Checkbox>)}
                      <Link
                        to="/user/forgot"
                        className="utils__link--blue utils__link--underlined pull-right"
                      >
                        Forgot password?
                      </Link>
                    </Form.Item>
                    <div className="form-actions">
                      <Button
                        type="primary"
                        className="width-150 mr-4"
                        htmlType="submit"
                        loading={loading}
                      >
                        Login
                      </Button>
                    </div>
                  </Form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    )
  }
}

export default Login
