<template>
  <v-app>
    <div class="tw-m-0 tw-font-sans tw-antialiased tw-font-normal tw-bg-white tw-text-start tw-text-base leading-default tw-text-slate-500">
      <main class="tw-mt-0 tw-transition-all tw-duration-200 tw-ease-in-out">
        <section class="tw-min-h-screen">
          <div class="bg-image tw-bg-top tw-relative tw-flex tw-items-start tw-pt-12 tw-pb- tw-m-4 tw-overflow-hidden tw-bg-cover tw-h-96 tw-rounded-xl">
            <span style="background: linear-gradient(to bottom right, black, #1f2937, #27d576);" class="tw-absolute tw-top-0 tw-left-0 tw-w-full tw-h-full tw-bg-center tw-bg-cover tw-opacity-90"></span>
            <div class="container tw-z-10">
              <div class="tw-flex tw-flex-wrap tw-justify-center tw--mx-3">
                <div class="tw-w-full tw-max-w-full tw-px-3 tw-mx-auto tw-mt-0 tw-text-center lg:flex-0 shrink-0 lg:tw-w-5/12">
                  <h1 class="tw-flex tw-justify-center">
                    <img class="tw-h-20 tw-w-32 tw-bg-transparent" src="@/assets/img/logos/tdev-tag.png" alt="Tdev logo">
                  </h1>
                  <h1 class="tw-mt-4 tw-mb-2 tw-text-white">TDev</h1>
                  <p class="tw-text-white tw-font-medium"> Joignez-vous à nous pour explorer le monde de la technologie et de l'innovation.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="tw-flex tw-flex-wrap tw--mx-3 tw--translate-y-28">
              <div class="tw-w-full tw-max-w-full tw-px-6 lg:tw-px-3 tw-mx-auto tw-mt-0 md:flex-0 tw-shrink-0 md:tw-w-7/12 lg:tw-w-2/3">
                <div class="tw-relative tw-z-0 tw-flex tw-flex-col tw-min-w-0 tw-break-words tw-bg-white tw-border-0 tw-shadow-xl tw-rounded-2xl tw-bg-clip-border">
                  <div class="tw-flex-auto tw-p-8">
                    <div class="tw-bg-white">
                      <h3 class="tw-mb-12 tw-mt-4 tw-text-xl tw-uppercase tw-text-center tw-underline tw-font-bold">Formulaire d'inscription</h3>
                      <form action="#">
                        <h5 v-if="loginError" class="tw-text-sm tw-text-red-600 tw-text-center">{{ errorMessage}}</h5>
                        <h5 v-if="isSuccess" class="tw-text-sm tw-mb-4 tw-px-6 tw-py-2 tw-text-white tw-bg-green-400 tw-text-center">Inscription réussie ! Vous recevrez bientôt un e-mail de confirmation. Assurez-vous de vérifier votre boîte de réception.</h5>
                        <div class="tw-grid tw-grid-cols-6 tw-gap-6">
                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label for="first-name" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Nom*</label
                            >
                            <input v-model="form.lastname" type="text" name="last-name" id="last-name" class="tw-shadow-sm tw-bg-gray-200 focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg ring-2 ring-gray-500 focus:ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="Bonnie" required />
                          </div>
                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label for="last-name" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Prénoms*</label
                            >
                            <input v-model="form.firstname" type="text" name="first-name" id="first-name" class="tw-shadow-sm tw-bg-gray-200 focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg ring-2 ring-gray-500 focus:ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="Green" required />
                          </div>
                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label for="email" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Email*</label
                            >
                            <input v-model="form.email" type="email" name="email" id="email" class="tw-shadow-sm tw-bg-gray-200 focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg ring-2 ring-gray-500 focus:ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="example@company.com" required />
                          </div>
                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label for="phone-number" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Téléphone*</label
                            >
                            <input v-model="form.telephone" type="number" name="phone-number" id="phone-number" class="tw-shadow-sm tw-bg-gray-200 focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg ring-2 ring-gray-500 focus:ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="e.g. +228 96690981" required />
                          </div>
                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label for="country" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Pays de résidence*</label
                            >
                            <input v-model="form.country" type="text" name="country" id="country" class="tw-shadow-sm tw-bg-gray-200 focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg ring-2 ring-gray-500 focus:ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="Togo" required />
                          </div>

                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label for="adress" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Adresse</label
                            >
                            <input v-model="form.adresse" type="text" name="adress" id="adress" class="tw-shadow-sm tw-bg-gray-200 focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg ring-2 ring-gray-500 focus:ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="e.g. California" required />
                          </div>

                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label for="birthday" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Date de naissance*</label
                            >
                            <input v-model="form.birthday" type="date" name="birthday" id="birthday" class="tw-shadow-sm tw-bg-gray-200 focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg ring-2 ring-gray-500 focus:ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="15/08/1990" required />
                          </div>

                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label for="birthday" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Genre*</label
                            >
                            <select v-model="form.sex" type="date" name="sex" id="sex" class="tw-shadow-sm tw-bg-gray-200 focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg ring-2 ring-gray-500 focus:ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="15/08/1990" required >
                              <option value="" disabled selected>Sélectionnez votre genre</option>
                              <option value="Féminin">Féminin</option>
                            <option value="Masculin">Masculin</option>
                            <option value="Autre">Autre</option>
                            </select>
                          </div>

                          <div class="tw-col-span-6 sm:tw-col-span-6">
                            <label class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Fonction*</label
                            >
                            <v-autocomplete
                                :items="fonctions"
                                v-model="form.fonction"
                                outlined dense
                                item-value="nom"
                                item-text="nom"
                                clearable
                                label="Votre profession"
                                placeholder="Tapez votre profession"
                            >
                            </v-autocomplete>
                          </div>

                          <div class="tw-w-full tw-col-span-6 tw-mt-2">
                            <v-btn style="background: linear-gradient(to bottom right, #16a34a, #1f2937);" @click.prevent="register()" :loading="btnLoading" class="tw-w-full tw-text-white tw-rounded-lg tw-shadow-md tw-shadow-gray-300 hover:tw-scale-[1] tw-transition-transform tw-font-medium tw-text-sm tw-px-5 tw-py-2.5 tw-text-center" type="submit">
                              Soumettre
                            </v-btn>

                            <p class="tw-mt-4 tw-mb-0 tw-leading-normal tw-text-sm tw-text-gray-800">Vous avez déja un compte ? <NuxtLink to="/auth/login" class="tw-underline tw-font-bold tw-text-red-700">Se Connecter</NuxtLink></p>

                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
    <v-snackbar v-model="snackbar" :color="snackbarColor" :timeout="2000">
      {{ snackbar_text }}
    </v-snackbar>
  </v-app>
