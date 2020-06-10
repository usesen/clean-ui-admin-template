import firebase from 'firebase/app'
import { notification } from 'antd'
import 'firebase/auth'
import 'firebase/database'
import 'firebase/storage'

const firebaseConfig = {
  apiKey: 'AIzaSyCC5AM_xa0L4AgZYQSDdUqd7MR8k0Kayw8',
  authDomain: 'fsmproduction-d5d4d.firebaseapp.com',
  databaseURL: 'https://fsmproduction-d5d4d.firebaseio.com',
  projectId: 'fsmproduction-d5d4d',
  storageBucket: 'fsmproduction-d5d4d.appspot.com',
  messagingSenderId: '583382839121',
}


const firebaseApp = firebase.initializeApp(firebaseConfig)
const firebaseAuth = firebase.auth

export default firebaseApp

export async function login(email, password) {
  
  return firebaseAuth()
    .signInWithEmailAndPassword(email, password)
    .then(() => true)
    .catch(error => {
      notification.error({
        message: error.code,
        description: error.message,
      })
    })
}

export async function currentAccount() {
  let userLoaded = false
  function getCurrentUser(auth) {
    return new Promise((resolve, reject) => {
      if (userLoaded) {
        resolve(firebaseAuth.currentUser)
      }
      const unsubscribe = auth.onAuthStateChanged(user => {
        userLoaded = true
        unsubscribe()
        resolve(user)
      }, reject)
    })
  }
  return getCurrentUser(firebaseAuth())
}

export async function logout() {
  return firebaseAuth()
    .signOut()
    .then(() => true)
}
