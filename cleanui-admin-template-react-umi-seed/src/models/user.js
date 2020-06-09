import { notification } from 'antd'
import router from 'umi/router'
import { login, currentAccount, logout } from '@/services/user'

export default {
  namespace: 'user',
  state: {
    id: '',
    name: '',
    role: '',
    email: '',
    avatar: '',
    authorized: false,
  },
  reducers: {
    SET_STATE: (state, { payload }) => ({ ...state, ...payload }),
  },
  effects: {
    *LOGIN({ payload }, saga) {
      const { email, password } = payload
      const success = yield saga.call(login, email, password)
      if (success) {
        notification.success({
          message: 'Logged In',
          description: 'You have successfully logged in to Clean UI React Admin Template!',
        })
        yield saga.put({
          type: 'LOAD_CURRENT_ACCOUNT',
        })
        router.push('/')
      }
    },
    *LOAD_CURRENT_ACCOUNT(_, saga) {
      const response = yield saga.call(currentAccount)
      if (response) {
        const { uid: id, displayName: name, email, photoURL: avatar } = response
        yield saga.put({
          type: 'SET_STATE',
          payload: {
            id,
            name,
            email,
            avatar,
            role: 'admin',
            authorized: true,
          },
        })
      }
    },
    *LOGOUT(_, saga) {
      yield saga.call(logout)
      yield saga.put({
        type: 'SET_STATE',
        payload: {
          id: '',
          name: '',
          role: '',
          email: '',
          avatar: '',
          authorized: false,
        },
      })
    },
  },
  subscriptions: {
    setup: ({ dispatch }) => {
      dispatch({
        type: 'LOAD_CURRENT_ACCOUNT',
      })
    },
  },
}
