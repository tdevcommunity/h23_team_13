import fr from 'vuetify/src/locale/fr'
import en from 'vuetify/src/locale/fr'
export default {
  // Ajoute un titre pour votre application
  css: [
    '@/assets/css/main.css',
    '@/static/main.css',
    '@/assets/css/nucleo-svg.css',
    '@/assets/css/perfect-scrollbar.css',
    '@/assets/css/soft-ui-dashboard-tailwind.css',
    '@/assets/css/soft-ui-dashboard-tailwind.min.css',
    '@/assets/css/tooltips.css',
  ],
  head: {
    title: 'Tdev Management App',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/tdev-tag.png' },
      { rel: 'stylesheet', href: 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' },
      { rel: 'stylesheet', href: 'https://cdn.tailwindcss.com' }
    ],
  },

  // Configure le mode de rendu pour l'application
  ssr: true,

  // Configurer les modules Nuxt.js à utiliser
  modules: [
    '@nuxtjs/axios',
    'vue-sweetalert2/nuxt'
  ],

  buildModules: [
    ['@nuxtjs/vuetify', {
      iconfont: "mdi", // 'md' || 'mdi' || 'fa' || 'fa4'
      lang: {
        locales: { fr, en},
        current: 'fr',
      },
      theme: {
        themes:{
          light: {
            primary: '#166534',
            secondary: '#b0bec5',
            dark: '#b0bec5',
            accent: '#006958',
            error: '#ff192c',
            success: '#5cb85c',
            warning:'#ff192c',
            background: '#f8f8f8'
          },
        }
      },
    }],
    '@nuxtjs/axios',
  ],
  // Configuration des plugins pour l'application
  plugins: [
    '~/plugins/vuetify.js',
    '~/plugins/axios.js',
    '~/plugins/sweetalert.js',
    '~/plugins/mixing.js'
  ],

  // Configuration pour les environnements de développement et de production
  env: {
    auth: process.env.VUE_APP_DEFAULT_AUTH,
    apikey: process.env.VUE_APP_APIKEY,
    authdomain: process.env.VUE_APP_AUTHDOMAIN,
    databaseurl: process.env.VUE_APP_DATABASEURL,
    projectid: process.env.VUE_APP_PROJECTId,
    storgebucket: process.env.VUE_APP_STORAGEBUCKET,
    message: process.env.VUE_APP_MESSAGINGSENDERID,
    appid: process.env.VUE_APP_APPId,
    measurement: process.env.VUE_APP_MEASUREMENTID,
  },

  // Configuration pour le rendu côté client
  build: {
    presets(env, [ preset, options ]) {
      return [
        [ "@nuxt/babel-preset-app", options ]
      ]
    },
    vendor: ['axios'],
  }

}