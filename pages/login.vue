<template>
<div class="tw-flex tw-flex-col md:tw-flex-row-reverse tw-h-screen tw-items-center">

    <div class="tw-relative tw-bg-yellow-400 tw-hidden lg:tw-block tw-w-full md:tw-w-1/2 xl:tw-w-7/12 tw-h-screen">
      <img src="https://images.unsplash.com/photo-1603566234966-63aff3736a36?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="" class="tw-w-full tw-h-full">
      <div class="tw-absolute tw-inset-0 tw-p-6 tw-flex tw-justify-end tw-items-end">
        <div class="tw-bg-white tw-bg-opacity-80 tw-rounded-full tw-p-2 tw-px-6 tw-flex tw-items-center tw-gap-2">
          <h1 class="tw-font-semibold tw-text-sm">Igor BALLO</h1>
        </div>
      </div>
    </div>

    <div class="tw-bg-white tw-w-full md:tw-max-w-md lg:tw-max-w-full md:tw-mx-auto md:tw-mx-0 md:tw-w-1/2 xl:tw-w-5/12 tw-h-screen tw-px-6 lg:tw-px-16 xl:tw-px-12 tw-flex tw-items-center tw-justify-center">
      <div class="tw-w-full tw-h-full tw-flex tw-flex-col tw-justify-between tw-items-start tw-py-12">
        <img class="tw-rounded-full tw-h-10 tw-w-auto" src="/logo/logo-with-text-normal.svg" alt="HeliumArtworks">

        <div class="tw-w-full">
          <h1 class="tw-text-xl md:tw-text-2xl tw-font-bold tw-leading-tight text-primarytext">Title Lorem</h1>

          <h2 class="text-md tw-text-gray-600 tw-mt-4">
            Lorem ipsum dolor sit amet, consectetur <br> adipiscing elit.
          </h2>

          <button type="button"
                  class="tw-my-6 tw-w-full tw-block tw-bg-blue-100 tw-text-blue-500 tw-font-semibold tw-rounded-lg tw-px-4 tw-py-3  bg-[#E9F1FF] text-[#4285F4]">
            <div class="tw-flex tw-items-center tw-justify-center">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="tw-w-6 tw-h-6"
                   viewBox="0 0 48 48">
                <defs>
                  <path id="a"
                        d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/>
                </defs>
                <clipPath id="b">
                  <use xlink:href="#a" overflow="tw-visible"/>
                </clipPath>
                <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/>
                <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/>
                <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/>
                <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/>
              </svg>
              <span class="tw-ml-4">Se connecter avec Google</span>
            </div>
          </button>

          <div class="tw-flex tw-justify-center tw-w-full tw-border-b tw-border-gray-100 tw-border-dashed tw-text-center">
            <div class="tw-translate-y-2 tw-leading-none tw-px-2 tw-inline-block text-md tw-text-gray-800 tw-tracking-wide tw-font-medium tw-bg-white tw-transform tw-translate-y-1/2">
              Ou
            </div>
          </div>

          <form class="tw-mt-6" action="#" method="POST">
            <div>
              <label class="tw-block tw-text-black">Email</label>
              <input type="email" placeholder="exemple@gmail.com"
                     class="tw-w-full tw-text-black tw-px-4 tw-py-3 tw-rounded-lg tw-bg-gray-200 tw-mt-2 tw-border focus:tw-border-blue-500 focus:tw-bg-white focus:tw-outline-none"
                     autofocus autocomplete required>
            </div>

            <div class="tw-mt-4">
              <label class="tw-block tw-text-black">Mot de passe</label>
              <div class="tw-relative">
                <input
                  a  :type="showPassword ? 'text' : 'password'"
                    required
                    class="tw-w-full tw-text-black tw-px-4 tw-py-3 tw-rounded-lg tw-bg-gray-200 tw-mt-2 tw-border focus:tw-border-blue-500 focus:tw-bg-white focus:tw-outline-none"
                    placeholder="Votre mot de passe"
                />

                <span @click="showPassword =! showPassword"
                      class="tw-absolute tw-inset-y-0 tw-right-0 tw-top-2 tw-grid tw-place-content-center tw-px-4 hover:tw-cursor-pointer">

                    <svg v-if="showPassword" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5"
                         stroke="currentColor" class="tw-w-5 tw-h-5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"/>
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>

                    <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="tw-w-5 tw-h-5">
                      <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.98 8.223A10.477 10.477 0 001.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.45 10.45 0 0112 4.5c4.756 0 8.773 3.162 10.065 7.498a10.523 10.523 0 01-4.293 5.774M6.228 6.228L3 3m3.228 3.228l3.65 3.65m7.894 7.894L21 21m-3.228-3.228l-3.65-3.65m0 0a3 3 0 10-4.243-4.243m4.242 4.242L9.88 9.88"/>
                    </svg>
                  </span>
              </div>
            </div>

            <div class="tw-text-right tw-mt-10 tw-flex tw-items-center tw-w-full tw-justify-between">
              <a href="#" class="tw-text-sm tw-font-semibold tw-text-gray-800 hover:tw-text-gray-700">Mot de passe oublié ?</a>
              <span @click="" type="submit" class="tw-px-6 tw-py-2 tw-w-[fit-content] tw-block tw-bg-gray-800 tw-text-white tw-font-semibold tw-rounded-lg
              tw-px-4 tw-py-3">Connexion
              </span>
            </div>
          </form>
        </div>

        <div class="tw-text-sm tw-flex tw-justify-between tw-w-full tw-font-medium">
          <a class="tw-text-[#1976D2]">Aide</a>
          <a href="#" class="tw-text-gray-600 hover:tw-text-gray-700">Copyright © 2023. All rights reserved</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return {
      showPassword: false,
    }
  }
}
</script>