<template>
  <div>
    <!-- row 1 -->
    <div class="tw-flex tw-flex-wrap tw--mx-3">
      <!-- card1 -->
      <div class="tw-w-full tw-max-w-full tw-px-3 tw-mb-6 sm:tw-w-1/2 sm:tw-flex-none xl:tw-mb-0 xl:tw-w-1/4">
        <div class="tw-relative tw-flex tw-flex-col tw-min-w-0 tw-break-words tw-bg-white tw-shadow-xl dark:tw-bg-gray-800 dark:shadow-dark-xl tw-rounded-2xl tw-bg-clip-border">
          <div class="tw-flex-auto tw-p-4">
            <div class="tw-flex tw-flex-row tw--mx-3">
              <div class="tw-flex-none tw-w-2/3 tw-max-w-full tw-px-3">
                <div>
                  <p class="tw-mb-0 tw-font-sans tw-text-xs tw-font-semibold tw-leading-normal tw-uppercase dark:tw-text-white dark:tw-opacity-60">Total membres</p>
                  <h5 class="tw-mt-2 tw-mb-2 tw-text-lg tw-font-bold dark:tw-text-white">3,452</h5>
                </div>
              </div>
              <div class="tw-px-3 tw-text-right basis-1/3">
                <div class="tw-inline-block tw-w-12 tw-h-12 tw-text-center rounded-circle btn-gradient-blue">
                  <v-icon class="ni tw-leading-none ni-money-coins tw-text-lg tw-relative tw-top-2 tw-text-white" size="40">mdi-account-group</v-icon>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- card2 -->
      <div class="tw-w-full tw-max-w-full tw-px-3 tw-mb-6 sm:tw-w-1/2 sm:tw-flex-none xl:tw-mb-0 xl:tw-w-1/4">
        <div class="tw-relative tw-flex tw-flex-col tw-min-w-0 tw-break-words tw-bg-white tw-shadow-xl dark:tw-bg-gray-800 dark:shadow-dark-xl tw-rounded-2xl tw-bg-clip-border">
          <div class="tw-flex-auto tw-p-4">
            <div class="tw-flex tw-flex-row tw--mx-3">
              <div class="tw-flex-none tw-w-2/3 tw-max-w-full tw-px-3">
                <div>
                  <p class="tw-mb-0 tw-font-sans tw-text-xs tw-font-semibold tw-leading-normal tw-uppercase dark:tw-text-white dark:tw-opacity-60">Total recrutement</p>
                  <h5 class="tw-mt-2 tw-mb-2 tw-text-lg tw-font-bold dark:tw-text-white">2,300</h5>

                </div>
              </div>
              <div class="tw-px-3 tw-text-right basis-1/3">
                <div class="tw-inline-block tw-w-12 tw-h-12 tw-text-center rounded-circle btn-gradient-red">
                  <v-icon class="ni tw-leading-none ni-world tw-text-lg tw-relative tw-top-2 tw-text-white" size="40">mdi-podium-bronze</v-icon>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- card3 -->
      <div class="tw-w-full tw-max-w-full tw-px-3 tw-mb-6 sm:tw-w-1/2 sm:tw-flex-none xl:tw-mb-0 xl:tw-w-1/4">
        <div class="tw-relative tw-flex tw-flex-col tw-min-w-0 tw-break-words tw-bg-white tw-shadow-xl dark:tw-bg-gray-800 dark:shadow-dark-xl tw-rounded-2xl tw-bg-clip-border">
          <div class="tw-flex-auto tw-p-4">
            <div class="tw-flex tw-flex-row tw--mx-3">
              <div class="tw-flex-none tw-w-2/3 tw-max-w-full tw-px-3">
                <div>
                  <p class="tw-mb-0 tw-font-sans tw-text-xs tw-font-semibold tw-leading-normal tw-uppercase dark:tw-text-white dark:tw-opacity-60">Total spécialités</p>
                  <h5 class="tw-mt-2 tw-mb-2 tw-text-lg tw-font-bold dark:tw-text-white">265</h5>

                </div>
              </div>
              <div class="tw-px-3 tw-text-right basis-1/3">
                <div class="tw-inline-block tw-w-12 tw-h-12 tw-text-center rounded-circle btn-gradient-green">
                  <v-icon class="ni tw-leading-none ni-paper-diploma tw-text-lg tw-relative tw-top-3 tw-text-white" size="40">mdi-school</v-icon>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- card4 -->
      <div class="tw-w-full tw-max-w-full tw-px-3 sm:tw-w-1/2 sm:tw-flex-none xl:tw-w-1/4">
        <div class="tw-relative tw-flex tw-flex-col tw-min-w-0 tw-break-words tw-bg-white tw-shadow-xl dark:tw-bg-gray-800 dark:shadow-dark-xl tw-rounded-2xl tw-bg-clip-border">
          <div class="tw-flex-auto tw-p-4">
            <div class="tw-flex tw-flex-row tw--mx-3">
              <div class="tw-flex-none tw-w-2/3 tw-max-w-full tw-px-3">
                <div>
                  <p class="tw-mb-0 tw-font-sans tw-text-xs tw-font-semibold tw-leading-normal tw-uppercase dark:tw-text-white dark:tw-opacity-60">Total évenements</p>
                  <h5 class="tw-mt-2 tw-mb-2 tw-text-lg tw-font-bold dark:tw-text-white">430</h5>

                </div>
              </div>
              <div class="tw-px-3 tw-text-right basis-1/3">
                <div class="tw-inline-block tw-w-12 tw-h-12 tw-text-center rounded-circle  btn-gradient-orange">
                  <v-icon class="ni tw-leading-none ni-cart tw-text-lg tw-relative tw-top-3 tw-text-white" size="40">mdi-calendar-text</v-icon>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- cards row 2 -->
    <div class="tw-flex tw-flex-wrap tw-gap-6 lg:tw-gap-0 tw-mt-6 tw--mx-3">
      <div v-for="i in 2" :key="i" class="tw-w-full tw-max-w-full tw-px-3 tw-mt-0 lg:tw-w-6/12 lg:tw-flex-none">
        <div class="tw-border-black/12.5 tw-shadow-xl dark:shadow-dark-xl tw-relative tw-flex tw-min-w-0 tw-flex-col tw-break-words tw-rounded-2xl tw-border-0 tw-border-solid tw-bg-white dark:tw-bg-gray-800 tw-bg-clip-border">
          <div class="tw-p-4 tw-pb-0 tw-mb-2 tw-rounded-t-4 tw-flex tw-justify-between tw-w-full">
            <h6 class="tw-mb-0 dark:tw-text-white">Liste des spécialités</h6>
            <button class="tw-bg-indigo-500 tw-text-white tw-text-xs tw-font-bold tw-px-3 tw-py-1 tw-rounded tw-outline-none focus:tw-outline-none tw-mr-1 tw-mb-1 tw-ease-linear tw-transition-all tw-duration-150" type="button">
              Voir tout
            </button>
          </div>
          <div class="tw-flex-auto tw-w-full">
            <div class="tw-relative tw-flex tw-flex-col tw-min-w-0 tw-break-words tw-bg-white dark:tw-bg-gray-900 tw-w-full tw-mb-2">
              <div class="tw-block tw-w-full tw-overflow-x-auto">
                <table class="tw-items-center tw-w-full tw-bg-transparent tw-border-collapse">
                  <thead class="thead-light">
                  <tr>
                    <th class="tw-px-6 tw-align-middle tw-pt-4 tw-pb-0 tw-text-xs tw-leading-tight tw-whitespace-nowrap tw-font-semibold tw-text-left">
                      Spécialités:
                    </th>
                    <th class="tw-px-6 tw-align-middle tw-pt-4 tw-pb-0 tw-text-xs tw-leading-tight tw-whitespace-nowrap tw-font-semibold tw-text-left">
                      Membres:
                    </th>
                    <th class="tw-px-6 tw-align-middle tw-pt-4 tw-pb-0 tw-text-xs tw-leading-tight tw-whitespace-nowrap tw-font-semibold tw-text-left tw-min-w-[200px]">
                      Pourcentage
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr v-for="(fonction, index) in fonctions" v-if="index < 6" :key="index">
                    <th class="tw-border-t-0 tw-px-6 tw-align-middle tw-border-b tw-border-r-0 tw-text-xs tw-whitespace-nowra tw-p-4 tw-text-left">
                      {{ fonction?.nom }}
                    </th>
                    <td class="tw-border-t-0 tw-px-6 tw-align-middle tw-border-b tw-border-r-0 tw-text-xs tw-whitespace-nowrap tw-p-4">
                      45
                    </td>
                    <td class="tw-border-t-0 tw-px-6 tw-align-middle tw-border-b tw-border-r-0 tw-text-xs tw-whitespace-nowrap tw-p-4">
                      <div class="tw-flex tw-items-center">
                        <span class="tw-mr-2">60%</span>
                        <div class="tw-relative tw-w-full">
                          <div class="tw-overflow-hidden tw-h-2 tw-text-xs tw-flex tw-rounded tw-bg-red-200">
                            <div style="width: 60%" class="tw-shadow-none tw-flex tw-flex-col tw-text-center tw-whitespace-nowrap tw-text-white tw-justify-center tw-bg-red-500"></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  layout: "master",
  data() {
    return {

    };
  },
  methods: {

  },
  mounted(){

  }

};
</script>

<style scoped>
.btn-gradient-orange {
  background: linear-gradient(to bottom right, #f97316, #eab308);
}
.btn-gradient-green {
  background: linear-gradient(to bottom right, #10b981, #2dd4bf);
}
.btn-gradient-red {
  background: linear-gradient(to bottom right, #dc2626, #ea580c);
}
.btn-gradient-blue {
  background: linear-gradient(to bottom right, #3b82f6, #8b5cf6);
}
</style>