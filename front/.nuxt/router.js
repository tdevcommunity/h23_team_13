import Vue from 'vue'
import Router from 'vue-router'
import { normalizeURL, decode } from 'ufo'
import { interopDefault } from './utils'
import scrollBehavior from './router.scrollBehavior.js'

const _42a8aca6 = () => interopDefault(import('..\\pages\\chat.vue' /* webpackChunkName: "pages/chat" */))
const _4e02498b = () => interopDefault(import('..\\pages\\login.vue' /* webpackChunkName: "pages/login" */))
const _5c7a2d6a = () => interopDefault(import('..\\pages\\profile.vue' /* webpackChunkName: "pages/profile" */))
const _24241df0 = () => interopDefault(import('..\\pages\\admin\\community.vue' /* webpackChunkName: "pages/admin/community" */))
const _389f439a = () => interopDefault(import('..\\pages\\admin\\dashboard.vue' /* webpackChunkName: "pages/admin/dashboard" */))
const _4cafe8ba = () => interopDefault(import('..\\pages\\admin\\delegues-bus.vue' /* webpackChunkName: "pages/admin/delegues-bus" */))
const _7d2c698a = () => interopDefault(import('..\\pages\\admin\\events.vue' /* webpackChunkName: "pages/admin/events" */))
const _6deb658a = () => interopDefault(import('..\\pages\\admin\\members\\index.vue' /* webpackChunkName: "pages/admin/members/index" */))
const _5dbe3f8f = () => interopDefault(import('..\\pages\\admin\\voyages\\index.vue' /* webpackChunkName: "pages/admin/voyages/index" */))
const _7e6d07e3 = () => interopDefault(import('..\\pages\\auth\\login.vue' /* webpackChunkName: "pages/auth/login" */))
const _296d7b1c = () => interopDefault(import('..\\pages\\admin\\members\\_id.vue' /* webpackChunkName: "pages/admin/members/_id" */))
const _f8b64c92 = () => interopDefault(import('..\\pages\\admin\\voyages\\_id.vue' /* webpackChunkName: "pages/admin/voyages/_id" */))
const _f74ab318 = () => interopDefault(import('..\\pages\\index.vue' /* webpackChunkName: "pages/index" */))

const emptyFn = () => {}

Vue.use(Router)

export const routerOptions = {
  mode: 'history',
  base: '/',
  linkActiveClass: 'nuxt-link-active',
  linkExactActiveClass: 'nuxt-link-exact-active',
  scrollBehavior,

  routes: [{
    path: "/chat",
    component: _42a8aca6,
    name: "chat"
  }, {
    path: "/login",
    component: _4e02498b,
    name: "login"
  }, {
    path: "/profile",
    component: _5c7a2d6a,
    name: "profile"
  }, {
    path: "/admin/community",
    component: _24241df0,
    name: "admin-community"
  }, {
    path: "/admin/dashboard",
    component: _389f439a,
    name: "admin-dashboard"
  }, {
    path: "/admin/delegues-bus",
    component: _4cafe8ba,
    name: "admin-delegues-bus"
  }, {
    path: "/admin/events",
    component: _7d2c698a,
    name: "admin-events"
  }, {
    path: "/admin/members",
    component: _6deb658a,
    name: "admin-members"
  }, {
    path: "/admin/voyages",
    component: _5dbe3f8f,
    name: "admin-voyages"
  }, {
    path: "/auth/login",
    component: _7e6d07e3,
    name: "auth-login"
  }, {
    path: "/admin/members/:id",
    component: _296d7b1c,
    name: "admin-members-id"
  }, {
    path: "/admin/voyages/:id",
    component: _f8b64c92,
    name: "admin-voyages-id"
  }, {
    path: "/",
    component: _f74ab318,
    name: "index"
  }],

  fallback: false
}

export function createRouter (ssrContext, config) {
  const base = (config._app && config._app.basePath) || routerOptions.base
  const router = new Router({ ...routerOptions, base  })

  // TODO: remove in Nuxt 3
  const originalPush = router.push
  router.push = function push (location, onComplete = emptyFn, onAbort) {
    return originalPush.call(this, location, onComplete, onAbort)
  }

  const resolve = router.resolve.bind(router)
  router.resolve = (to, current, append) => {
    if (typeof to === 'string') {
      to = normalizeURL(to)
    }
    return resolve(to, current, append)
  }

  return router
}
