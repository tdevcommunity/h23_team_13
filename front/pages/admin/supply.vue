<template>
  <div class="tw-bg-white tw-rounded-t-2xl">
      <div class="tw-p-4 tw-block sm:tw-flex tw-items-center tw-justify-between lg:tw-mt-1.5">
        <div class="tw-block tw-items-center tw-mb-3 tw-divide-x tw-divide-gray-100 sm:tw-flex sm:tw-mb-0">
          <div class="tw-flex tw-justify-start tw-items-center">
            <h3 class="tw-mr-3 tw-text-base tw-font-medium tw-text-gray-500">Liste des demandes de recrutements:</h3>
          </div>
        </div>
        <div class="tw-inline-flex tw-items-center tw-space-x-3">
          <a href="#" class="tw-inline-flex tw-justify-center tw-p-1 tw-text-gray-500 tw-rounded tw-cursor-pointer hover:tw-text-gray-900 hover:tw-bg-gray-100">
            <svg class="tw-w-6 tw-h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
              </path>
            </svg>
          </a>
          <a href="#" class="tw-inline-flex tw-justify-center tw-p-1 tw-text-gray-500 tw-rounded tw-cursor-pointer hover:tw-text-gray-900 hover:tw-bg-gray-100">
            <svg class="tw-w-6 tw-h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
            </svg>
          </a>
        </div>
      </div>

    <div class="tw-flex tw-flex-col">
        <div class="tw-overflow-x-auto">
          <div class="tw-inline-block tw-min-w-full tw-align-middle">
            <div class="tw-overflow-hidden tw-shadow-lg">
              <div class="tw-flex tw-flex-wrap tw-justify-start tw-items-start tw-px-4 tw-mb-6 lg:tw-gap-6">
                <div v-for="i in 3" :key="i" class="">
                  <div id="kanban-list-1" class="tw-p-4 tw-mb-6 tw-space-y-6 tw-bg-gray-200 tw-rounded-xl tw-min-w-20">
                    <div class="tw-flex tw-flex-col tw-p-5 tw-max-w-md tw-bg-white tw-rounded-2xl tw-shadow-sm tw-transform tw-cursor-move">
                      <div class="tw-flex tw-justify-between tw-items-center tw-pb-4">
                        <div class="tw-text-sm tw-font-semibold tw-text-gray-900">Recherche de Développeur Web Full-Stack</div>
                      </div>
                      <div class="tw-flex tw-justify-center tw-items-center tw-pb-4">
                        <img class="tw-bg-cover tw-rounded-2xl tw-w-full tw-h-[35vh]" src="https://images.unsplash.com/photo-1521791136064-7986c2920216?auto=format&fit=crop&q=80&w=1469&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="attachment" />
                      </div>
                      <div class="tw-flex tw-flex-col">
                        <div class="tw-pb-4 tw-text-sm tw-font-normal tw-text-gray-700">
                          En tant que développeur Fullstack chez VOTX Entreprises, vous jouerez un rôle crucial dans la conception, le développement et la maintenance d’applications logicielles de pointe qui permettent à nos clients de prospérer à l’ère numérique.
                        </div>
                        <div class="tw-flex tw-justify-between">
                          <div class="tw-flex tw-justify-start tw-items-center">

                          </div>
                          <div class="tw-flex tw-justify-center tw-items-center tw-px-3 tw-text-xs tw-font-bold tw-text-white tw-bg-gradient-to-br tw-from-green-500 tw-to-green-700 tw-rounded-2xl">
                            <svg class="tw-mr-1 tw-w-4 tw-h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                            Voir l'offre
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="tw-hidden tw-fixed tw-inset-0 tw-z-50 tw-bg-gray-900 tw-opacity-50" id="kanban-card-modal-backdrop"></div>

      <div class="tw-hidden tw-overflow-y-auto tw-overflow-x-hidden tw-fixed tw-right-0 tw-left-0 tw-top-4 tw-z-50 tw-justify-center tw-items-center md:tw-inset-0 h-modal sm:tw-h-full" id="kanban-card-modal">
        <div class="tw-relative tw-px-4 tw-w-full tw-max-w-2xl tw-h-full md:tw-h-auto">

          <div class="tw-relative tw-bg-white tw-rounded-2xl tw-shadow-lg">

            <div class="tw-flex tw-justify-between tw-items-center tw-p-4 tw-rounded-t tw-border-b md:tw-px-6">
              <div class="tw-text-xl tw-font-semibold">Edit task</div>
              <button type="button" data-modal-toggle="kanban-card-modal" class="tw-text-gray-400 tw-bg-transparent hover:tw-bg-gray-200 hover:tw-text-gray-900 tw-rounded-2xl tw-text-sm tw-p-1.5 tw-ml-auto tw-inline-flex tw-items-center">
                <svg class="tw-w-5 tw-h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              </button>
            </div>

            <div class="tw-p-4 md:tw-p-6">
              <div class="tw-mb-3 tw-text-2xl tw-font-semibold tw-leading-none tw-text-gray-900">Redesign Themesberg Homepage</div>
              <div class="tw-flex tw-flex-col tw-justify-center tw-items-start tw-mb-5 tw-space-y-3">
                <div class="tw-text-sm tw-text-gray-500">
                  Added by <a class="text-fuchsia-500 tw-no-underline tw-cursor-pointer hover:tw-underline">Bonnie Green</a>, 22 hours ago
                </div>
                <div class="tw-flex tw-flex-row tw-flex-wrap">
                  <div class="tw-flex tw-justify-start tw-items-center">
                    <a href="#" data-tooltip-target="bonnie-tooltip" class="tw--mr-3">
                      <img class="tw-w-7 tw-h-7 tw-rounded-full tw-border-2 tw-border-white" src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/bonnie-green.png" alt="Bonnie Green" />
                    </a>
                    <div id="bonnie-tooltip" role="tooltip" class="tw-inline-block tw-absolute tw-invisible tw-z-10 tw-py-2 tw-px-3 tw-text-sm tw-font-medium tw-text-white tw-bg-gray-900 tw-rounded-2xl tw-opacity-0 tw-transition-opacity tw-duration-300 tooltip shadow-lg-sm">
                      Bonnie Green
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <a href="#" data-tooltip-target="roberta-tooltip" class="tw--mr-3">
                      <img class="tw-w-7 tw-h-7 tw-rounded-full tw-border-2 tw-border-white" src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/roberta-casas.png" alt="Roberta Casas" />
                    </a>
                    <div id="roberta-tooltip" role="tooltip" class="tw-inline-block tw-absolute tw-invisible tw-z-10 tw-py-2 tw-px-3 tw-text-sm tw-font-medium tw-text-white tw-bg-gray-900 tw-rounded-2xl tw-opacity-0 tw-transition-opacity tw-duration-300 tooltip shadow-lg-sm">
                      Roberta Casas
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                    <a href="#" data-tooltip-target="michael-tooltip" class="tw--mr-3">
                      <img class="tw-w-7 tw-h-7 tw-rounded-full tw-border-2 tw-border-white" src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/michael-gough.png" alt="Michael Gough" />
                    </a>
                    <div id="michael-tooltip" role="tooltip" class="tw-inline-block tw-absolute tw-invisible tw-z-10 tw-py-2 tw-px-3 tw-text-sm tw-font-medium tw-text-white tw-bg-gray-900 tw-rounded-2xl tw-opacity-0 tw-transition-opacity tw-duration-300 tooltip shadow-lg-sm">
                      Michael Gough
                      <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                  </div>
                  <button type="button" class="tw-text-gray-900 tw-bg-white hover:tw-bg-gray-100 tw-border tw-border-gray-200 hover:tw-border-gray-300 tw-font-semibold tw-rounded-2xl tw-text-xs tw-px-3 tw-py-1.5 tw-text-center tw-inline-flex tw-items-center tw-ml-5">
                    <svg class="tw-mr-1 tw-w-4 tw-h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    Join
                  </button>
                  <button type="button" class="tw-text-gray-900 tw-bg-white hover:tw-bg-gray-100 tw-border tw-border-gray-200 hover:tw-border-gray-300 tw-font-semibold tw-rounded-2xl tw-text-xs tw-px-3 tw-py-1.5 tw-text-center tw-inline-flex tw-items-center tw-ml-2">
                    <svg class="tw-mr-1 tw-w-4 tw-h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                    Attachment
                  </button>
                </div>
              </div>
              <div class="tw-inline-flex tw-items-center tw-mb-2 tw-text-lg tw-font-semibold tw-text-center tw-text-gray-900">
                <svg class="tw-mr-1 tw-w-5 tw-h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path></svg>
                Description
              </div>
              <div class="tw-mb-4 tw-space-y-2 tw-text-base tw-text-gray-600">
                <p>I made some wireframes that we would like you to follow since we are building it in Google’s Material Design (Please learn more about this and see how to improve standard material design into something beautiful). But besides that, you can just do it how you like.</p>
                <p>Next Friday should be done. Next Monday we should deliver the first iteration. Make sure, we have a good result to be delivered by the day.</p>
                <div class="tw-w-max tw-text-sm tw-font-semibold text-fuchsia-500 tw-cursor-pointer">
                  Show Full Description
                </div>
              </div>
              <div class="tw-mb-4 tw-w-full tw-bg-gray-100 tw-rounded-lg tw-border tw-border-gray-100">
                <div class="tw-p-4">
                  <label for="compose-mail" class="tw-sr-only">Your comment</label>
                  <textarea id="compose-mail" rows="4" class="tw-block tw-px-0 tw-w-full tw-text-base tw-text-gray-900 tw-bg-gray-100 tw-border-0 focus:tw-ring-0" placeholder="Write a comment..."></textarea>
                </div>
                <div class="tw-flex tw-justify-between tw-items-center tw-p-4 tw-border-t">
                  <button type="button" class="tw-text-white tw-bg-gradient-to-br tw-from-pink-500 to-voilet-500 tw-border tw-border-gray-200 hover:tw-border-gray-300 tw-font-semibold tw-rounded-lg tw-text-xs tw-px-3 tw-py-1.5 tw-text-center tw-inline-flex tw-items-center tw-shadow-md shadow-gray-300 hover:scale-[1.02] tw-transition-transform">
                    <svg class="tw-mr-1 tw-w-4 tw-h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                    Post comment
                  </button>
                  <div class="tw-flex tw-pl-0 tw-space-x-1 sm:tw-pl-2">
                    <a href="#" class="tw-inline-flex tw-justify-center tw-p-1 tw-text-gray-500 tw-rounded tw-cursor-pointer hover:tw-text-gray-900 hover:tw-bg-gray-100">
                      <svg class="tw-w-6 tw-h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path></svg>
                    </a>
                    <a href="#" class="tw-inline-flex tw-justify-center tw-p-1 tw-text-gray-500 tw-rounded tw-cursor-pointer hover:tw-text-gray-900 hover:tw-bg-gray-100">
                      <svg class="tw-w-6 tw-h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </a>
                  </div>
                </div>
              </div>
              <div class="tw-flex tw-flex-col tw-space-y-2">
                <div class="tw-flex tw-items-center tw-space-x-3">
                  <a href="#" class="tw-flex-shrink-0">
                    <img class="tw-w-7 tw-h-7 tw-rounded-full" src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/michael-gough.png" alt="Micheal Gough">
                  </a>
                  <div class="tw-flex-1 tw-min-w-0">
                    <p class="tw-text-sm tw-font-semibold tw-text-gray-900 tw-truncate">Micheal Gough</p>
                    <p class="tw-text-sm tw-font-normal tw-text-gray-500 tw-truncate">Product Manager</p>
                  </div>
                  <a href="#" class="tw-p-1 tw-text-gray-500 tw-rounded tw-cursor-pointer hover:tw-text-gray-900 hover:tw-bg-gray-100">
                    <svg class="tw-w-4 tw-h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
                  </a>
                </div>
                <ul class="tw-pl-6 tw-text-xs tw-list-disc tw-list-outside tw-text-gray-500">
                  <li>Latest clicks/conversions. Where you currently have the logo for merchant, we should instead have a logo that represent the referring traffic sources (ex. Google or Facebook). So we’re actually missing a column that should say “Source”. And there should be no icon for the merchants.</li>
                </ul>
              </div>
            </div>

            <div class="tw-grid tw-grid-rows-2 tw-grid-flow-col tw-gap-2 tw-p-4 tw-rounded-b tw-border-t tw-border-gray-200 sm:tw-grid-rows-1 md:tw-p-6">
              <button type="button" class="tw-inline-flex tw-items-center tw-justify-center tw-text-white tw-bg-gradient-to-br tw-from-pink-500 to-voilet-500 tw-border border-fuchsia-700 hover:border-fuchsia-800 tw-font-semibold tw-rounded-lg tw-text-sm tw-py-2.5 tw-text-center tw-shadow-md shadow-gray-300 hover:scale-[1.02] tw-transition-transform">
                <svg class="tw-mr-2 tw-w-5 tw-h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                Save
              </button>
              <button type="button" class="tw-inline-flex tw-items-center tw-justify-center tw-text-gray-900 tw-bg-white hover:tw-bg-gray-100 tw-border tw-border-gray-200 hover:tw-border-gray-300 tw-font-semibold tw-rounded-lg tw-text-sm tw-py-2.5 tw-text-center hover:scale-[1.02] tw-transition-transform">
                <svg class="tw-mr-2 tw-w-5 tw-h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                Move
              </button>
              <button type="button" class="tw-inline-flex tw-items-center tw-justify-center tw-text-gray-900 tw-bg-white hover:tw-bg-gray-100 tw-border tw-border-gray-200 hover:tw-border-gray-300 tw-font-semibold tw-rounded-lg tw-text-sm tw-py-2.5 tw-text-center hover:scale-[1.02] tw-transition-transform">
                <svg class="tw-mr-2 tw-w-5 tw-h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 9a2 2 0 012-2h6a2 2 0 012 2v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9z"></path><path d="M5 3a2 2 0 00-2 2v6a2 2 0 002 2V5h8a2 2 0 00-2-2H5z"></path></svg>
                Copy
              </button>
              <button type="button" class="tw-inline-flex tw-items-center tw-justify-center tw-text-gray-900 tw-bg-white hover:tw-bg-gray-100 tw-border tw-border-gray-200 hover:tw-border-gray-300 tw-font-semibold tw-rounded-lg tw-text-sm tw-py-2.5 tw-text-center hover:scale-[1.02] tw-transition-transform">
                <svg class="tw-mr-2 tw-w-5 tw-h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z"></path><path fill-rule="evenodd" d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                Archive
              </button>
              <button type="button" class="tw-inline-flex tw-items-center tw-justify-center tw-text-gray-900 tw-bg-white hover:tw-bg-gray-100 tw-border tw-border-gray-200 hover:tw-border-gray-300 tw-font-semibold tw-rounded-lg tw-text-sm tw-py-2.5 tw-text-center hover:scale-[1.02] tw-transition-transform">
                <svg class="tw-mr-2 tw-w-5 tw-h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path></svg>
                Watch
              </button>
            </div>
          </div>
        </div>
      </div>
  </div>
</template>

<script>
export default {
  layout: "master",
}
</script>

<style scoped>

</style>