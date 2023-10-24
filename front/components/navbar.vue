<template>
  <div class="tw-relative tw-flex tw-flex-wrap tw-items-center tw-justify-between tw-px-0 tw-py-2 tw-mx-4 lg:tw-mx-6 tw-transition-all tw-ease-in tw-shadow-none tw-duration-250 tw-rounded-2xl lg:tw-flex-nowrap lg:tw-justify-start" navbar-main navbar-scroll="false">
    <div class="tw-flex tw-items-center tw-justify-between tw-w-full tw-py-1 tw-mx-auto tw-flex-wrap-inherit">
      <nav>
        <!-- breadcrumb -->
        <ol class="tw-flex tw-flex-wrap tw-pt-1 tw-pl-0 tw-mr-12 tw-text-black tw-bg-transparent tw-rounded-lg sm:tw-mr-16">
          <li class="tw-text-sm tw-leading-normal">
            <a class="tw-opacity-50 tw-text-black" href="javascript:;">Pages</a>
          </li>
          <li class="tw-text-sm tw-pl-2 tw-capitalize tw-leading-normal before:tw-float-left before:tw-pr-2 before:tw-text-black before:tw-content-['/']" aria-current="page"> Dashboard</li>
        </ol>
        <h6 class="tw-mb-0 tw-font-bold tw-capitalize">Dashboard</h6>
      </nav>

      <div class="tw-flex tw-items-center tw-justify-end tw-mt-2 tw-grow sm:tw-mt-0 sm:tw-mr-6 md:tw-mr-0 lg:basis-auto">
        <div class="tw-hidden lg:tw-flex tw-items-center md:tw-ml-auto md:tw-pr-4">
          <div class="tw-relative tw-flex tw-flex-wrap tw-items-stretch tw-w-full tw-transition-all tw-rounded-lg ease">
                <span class="tw-text-sm ease tw-leading-5.6 tw-absolute tw-z-50 tw--ml-px tw-flex tw-h-full tw-items-center tw-whitespace-nowrap tw-rounded-lg tw-rounded-tr-none tw-rounded-br-none tw-border tw-border-r-0 tw-border-transparent tw-bg-transparent tw-py-2 tw-px-2.5 tw-text-center tw-font-normal tw-text-slate-500 tw-transition-all">
                  <i class="fas fa-search"></i>
                </span>
            <input type="text" class="tw-pl-9 tw-text-sm focus:shadow-primary-outline ease w-1/100 tw-leading-5.6 tw-relative tw--ml-px tw-block tw-min-w-0 tw-flex-auto tw-rounded-lg tw-border tw-border-solid tw-border-gray-300 dark:bg-slate-850 dark:tw-text-white tw-bg-white tw-bg-clip-padding tw-py-2 tw-pr-3 tw-text-gray-700 tw-transition-all placeholder:tw-text-gray-500 focus:tw-border-blue-500 focus:tw-outline-none focus:tw-transition-shadow" placeholder="Rechercher..." />
          </div>
        </div>
        <ul class="tw-flex tw-flex-row tw-justify-end tw-pl-0 tw-mb-0 tw-list-none md-max:tw-w-full">
          <li class="tw-hidden lg:tw-flex tw-items-center">
            <a href="../pages/sign-in.html" class="tw-block tw-px-0 tw-py-2 tw-text-sm tw-font-semibold tw-text-white tw-transition-all ease-nav-brand">
              <i class="fa fa-user sm:tw-mr-1"></i>
              <span class="sm:tw-inline">Sign In</span>
            </a>
          </li>

          <li class="tw-flex tw-items-center tw-w-full tw-h-10 lg:tw-hidden">
            <a href="javascript:;" class="tw-p-0 tw-text-sm tw-text-white tw-transition-all ease-nav-brand">
              <v-icon color="white" class="tw-cursor-pointer" size="30">mdi-menu-open</v-icon>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style scoped>

</style>