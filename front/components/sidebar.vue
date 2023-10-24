<template>
  <div class="tw-hidden lg:tw-fixed tw-inset-y-0 tw-flex-wrap tw-items-center tw-justify-between lg:tw-block tw-w-full tw-p-0 tw-my-4 tw-overflow-y-auto tw-antialiased tw-transition-transform tw-duration-200 tw-bg-white tw-border-0 tw-shadow-xl dark:tw-shadow-none dark:tw-bg-gray-800 tw-max-w-[230px] ease-nav-brand lg:tw-ml-6 tw-rounded-2xl xl:tw-left-0 xl:tw-translate-x-0" style="z-index: 999" aria-expanded="false">
    <div class="tw-h-20">
      <i class="tw-absolute tw-top-0 tw-right-0 tw-p-4 tw-opacity-50 tw-cursor-pointer fas fa-times dark:tw-text-white tw-text-gray-400 xl:tw-hidden" sidenav-close></i>
      <a class="tw-block tw-px-8 tw-py-6 tw-m-0 tw-text-sm tw-whitespace-nowrap tw-flex tw-items-center dark:tw-text-white tw-text-gray-700" href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank">
        <img src="@/assets/img/logos/tdev.png" class="tw-inline tw-h-full tw-max-w-full tw-transition-all tw-duration-200 dark:tw-hidden ease-nav-brand tw-max-h-14 tw-w-full" alt="main_logo" />
      </a>
    </div>

    <hr class="tw-h-px tw-mt-0 tw-bg-transparent tw-bg-gradient-to-r tw-from-transparent tw-via-black/40 tw-to-transparent dark:tw-bg-gradient-to-r dark:tw-from-transparent dark:tw-via-white dark:tw-to-transparent" />

    <div class="tw-items-center tw-block tw-w-auto tw-max-h-screen tw-overflow-auto tw-grow tw-basis-full">
      <ul class="tw-flex tw-flex-col tw-pl-0 tw-mb-0">
        <li v-for="(link, index) in links" :key="index" class="tw-mt-0.5 tw-w-full">
          <NuxtLink :to="link.path" :class="$route.fullPath === link.path ? 'tw-bg-gray-200' : ''" class="dark:tw-text-white dark:tw-opacity-80 tw-py-2 tw-rounded-lg tw-text-sm ease-nav-brand tw-my-0 tw-mx-2 tw-flex tw-items-center tw-whitespace-nowrap tw-px-4 tw-transition-colors">
            <div class="tw-mr-2 tw-flex tw-h-8 tw-w-8 tw-items-center tw-justify-center tw-rounded-lg tw-bg-center tw-stroke-0 tw-text-center xl:tw-p-2.5">
              <v-icon  size="22" color="green darken-1">{{ link.mdi_icon }}</v-icon>
<!--              <i class="tw-relative tw-top-0 tw-text-sm tw-leading-normal text-gray-700 ni ni-single-02"></i>-->
            </div>
            <span class="tw-ml-1 tw-duration-300 tw-opacity-100 tw-text-gray-600 tw-pointer-events-none ease">{{ link.fullname }}</span>
          </NuxtLink>
        </li>

        <li class="tw-w-full tw-mt-4">
          <h6 class="tw-pl-6 tw-ml-2 tw-text-xs tw-font-bold tw-leading-tight tw-uppercase dark:tw-text-white tw-opacity-60">Account pages</h6>
        </li>

        <li class="tw-mt-0.5 tw-w-full">
          <NuxtLink to="/admin/profil" class="dark:tw-text-white dark:tw-opacity-80 tw-py-2 tw-rounded-lg tw-text-sm ease-nav-brand tw-my-0 tw-mx-2 tw-flex tw-items-center tw-whitespace-nowrap tw-px-4 tw-transition-colors">
            <div class="tw-mr-2 tw-flex tw-h-8 tw-w-8 tw-items-center tw-justify-center tw-rounded-lg tw-bg-center tw-stroke-0 tw-text-center xl:tw-p-2.5">
              <v-icon  size="22" color="green darken-1">mdi-account-child</v-icon>
            </div>
            <span class="tw-ml-1 tw-duration-300 tw-opacity-100 tw-text-gray-800 tw-pointer-events-none ease">Profile</span>
          </NuxtLink>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return {
      links: [
        {
          name: "Dashbaord",
          fullname: "Dashboard",
          path: "/admin/dashboard",
          mdi_icon: "mdi-monitor-dashboard"
        },
        {
          name: "Membres",
          fullname: "Tous les membres",
          path: "/admin/members",
          mdi_icon: "mdi-account-group-outline"
        },
        {
          name: "Evénements",
          fullname: "Evénements",
          path: "/admin/events",
          mdi_icon: "mdi-calendar-star"
        },
      ],
    }
  }
}
</script>

<style scoped>

</style>