</template>

<script>

export default {
  data(){
    return {
      isSuccess: false,
      startLogin: false,
      loginError: false,
      errorMessage: null,
      btnLoading: false,
      form: {
        firstname: "",
        lastname: "",
        email: "",
        telephone: "",
        birthday: "",
        fonction: "",
        country: "",
        adresse: "",
        sex: "",
      },
      snackbarColor: "primary",
      snackbar_text: "",
      snackbar: false,
    }
  },
  mounted(){
    this.fonctions.sort((a, b) => a.nom.localeCompare(b.nom));
  },
  methods: {
    async register(){
      this.loginError = false
      this.isSuccess = false

      if (!this.form.email || !this.form.firstname || !this.form.lastname || !this.form.sex || !this.form.telephone || !this.form.birthday || !this.form.country || !this.form.fonction) {
        this.snackbar_text = "Veuillez renseigner tous les champs réquis.";
        this.snackbarColor = "error";
        this.snackbar = true;
        return;
      }
        this.btnLoading = true;
        await axios.post('/auth/register', this.form)
            .then((res) => {
              if (res.data?.error) {
                this.loginError = true;
                this.errorMessage = res.data.message;
                this.btnLoading = false;
                return
              }
              this.btnLoading = false;
              this.form = {
                firstname: "",
                lastname: "",
                email: "",
                telephone: "",
                birthday: "",
                fonction: "",
                country: "",
                adresse: "",
              };
              this.isSuccess = true
            })
            .catch((error) => {
              this.btnLoading = false;
              console.log(error);
            })
      }
  },
}
</script>

<style>
.bg-image {
  background-image: url(@/assets/img/illustration1.jpg);
}
/*.ring-2 {*/
/*  border-width: 1px;*/
/*}*/

/*!* Couleur de l'anneau en état normal *!*/
/*.ring-gray-500 {*/
/*  border-color: #eeeeee; !* Couleur grise *!*/
/*}*/

/*!* Couleur de l'anneau lorsqu'il est en focus *!*/
/*:focus {*/
/*  !* Vous pouvez personnaliser la couleur en fonction de vos besoins *!*/
/*  outline: 2px solid #22C55E; !* Couleur verte en focus *!*/
/*}*/
</style>
