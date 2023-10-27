<template>
  <v-app>
    <div class="tw-relative tw-m-0 tw-font-sans tw-text-base tw-antialiased tw-font-normal dark:tw-bg-[#2b6d57] leading-default tw-h-full tw-bg-gray-50 tw-text-gray-500">
<!--      <div class="tw-fixed tw-top-0 tw-inset-x-0 tw-rounded-b-lg tw-w-full tw-bg-gradient-to-tr tw-from-[#2b6d57] tw-via-[#07d770] tw-to-gray-800" style="height: 280px"></div>-->
      <div class="tw-fixed tw-top-0 tw-inset-x-0 tw-w-full tw-bg-[#2b6d57]" style="height: 280px"></div>
      <!-- sidenav  -->
      <div :class="showSidebar ? 'tw-fixed':'tw-hidden lg:tw-fixed'" class="tw-inset-y-0 tw-flex-wrap tw-items-center tw-justify-between lg:tw-block tw-w-full tw-p-0 lg:tw-my-4 tw-overflow-y-auto tw-antialiased tw-transition-transform tw-duration-200 tw-bg-white tw-border-0 tw-shadow-xl dark:tw-shadow-none dark:tw-bg-gray-800 tw-max-w-[230px] ease-nav-brand lg:tw-ml-6 tw-rounded-r-2xl lg:tw-rounded-2xl xl:tw-left-0 xl:tw-translate-x-0" style="z-index: 999" aria-expanded="false">
        <div class="tw-h-20">
          <div class="tw-block tw-px-8 tw-py-6 tw-m-0 tw-text-sm tw-whitespace-nowrap tw-flex tw-items-center">
            <img src="@/assets/img/logos/tdev.png" class="tw-inline tw-h-full tw-max-w-full tw-transition-all tw-duration-200 ease-nav-brand tw-max-h-14 tw-w-full" alt="main_logo" />
          </div>
        </div>

        <hr class="tw-h-px tw-mt-0 tw-bg-transparent tw-bg-gradient-to-r tw-from-transparent tw-via-black/40 tw-to-transparent dark:tw-bg-gradient-to-r dark:tw-from-transparent dark:tw-via-white dark:tw-to-transparent" />

        <div class="tw-items-center tw-block tw-w-auto tw-max-h-screen tw-overflow-auto tw-grow tw-basis-full">
          <ul class="tw-flex tw-flex-col tw-pl-0 tw-mb-0">
            <li v-for="(link, index) in links" :key="index" class="tw-mt-0.5 tw-w-full">
              <span @click="$router.push(link.path); showSidebar = false" :class="$route.fullPath === link.path ? 'tw-bg-[#2b6d57]' : ''" class="hover:tw-cursor-pointer dark:tw-text-white dark:tw-opacity-80 tw-py-2 tw-rounded-lg tw-text-sm ease-nav-brand tw-my-0 tw-mx-2 tw-flex tw-items-center tw-whitespace-nowrap tw-px-4 tw-transition-colors">
                <div class="tw-mr-2 tw-flex tw-h-8 tw-w-8 tw-items-center tw-justify-center tw-rounded-lg tw-bg-center tw-stroke-0 tw-text-center xl:tw-p-2.5">
                  <v-icon :class="$route.fullPath === link.path ? 'tw-text-white' : 'tw-text-[#2b6d57] dark:tw-text-white'"  size="22">{{ link.mdi_icon }}</v-icon>
                </div>
                <span :class="$route.fullPath === link.path ? 'tw-text-white' : 'tw-text-[#2b6d57] dark:tw-text-white'" class="tw-ml-1 tw-font-medium tw-pointer-events-none ease">{{ link.fullname }}</span>
              </span>
            </li>

                    <li class="tw-w-full tw-mt-4">
                      <h6 class="tw-pl-6 tw-ml-2 tw-text-xs tw-font-bold tw-leading-tight tw-uppercase dark:tw-text-white tw-opacity-60">Mon compte</h6>
                    </li>

            <li class="tw-mt-0.5 tw-w-full">
              <span @click="$router.push('/admin/profil'); showSidebar = false" :class="$route.fullPath === '/admin/profil' ? 'tw-bg-gradient-to-tr tw-from-[#2b6d57] tw-to-[#2b6d57] w-opacity-80' : ''" class="hover:tw-cursor-pointer dark:tw-text-white dark:tw-opacity-80 tw-py-2 tw-rounded-lg tw-text-sm ease-nav-brand tw-my-0 tw-mx-2 tw-flex tw-items-center tw-whitespace-nowrap tw-px-4 tw-transition-colors">
                <div class="tw-mr-2 tw-flex tw-h-8 tw-w-8 tw-items-center tw-justify-center tw-rounded-lg tw-bg-center tw-stroke-0 tw-text-center xl:tw-p-2.5">
                  <v-icon :class="$route.fullPath === '/admin/profil' ? 'tw-text-white' : 'tw-text-[#2b6d57] dark:tw-text-white'"  size="22">mdi-calendar</v-icon>
                </div>
                <span :class="$route.fullPath === '/admin/profil' ? 'tw-text-white' : 'tw-text-[#2b6d57] dark:tw-text-white'" class="tw-ml-1 tw-font-medium tw-pointer-events-none ease">Profile</span>
              </span>
            </li>
                    <li class="tw-mt-0.5 tw-w-full">
                      <span @click="logout()" class="hover:tw-cursor-pointer dark:tw-text-white dark:tw-opacity-80 tw-py-2 tw-rounded-lg tw-text-sm ease-nav-brand tw-my-0 tw-mx-2 tw-flex tw-items-center tw-whitespace-nowrap tw-px-4 tw-transition-colors">
                        <div class="tw-mr-2 tw-flex tw-h-8 tw-w-8 tw-items-center tw-justify-center tw-rounded-lg tw-bg-center tw-stroke-0 tw-text-center xl:tw-p-2.5">
                          <v-icon  size="22" class="tw-text-[#2b6d57] dark:tw-text-white">mdi-logout-variant</v-icon>
                        </div>
                        <span class="tw-ml-1 tw-opacity-100 tw-text-[#2b6d57] dark:tw-text-white tw-font-medium tw-pointer-events-none ease">Se déconnecter</span>
                      </span>
                    </li>
          </ul>
        </div>
      </div>
      <!-- end sidenav -->

      <main class="tw-relative tw-h-full tw-min-h-screen tw-transition-all tw-duration-200 tw-ease-in-out lg:tw-ml-[255px] tw-rounded-xl">
        <!-- Navbar -->
        <div class="tw-relative tw-flex tw-flex-wrap tw-items-center tw-justify-between tw-px-0 tw-py-2 tw-mx-4 lg:tw-mx-6 tw-transition-all tw-ease-in tw-shadow-none tw-duration-250 tw-rounded-2xl lg:tw-flex-nowrap lg:tw-justify-start" navbar-main navbar-scroll="false">
          <div class="tw-flex tw-items-center tw-justify-between tw-w-full tw-py-1 tw-mx-auto tw-flex-wrap-inherit">
            <nav>
              <!-- breadcrumb -->
              <ol class="tw-flex tw-flex-wrap tw-pt-1 tw-pl-0 tw-mr-12 tw-text-black tw-bg-transparent tw-rounded-lg sm:tw-mr-16">
                <li class="tw-text-sm tw-leading-normal">
                  <a class="tw-text-black tw-font-medium" href="javascript:;">Pages</a>
                </li>
                <li v-if="$route.path === '/admin/dashboard'" class="tw-text-sm tw-pl-2 tw-text-black tw-font-medium tw-capitalize tw-leading-normal before:tw-float-left before:tw-pr-2 before:tw-text-black before:tw-content-['/']" aria-current="page"> Dashboard</li>
                <li v-if="$route.path === '/admin/members'" class="tw-text-sm tw-pl-2 tw-text-black tw-font-medium tw-capitalize tw-leading-normal before:tw-float-left before:tw-pr-2 before:tw-text-black before:tw-content-['/']" aria-current="page"> Membres</li>
                <li v-if="$route.path === '/admin/profil'" class="tw-text-sm tw-pl-2 tw-text-black tw-font-medium tw-capitalize tw-leading-normal before:tw-float-left before:tw-pr-2 before:tw-text-black before:tw-content-['/']" aria-current="page"> Profile</li>
                <li v-if="$route.path === '/admin/supply'" class="tw-text-sm tw-pl-2 tw-text-black tw-font-medium tw-capitalize tw-leading-normal before:tw-float-left before:tw-pr-2 before:tw-text-black before:tw-content-['/']" aria-current="page"> Recrutement</li>
                <li v-if="$route.path.includes('members/')" class="tw-text-sm tw-pl-2 tw-text-black tw-font-medium tw-capitalize tw-leading-normal before:tw-float-left before:tw-pr-2 before:tw-text-black before:tw-content-['/']" aria-current="page"> Membres</li>
              </ol>
              <h6 v-if="$route.path === '/admin/dashboard'" class="tw-mb-0 tw-font-bold tw-text-white tw-capitalize">Dashboard</h6>
              <h6 v-if="$route.path === '/admin/members'" class="tw-mb-0 tw-font-bold tw-text-white tw-capitalize">Liste des membres</h6>
              <h6 v-if="$route.path === '/admin/profil'" class="tw-mb-0 tw-font-bold tw-text-white tw-capitalize">Informations personnelles</h6>
              <h6 v-if="$route.path === '/admin/supply'" class="tw-mb-0 tw-font-bold tw-text-white tw-capitalize">Recrutement</h6>
              <h6 v-if="$route.path.includes('members/')" class="tw-mb-0 tw-font-bold tw-text-white tw-capitalize">Informations de l'utilisateur</h6>
            </nav>

            <div class="tw-flex tw-items-center tw-justify-end tw-mt-2 tw-grow sm:tw-mt-0 sm:tw-mr-6 md:tw-mr-0 lg:basis-auto">
              <div class="tw-hidden lg:tw-flex tw-items-center md:tw-ml-auto md:tw-pr-4">
                <div class="tw-relative tw-flex tw-flex-wrap tw-items-stretch tw-w-full tw-transition-all tw-rounded-lg ease">
                <span class="tw-text-sm ease tw-leading-5.6 tw-absolute tw-z-50 tw--ml-px tw-flex tw-h-full tw-items-center tw-whitespace-nowrap tw-rounded-lg tw-rounded-tr-none tw-rounded-br-none tw-border tw-border-r-0 tw-border-transparent tw-bg-transparent tw-py-2 tw-px-2.5 tw-text-center tw-font-normal tw-text-slate-500 tw-transition-all">
                  <v-icon  size="22" class="tw-text-gray-500">mdi-search-web</v-icon>
                </span>
                  <input type="text" class="tw-pl-9 tw-text-sm focus:shadow-primary-outline ease tw-w-1/100 tw-leading-5 tw-relative tw--ml-px tw-block tw-min-w-0 tw-flex-auto tw-rounded-lg tw-border tw-border-solid tw-border-gray-400 tw-border-gray-300 dark:tw-text-white tw-bg-white tw-bg-clip-padding tw-py-2 tw-pr-3 tw-text-gray-700 tw-transition-all placeholder:tw-text-gray-600 focus:tw-border-green-500 focus:tw-outline-none focus:tw-transition-shadow" placeholder="Rechercher..." />
                </div>
              </div>
              <ul class="tw-flex tw-flex-row tw-justify-end tw-pl-0 tw-mb-0 tw-list-none md-max:tw-w-full">
                <li class="tw-hidden lg:tw-flex tw-items-center">
                  <button class="tw-relative tw-flex tw-items-center tw-justify-center tw-bg-white tw-w-8 tw-h-8 tw-rounded-full tw-select-none">
                    <img class="tw-object-cover tw-object-center tw-w-full tw-h-full tw-rounded-full tw-ring-2 tw-ring-gray-400"
                         src="@/assets/img/igor.jpg">
                    <span aria-hidden="true" class="tw-absolute tw-top-0 tw--right-1 tw-w-2 tw-h-2 tw-bg-yellow-500 tw-rounded-full tw-ring tw-ring-white"></span>
                  </button>
                </li>

                <li class="tw-flex tw-items-center tw-w-full tw-h-10 lg:tw-hidden">
                  <button @click="hiddeSidebar()" class="tw-p-0 tw-text-sm tw-text-white tw-transition-all ease-nav-brand">
                    <v-icon v-if="!showSidebar" size="30" color="white" class="tw-cursor-pointer tw-rotate-180">mdi-menu-open</v-icon>
                    <v-icon v-else size="30" color="white" class="tw-cursor-pointer">mdi-menu-open</v-icon>
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end Navbar -->

        <div class="tw-w-full tw-px-4 lg:tw-px-6 tw-py-6 tw-mx-auto">
            <!-- main content -->
            <nuxt/>
            <!-- end main content -->
        </div>
      </main>
    </div>
  </v-app>
</template>

<script>
import Sidebar from "../components/sidebar";
import Navbar from "../components/navbar";

export default {
  components: {Navbar, Sidebar},
  // middleware: 'isauthenticated',
  data() {
    return {
      showSidebar: false,
      links: [
        {
          name: "Dashbaord",
          fullname: "Dashboard",
          path: "/admin/dashboard",
          mdi_icon: "mdi-view-dashboard-outline"
        },
        {
          name: "Membres",
          fullname: "Liste des membres",
          path: "/admin/members",
          mdi_icon: "mdi-account-group-outline"
        },
        {
          name: "Evénements",
          fullname: "Offres d'emploi",
          path: "/admin/supply",
          mdi_icon: "mdi-calendar-star"
        },
        // {
        //   name: "Profile",
        //   fullname: "Profile",
        //   path: "/admin/profil",
        //   mdi_icon: "mdi-calendar"
        // },
      ],
    }
  },

  methods: {
    hiddeSidebar(){
      this.showSidebar =! this.showSidebar
    },
  },
}
</script>

<style scoped>
</style>
