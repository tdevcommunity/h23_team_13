<template>
  <div>
    <div v-if="!user_info" class="tw-bg-white tw-text-sm tw-p-6 tw-w-full tw-text-center tw-rounded-2xl">
      Chargement
    </div>
    <div v-else class="tw-grid tw-grid-cols-1 xl:tw-grid-cols-3 xl:tw-gap-6">
      <div class="tw-col-span-full xl:tw-col-auto">
        <div class="tw-bg-white tw-shadow-lg shadow-gray-200 tw-rounded-2xl tw-p-4 tw-mb-6">
          <div class="tw-items-center sm:tw-flex xl:tw-block 2xl:tw-flex sm:tw-space-x-4 xl:tw-space-x-0 2xl:tw-space-x-4">
            <img class="tw-mb-4 tw-w-28 tw-h-28 tw-rounded-lg sm:tw-mb-0 xl:tw-mb-4 2xl:tw-mb-0 tw-shadow-lg shadow-gray-300" src="@/assets/img/igor.jpg" alt="Photo de profile" />
            <div>
              <h3 class="tw-mb-1 tw-text-2xl tw-font-bold tw-text-gray-900">
                {{ user_info?.lastname }} {{ user_info?.firstname }}
              </h3>
              <div class="tw-mb-4 tw-text-sm tw-font-normal tw-text-gray-500">
                {{ user_info?.fonction }}
              </div>
              <a href="#" class="tw-inline-flex tw-items-center tw-py-2 tw-px-3 tw-text-sm tw-font-medium tw-text-center btn-gradient tw-text-white tw-rounded-lg tw-shadow-md shadow-gray-300 hover:scale-[1.02] tw-transition-transform">
                <svg class="tw-mr-2 tw--ml-1 tw-w-4 tw-h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z"></path>
                  <path d="M9 13h2v5a1 1 0 11-2 0v-5z"></path>
                </svg>
                Changer d'image
              </a>
            </div>
          </div>
        </div>
        <div class="tw-bg-white tw-shadow-lg shadow-gray-200 tw-rounded-2xl tw-p-4 tw-mb-6">
          <div class="tw-flow-root">
            <h3 class="tw-text-xl tw-font-bold">Réseaux sociaux</h3>
            <ul class="tw-divide-y tw-pl-0 tw-divide-gray-200">
              <li class="tw-py-4">
                <div class="tw-flex tw-items-center tw-space-x-4">
                  <div class="tw-flex-shrink-0">
                    <svg class="tw-w-5 tw-h-5" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                      <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                    </svg>
                  </div>
                  <div class="tw-flex-1 tw-min-w-0">
<span class="tw-block tw-text-base tw-font-semibold tw-text-gray-900 tw-truncate">
Compte facebook
</span>
                    <a href="" class="tw-block tw-text-sm tw-font-normal text-fuchsia-500 tw-truncate hover:tw-underline">
                      www.facebook.com/igorba_lo@#
                    </a>
                  </div>
                  <div class="tw-inline-flex tw-items-center">
                    <a href="#" class="tw-py-2 tw-px-3 tw-mr-3 tw-mb-3 tw-text-sm tw-font-medium tw-text-center btn-gradient tw-text-white tw-rounded-lg tw-shadow-md shadow-gray-300 hover:scale-[1.02] tw-transition-transform">Aperçu</a
                    >
                  </div>
                </div>
              </li>
              <li class="tw-py-4">
                <div class="tw-flex tw-items-center tw-space-x-4">
                  <div class="tw-flex-shrink-0">
                    <svg class="tw-w-5 tw-h-5" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                    </svg>
                  </div>
                  <div class="tw-flex-1 tw-min-w-0">
<span class="tw-block tw-text-base tw-font-semibold tw-text-gray-900 tw-truncate">
Compte twitter
</span>
                    <a href="#" class="tw-block tw-text-sm tw-font-normal text-fuchsia-500 tw-truncate hover:tw-underline">
                      www.twitter.com/igorba_lo@#
                    </a>
                  </div>
                  <div class="tw-inline-flex tw-items-center">
                    <a href="#" class="tw-py-2 tw-px-3 tw-mr-3 tw-mb-3 tw-text-sm tw-font-medium tw-text-center btn-gradient tw-text-white tw-rounded-lg tw-shadow-md shadow-gray-300 hover:scale-[1.02] tw-transition-transform">Aperçu</a
                    >
                  </div>
                </div>
              </li>
              <li class="tw-py-4">
                <div class="tw-flex tw-items-center tw-space-x-4">
                  <div class="tw-flex-shrink-0">
                    <svg class="tw-w-5 tw-h-5" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                      <path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                    </svg>
                  </div>
                  <div class="tw-flex-1 tw-min-w-0">
