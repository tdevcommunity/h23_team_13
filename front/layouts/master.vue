<template>
  <v-app>
    <div class="tw-relative tw-m-0 tw-font-sans tw-text-base tw-antialiased tw-font-normal dark:tw-bg-gray-900 leading-default tw-h-full tw-bg-gray-50 tw-text-gray-500">
<!--      <div class="tw-absolute tw-w-full tw-bg-gradient-to-r tw-from-[#27d576] tw-via-gray-00 tw-to-black dark:tw-hidden" style="height: 280px"></div>-->
      <div class="tw-fixed tw-top-0 tw-inset-x-0 tw-w-full tw-bg-[#27d576] dark:tw-hidden" style="height: 280px"></div>
      <!-- sidenav  -->
      <sidebar></sidebar>
      <!-- end sidenav -->

      <main class="tw-relative tw-h-full tw-max-h-screen tw-transition-all tw-duration-200 tw-ease-in-out lg:tw-ml-[255px] tw-rounded-xl">
        <!-- Navbar -->
        <navbar></navbar>
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

    }
  },

  mounted() {
  },

  watch: {},
  methods: {},
}
</script>

<style scoped>
</style>
