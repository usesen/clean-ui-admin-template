import actions from './actions'

const initialState = {
  id: '',
  name: '',
  role: '',
  email: '',
  avatar: '',
  token: '',
  authorized: false,
  loading: false,
  list:[]
}

export default function userReducer(state = initialState, action) {
  switch (action.type) {
    case actions.SET_STATE:
      return { ...state, ...action.payload }
    case actions.FETCH_ALL:
      return {
        ...state,
        list: [...action.payload],
      }
      case actions.CREATE:
        return {
          ...state,
          list: [...state.list,action.payload ]
        }
    default:
      return state
  }
}