<span class="tw-block tw-text-base tw-font-semibold tw-text-gray-900 tw-truncate">
Compte github
</span>
                    <span class="tw-block tw-text-sm tw-font-normal tw-text-gray-500 tw-truncate">
Non renseigné
</span>
                  </div>

                </div>
              </li>
              <li class="tw-pt-4 tw-pb-6">
                <div class="tw-flex tw-items-center tw-space-x-4">
                  <div class="tw-flex-shrink-0">
                    <svg class="tw-w-5 tw-h-5 tw-text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>linkedin</title><path d="M19 3A2 2 0 0 1 21 5V19A2 2 0 0 1 19 21H5A2 2 0 0 1 3 19V5A2 2 0 0 1 5 3H19M18.5 18.5V13.2A3.26 3.26 0 0 0 15.24 9.94C14.39 9.94 13.4 10.46 12.92 11.24V10.13H10.13V18.5H12.92V13.57C12.92 12.8 13.54 12.17 14.31 12.17A1.4 1.4 0 0 1 15.71 13.57V18.5H18.5M6.88 8.56A1.68 1.68 0 0 0 8.56 6.88C8.56 5.95 7.81 5.19 6.88 5.19A1.69 1.69 0 0 0 5.19 6.88C5.19 7.81 5.95 8.56 6.88 8.56M8.27 18.5V10.13H5.5V18.5H8.27Z" /></svg>
                  </div>
                  <div class="tw-flex-1 tw-min-w-0">
<span class="tw-block tw-text-base tw-font-semibold tw-text-gray-900 tw-truncate">
Compte linkedin
</span>
                    <span class="tw-block tw-text-sm tw-font-normal tw-text-gray-500 tw-truncate">
