<template>
  <v-app>
    <body class=" tw-relative tw-m-0 tw-font-sans tw-antialiased tw-font-normal tw-text-base leading-default tw-bg-gray-50 tw-text-slate-500">
    <!-- aside  -->
    <aside ref="aside_bar" style="z-index: 9999" :class="showSidebar ? 'tw-fixed -tw-left-4 ':'tw-hidden lg:tw-block'" class="lg:tw-fixed xl:tw-left-0 tw-inset-y-0 tw-bg-white tw-w-full tw-max-w-[250px] ease-nav-brand lg:tw-my-4 tw-ml-4 tw-overflow-y-auto tw-rounded-2xl tw-border-0 tw-scrollbar tw-scrollbar-thumb-gray-300 tw-scrollbar-track-gray-100 tw-scrollbar-thumb-rounded-full tw-scrollbar-w-2 tw-p-0 tw-antialiased tw-shadow-lg tw-transition-transform tw-duration-200">
      <div class="tw-h-20">
        <div class="tw-relative tw-block tw-px-5 tw-py-6 tw-m-0 tw-text-sm tw-whitespace-nowrap tw-text-slate-700" href="javascript:;" target="_blank">
          <img src="@/assets/img/logos/logo.jpg" class="tw-inline tw-h-full tw-max-w-full tw-transition-all tw-duration-200 ease-nav-brand tw-max-h-8" alt="main_logo" />
          <span class="tw-ml-1 tw-text-green-600 tw-font-bold tw-text-2xl tw-uppercase tw-transition-all tw-duration-200 ease-nav-brand">Ticket</span>
          <button @click="showSidebar = !showSidebar" class="lg:tw-hidden tw-bg-green-600 tw-p-1.5 tw-rounded-full tw-absolute -tw-bottom-3 -tw-right-0">
            <v-icon size="30" color="white">mdi-menu-open</v-icon>
          </button>
        </div>
      </div>

      <hr class="tw-h-px tw-mt-0 tw-bg-transparent tw-bg-gradient-to-r tw-from-transparent tw-via-black/40 tw-to-transparent" />

      <div class="tw-items-center tw-block tw-w-auto tw-max-h-screen tw-overflow-auto tw-h-sidenav tw-grow tw-basis-full">
        <ul class="tw-flex tw-flex-col tw-pl-0 tw-mb-0">
          <li v-for="(link, index) in links" key="index" class="tw-mt-0.5 tw-w-full">
            <NuxtLink :to="link.path" :class="$route.path === link.path ? 'tw-font-semibold tw-text-slate-700' : ''" class="tw-py-2.5 tw-shadow-soft-xl tw-text-sm ease-nav-brand tw-my-0 tw-flex tw-items-center tw-whitespace-nowrap tw-px-4 tw-rounded-lg tw-bg-white tw-transition-colors">
              <div :class="{'tw-bg-green-500': $route.path === link.path}" class="shadow-soft-2xl tw-mr-2 tw-flex tw-h-8 tw-w-8 tw-items-center tw-justify-center tw-rounded-lg tw-bg-gray-200 tw-bg-center tw-stroke-0 tw-text-center xl:tw-p-2.5">
                <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>shop</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g tw-transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g tw-transform="translate(1716.000000, 291.000000)">
                        <g tw-transform="translate(0.000000, 148.000000)">
                          <path :class="$route.path === link.path ? '' : 'tw-fill-slate-800'"
                            class="tw-opacity-60"
                            d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                          ></path>
                          <path :class="$route.path === link.path ? '' : 'tw-fill-slate-800'"
                            d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"
                          ></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="tw-ml-1 tw-duration-300 tw-opacity-100 tw-pointer-events-none ease-soft tw-text-gray-600">{{ link.name }}</span>
            </NuxtLink>
          </li>

          <li class="tw-w-full tw-mt-4">
            <h6 class="tw-pl-6 tw-ml-2 tw-font-bold tw-leading-tight tw-uppercase tw-text-xs tw-opacity-60">Mon compte</h6>
          </li>

          <li class="tw-mt-0.5 tw-w-full">
            <a class="tw-py-2.5 tw-text-sm ease-nav-brand tw-my-0 tw-flex tw-items-center tw-whitespace-nowrap tw-px-4 tw-transition-colors">
              <div class="shadow-soft-2xl tw-mr-2 tw-flex tw-h-8 tw-w-8 tw-items-center tw-justify-center tw-rounded-lg tw-bg-gray-200 tw-bg-center tw-stroke-0 tw-text-center xl:tw-p-2.5">
                <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>customer-support</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g tw-transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g tw-transform="translate(1716.000000, 291.000000)">
                        <g tw-transform="translate(1.000000, 0.000000)">
                          <path class="tw-fill-slate-800 tw-opacity-60" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"></path>
                          <path class="tw-fill-slate-800" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                          <path class="tw-fill-slate-800" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="tw-ml-1 tw-duration-300 tw-opacity-100 tw-pointer-events-none ease-soft tw-text-gray-600">Profile</span>
            </a>
          </li>


          <li class="tw-mt-0.5 tw-w-full">
            <div @click="logout()" class="hover:tw-cursor-pointer tw-py-2.5 tw-text-sm ease-nav-brand tw-my-0 tw-flex tw-items-center tw-whitespace-nowrap tw-px-4 tw-transition-colors">
              <div class="shadow-soft-2xl tw-mr-2 tw-flex tw-h-8 tw-w-8 tw-items-center tw-justify-center tw-rounded-lg tw-bg-gray-200 tw-bg-center tw-stroke-0 tw-text-center xl:tw-p-2.5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-w-7 tw-h-7">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                </svg>
              </div>
              <span class="tw-ml-1 tw-duration-300 tw-opacity-100 tw-pointer-events-none ease-soft tw-text-gray-600">Se déconnecter</span>
            </div>
          </li>
        </ul>
      </div>
    </aside>
    <!-- end aside -->

    <!-- Main -->
    <main class="ease-soft-in-out lg:tw-ml-72 tw-relative tw-h-full tw-max-h-screen tw-rounded-xl tw-transition-all tw-duration-200">
      <!-- Navbar -->
      <nav class="tw-relative tw-flex tw-flex-wrap tw-items-center tw-justify-between tw-px-0 tw-py-2 tw-transition-all tw-shadow-none duration-250 ease-soft-in tw-rounded-2xl lg:tw-flex-nowrap lg:tw-justify-start" navbar-main navbar-scroll="true">
        <div class="tw-flex tw-items-center tw-justify-between tw-w-full tw-px-4 tw-py-1 tw-mx-auto tw-flex-wrap-inherit">
          <button @click="showSidebar = !showSidebar" class="lg:tw-hidden tw-bg-green-600 tw-p-1.5 tw-rounded-full tw-text-white">
            <v-icon size="30" color="white" class="tw-rotate-180">mdi-menu-open</v-icon>
          </button>
          <nav>
            <!-- breadcrumb -->
            <ol class="tw-flex tw-flex-wrap tw-pt-1 tw-pl-0 tw-bg-transparent tw-rounded-lg">
              <li class="tw-leading-normal tw-text-sm">
                <a class="tw-opacity-50 tw-text-slate-700" href="javascript:;">Pages</a>
              </li>
              <li v-if="$route.path === '/admin/dashboard'" class="tw-text-sm tw-pl-2 tw-capitalize tw-leading-normal tw-text-slate-700 before:tw-float-left before:tw-pr-2 before:tw-text-gray-600 before:content-['/']" aria-current="page">Dashboard</li>
              <li v-if="$route.path === '/admin/delegues-bus'" class="tw-text-sm tw-pl-2 tw-capitalize tw-leading-normal tw-text-slate-700 before:tw-float-left before:tw-pr-2 before:tw-text-gray-600 before:content-['/']" aria-current="page">Délégues</li>
              <li v-if="$route.path === '/admin/espace-publicitaire'" class="tw-text-sm tw-pl-2 tw-capitalize tw-leading-normal tw-text-slate-700 before:tw-float-left before:tw-pr-2 before:tw-text-gray-600 before:content-['/']" aria-current="page">Publicités</li>
              <li v-if="$route.path === '/admin/etudiants'" class="tw-text-sm tw-pl-2 tw-capitalize tw-leading-normal tw-text-slate-700 before:tw-float-left before:tw-pr-2 before:tw-text-gray-600 before:content-['/']" aria-current="page">Etudiants</li>
              <li v-if="$route.path === '/admin/ligne-voyages'" class="tw-text-sm tw-pl-2 tw-capitalize tw-leading-normal tw-text-slate-700 before:tw-float-left before:tw-pr-2 before:tw-text-gray-600 before:content-['/']" aria-current="page">Ligne de voyages</li>
              <li v-if="$route.path === '/admin/voyages'" class="tw-text-sm tw-pl-2 tw-capitalize tw-leading-normal tw-text-slate-700 before:tw-float-left before:tw-pr-2 before:tw-text-gray-600 before:content-['/']" aria-current="page">Voyages</li>
              <li v-if="$route.path === '/admin/horaire-bus'" class="tw-text-sm tw-pl-2 tw-capitalize tw-leading-normal tw-text-slate-700 before:tw-float-left before:tw-pr-2 before:tw-text-gray-600 before:content-['/']" aria-current="page">Horaires</li>
              <li v-if="$route.name === 'admin-voyages-id'" class="tw-text-sm tw-pl-2 tw-capitalize tw-leading-normal tw-text-slate-700 before:tw-float-left before:tw-pr-2 before:tw-text-gray-600 before:content-['/']" aria-current="page">Voyages</li>
            </ol>
            <h6 v-if="$route.path === '/admin/dashboard'" class="tw-mb-0 tw-font-bold tw-capitalize">Tableau de bord</h6>
            <h6 v-if="$route.path === '/admin/delegues-bus'" class="tw-mb-0 tw-font-bold tw-capitalize">Délégue de bus</h6>
            <h6 v-if="$route.path === '/admin/espace-publicitaire'" class="tw-mb-0 tw-font-bold tw-capitalize">Espace publiciatire</h6>
            <h6 v-if="$route.path === '/admin/etudiants'" class="tw-mb-0 tw-font-bold tw-capitalize">Etudiants</h6>
            <h6 v-if="$route.path === '/admin/ligne-voyages'" class="tw-mb-0 tw-font-bold tw-capitalize">Ligne de voyages</h6>
            <h6 v-if="$route.path === '/admin/voyages'" class="tw-mb-0 tw-font-bold tw-capitalize">Voyages</h6>
            <h6 v-if="$route.path === '/admin/horaire-bus'" class="tw-mb-0 tw-font-bold tw-capitalize">Horaires de bus</h6>
            <h6 v-if="$route.name === 'admin-voyages-id'" class="tw-mb-0 tw-font-bold tw-capitalize">Détail voyage</h6>
          </nav>

          <div class="tw-hidden tw-items-center tw-mt-2 tw-grow sm:tw-mt-0 sm:tw-mr-6 md:tw-mr-0 lg:tw-flex lg:basis-auto">
            <div class="tw-flex tw-items-center md:tw-ml-auto md:tw-pr-4">
              <div class="tw-relative tw-flex tw-flex-wrap tw-items-stretch tw-w-full tw-transition-all tw-rounded-lg ease-soft">
                <span class="tw-text-sm ease-soft tw-leading-5.6 tw-absolute tw-z-50 tw--ml-px tw-flex tw-h-full tw-items-center tw-whitespace-nowrap tw-rounded-lg tw-rounded-tr-none tw-rounded-br-none tw-border tw-border-r-0 tw-border-transparent tw-bg-transparent tw-py-2 tw-px-2.5 tw-text-center tw-font-normal tw-text-slate-500 tw-transition-all">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="tw-w-5 tw-h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                  </svg>

                </span>
                <input type="text" class="tw-pl-8 tw-text-sm focus:shadow-soft-primary-outline ease-soft tw-w-1/100 tw-leading-5.6 tw-relative tw--ml-px tw-block tw-min-w-0 tw-flex-auto tw-rounded-lg tw-border tw-border-solid tw-border-gray-300 tw-bg-white tw-bg-clip-padding tw-py-2 tw-pr-3 tw-text-gray-700 tw-transition-all placeholder:tw-text-gray-500 focus:tw-border-fuchsia-300 focus:tw-outline-none focus:tw-transition-shadow" placeholder="Tapez ici..." />
              </div>
            </div>
            <ul class="tw-flex tw-flex-row tw-justify-end tw-pl-0 tw-mb-0 tw-list-none md-max:tw-w-full">
              <li class="tw-relative tw-flex tw-items-center">
                <p class="tw-hidden transform-dropdown-show"></p>
                <a href="javascript:;" class="tw-block tw-p-0 tw-transition-all tw-text-sm ease-nav-brand text-slate-500" dropdown-trigger aria-expanded="false">
                  <i class="tw-cursor-pointer fa fa-bell"></i>
                </a>

                <ul dropdown-menu class="tw-text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:tw-right-7.5 before:text-5.5 tw-pointer-events-none tw-absolute tw-right-0 tw-top-0 tw-z-50 tw-origin-top tw-list-none tw-rounded-lg tw-border-0 tw-border-solid tw-border-transparent tw-bg-white tw-bg-clip-padding tw-px-2 tw-py-4 tw-text-left text-slate-500 tw-opacity-0 tw-transition-all before:tw-absolute before:tw-right-2 before:tw-left-auto before:tw-top-0 before:tw-z-50 before:tw-inline-block before:tw-font-normal before:tw-text-white before:tw-antialiased before:tw-transition-all before:content-['\f0d8'] sm:tw--mr-6 lg:tw-absolute lg:tw-right-0 lg:tw-left-auto lg:tw-mt-2 lg:tw-block lg:tw-cursor-pointer">
                  <!-- add show class on dropdown open js -->
                  <li class="tw-relative tw-mb-2">
                    <a class="ease-soft tw-py-1.2 tw-clear-both tw-block tw-w-full tw-whitespace-nowrap tw-rounded-lg tw-bg-transparent tw-px-4 tw-duration-300 hover:tw-bg-gray-200 hover:text-slate-700 lg:tw-transition-colors" href="javascript:;">
                      <div class="tw-flex tw-py-1">
                        <div class="tw-my-auto">
                          <img src="@/assets/img/team-2.jpg" class="tw-inline-flex tw-items-center tw-justify-center tw-mr-4 tw-text-white tw-text-sm tw-h-9 tw-w-9 tw-max-w-none tw-rounded-xl" />
                        </div>
                        <div class="tw-flex tw-flex-col tw-justify-center">
                          <h6 class="tw-mb-1 tw-font-normal tw-leading-normal tw-text-sm"><span class="tw-font-semibold">New message</span> from Laur</h6>
                          <p class="tw-mb-0 tw-leading-tight tw-text-xs text-slate-400">
                            <i class="tw-mr-1 fa fa-clock"></i>
                            13 minutes ago
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="tw-relative tw-mb-2">
                    <a class="ease-soft tw-py-1.2 tw-clear-both tw-block tw-w-full tw-whitespace-nowrap tw-rounded-lg tw-px-4 tw-transition-colors tw-duration-300 hover:tw-bg-gray-200 hover:text-slate-700" href="javascript:;">
                      <div class="tw-flex tw-py-1">
                        <div class="tw-my-auto">
                          <img src="@/assets/img/small-logos/logo-xd.svg" class="tw-inline-flex tw-items-center tw-justify-center tw-mr-4 tw-text-white tw-text-sm tw-bg-gradient-to-tl tw-from-gray-900 to-slate-800 tw-h-9 tw-w-9 tw-max-w-none tw-rounded-xl" />
                        </div>
                        <div class="tw-flex tw-flex-col tw-justify-center">
                          <h6 class="tw-mb-1 tw-font-normal tw-leading-normal tw-text-sm"><span class="tw-font-semibold">New album</span> by Travis Scott</h6>
                          <p class="tw-mb-0 tw-leading-tight tw-text-xs text-slate-400">
                            <i class="tw-mr-1 fa fa-clock"></i>
                            1 day
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>

                  <li class="tw-relative">
                    <a class="ease-soft tw-py-1.2 tw-clear-both tw-block tw-w-full tw-whitespace-nowrap tw-rounded-lg tw-px-4 tw-transition-colors tw-duration-300 hover:tw-bg-gray-200 hover:text-slate-700" href="javascript:;">
                      <div class="tw-flex tw-py-1">
                        <div class="tw-inline-flex tw-items-center tw-justify-center tw-my-auto tw-mr-4 tw-text-white tw-transition-all tw-duration-200 ease-nav-brand tw-text-sm tw-bg-gradient-to-tl from-slate-600 to-slate-300 tw-h-9 tw-w-9 tw-rounded-xl">
                          <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>credit-card</title>
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g tw-transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g tw-transform="translate(1716.000000, 291.000000)">
                                  <g tw-transform="translate(453.000000, 454.000000)">
                                    <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                    <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                        </div>
                        <div class="tw-flex tw-flex-col tw-justify-center">
                          <h6 class="tw-mb-1 tw-font-normal tw-leading-normal tw-text-sm">Payment successfully completed</h6>
                          <p class="tw-mb-0 tw-leading-tight tw-text-xs text-slate-400">
                            <i class="tw-mr-1 fa fa-clock"></i>
                            2 days
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- end Navbar -->

      <!-- Main -->
      <div class="tw-w-full tw-px-3 tw-py-6 tw-mx-auto">
        <nuxt/>

        <!-- Footer -->
        <footer class="tw-pt-4">
          <div class="tw-w-full tw-px-6 tw-mx-auto">
            <div class="tw-flex tw-flex-wrap tw-items-center tw--mx-3 lg:tw-justify-between">
              <div class="tw-w-full tw-max-w-full tw-px-3 tw-mt-0 tw-mb-6 shrink-0 lg:tw-mb-0 lg:tw-w-1/2 lg:tw-flex-none">
                <div class="tw-leading-normal tw-text-center tw-text-sm text-slate-500 lg:tw-text-left">
                  ©
                 {{ new Date().getFullYear()}}
                  made with <i class="fa fa-heart"></i> by
                  <a href="#" class="tw-font-semibold text-slate-700">e-ticket developper</a>
                  for a better web.
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- end Footer -->
      </div>
      <!-- end Main -->
    </main>
  </body>
  </v-app>
