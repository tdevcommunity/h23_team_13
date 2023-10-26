<template>
  <div>
    <div class="tw-flex tw-flex-wrap tw--mx-3 tw-px-3">
      <div class="tw-w-full tw-block tw-justify-between tw-items-center tw-p-4 lg:tw-p-5 lg:tw-pb-0 tw-mb-6 tw-bg-white tw-rounded-2xl tw-shadow-xl shadow-gray-200  sm:tw-flex">
        <div class="tw-mb-1 tw-w-full">
          <div class="tw-mb-4">
            <h1 class="tw-text-xl tw-font-semibold tw-text-gray-900 sm:tw-text-xl">Tous les utilisateurs</h1>
          </div>

          <div class="tw-block tw-items-center sm:tw-flex">
            <form class="tw-mb-4 sm:tw-pr-3 sm:tw-mb-0 tw-w-full lg:tw-w-2/3" action="#" method="GET">
            <v-row class="tw-py-0">
              <v-col
                  cols="12"
                  sm="6"
                  class="tw-py-0"
              >
                <v-text-field
                    v-model="search"
                    label="Filtrer les membres"
                    placeholder="Filtrer par email, nom et autres..."
                    outlined  dense
                    clearable
                ></v-text-field>
              </v-col>

              <v-col
                  cols="12"
                  sm="6"
                  class="tw-py-0"
              >
                <v-autocomplete
                    v-model="techno"
                    :items="technologies"
                    item-text="name"
                    autocomplete
                    label="Filtrer par technologies"
                    placeholder="Filtrer par technologies"
                    multiple
                    clearable
                    outlined dense
                    persistent-hint
                ></v-autocomplete>
              </v-col>
            </v-row>
          </form>
            <div class="tw-flex tw-items-center sm:tw-justify-end tw-w-1/3">
              <a href="#" class="tw-mb-6 tw-inline-flex tw-justify-center tw-items-center tw-py-2 tw-px-3 tw-w-1/2 tw-text-sm tw-font-medium tw-text-center tw-text-gray-900 tw-bg-white tw-rounded-lg tw-border tw-border-gray-300 hover:tw-bg-gray-100 hover:scale-[1.02] tw-transition-transform sm:tw-w-auto">
                <svg class="tw-mr-2 tw--ml-1 tw-w-6 tw-h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg>
                Export
              </a>
            </div>
        </div>
        </div>
      </div>

      <div class="tw-flex-none tw-w-full tw-max-w-full">
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
                <tr v-if="members.length === 0">
                  <span class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <h2 class="tw-text-sm tw-px-6 tw-text-center">Aucun utilisateur enrégistrer pour le moment</h2>
                  </span>
                </tr>

                <tr v-else v-for="(member, index) in members" :key="index">
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <div class="tw-flex tw-px-2 tw-py-1">
                      <div>
                        <img src="@/assets/img/team-2.jpg" class="tw-inline-flex tw-items-center tw-justify-center tw-mr-4 tw-text-sm tw-text-white tw-transition-all tw-duration-200 tw-ease-in-out tw-h-9 tw-w-9 tw-rounded-xl" alt="user1" />
                      </div>
                      <div class="tw-flex tw-flex-col tw-justify-center">
                        <h6 class="tw-mb-0 tw-text-sm tw-leading-normal dark:tw-text-white">{{ member.lastname }} {{ member.firstname }}</h6>
                        <p class="tw-mb-0 tw-text-xs tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">{{ member.email }}</p>
                      </div>
                    </div>
                  </td>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <p class="tw-mb-0 tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80">{{ member.fonction }}</p>
                    <p class="tw-mb-0 tw-text-xs tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400">Organization</p>
                  </td>
                  <td class="tw-p-2 tw-text-sm tw-leading-normal tw-text-center tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-bg-gradient-to-tl tw-from-emerald-500 tw-to-teal-400 tw-px-2.5 tw-text-xs tw-rounded-lg tw-py-1.5 tw-inline-block tw-whitespace-nowrap tw-text-center tw-align-baseline tw-font-bold tw-uppercase tw-leading-none tw-text-white">Online</span>
                  </td>
                  <td class="tw-p-2 tw-text-center tw-align-middle tw-bg-transparent tw-border-b dark:border-white/40 tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80 text-slate-400 tw-capitalize">{{ formatDateWithoutHour(member.created_at) }}</span>
                  </td>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b-0 tw-whitespace-nowrap shadow-transparent">
                    <NuxtLink :to="`/admin/members/${member.id}`" class="tw-text-xs tw-font-semibold tw-leading-tight dark:tw-text-white dark:tw-opacity-80 tw-text-white tw-rounded-lg tw-bg-gray-500 tw-px-4 tw-py-2"> Voir plus</NuxtLink>
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
      techno: [],
      search: [],
      members: [],

    };
  },
  methods: {
    async getMembers(){
      await axios.get("/admin/members")
          .then(res => {
            if(!res.data.error){
              this.members = res.data.members
              this.members.sort((a, b) => {
                // Convertissez les dates en objets Date pour les comparer
                const dateA = new Date(a.created_at);
                const dateB = new Date(b.created_at);

                // Triez par ordre décroissant en soustrayant les dates
                return dateB - dateA;
              });
            }
          })
          .catch(error => {
            console.log(error)
          })
    },
  },

  mounted(){
    this.getMembers()
  }

};
</script>

<style>

</style>