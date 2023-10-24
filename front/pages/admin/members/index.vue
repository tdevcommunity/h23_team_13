<template>
  <div>
    <div class="tw-flex tw-flex-wrap tw--mx-3">
      <div class="tw-flex-none tw-w-full tw-max-w-full tw-px-3">
        <div class="tw-relative tw-flex tw-flex-col tw-min-w-0 tw-mb-6 tw-break-words tw-bg-white tw-border-0 tw-border-transparent tw-border-solid tw-shadow-xl dark:bg-slate-850 dark:shadow-dark-xl tw-rounded-2xl tw-bg-clip-border">
          <div class="tw-p-6 tw-pb-0 tw-mb-0 tw-border-b-0 border-b-solid tw-rounded-t-2xl border-b-transparent">
            <h6 class="dark:tw-text-white">Liste de tous les membres</h6>
          </div>
          <div class="tw-flex-auto tw-px-0 tw-pt-0 tw-pb-2">
            <div class="tw-p-0 tw-overflow-x-auto">
              <table class="tw-items-center tw-w-full tw-mb-0 tw-align-top tw-border-collapse dark:border-white/40 text-slate-500">
                <thead class="tw-align-bottom">
                <tr>
                  <th class="tw-px-6 tw-py-3 tw-font-bold tw-text-left tw-uppercase tw-align-middle tw-bg-transparent tw-border-b tw-border-collapse tw-shadow-none dark:border-white/40 dark:tw-text-white text-xxs border-b-solid tracking-none tw-whitespace-nowrap text-slate-400 tw-opacity-70">Nom & Prénoms</th>
                  <th class="tw-px-6 tw-py-3 tw-pl-2 tw-font-bold tw-text-left tw-uppercase tw-align-middle tw-bg-transparent tw-border-b tw-border-collapse tw-shadow-none dark:border-white/40 dark:tw-text-white text-xxs border-b-solid tracking-none tw-whitespace-nowrap text-slate-400 tw-opacity-70">Fonction</th>
                  <th class="tw-px-6 tw-py-3 tw-font-bold tw-text-center tw-uppercase tw-align-middle tw-bg-transparent tw-border-b tw-border-collapse tw-shadow-none dark:border-white/40 dark:tw-text-white text-xxs border-b-solid tracking-none tw-whitespace-nowrap text-slate-400 tw-opacity-70">Status</th>
                  <th class="tw-px-6 tw-py-3 tw-font-bold tw-text-center tw-uppercase tw-align-middle tw-bg-transparent tw-border-b tw-border-collapse tw-shadow-none dark:border-white/40 dark:tw-text-white text-xxs border-b-solid tracking-none tw-whitespace-nowrap text-slate-400 tw-opacity-70">Inscrit le</th>
                  <th class="tw-px-6 tw-py-3 tw-font-semibold tw-capitalize tw-align-middle tw-bg-transparent tw-border-b tw-border-collapse tw-border-solid tw-shadow-none dark:border-white/40 dark:tw-text-white tracking-none tw-whitespace-nowrap text-slate-400 tw-opacity-70"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <div class="tw-flex tw-px-2 tw-py-1">
                      <div>
                        <img src="@/assets/img/team-2.jpg" class="tw-inline-flex tw-items-center tw-justify-center tw-mr-4 tw-text-sm tw-text-white tw-transition-all tw-duration-200 tw-ease-in-out tw-h-9 tw-w-9 tw-rounded-xl" alt="user1" />
                      </div>
                      <div class="tw-flex tw-flex-col tw-justify-center">
                        <h6 class="tw-mb-0 tw-text-sm tw-leading-normal dark:tw-text-white">John Michael</h6>
                        <p class="tw-mb-0 tw-text-xs tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">john@creative-tim.com</p>
                      </div>
                    </div>
                  </td>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <p class="tw-mb-0 tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80">Manager</p>
                    <p class="tw-mb-0 tw-text-xs tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">Organization</p>
                  </td>
                  <td class="tw-p-2 tw-text-sm tw-leading-normal tw-text-center tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-bg-gradient-to-tl tw-from-emerald-500 tw-to-teal-400 tw-px-2.5 tw-text-xs tw-rounded-lg tw-py-1.5 tw-inline-block tw-whitespace-nowrap tw-text-center tw-align-baseline tw-font-bold tw-uppercase tw-leading-none tw-text-white">Online</span>
                  </td>
                  <td class="tw-p-2 tw-text-center tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">23/04/18</span>
                  </td>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b-0 tw-whitespace-nowrap shadow-transparent">
                    <NuxtLink :to="`/admin/members/${1}`" class="tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80 tw-text-white tw-rounded-lg tw-bg-gray-500 tw-px-4 tw-py-2"> Voir plus</NuxtLink>
                  </td>
                </tr>
                <tr>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <div class="tw-flex tw-px-2 tw-py-1">
                      <div>
                        <img src="@/assets/img/team-3.jpg" class="tw-inline-flex tw-items-center tw-justify-center tw-mr-4 tw-text-sm tw-text-white tw-transition-all tw-duration-200 tw-ease-in-out tw-h-9 tw-w-9 tw-rounded-xl" alt="user2" />
                      </div>
                      <div class="tw-flex tw-flex-col tw-justify-center">
                        <h6 class="tw-mb-0 tw-text-sm tw-leading-normal dark:tw-text-white">Alexa Liras</h6>
                        <p class="tw-mb-0 tw-text-xs tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">alexa@creative-tim.com</p>
                      </div>
                    </div>
                  </td>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <p class="tw-mb-0 tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80">Programator</p>
                    <p class="tw-mb-0 tw-text-xs tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">Developer</p>
                  </td>
                  <td class="tw-p-2 tw-text-sm tw-leading-normal tw-text-center tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-bg-gradient-to-tl tw-from-slate-600 tw-to-slate-300 tw-px-2.5 tw-text-xs tw-rounded-lg tw-py-1.5 tw-inline-block tw-whitespace-nowrap tw-text-center tw-align-baseline tw-font-bold tw-uppercase tw-leading-none tw-text-white">Offline</span>
                  </td>
                  <td class="tw-p-2 tw-text-center tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">11/01/19</span>
                  </td>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b-0 tw-whitespace-nowrap shadow-transparent">
                    <NuxtLink :to="`/admin/members/${1}`" class="tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80 tw-text-white tw-rounded-lg tw-bg-gray-500 tw-px-4 tw-py-2"> Voir plus</NuxtLink>
                  </td>
                </tr>
                <tr>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <div class="tw-flex tw-px-2 tw-py-1">
                      <div>
                        <img src="@/assets/img/team-4.jpg" class="tw-inline-flex tw-items-center tw-justify-center tw-mr-4 tw-text-sm tw-text-white tw-transition-all tw-duration-200 tw-ease-in-out tw-h-9 tw-w-9 tw-rounded-xl" alt="user3" />
                      </div>
                      <div class="tw-flex tw-flex-col tw-justify-center">
                        <h6 class="tw-mb-0 tw-text-sm tw-leading-normal dark:tw-text-white">Laurent Perrier</h6>
                        <p class="tw-mb-0 tw-text-xs tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">laurent@creative-tim.com</p>
                      </div>
                    </div>
                  </td>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <p class="tw-mb-0 tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80">Executive</p>
                    <p class="tw-mb-0 tw-text-xs tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">Projects</p>
                  </td>
                  <td class="tw-p-2 tw-text-sm tw-leading-normal tw-text-center tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-bg-gradient-to-tl tw-from-emerald-500 tw-to-teal-400 tw-px-2.5 tw-text-xs tw-rounded-lg tw-py-1.5 tw-inline-block tw-whitespace-nowrap tw-text-center tw-align-baseline tw-font-bold tw-uppercase tw-leading-none tw-text-white">Online</span>
                  </td>
                  <td class="tw-p-2 tw-text-center tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">19/09/17</span>
                  </td>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b-0 tw-whitespace-nowrap shadow-transparent">
                    <NuxtLink :to="`/admin/members/${1}`" class="tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80 tw-text-white tw-rounded-lg tw-bg-gray-500 tw-px-4 tw-py-2"> Voir plus</NuxtLink>
                  </td>
                </tr>
                <tr>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <div class="tw-flex tw-px-2 tw-py-1">
                      <div>
                        <img src="@/assets/img/team-3.jpg" class="tw-inline-flex tw-items-center tw-justify-center tw-mr-4 tw-text-sm tw-text-white tw-transition-all tw-duration-200 tw-ease-in-out tw-h-9 tw-w-9 tw-rounded-xl" alt="user4" />
                      </div>
                      <div class="tw-flex tw-flex-col tw-justify-center">
                        <h6 class="tw-mb-0 tw-text-sm tw-leading-normal dark:tw-text-white">Michael Levi</h6>
                        <p class="tw-mb-0 tw-text-xs tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">michael@creative-tim.com</p>
                      </div>
                    </div>
                  </td>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <p class="tw-mb-0 tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80">Programator</p>
                    <p class="tw-mb-0 tw-text-xs tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">Developer</p>
                  </td>
                  <td class="tw-p-2 tw-text-sm tw-leading-normal tw-text-center tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-bg-gradient-to-tl tw-from-emerald-500 tw-to-teal-400 tw-px-2.5 tw-text-xs tw-rounded-lg tw-py-1.5 tw-inline-block tw-whitespace-nowrap tw-text-center tw-align-baseline tw-font-bold tw-uppercase tw-leading-none tw-text-white">Online</span>
                  </td>
                  <td class="tw-p-2 tw-text-center tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">24/12/08</span>
                  </td>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b-0 tw-whitespace-nowrap shadow-transparent">
                    <NuxtLink :to="`/admin/members/${1}`" class="tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80 tw-text-white tw-rounded-lg tw-bg-gray-500 tw-px-4 tw-py-2"> Voir plus</NuxtLink>
                  </td>
                </tr>
                <tr>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <div class="tw-flex tw-px-2 tw-py-1">
                      <div>
                        <img src="@/assets/img/team-2.jpg" class="tw-inline-flex tw-items-center tw-justify-center tw-mr-4 tw-text-sm tw-text-white tw-transition-all tw-duration-200 tw-ease-in-out tw-h-9 tw-w-9 tw-rounded-xl" alt="user5" />
                      </div>
                      <div class="tw-flex tw-flex-col tw-justify-center">
                        <h6 class="tw-mb-0 tw-text-sm tw-leading-normal dark:tw-text-white">Richard Gran</h6>
                        <p class="tw-mb-0 tw-text-xs tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">richard@creative-tim.com</p>
                      </div>
                    </div>
                  </td>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <p class="tw-mb-0 tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80">Manager</p>
                    <p class="tw-mb-0 tw-text-xs tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">Executive</p>
                  </td>
                  <td class="tw-p-2 tw-text-sm tw-leading-normal tw-text-center tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-bg-gradient-to-tl tw-from-slate-600 tw-to-slate-300 tw-px-2.5 tw-text-xs tw-rounded-lg tw-py-1.5 tw-inline-block tw-whitespace-nowrap tw-text-center tw-align-baseline tw-font-bold tw-uppercase tw-leading-none tw-text-white">Offline</span>
                  </td>
                  <td class="tw-p-2 tw-text-center tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">04/10/21</span>
                  </td>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b-0 tw-whitespace-nowrap shadow-transparent">
                    <NuxtLink :to="`/admin/members/${1}`" class="tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80 tw-text-white tw-rounded-lg tw-bg-gray-500 tw-px-4 tw-py-2"> Voir plus</NuxtLink>
                  </td>
                </tr>
                <tr>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b-0 tw-whitespace-nowrap shadow-transparent">
                    <div class="tw-flex tw-px-2 tw-py-1">
                      <div>
                        <img src="@/assets/img/team-4.jpg" class="tw-inline-flex tw-items-center tw-justify-center tw-mr-4 tw-text-sm tw-text-white tw-transition-all tw-duration-200 tw-ease-in-out tw-h-9 tw-w-9 tw-rounded-xl" alt="user6" />
                      </div>
                      <div class="tw-flex tw-flex-col tw-justify-center">
                        <h6 class="tw-mb-0 tw-text-sm tw-leading-normal dark:tw-text-white">Miriam Eric</h6>
                        <p class="tw-mb-0 tw-text-xs tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">miriam@creative-tim.com</p>
                      </div>
                    </div>
                  </td>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b-0 tw-whitespace-nowrap shadow-transparent">
                    <p class="tw-mb-0 tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80">Programtor</p>
                    <p class="tw-mb-0 tw-text-xs tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">Developer</p>
                  </td>
                  <td class="tw-p-2 tw-text-sm tw-leading-normal tw-text-center tw-align-middle tw-bg-transparent tw-border-b-0 tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-bg-gradient-to-tl tw-from-slate-600 tw-to-slate-300 tw-px-2.5 tw-text-xs tw-rounded-lg tw-py-1.5 tw-inline-block tw-whitespace-nowrap tw-text-center tw-align-baseline tw-font-bold tw-uppercase tw-leading-none tw-text-white">Offline</span>
                  </td>
                  <td class="tw-p-2 tw-text-center tw-align-middle tw-bg-transparent tw-border-b-0 tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">14/09/20</span>
                  </td>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b-0 tw-whitespace-nowrap shadow-transparent">
                    <NuxtLink :to="`/admin/members/${1}`" class="tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80 tw-text-white tw-rounded-lg tw-bg-gray-500 tw-px-4 tw-py-2"> Voir plus</NuxtLink>
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

};
</script>

<style>

</style>