Non renseigné
</span>
                  </div>

                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="tw-bg-white tw-shadow-lg shadow-gray-200 tw-rounded-2xl tw-p-4 tw-mb-6">
          <div class="tw-flow-root">
            <h3 class="tw-text-xl tw-font-bold">Messages directes</h3>
            <ul class="tw-pl-0 tw-divide-y tw-divide-gray-200">

              <li class="tw-pt-4">
                <div class="tw-flex tw-justify-between xl:tw-block 2xl:tw-flex align-center 2xl:tw-space-x-4">
                  <div class="tw-flex tw-space-x-4 xl:tw-mb-4 2xl:tw-mb-0">
                    <div>
                      <img class="tw-w-8 tw-h-8 tw-rounded-full" src="https://demos.creative-tim.com/soft-ui-flowbite-pro/images/users/jese-leos.png" alt="Jese image" />
                    </div>
                    <div class="tw-flex-1 tw-min-w-0">
                      <p class="tw-text-base tw-font-semibold tw-text-gray-900 tw-leading-none tw-truncate tw-mb-0.5">
                        Daniel AMEGNINOU
                      </p>
                      <p class="tw-mb-1 tw-text-sm tw-font-normal text-fuchsia-600 tw-truncate">
                        Modérateur à Tdev
                      </p>
                      <p class="tw-text-xs tw-font-medium tw-text-gray-500">
                        Depuis: 2 min
                      </p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <div>
              <button class="btn-gradient tw-text-white tw-rounded-lg tw-shadow-md shadow-gray-300 hover:scale-[1.02] tw-transition-transform tw-font-medium tw-text-sm tw-px-5 tw-py-2.5 tw-text-center">
                Ouvrir le chat
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="tw-col-span-2">
        <div class="tw-bg-white tw-shadow-lg shadow-gray-200 tw-rounded-2xl tw-p-4 tw-mb-6">
          <h3 class="tw-mb-4 tw-text-xl tw-font-bold">Information générale</h3>
          <form action="#">
            <div class="tw-grid tw-grid-cols-6 tw-gap-6">
              <div class="tw-col-span-6 sm:tw-col-span-3">
                <label for="first-name" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Nom*</label
                >
                <input v-model="user_info.lastname" type="text" name="first-name" id="first-name" class="tw-bg-white tw-text-gray-800 placeholder:tw-text-gray-700 tw-shadow-sm tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-200 focus:tw-ring-2 focus:tw-ring-green-700 tw-block tw-w-full tw-p-2 focus:tw-outline-none" placeholder="Bonnie" required />
              </div>
              <div class="tw-col-span-6 sm:tw-col-span-3">
                <label for="last-name" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Prénoms*</label
                >
                <input v-model="user_info.firstname" type="text" name="last-name" id="last-name" class="tw-bg-white tw-text-gray-800 placeholder:tw-text-gray-700 tw-shadow-sm tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-200 focus:tw-ring-2 focus:tw-ring-green-700 tw-block tw-w-full tw-p-2 focus:tw-outline-none" placeholder="Green" required />
              </div>
              <div class="tw-col-span-6 sm:tw-col-span-3">
                <label for="country" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Pays*</label
                >
                <input v-model="user_info.country" type="text" name="country" id="country" class="tw-bg-white tw-text-gray-800 placeholder:tw-text-gray-700 tw-shadow-sm tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-200 focus:tw-ring-2 focus:tw-ring-green-700 tw-block tw-w-full tw-p-2 focus:tw-outline-none" placeholder="United States" required />
              </div>
              <div class="tw-col-span-6 sm:tw-col-span-3">
                <label for="city" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Adresse</label
                >
                <input v-model="user_info.adresse" type="text" name="city" id="city" class="tw-bg-white tw-text-gray-800 placeholder:tw-text-gray-700 tw-shadow-sm tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-200 focus:tw-ring-2 focus:tw-ring-green-700 tw-block tw-w-full tw-p-2 focus:tw-outline-none" placeholder="e.g. San Francisco" required />
              </div>

              <div class="tw-col-span-6 sm:tw-col-span-3">
                <label for="email" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Email*</label
                >
                <input v-model="user_info.email" type="email" name="email" id="email" class="tw-bg-white tw-text-gray-800 placeholder:tw-text-gray-700 tw-shadow-sm tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-200 focus:tw-ring-2 focus:tw-ring-green-700 tw-block tw-w-full tw-p-2 focus:tw-outline-none" placeholder="example@company.com" required />
              </div>
              <div class="tw-col-span-6 sm:tw-col-span-3">
                <label for="phone-number" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Numéro de téléphone*</label
                >
                <input v-model="user_info.telephone" type="number" name="phone-number" id="phone-number" class="tw-bg-white tw-text-gray-800 placeholder:tw-text-gray-700 tw-shadow-sm tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-200 focus:tw-ring-2 focus:tw-ring-green-700 tw-block tw-w-full tw-p-2 focus:tw-outline-none" placeholder="e.g. +(12)3456 789" required />
              </div>
              <div class="tw-col-span-6 sm:tw-col-span-3">
                <label for="birthday" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Date de naissance*</label
                >
                <input v-model="user_info.birthday" type="date" name="birthday" id="birthday" class="tw-bg-white tw-text-gray-800 placeholder:tw-text-gray-700 tw-shadow-sm tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-200 focus:tw-ring-2 focus:tw-ring-green-700 tw-block tw-w-full tw-p-2 focus:tw-outline-none" placeholder="15/08/1990" required />
              </div>

              <div class="tw-col-span-6 sm:tw-col-span-3">
                <label for="birthday" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Genre*</label
                >
                <select v-model="user_info.sex" type="date" name="sex" id="sex" class="tw-bg-white tw-text-gray-800 placeholder:tw-text-gray-700 tw-shadow-sm tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-200 focus:tw-ring-2 focus:tw-ring-green-700 tw-block tw-w-full tw-p-2 focus:tw-outline-none" required >
                  <option value="Féminin">Féminin</option>
                  <option value="Masculin">Masculin</option>
                  <option value="Autre">Autre</option>
                </select>
