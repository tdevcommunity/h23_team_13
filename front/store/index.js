import Cookies from 'js-cookie'

export const actions = {
  nuxtClientInit ({ commit }, context) {
    const token = Cookies.get('token')
    const user = Cookies.get('user')
    const last_connexion_time = Cookies.get('last_connexion_time')

    if (token) {
      commit('auth/SET_TOKEN', token)
    }

    if (user) {
      commit('auth/UPDATE_USER', JSON.parse(user))
    }

    if(last_connexion_time){
      commit('auth/SET_LAST_CONNEXION_TIME', JSON.parse(last_connexion_time))
    }
  }
}
