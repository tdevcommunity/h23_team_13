<template>
  <div>
    <div class="flex flex-wrap">
      <div class="w-full max-w-full md:flex-none">
        <div v-if="voyage" class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
          <div class="p-6 px-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl flex items-center justify-between">
            <h5 class="uppercase mb-0">Détail du voyage</h5>
            <button class="tw-bg-orange-400 tw-px-4 tw-py-2 tw-text-white tw-text-sm tw-rounded-lg">
              <v-icon color="white">mdi-file-pdf-box</v-icon>
              Imprier cette liste</button>
          </div>
          <div class="flex-auto p-4 pt-6">
            <ul class="flex flex-col pl-0 mb-0 rounded-lg">
              <li class="relative flex p-4 lg:p-6 mb-2 border-0 rounded-t-inherit rounded-xl bg-gray-50">
                <div class="flex flex-col">
                  <h6 class="mb-4 leading-normal uppercase tw-text-md">{{ voyage.ligne.nom }}, {{ voyage.ligne.intitule }} ( {{ voyage.heure }} )</h6>
                  <span class="mb-2 leading-tight text-xs lg:tw-text-sm">Date & Heure: <span class="font-semibold text-slate-700 sm:ml-2">{{ formatDate(voyage.created_at) }}</span></span>
                  <span class="mb-2 leading-tight text-xs lg:tw-text-sm">Info Délégué: <span class="font-semibold text-slate-700 sm:ml-2">{{ voyage.user.nom }} {{ voyage.user.prenom }}</span></span>
<!--                  <span class="mb-2 leading-tight text-xs lg:tw-text-sm">Info Chauffeur: <span class="font-semibold text-slate-700 sm:ml-2">oliver@burrito.com</span></span>-->
                  <span class="mb-2 leading-tight text-xs lg:tw-text-sm">Nombre d'étudiants: <span class="font-semibold text-slate-700 sm:ml-2">{{ voyage.passagers.length }}</span></span>
                  <span class="mb-2 leading-tight text-xs lg:tw-text-sm">Gain Total: <span class="font-semibold text-slate-700 sm:ml-2">{{ 200 * voyage.passagers.length }} FCFA</span></span>
                </div>
                <div class="ml-auto mt-8 text-right flex flex-col">
                  <span class="mb-2 leading-tight text-xs lg:tw-text-sm">Course: <span class="font-semibold text-slate-700 sm:ml-2 tw-capitalize">{{ voyage.ligne.intitule }}</span></span>
                  <span class="mb-2 leading-tight text-xs lg:tw-text-sm">Heure de début: <span class="font-semibold text-slate-700 sm:ml-2">{{ getHeure(voyage.created_at )}}</span></span>
                  <span class="mb-2 leading-tight text-xs lg:tw-text-sm">Heure de fin:
                    <span v-if="voyage.passagers.length === 0" class="font-semibold text-slate-700 sm:ml-2">{{ getHeure(voyage.created_at )}}</span>
                    <span v-else class="font-semibold text-slate-700 sm:ml-2">{{ getHeure(voyage.passagers[voyage.passagers.length - 1].created_at )}}</span>
                  </span>
                </div>
              </li>

            </ul>
          </div>

          <div class="flex-auto p-4 pt-6">
            <h6 class="uppercase">Liste des étudiants({{ voyage?.passagers.length }})</h6>
            <div class="tw-p-0 tw-overflow-x-auto">
              <table class="tw-items-center tw-w-full tw-mb-0 tw-align-top tw-border-gray-200 text-slate-500">
                <thead class="tw-align-bottom">
                <tr>
                  <th class="tw-px-6 tw-py-3 tw-font-bold tw-text-left tw-uppercase tw-align-middle tw-bg-transparent tw-border-b tw-border-gray-200 tw-shadow-none text-xxs border-b-solid tracking-none tw-whitespace-nowrap text-slate-400 tw-opacity-70">Nom & Prénoms</th>
                  <th class="tw-px-6 tw-py-3 tw-pl-2 tw-font-bold tw-text-left tw-uppercase tw-align-middle tw-bg-transparent tw-border-b tw-border-gray-200 tw-shadow-none text-xxs border-b-solid tracking-none tw-whitespace-nowrap text-slate-400 tw-opacity-70">Téléphone</th>
                  <th class="tw-px-6 tw-py-3 tw-font-bold tw-text-center tw-uppercase tw-align-middle tw-bg-transparent tw-border-b tw-border-gray-200 tw-shadow-none text-xxs border-b-solid tracking-none tw-whitespace-nowrap text-slate-400 tw-opacity-70">Numéro de carte</th>
                  <th class="tw-px-6 tw-py-3 tw-font-bold tw-text-center tw-uppercase tw-align-middle tw-bg-transparent tw-border-b tw-border-gray-200 tw-shadow-none text-xxs border-b-solid tracking-none tw-whitespace-nowrap text-slate-400 tw-opacity-70">Ticket scanné à</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(etudiant, index) in voyage.passagers" :key="index">
                  <td class="td-custom-width tw-p-2 tw-align-middle tw-bg-transparent tw-border-b tw-whitespace-nowrap tw-shadow-transparent">
                    <div class="tw-flex tw-px-2 tw-py-1">
                      <div>
                        <img src="@/assets/img/team-2.jpg" class="tw-inline-flex tw-items-center tw-justify-center tw-mr-4 tw-text-sm tw-text-white tw-transition-all tw-duration-200 ease-soft-in-out tw-h-9 tw-w-9 tw-rounded-xl" alt="user1" />
                      </div>
                      <div class="tw-flex tw-flex-col tw-justify-center">
                        <h6 class="tw-mb-0 tw-text-sm tw-leading-normal">{{ etudiant.user.nom }} {{ etudiant.user.prenom }}</h6>
                        <p class="tw-mb-0 tw-text-xs tw-leading-tight text-slate-400">{{ etudiant.user.email }}</p>
                      </div>
                    </div>
                  </td>
                  <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b tw-whitespace-nowrap shadow-transparent">
                    <p class="tw-mb-0 tw-text-xs tw-font-semibold tw-leading-tight">{{ etudiant.user.telephone }}</p>
                  </td>
                  <td class="tw-p-2 tw-text-sm tw-leading-normal tw-text-center tw-align-middle tw-bg-transparent tw-border-b tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-bg-green-500 tw-px-2.5 tw-text-xs tw-rounded-lg tw-py-1.5 tw-inline-block tw-whitespace-nowrap tw-text-center tw-align-baseline tw-font-bold tw-uppercase tw-leading-none tw-text-white">{{ etudiant.user.immatricule }}</span>
                  </td>
                  <td class="tw-p-2 tw-text-center tw-align-middle tw-bg-transparent tw-border-b tw-whitespace-nowrap shadow-transparent">
                    <span class="tw-text-xs tw-font-semibold tw-leading-tight text-slate-400">{{ getHeure(etudiant.created_at) }}</span>
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
  layout: "main",
  data(){
    return {
      voyage: null
    }
  },
  methods: {
    getHeure(dateString){
      // Créer un objet Date à partir de la chaîne
      var dateObj = new Date(dateString);

      // Obtenir l'heure locale
      return  dateObj.toLocaleTimeString().substr(0, 5);
    },
    async getVoyageById(){
      this.loading = true
      await axios.get("voyage/get-detail/" + this.$route.params.id)
          .then(res => {
            if(!res.data.error){
              this.voyage = res.data.data
            }
            this.loading = false
          })
          .catch(error => {
            console.log(error)
          })
    },
  },
  mounted() {
    this.getVoyageById()
  }
}
</script>

<style scoped>

</style>