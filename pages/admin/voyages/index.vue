<template>
  <div>
    <div class="md:tw-flex tw-gap-2 tw-w-full tw-mt-">
      <div class="w-full max-w-full lg:flex-none">
        <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
          <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
            <h6 class="tw-mb-0 tw-font-bold tw-text-lg">Liste de tous les voyages({{ voyages.length }})</h6>
            <div class="tw-flex tw-justify-between">
              <p class="leading-normal text-sm">
                <i class="fa fa-arrow-up text-lime-500"></i>
                <span class="font-semibold">24%</span> ce mois
              </p>
            </div>
          </div>
          <div class="flex-auto p-4">
            <v-row class="tw-mb-4 lg:tw-mb-6">
              <v-col class="tw-py-0" cols="12" md="3">
                <v-select
                    style="z-index: 999"
                    v-model="filter.ligne_id"
                    @change="applyFilters"
                    :items="lignes"
                    :item-text="(item) => `${item.nom}, ${item.intitule}`"
                    item-value="id"
                    label="Choisissez une ligne de voyage"
                    placeholder="Choisissez une ligne de voyage"
                    no-data-text="Aucune ligne enrégistrée"
                    required
                    outlined
                    clearable
                    dense
                ></v-select>
              </v-col>

              <v-col class="tw-py-0" cols="12" md="3">
                <v-menu
                    style="z-index: 999"
                    ref="menu"
                    v-model="menu"
                    :close-on-content-click="false"
                    :return-value.sync="date"
                    transition="scale-transition"
                    offset-y
                    class="tw-w-1/3"
                >
                  <template v-slot:activator="{ on, attrs }">
                    <v-text-field
                        clearable
                        outlined dense
                        chips
                        small-chips
                        v-model="filter.date"
                        label="Choisissez une date"
                        class="tw-py-0"
                        readonly
                        v-bind="attrs"
                        v-on="on"
                    ></v-text-field>
                  </template>
                  <v-date-picker
                      v-model="filter.date"
                      @input="$refs.menu.save(filter.date); applyFilters(); menu = false"
                      no-title
                      scrollable
                  >
                  </v-date-picker>
                </v-menu>
              </v-col>
            </v-row>



            <h4 v-if="loading" class="tw-text-sm tw-text-gray-500">Chargement...</h4>
            <div v-else-if="!loading && filteredVoyages.length === 0" class="tw-text-gray-500">Aucun voyage ne correspond à ces critères de filtre.</div>
            <div v-else class="tw-w-full before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
              <div  v-for="(voyage, index) in filteredVoyages" :key="index" class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                    <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                      <v-icon color="yellow darken-4">mdi-car-arrow-left</v-icon>
                    </span>
                <div @click="$router.push(`/admin/voyages/${voyage.id}`)" class="hover:tw-cursor-pointer ml-11.252 pt-1.4 lg:tw-max-w-full relative -top-1.5 w-auto">
                  <h6 class="mb-0 font-semibold leading-normal text-sm text-slate-700">{{ voyage.ligne.nom }}, {{ voyage.ligne.intitule }} ( {{ voyage.heure }} )</h6>
                  <div class="tw-flex tw-items-center tw-justify-between">
                    <p class="mt-1 mb-0 font-semibold leading-tight text-xs text-slate-400">{{ formatDate(voyage.created_at) }}</p>

                    <p class="mt-1 mb-0 font-semibold leading-tight text-sm text-slate-800">( {{ voyage.passagers.length }} passagers )</p>

<!--                    <button class="tw-bg-orange-400 tw-px-4 tw-py-2 tw-rounded-lg tw-text-white tw-text-sm">Voir les détails</button>-->
                  </div>
                </div>
              </div>
            </div>

<!--            <div class="text-center">-->
<!--              <v-pagination-->
<!--                  v-model="page"-->
<!--                  :length="4"-->
<!--                  circle color="green"-->
<!--              ></v-pagination>-->
<!--            </div>-->
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
      date: (new Date(Date.now() - (new Date()).getTimezoneOffset() * 60000)).toISOString().substr(0, 10),
      menu: false,
      modal: false,
      page: 1,
      operations: [],
      filteredVoyages: [],
      filter: {
        ligne_id: null,
        date: null,
      }
    }
  },
  methods: {
    async getListeAchat(){
      this.loading = true
      await axios.get("/operation/get-all")
          .then(res => {
            if(!res.data.error){
              this.operations = res.data.user
              // this.filterOperationsByDate()
            }
            this.loading = false
          })
          .catch(error => {
            console.log(error)
          })
    },

    applyFilters() {
      this.filteredVoyages = this.voyages.filter((voyage) => {
        const matchVoyage =
            !this.filter.ligne_id ||
            voyage.ligne.id === this.filter.ligne_id;

        const matchDate =
            !this.filter.date ||
            voyage.created_at.substr(0, 10) === this.filter.date;

        return matchVoyage && matchDate;
      });
    },
  },
  async mounted() {
    await this.getListeAchat()
    await this.getListeVoyage()
    await this.getLigneBus()
    this.applyFilters()
  },
  // created() {
  //   console.log(this.voyages.length)
  //   this.filteredVoyages = this.voyages
  // }
}
</script>

<style scoped>

</style>