import axios from 'axios'
import Swal from 'sweetalert2'
import config from '../config'
import https from 'https'
// window.axios = axios
global.axios = require('axios');
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})
// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
// window.axios.defaults.headers.crossDomain = true
// window.axios.defaults.headers['Access-Control-Allow-Origin'] = '*'

// process.env.NODE_TLS_REJECT_UNAUTHORIZED = '0'

const base_url = config.app_local ? config.app_api_debug_url : config.app_api_base_url

export default ({ app, store, redirect, }) => {
  axios.defaults.baseURL = base_url

  if (process.server) {
    return
  }

  // Request interceptor
//   axios.interceptors.request.use((request) => {
//     request.baseURL = base_url

//     const token = store.getters['auth/token']

//     if (token) {
//       request.headers.common.Authorization = `Bearer ${token}`
//     }

//     return request
//   })
  
  // Response interceptor
  axios.interceptors.response.use(response => response, (error) => {
    const { status } = error.response || {}
    if (status >= 500) {
      Toast.fire({
        icon: "error",
        title: "Une erreur s'est produite"
      })
    }

    if (status === 400) {
      Swal.fire({
        icon: 'error',
        title: app.i18n.t('error_alert_title'),
        text: app.i18n.t('error_alert_text'),
        reverseButtons: true,
        confirmButtonText: app.i18n.t('ok'),
        cancelButtonText: app.i18n.t('cancel')
      })
    }

    if ((status === 401 && error.response.data.not_connected) || (status === 401 && error.response.data.message === "Unauthenticated.")) {
      Toast.fire({
        icon: "warning",
        title: "Votre session a expiré. Veuillez vous reconnecter"
      })
      store.commit('auth/LOGOUT')
      app.router.push('/login')
    }

    if (status === 422) {
      Toast.fire({
        icon: "error",
        title: "Une erreur s'est produite"
      })
    }
    if (status === 404) {
        Toast.fire({
          icon: "error",
          title: "Une erreur s'est produite"
        })
      }

    return Promise.reject(error)
  })
}
