<template>
  <div>
    <!-- card 2 -->
    <div class="tw-w-full tw-mx-auto">
      <!-- tw-table 1 -->

      <div class="tw-flex tw-flex-wrap tw--mx-3">
        <div class="tw-flex-none tw-w-full tw-max-w-full tw-px-3">
          <div class="tw-relative tw-flex tw-flex-col tw-min-w-0 tw-mb-6 tw-break-words tw-bg-white tw-border-0 tw-border-transparent tw-border-solid shadow-soft-xl tw-rounded-2xl tw-bg-clip-border">
            <div class="tw-p-4 lg:tw-p-6 tw-pb-0 tw-mb-0 tw-bg-white tw-border-b-0 tborder-b-solid tw-rounded-t-2xl tborder-b-transparent tw-flex tw-flex-wrap tw-justify-between">
              <h6>Liste des délégue de bus</h6>
              <button @click="showDelegueForm = true" class="tw-bg-green-500 tw-px-6 tw-py-2 tw-rounded tw-text-white tw-text-sm">Créer un délégue de bus</button>
            </div>
            <div class="tw-flex-auto tw-px-0 tw-pt-0 tw-pb-2">
              <div class="tw-p-0 tw-overflow-x-auto">
                <table class="tw-items-center tw-w-full tw-mb-0 tw-align-top tw-border-gray-200 text-slate-500">
                  <thead class="tw-align-bottom">
                  <tr>
                    <th class="tw-px-6 tw-py-3 tw-font-bold tw-text-left tw-uppercase tw-align-middle tw-bg-transparent tw-border-b tw-border-gray-200 tw-shadow-none text-xxs border-b-solid tracking-none tw-whitespace-nowrap text-slate-400 tw-opacity-70">Nom & Prénoms</th>
                    <th class="tw-px-6 tw-py-3 tw-pl-2 tw-font-bold tw-text-left tw-uppercase tw-align-middle tw-bg-transparent tw-border-b tw-border-gray-200 tw-shadow-none text-xxs border-b-solid tracking-none tw-whitespace-nowrap text-slate-400 tw-opacity-70">Téléphone</th>
                    <th class="tw-px-6 tw-py-3 tw-font-bold tw-text-center tw-uppercase tw-align-middle tw-bg-transparent tw-border-b tw-border-gray-200 tw-shadow-none text-xxs border-b-solid tracking-none tw-whitespace-nowrap text-slate-400 tw-opacity-70">Ligne de voyage</th>
                    <th class="tw-px-6 tw-py-3 tw-font-bold tw-text-center tw-uppercase tw-align-middle tw-bg-transparent tw-border-b tw-border-gray-200 tw-shadow-none text-xxs border-b-solid tracking-none tw-whitespace-nowrap text-slate-400 tw-opacity-70">Crée le</th>
                    <th class="tw-px-6 tw-py-3 tw-font-semibold tw-capitalize tw-align-middle tw-bg-transparent tw-border-b tw-border-gray-200 tw-border-solid tw-shadow-none tracking-none tw-whitespace-nowrap text-slate-400 tw-opacity-70"></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr v-for="(item, index) in delegues" :key="index">
                    <td class="td-custom-width tw-p-2 tw-align-middle tw-bg-transparent tw-border-b tw-whitespace-nowrap tw-shadow-transparent">
                      <div class="tw-flex tw-px-2 tw-py-1">
                        <div>
                          <img src="@/assets/img/team-2.jpg" class="tw-inline-flex tw-items-center tw-justify-center tw-mr-4 tw-text-sm tw-text-white tw-transition-all tw-duration-200 ease-soft-in-out tw-h-9 tw-w-9 tw-rounded-xl" alt="user1" />
                        </div>
                        <div class="tw-flex tw-flex-col tw-justify-center">
                          <h6 class="tw-mb-0 tw-text-sm tw-leading-normal">{{ item.user.nom }} {{ item.user.prenom }}</h6>
                          <p class="tw-mb-0 tw-text-xs tw-leading-tight text-slate-400">{{ item.user.email }}</p>
                        </div>
                      </div>
                    </td>
                    <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b tw-whitespace-nowrap shadow-transparent">
                      <p class="tw-mb-0 tw-text-xs tw-font-semibold tw-leading-tight">{{ item.user.telephone }}</p>
                    </td>
                    <td class="tw-p-2 tw-text-sm tw-leading-normal tw-text-center tw-align-middle tw-bg-transparent tw-border-b tw-whitespace-nowrap shadow-transparent">
                      <span class="tw-bg-green-500 tw-px-2.5 tw-text-xs tw-rounded-lg tw-py-1.5 tw-inline-block tw-whitespace-nowrap tw-text-center tw-align-baseline tw-font-bold tw-uppercase tw-leading-none tw-text-white"> {{ item.ligne.intitule }}/ {{ item.ligne.nom }}</span>
                    </td>
                    <td class="tw-p-2 tw-text-center tw-align-middle tw-bg-transparent tw-border-b tw-whitespace-nowrap shadow-transparent">
                      <span class="tw-text-xs tw-font-semibold tw-leading-tight text-slate-400">{{ item.created_at }}</span>
                    </td>
                    <td class="tw-p-2 tw-align-middle tw-bg-transparent tw-border-b tw-whitespace-nowrap shadow-transparent">
                      <div class="text-left">
                        <v-btn @click="deleteDelegue(item)"
                               class="mx-1 tw-bg-white tw-text-red-500"
                               fab
                               small
                        >
                          <v-icon dark>
                            mdi-delete
                          </v-icon>
                        </v-btn>
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

      <!--   Delegue bus dialogue     -->
      <v-dialog v-model="showDelegueForm"
                persistent
                max-width="600px"
      >
        <v-card>
          <v-card-title>
            <span v-if="!isEditing" class="text-h5 tw-px-3">Créer un délégue de bus</span>
            <span v-else class="text-h5 tw-px-3">Mettre à jour les informations d'un de</span>
          </v-card-title>
          <v-card-text>
            <v-container>
              <v-form ref="form" lazy-validation>
                <v-row>
                  <v-col
                      cols="12" class="tw-pb-0"
                  >
                    <v-autocomplete
                        :items="etudiants"
                        item-value="id"
                        :item-text="(item) => `${item.nom} ${item.prenom}`"
                        placeholder="Choisissez l'étudiant"
                        outlined
                        v-model="delegue.user_id"
                        :rules="[(v) => !!v || 'Veuillez choisir un étudiant']"
                    >
                    </v-autocomplete>
                    <v-select
                        :items="lignes"
                        item-value="id"
                        :item-text="(item) => `${item.intitule} / ${item.nom}`"
                        placeholder="Choisissez la ligne de voyage"
                        outlined
                        v-model="delegue.ligne_id"
                        :rules="[(v) => !!v || 'Veuillez choisir la ligne de voyage']"
                    >
                    </v-select>
                  </v-col>
                </v-row>
              </v-form>
            </v-container>
            <small class="tw-px-3">*Indique un champs requis</small>
          </v-card-text>
          <v-card-actions class="tw-px-8">
            <v-btn
                color="blue darken-1"
                text
                @click="closeDialog()"
            >
              Annuler
            </v-btn>
            <v-btn v-if="!isEditing"
                   color="blue darken-1"
                   :loading="btnLoading"
                   text
                   @click="save()"
            >
              Créer ce délégue de bus
            </v-btn>

            <v-btn v-else
                   color="blue darken-1"
                   :loading="btnLoading"
                   text
                   @click="update()"
            >
              Mettre à jour
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
    </div>
  </div>
