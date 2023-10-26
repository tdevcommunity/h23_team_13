<template>
  <v-app>
    <div class="tw-m-0 tw-font-sans tw-antialiased tw-font-normal tw-bg-white tw-text-start tw-text-base leading-default tw-text-slate-500">

      <!--  <nav class="tw-absolute tw-top-0 tw-z-30 tw-flex tw-flex-wrap tw-items-center tw-justify-between tw-w-full tw-px-4 tw-py-2 tw-mt-6 tw-mb-4 tw-shadow-none lg:tw-flex-nowrap lg:tw-justify-start">-->
      <!--    <div class="container tw-flex tw-items-center tw-justify-between tw-py-0 tw-flex-wrap-inherit">-->
      <!--      <a class="tw-py-2 tw-ml-4 tw-mr-4 tw-font-bold tw-text-white tw-text-sm tw-whitespace-nowrap lg:tw-ml-0" href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank"> Argon Dashboard 2 </a>-->
      <!--    </div>-->
      <!--  </nav>-->
      <main class="tw-mt-0 tw-transition-all tw-duration-200 tw-ease-in-out">
        <section class="tw-min-h-screen">
          <div class="bg-image tw-bg-top tw-relative tw-flex tw-items-start tw-pt-12 tw-pb- tw-m-4 tw-overflow-hidden tw-bg-cover tw-h-96 tw-rounded-xl">
            <span class="tw-absolute tw-top-0 tw-left-0 tw-w-full tw-h-full tw-bg-center tw-bg-cover tw-bg-gradient-to-br tw-from-black tw-via-gray-800 tw-to-green-700 tw-opacity-90"></span>
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
                        <div class="tw-grid tw-grid-cols-6 tw-gap-6">
                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label for="first-name" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Nom*</label
                            >
                            <input type="text" name="first-name" id="first-name" class="tw-shadow-sm tw-bg-white focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-500 focus:tw-ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="Bonnie" required />
                          </div>
                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label for="last-name" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Prénoms*</label
                            >
                            <input type="text" name="last-name" id="last-name" class="tw-shadow-sm tw-bg-white focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-500 focus:tw-ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="Green" required />
                          </div>
                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label for="email" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Email*</label
                            >
                            <input type="email" name="email" id="email" class="tw-shadow-sm tw-bg-white focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-500 focus:tw-ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="example@company.com" required />
                          </div>
                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label for="phone-number" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Téléphone*</label
                            >
                            <input type="number" name="phone-number" id="phone-number" class="tw-shadow-sm tw-bg-white focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-500 focus:tw-ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="e.g. +228 96690981" required />
                          </div>
                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label for="country" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Pays de résidence*</label
                            >
                            <input type="text" name="country" id="country" class="tw-shadow-sm tw-bg-white focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-500 focus:tw-ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="United States" required />
                          </div>

                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label for="adress" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Adresse</label
                            >
                            <input type="text" name="adress" id="adress" class="tw-shadow-sm tw-bg-white focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-500 focus:tw-ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="e.g. California" required />
                          </div>

                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label for="birthday" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Date de naissance</label
                            >
                            <input type="date" name="birthday" id="birthday" class="tw-shadow-sm tw-bg-white focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-500 focus:tw-ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="15/08/1990" required />
                          </div>

                          <div class="tw-col-span-6 sm:tw-col-span-3">
                            <label class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Fonction*</label
                            >
                            <v-autocomplete
                                class="v-text-field"
                                :items="fonctions"
                                outlined dense
                                item-value="id"
                                item-text="nom"
                                clearable
                                label="Votre profession"
                                placeholder="Tapez votre profession"
                            >
                            </v-autocomplete>
                          </div>

<!--                          <div class="tw-col-span-6 sm:tw-col-span-3">-->
<!--                            <label for="organization" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Organization</label-->
<!--                            >-->
<!--                            <input type="text" name="organization" id="organization" class="tw-shadow-sm tw-bg-white focus:tw-outline-none placeholder:tw-text-gray-600 tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-500 focus:tw-ring-green-800 tw-block tw-w-full tw-p-2.5" placeholder="Company Name" required />-->
<!--                          </div>-->

                          <div class="tw-w-full tw-col-span-6 tw-mt-2">
                            <button class="tw-w-full tw-text-white tw-bg-gradient-to-br tw-from-green-600 tw-to-gray-800 tw-rounded-lg tw-shadow-md tw-shadow-gray-300 hover:tw-scale-[1] tw-transition-transform tw-font-medium tw-text-sm tw-px-5 tw-py-2.5 tw-text-center" type="submit">
                              Soumettre
                            </button>

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
  </v-app>
</template>

<script>

export default {
  data(){
    return {
      startLogin: false,
      loginError: false,
      auth: {
        email: "",
        password: "",
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
    async login() {
      if (!this.auth.email || !this.auth.password) {
        this.snackbar_text = "Veuillez renseigner tous les champs.";
        this.snackbarColor = "accent";
        this.snackbar = true;
        return;
      }
      this.startLogin = true
      let response = null;
      this.loginError = false;
      let error = true;
      try {
        response = await axios
            .post("/admin/login", this.auth)
            .then((resp) => resp.data)
            .catch((error) => {
              this.loginError = true;
            });
        error = false;
      } catch (e) {
        this.loginError = true;
      }

      this.startLogin = false;
      if (response.error) {
        this.loginError = true;
      } else if (response && !response.error) {
        await this.$store.dispatch("auth/saveToken", {
          token: response.token,
          user: response.user,
          last_connexion_time: new Date().getTime(),
        });
        this.$router.replace('/admin/dashboard');
      }
    },
  },
}
</script>

<style>
.bg-image {
  background-image: url(@/assets/img/illustration1.jpg);
}
</style>