<!--                <input v-model="user_info.birthday" type="date" name="birthday" id="birthday" class="tw-bg-white tw-text-gray-800 placeholder:tw-text-gray-700 tw-shadow-sm tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-200 focus:tw-ring-2 focus:tw-ring-green-700 tw-block tw-w-full tw-p-2 focus:tw-outline-none" placeholder="15/08/1990" required />-->
              </div>

              <div class="tw-col-span-6 sm:tw-col-span-3">
                <label class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Fonction*</label
                >
                <v-autocomplete
                    class="v-text-field"
                    :items="fonctions"
                    v-model="user_info.fonction"
                    outlined dense
                    item-value="nom"
                    item-text="nom"
                    clearable
                    label="Votre profession"
                    placeholder="Tapez votre profession"
                >
                </v-autocomplete>
              </div>

              <div class="tw-col-span-6 sm:tw-col-span-3">
                <label for="confirm-password" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Compétences techniques</label
                >
                <v-autocomplete
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
              </div>

              <div class="tw-col-span-6 sm:col-full">
                <v-btn @click="updateUser()" class="btn-gradient btn-gradient tw-text-white tw-rounded-lg tw-shadow-md shadow-gray-300 hover:scale-[1.02] tw-transition-transform tw-font-medium tw-text-sm tw-px-5 tw-py-2.5 tw-text-center" type="submit">
                  Sauvegarder
                </v-btn>
              </div>
            </div>
          </form>
        </div>
        <div class="tw-bg-white tw-shadow-lg shadow-gray-200 tw-rounded-2xl tw-p-4 tw-mb-6">
          <h3 class="tw-mb-4 tw-text-xl tw-font-bold">Définir un nouveau mot de passe</h3>
          <form action="#">
            <div class="tw-grid tw-grid-cols-6 tw-gap-6">