</template>

<script>
export default {
  // middleware: ["isauthenticated"],
  data() {
    return {
      showSidebar: false,
      links: [
        {
          name: "Tableau de bord",
          path: "/admin/dashboard"
        },
        {
          name: "Liste des étudiants",
          path: "/admin/etudiants"
        },
        {
          name: "Lignes de voyage",
          path: "/admin/ligne-voyages"
        },
        {
          name: "Espace publicitaire",
          path: "/admin/espace-publicitaire"
        },
        {
          name: "Liste des délegues",
          path: "/admin/delegues-bus"
        },
        {
          name: "Horaire des bus",
          path: "/admin/horaire-bus"
        },
        // {
        //   name: "Statistiques",
        //   path: "/admin/statistiques"
        // },
      ],
    };
  },
  methods: {
    // handleClickOutside(event) {
    //   const targetElement = this.$refs.aside_bar;
    //   if (!targetElement.contains(event.target)) {
    //     this.showSidebar = !this.showSidebar;
    //     console.log("Clicked outside the target element!");
    //   }
    // },
  },
//   mounted() {
// // Attach a click event listener to the document
//     document.addEventListener("click", this.handleClickOutside);
//   },
//   beforeDestroy() {
// // Remove the click event listener when the component is about to be destroyed
//     document.removeEventListener("click", this.handleClickOutside);
//   },
};
</script>

<style>
.v-card--reveal {
  bottom: 0;
  opacity: 1 !important;
  position: absolute;
  width: 100%;
}
</style>