</template>

<script>
import Swal from "sweetalert2";

export default {
  layout: "main",
  data() {
    return {
      showDelegueForm: false,
      btnLoading: false,
      delegue:{
        user_id: null,
        ligne_id: null,
      },
      isEditing: false,
      etudiants: [],
      lignes: [],
      delegues: [],
    };
  },
  methods: {
    async getEtudiants(){
      await axios.get("/user/get-by-role/" + 2)
          .then(res => {
            if(!res.data.error){
              this.etudiants = res.data.user
            }
          })
          .catch(error => {
            console.log(error)
          })
    },

    async save(){
      if (this.$refs.form.validate()) {
        this.btnLoading = true;
        await axios.post('/affectation', this.delegue)
            .then((res) => {
              this.btnLoading = false;
              this.showDelegueForm = false;
              this.delegue = {
                user_id: null,
                ligne_id: null
              };
              this.getDelegues()
            })
            .catch((error) => {
              this.btnLoading = false;
              console.log(error);
            })
      }
    },

    async updateDelegue(){
      if (this.$refs.form.validate()) {
        this.btnLoading = true;
        this.delegue.delegue_id = this.ligne.id
        await axios.post('/ligne/update', this.ligne)
            .then((res) => {
              this.btnLoading = false;
              this.showDelegueForm = false;
              this.ligne = {
                nom: "",
                intitule: "",
                distance: "",
                kilometre: "",
                arret: "",
              };
              this.getLigneBus()
            })
            .catch((error) => {
              this.btnLoading = false;
              console.log(error);
            })
      }
    },

    deleteDelegue(item) {
      Swal.fire({
        icon: "question",
        title: "Attention!",
        text: "Voulez-vous vraiment supprimer ce délégue de cette ligne de voyage ?",
        reverseButtons: true,
        showCancelButton: true,
        confirmButtonText: "Ok",
        cancelButtonText: "Annuler",
        preConfirm: async () => {
          Swal.showLoading();
          try {
            await axios.delete("/affectation/" + item.id);
            this.getDelegues();
            Swal.close();
          } catch (error) {
            console.log(error)
          }
        },
        allowOutsideClick: () => !Swal.isLoading(),
      });
    },
    edit(item){
      this.delegue = item
      this.isEditing = true
      this.showDelegueForm = true
    },

    closeDialog(){
      this.showDelegueForm = false
      this.delegue = {
        user_id: null,
        ligne_id: null
      }
    },
  },
  created(){
    this.getEtudiants()
    this.getLigneBus()
    this.getDelegues()
  },
};
</script>

<style>
.v-card--reveal {
  bottom: 0;
  opacity: 1 !important;
  position: absolute;
  width: 100%;
}
.td-custom-width {
  width: 270px; /* Remplacez cette valeur par la largeur souhaitée */
}
</style>