<!--              <div class="tw-col-span-6 sm:tw-col-span-3">-->
<!--                <label for="current-password" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Current password</label-->
<!--                >-->
<!--                <input type="text" name="current-password" id="current-password" class="tw-bg-white tw-text-gray-800 placeholder:tw-text-gray-700 tw-shadow-sm tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-200 focus:tw-ring-2 focus:tw-ring-green-700 tw-block tw-w-full tw-p-2 focus:tw-outline-none" placeholder="••••••••" required />-->
<!--              </div>-->
              <div class="tw-col-span-6 sm:tw-col-span-3">
                <label for="new-password" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Nouveau mot de passe</label
                >
                <input type="text" name="new-password" id="new-password" class="tw-bg-white tw-text-gray-800 placeholder:tw-text-gray-700 tw-shadow-sm tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-200 focus:tw-ring-2 focus:tw-ring-green-700 tw-block tw-w-full tw-p-2 focus:tw-outline-none" placeholder="••••••••" required />
              </div>
              <div class="tw-col-span-6 sm:tw-col-span-3">
                <label for="confirm-password" class="tw-block tw-mb-2 tw-text-sm tw-font-medium tw-text-gray-900">Confirmer le nouveau mot de passe</label
                >
                <input type="text" name="confirm-password" id="confirm-password" class="tw-bg-white tw-text-gray-800 placeholder:tw-text-gray-700 tw-shadow-sm tw-text-gray-900 sm:tw-text-sm tw-rounded-lg tw-ring-2 tw-ring-gray-200 focus:tw-ring-2 focus:tw-ring-green-700 tw-block tw-w-full tw-p-2 focus:tw-outline-none" placeholder="••••••••" required />
              </div>

              <div class="tw-col-span-full">
                <div class="tw-text-sm tw-font-medium">
                  Exigences en matière de mot de passe :
                </div>
                <div class="tw-mb-1 tw-text-sm tw-font-normal tw-text-gray-500">
                  Veillez à ce que les conditions suivantes soient remplies :
                </div>
                <ul class="tw-pl-4 tw-space-y-1 tw-text-gray-500">
                  <li class="tw-text-xs tw-font-normal">
                    Au moins 6 caractères (et jusqu'à 25 caractères)
                  </li>
                  <li class="tw-text-xs tw-font-normal">
                    Au moins un caractère à deux minuscules
                  </li>
                  <li class="tw-text-xs tw-font-normal">
                    Inclusion d'au moins un caractère spécial, par exemple, ! @ # ?
                  </li>
                </ul>
              </div>
              <div class="tw-col-span-6 sm:col-full">
                <button class="btn-gradient tw-text-white tw-rounded-lg tw-shadow-md shadow-gray-300 hover:scale-[1.02] tw-transition-transform tw-font-medium tw-text-sm tw-px-5 tw-py-2.5 tw-text-center" type="submit">
                  Sauvegarder
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="tw-hidden w-grid tw-grid-cols-1 lg:tw-gap-6">
      <div class="tw-bg-white tw-shadow-lg shadow-gray-200 tw-rounded-2xl tw-p-4 tw-mb-4 xl:tw-mb-0">
        <div class="tw-flow-root">
          <h3 class="tw-text-xl tw-font-bold">Alertes & Notifications</h3>
          <p class="tw-text-sm tw-font-normal tw-text-gray-500">
            You can set up Themesberg to get notifications
          </p>
          <div class="tw-divide-y tw-divide-gray-200">



            <div class="tw-flex tw-justify-between tw-items-center tw-py-4">
              <div class="tw-flex tw-flex-col tw-flex-grow">
                <div class="tw-text-lg tw-font-semibold tw-text-gray-900">
                  Account Activity
                </div>
                <div class="tw-text-sm tw-font-normal tw-text-gray-500">
                  Get important notifications about you or activity you've
                  missed
                </div>
              </div>
              <label for="account-activity" class="tw-flex tw-relative tw-items-center tw-cursor-pointer">
                <input type="checkbox" id="account-activity" class="tw-sr-only" checked />
                <span class="tw-w-11 tw-h-6 tw-bg-gray-200 tw-rounded-full tw-border-2 tw-border-gray-200 toggle-bg"></span>
              </label>
            </div>

            <div class="tw-flex tw-justify-between tw-items-center tw-py-4">
              <div class="tw-flex tw-flex-col tw-flex-grow">
                <div class="tw-text-lg tw-font-semibold tw-text-gray-900">
                  Meetups Near You
                </div>
                <div class="tw-text-sm tw-font-normal tw-text-gray-500">
                  Get an email when a Dribbble Meetup is posted close to
                  my location
                </div>
              </div>
              <label for="meetups" class="tw-flex tw-relative tw-items-center tw-cursor-pointer">
                <input type="checkbox" id="meetups" class="tw-sr-only" checked />
                <span class="tw-w-11 tw-h-6 tw-bg-gray-200 tw-rounded-full tw-border-2 tw-border-gray-200 toggle-bg"></span>
              </label>
            </div>

            <div class="tw-flex tw-justify-between tw-items-center tw-pt-4">
              <div class="tw-flex tw-flex-col tw-flex-grow">
                <div class="tw-text-lg tw-font-semibold tw-text-gray-900">
                  New Messages
                </div>
                <div class="tw-text-sm tw-font-normal tw-text-gray-500">
                  Get Themsberg news, announcements, and product updates
                </div>
              </div>
              <label for="new-messages" class="tw-flex tw-relative tw-items-center tw-cursor-pointer">
                <input type="checkbox" id="new-messages" class="tw-sr-only" />
                <span class="tw-w-11 tw-h-6 tw-bg-gray-200 tw-rounded-full tw-border-2 tw-border-gray-200 toggle-bg"></span>
              </label>
            </div>

            <div class="tw-flex tw-justify-between tw-items-center tw-py-4">
              <div class="tw-flex tw-flex-col tw-flex-grow">
                <div class="tw-text-lg tw-font-semibold tw-text-gray-900">
                  Company News
                </div>
                <div class="tw-text-sm tw-font-normal tw-text-gray-500">
                  Get Themesberg news, announcements, and product updates
                </div>
              </div>
              <label for="company-news" class="tw-flex tw-relative tw-items-center tw-cursor-pointer">
                <input type="checkbox" id="company-news" class="tw-sr-only" />
                <span class="tw-w-11 tw-h-6 tw-bg-gray-200 tw-rounded-full tw-border-2 tw-border-gray-200 toggle-bg"></span>
              </label>
            </div>
          </div>
          <div class="tw-mt-6">
            <button class="btn-gradient tw-text-white tw-rounded-lg tw-shadow-md shadow-gray-300 hover:scale-[1.02] tw-transition-transform tw-font-medium tw-text-sm tw-px-5 tw-py-2.5 tw-text-center">
              Sauvegarder
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
  data(){
    return {
      user_info: null
    }
  },
  mounted(){
    this.getMemberInfo()
  },
  methods: {
    async getMemberInfo(){
      // await axios.get("/admin/members/" + this.user?.id)
      await axios.get("/admin/members/" + this.userInfo.id)
          .then(res => {
            if(!res.data.error){
              this.user_info = res.data.user
            }
          })
          .catch(error => {
            console.log(error)
          })
    },

    async updateUser(){
      // if (this.$refs.form.validate()) {
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
      // }
    },
  }
}
</script>

<style scoped>
.btn-gradient {
  background: linear-gradient(to bottom right, #16a34a, #1f2937);
}
</style>