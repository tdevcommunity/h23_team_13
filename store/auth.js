import Cookies from 'js-cookie'

// state
export const state = () => ({
  user: null,
  token: null,
  last_connexion_time: null,
  isAuthenticated: null,
})

// getters
export const getters = {
  user: state => state.user,
  token: state => state.token,
  isAuthenticated: state => state.isAuthenticated,
  last_connexion_time: state => state.last_connexion_time,
}

// mutations
export const mutations = {
  SET_TOKEN (state, token) {
    state.token = token
  },
  SET_LAST_CONNEXION_TIME (state, last_connexion_time) {
    state.last_connexion_time = last_connexion_time
  },

  SET_IS_AUTHENTICATED (state, isAuthenticated) {
    state.isAuthenticated = isAuthenticated
  },

  FETCH_USER_FAILURE (state) {
    state.token = null
  },

  LOGOUT (state) {
    state.user = null
    state.token = null
    state.last_connexion_time = null
    Cookies.remove('token', { path: '' })
    Cookies.remove('user', { path: '' })
    Cookies.remove('last_connexion_time', { path: '' })
  },

  UPDATE_USER (state, user) {
    state.user = user
  },
}

// actions
export const actions = {
  saveToken ({ commit, dispatch }, { token, user, last_connexion_time }) {
    commit('SET_IS_AUTHENTICATED', true)

    commit('SET_TOKEN', token)
    Cookies.set('token', token, { expires: false ? 365 : null })

    commit('UPDATE_USER', user)
    Cookies.set('user', JSON.stringify(user), { expires: false ? 365 : null })

    commit('SET_LAST_CONNEXION_TIME', last_connexion_time)
    Cookies.set('last_connexion_time', last_connexion_time, { expires: false ? 365 : null })
  },
  async fetchUser ({ commit }) {
    try {
      const { data } = await axios.get('/user')

      commit('FETCH_USER_SUCCESS', data)
    } catch (e) {
      Cookies.remove('token')

      commit('FETCH_USER_FAILURE')
    }
  },
  async logout ({ commit }) {
    Object.keys(Cookies.get()).forEach(function(cookieName) {
      var neededAttributes = {
        // Here you pass the same attributes that were used when the cookie was created
        // and are required when removing the cookie
      };
      Cookies.remove(cookieName, neededAttributes);
    });
    commit('LOGOUT')
  },
}
