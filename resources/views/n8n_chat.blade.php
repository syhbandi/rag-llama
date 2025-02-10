<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Rag System') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/@n8n/chat/dist/style.css" rel="stylesheet" />
    @vite(['resources/css/app.scss', 'resources/js/app.jsx'])
  </head>

  <body
    class="demo1 sidebar-fixed header-fixed flex h-full bg-[--tw-page-bg] text-base text-gray-700 antialiased [--tw-page-bg-dark:var(--tw-coal-500)] [--tw-page-bg:#fefefe] dark:bg-[--tw-page-bg-dark]">

    <div class="flex grow">
      <!-- Sidebar -->
      <div
        class="sidebar fixed bottom-0 top-0 z-20 hidden shrink-0 flex-col items-stretch border-e border-e-gray-200 bg-light dark:border-e-coal-100 dark:bg-coal-600 lg:flex"
        id="sidebar" data-drawer="true" data-drawer-class="drawer drawer-start top-0 bottom-0"
        data-drawer-enable="true|lg:false">
        <div class="sidebar-header relative hidden shrink-0 items-center justify-between px-3 lg:flex lg:px-6"
          id="sidebar_header">
          <a class="dark:hidden" href="html/demo1.html">
            <img class="default-logo min-h-[22px] max-w-none" src="assets/media/app/default-logo.svg" />
            <img class="small-logo min-h-[22px] max-w-none" src="assets/media/app/mini-logo.svg" />
          </a>
          <a class="hidden dark:block" href="html/demo1.html">
            <img class="default-logo min-h-[22px] max-w-none" src="assets/media/app/default-logo-dark.svg" />
            <img class="small-logo min-h-[22px] max-w-none" src="assets/media/app/mini-logo.svg" />
          </a>
          <button
            class="toggle btn-icon btn btn-icon-md absolute start-full top-2/4 size-[30px] -translate-x-2/4 -translate-y-2/4 rounded-lg border border-gray-200 bg-light text-gray-500 hover:text-gray-700 dark:border-gray-300 rtl:translate-x-2/4"
            id="sidebar_toggle" data-toggle="body" data-toggle-class="sidebar-collapse">
            <i
              class="ki-filled ki-black-left-line rtl:translate transition-all duration-300 toggle-active:rotate-180 rtl:rotate-180 rtl:toggle-active:rotate-0">
            </i>
          </button>
        </div>
        <div class="sidebar-content flex shrink-0 grow py-5 pe-2" id="sidebar_content">
          <div class="scrollable-y-hover flex shrink-0 grow pe-1 ps-2 lg:pe-3 lg:ps-5" id="sidebar_scrollable"
            data-scrollable="true" data-scrollable-dependencies="#sidebar_header" data-scrollable-height="auto"
            data-scrollable-offset="0px" data-scrollable-wrappers="#sidebar_content">
            <!-- Sidebar Menu -->
            <div class="menu flex grow flex-col gap-0.5" id="sidebar_menu" data-menu="true"
              data-menu-accordion-expand-all="false">
              <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                <div
                  class="menu-link flex grow cursor-pointer items-center gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                  tabindex="0">
                  <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                    <i class="ki-filled ki-element-11 text-lg">
                    </i>
                  </span>
                  <span
                    class="menu-title text-sm font-medium text-gray-800 menu-item-active:text-primary menu-link-hover:!text-primary">
                    Dashboards
                  </span>
                  <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                    <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                    </i>
                    <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                    </i>
                  </span>
                </div>
                <div
                  class="menu-accordion relative gap-0.5 ps-[10px] before:absolute before:bottom-0 before:start-[20px] before:top-0 before:border-s before:border-gray-200">
                  <div class="menu-item">
                    <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                      href="html/demo1.html" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                        Light Sidebar
                      </span>
                    </a>
                  </div>
                  <div class="menu-item">
                    <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                      href="html/demo1/dashboards/dark-sidebar.html" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                        Dark Sidebar
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="menu-item pb-px pt-2.25">
                <span class="menu-heading pe-[10px] ps-[10px] text-2sm font-medium uppercase text-gray-500">
                  User
                </span>
              </div>
              <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                <div
                  class="menu-link flex grow cursor-pointer items-center gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                  tabindex="0">
                  <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                    <i class="ki-filled ki-profile-circle text-lg">
                    </i>
                  </span>
                  <span
                    class="menu-title text-sm font-medium text-gray-800 menu-item-active:text-primary menu-link-hover:!text-primary">
                    Public Profile
                  </span>
                  <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                    <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                    </i>
                    <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                    </i>
                  </span>
                </div>
                <div
                  class="menu-accordion relative gap-0.5 ps-[10px] before:absolute before:bottom-0 before:start-[20px] before:top-0 before:border-s before:border-gray-200">
                  <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                    <div
                      class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                      tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title me-1 text-2sm font-normal text-gray-800 menu-item-active:font-medium menu-item-active:text-primary menu-link-hover:!text-primary">
                        Profiles
                      </span>
                      <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                        </i>
                        <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                        </i>
                      </span>
                    </div>
                    <div
                      class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200">
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/public-profile/profiles/default.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Default
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/public-profile/profiles/creator.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Creator
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/public-profile/profiles/company.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Company
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/public-profile/profiles/nft.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            NFT
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/public-profile/profiles/blogger.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Blogger
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/public-profile/profiles/crm.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            CRM
                          </span>
                        </a>
                      </div>
                      <div class="menu-item flex-col-reverse" data-menu-item-toggle="accordion"
                        data-menu-item-trigger="click">
                        <div
                          class="menu-link grow cursor-pointer gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                          tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span class="menu-title text-2sm font-normal text-gray-600 dark:text-gray-500">
                            <span class="hidden menu-item-show:!flex">
                              Show less
                            </span>
                            <span class="flex menu-item-show:hidden">
                              Show 4 more
                            </span>
                          </span>
                          <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                            </i>
                            <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                            </i>
                          </span>
                        </div>
                        <div class="menu-accordion gap-0.5">
                          <div class="menu-item">
                            <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                              href="html/demo1/public-profile/profiles/gamer.html" tabindex="0">
                              <span
                                class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                              </span>
                              <span
                                class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                                Gamer
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                              href="html/demo1/public-profile/profiles/feeds.html" tabindex="0">
                              <span
                                class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                              </span>
                              <span
                                class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                                Feeds
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                              href="html/demo1/public-profile/profiles/plain.html" tabindex="0">
                              <span
                                class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                              </span>
                              <span
                                class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                                Plain
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                              href="html/demo1/public-profile/profiles/modal.html" tabindex="0">
                              <span
                                class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                              </span>
                              <span
                                class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                                Modal
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                    <div
                      class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                      tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title me-1 text-2sm font-normal text-gray-800 menu-item-active:font-medium menu-item-active:text-primary menu-link-hover:!text-primary">
                        Projects
                      </span>
                      <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                        </i>
                        <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                        </i>
                      </span>
                    </div>
                    <div
                      class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200">
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/public-profile/projects/3-columns.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            3 Columns
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/public-profile/projects/2-columns.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            2 Columns
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="menu-item">
                    <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                      href="html/demo1/public-profile/works.html" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                        Works
                      </span>
                    </a>
                  </div>
                  <div class="menu-item">
                    <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                      href="html/demo1/public-profile/teams.html" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                        Teams
                      </span>
                    </a>
                  </div>
                  <div class="menu-item">
                    <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                      href="html/demo1/public-profile/network.html" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                        Network
                      </span>
                    </a>
                  </div>
                  <div class="menu-item">
                    <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                      href="html/demo1/public-profile/activity.html" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                        Activity
                      </span>
                    </a>
                  </div>
                  <div class="menu-item flex-col-reverse" data-menu-item-toggle="accordion"
                    data-menu-item-trigger="click">
                    <div
                      class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                      tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span class="menu-title text-2sm font-normal text-gray-600 dark:text-gray-500">
                        <span class="hidden menu-item-show:!flex">
                          Show less
                        </span>
                        <span class="flex menu-item-show:hidden">
                          Show 3 more
                        </span>
                      </span>
                      <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                        </i>
                        <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                        </i>
                      </span>
                    </div>
                    <div class="menu-accordion gap-0.5">
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/public-profile/campaigns/card.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Campaigns - Card
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/public-profile/campaigns/list.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Campaigns - List
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/public-profile/empty.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Empty
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                <div
                  class="menu-link flex grow cursor-pointer items-center gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                  tabindex="0">
                  <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                    <i class="ki-filled ki-setting-2 text-lg">
                    </i>
                  </span>
                  <span
                    class="menu-title text-sm font-medium text-gray-800 menu-item-active:text-primary menu-link-hover:!text-primary">
                    My Account
                  </span>
                  <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                    <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                    </i>
                    <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                    </i>
                  </span>
                </div>
                <div
                  class="menu-accordion relative gap-0.5 ps-[10px] before:absolute before:bottom-0 before:start-[20px] before:top-0 before:border-s before:border-gray-200">
                  <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                    <div
                      class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                      tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title me-1 text-2sm font-normal text-gray-800 menu-item-active:font-medium menu-item-active:text-primary menu-link-hover:!text-primary">
                        Account Home
                      </span>
                      <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                        </i>
                        <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                        </i>
                      </span>
                    </div>
                    <div
                      class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200">
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/home/get-started.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Get Started
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/home/user-profile.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            User Profile
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/home/company-profile.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Company Profile
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/home/settings-sidebar.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Settings - With Sidebar
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/home/settings-enterprise.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Settings - Enterprise
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/home/settings-plain.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Settings - Plain
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/home/settings-modal.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Settings - Modal
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                    <div
                      class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                      tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title me-1 text-2sm font-normal text-gray-800 menu-item-active:font-medium menu-item-active:text-primary menu-link-hover:!text-primary">
                        Billing
                      </span>
                      <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                        </i>
                        <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                        </i>
                      </span>
                    </div>
                    <div
                      class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200">
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/billing/basic.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Billing - Basic
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/billing/enterprise.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Billing - Enterprise
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/billing/plans.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Plans
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/billing/history.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Billing History
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                    <div
                      class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                      tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title me-1 text-2sm font-normal text-gray-800 menu-item-active:font-medium menu-item-active:text-primary menu-link-hover:!text-primary">
                        Security
                      </span>
                      <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                        </i>
                        <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                        </i>
                      </span>
                    </div>
                    <div
                      class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200">
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/security/get-started.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Get Started
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/security/overview.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Security Overview
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/security/allowed-ip-addresses.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Allowed IP Addresses
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/security/privacy-settings.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Privacy Settings
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/security/device-management.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Device Management
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/security/backup-and-recovery.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Backup & Recovery
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/security/current-sessions.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Current Sessions
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/security/security-log.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Security Log
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                    <div
                      class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                      tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title me-1 text-2sm font-normal text-gray-800 menu-item-active:font-medium menu-item-active:text-primary menu-link-hover:!text-primary">
                        Members & Roles
                      </span>
                      <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                        </i>
                        <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                        </i>
                      </span>
                    </div>
                    <div
                      class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200">
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/members/team-starter.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Teams Starter
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/members/teams.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Teams
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/members/team-info.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Team Info
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/members/members-starter.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Members Starter
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/members/team-members.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Team Members
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/members/import-members.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Import Members
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/members/roles.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Roles
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/members/permissions-toggle.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Permissions - Toggler
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/members/permissions-check.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Permissions - Check
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="menu-item">
                    <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                      href="html/demo1/account/integrations.html" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                        Integrations
                      </span>
                    </a>
                  </div>
                  <div class="menu-item">
                    <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                      href="html/demo1/account/notifications.html" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                        Notifications
                      </span>
                    </a>
                  </div>
                  <div class="menu-item">
                    <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                      href="html/demo1/account/api-keys.html" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                        API Keys
                      </span>
                    </a>
                  </div>
                  <div class="menu-item flex-col-reverse" data-menu-item-toggle="accordion"
                    data-menu-item-trigger="click">
                    <div
                      class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                      tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span class="menu-title text-2sm font-normal text-gray-600 dark:text-gray-500">
                        <span class="hidden menu-item-show:!flex">
                          Show less
                        </span>
                        <span class="flex menu-item-show:hidden">
                          Show 3 more
                        </span>
                      </span>
                      <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                        </i>
                        <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                        </i>
                      </span>
                    </div>
                    <div class="menu-accordion gap-0.5">
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/appearance.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Appearance
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/invite-a-friend.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Invite a Friend
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/account/activity.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Activity
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                <div
                  class="menu-link flex grow cursor-pointer items-center gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                  tabindex="0">
                  <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                    <i class="ki-filled ki-users text-lg">
                    </i>
                  </span>
                  <span
                    class="menu-title text-sm font-medium text-gray-800 menu-item-active:text-primary menu-link-hover:!text-primary">
                    Network
                  </span>
                  <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                    <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                    </i>
                    <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                    </i>
                  </span>
                </div>
                <div
                  class="menu-accordion relative gap-0.5 ps-[10px] before:absolute before:bottom-0 before:start-[20px] before:top-0 before:border-s before:border-gray-200">
                  <div class="menu-item">
                    <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                      href="html/demo1/network/get-started.html" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                        Get Started
                      </span>
                    </a>
                  </div>
                  <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                    <div
                      class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                      tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title me-1 text-2sm font-normal text-gray-800 menu-item-active:font-medium menu-item-active:text-primary menu-link-hover:!text-primary">
                        User Cards
                      </span>
                      <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                        </i>
                        <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                        </i>
                      </span>
                    </div>
                    <div
                      class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200">
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/network/user-cards/mini-cards.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Mini Cards
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/network/user-cards/team-crew.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Team Crew
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/network/user-cards/author.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Author
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/network/user-cards/nft.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            NFT
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/network/user-cards/social.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Social
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                    <div
                      class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                      tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title me-1 text-2sm font-normal text-gray-800 menu-item-active:font-medium menu-item-active:text-primary menu-link-hover:!text-primary">
                        User Table
                      </span>
                      <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                        </i>
                        <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                        </i>
                      </span>
                    </div>
                    <div
                      class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200">
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/network/user-table/team-crew.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Team Crew
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/network/user-table/app-roster.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            App Roster
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/network/user-table/market-authors.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Market Authors
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/network/user-table/saas-users.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            SaaS Users
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/network/user-table/store-clients.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Store Clients
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/network/user-table/visitors.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Visitors
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="menu-label grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px]"
                      href="#" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span class="menu-title text-2sm font-normal text-gray-800">
                        Cooperations
                      </span>
                      <span class="menu-badge me-[-10px]">
                        <span class="badge badge-xs">
                          Soon
                        </span>
                      </span>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="menu-label grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px]"
                      href="#" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span class="menu-title text-2sm font-normal text-gray-800">
                        Leads
                      </span>
                      <span class="menu-badge me-[-10px]">
                        <span class="badge badge-xs">
                          Soon
                        </span>
                      </span>
                    </div>
                  </div>
                  <div class="menu-item">
                    <div class="menu-label grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px]"
                      href="#" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span class="menu-title text-2sm font-normal text-gray-800">
                        Donators
                      </span>
                      <span class="menu-badge me-[-10px]">
                        <span class="badge badge-xs">
                          Soon
                        </span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                <div
                  class="menu-link flex grow cursor-pointer items-center gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                  tabindex="0">
                  <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                    <i class="ki-filled ki-security-user text-lg">
                    </i>
                  </span>
                  <span
                    class="menu-title text-sm font-medium text-gray-800 menu-item-active:text-primary menu-link-hover:!text-primary">
                    Authentication
                  </span>
                  <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                    <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                    </i>
                    <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                    </i>
                  </span>
                </div>
                <div
                  class="menu-accordion relative gap-0.5 ps-[10px] before:absolute before:bottom-0 before:start-[20px] before:top-0 before:border-s before:border-gray-200">
                  <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                    <div
                      class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                      tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title me-1 text-2sm font-normal text-gray-800 menu-item-active:font-medium menu-item-active:text-primary menu-link-hover:!text-primary">
                        Classic
                      </span>
                      <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                        </i>
                        <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                        </i>
                      </span>
                    </div>
                    <div
                      class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200">
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/authentication/classic/sign-in.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Sign In
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/authentication/classic/sign-up.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Sign Up
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/authentication/classic/2fa.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            2FA
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/authentication/classic/check-email.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Check Email
                          </span>
                        </a>
                      </div>
                      <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                        <div
                          class="menu-link grow cursor-pointer gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                          tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title me-1 text-2sm font-normal text-gray-800 menu-item-active:font-medium menu-item-active:text-primary menu-link-hover:!text-primary">
                            Reset Password
                          </span>
                          <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                            </i>
                            <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                            </i>
                          </span>
                        </div>
                        <div
                          class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200">
                          <div class="menu-item">
                            <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                              href="html/demo1/authentication/classic/reset-password/enter-email.html" tabindex="0">
                              <span
                                class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                              </span>
                              <span
                                class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                                Enter Email
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                              href="html/demo1/authentication/classic/reset-password/check-email.html" tabindex="0">
                              <span
                                class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                              </span>
                              <span
                                class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                                Check Email
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                              href="html/demo1/authentication/classic/reset-password/change-password.html"
                              tabindex="0">
                              <span
                                class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                              </span>
                              <span
                                class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                                Change Password
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                              href="html/demo1/authentication/classic/reset-password/password-changed.html"
                              tabindex="0">
                              <span
                                class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                              </span>
                              <span
                                class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                                Password is Changed
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                    <div
                      class="menu-link grow cursor-pointer gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                      tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title me-1 text-2sm font-normal text-gray-800 menu-item-active:font-medium menu-item-active:text-primary menu-link-hover:!text-primary">
                        Branded
                      </span>
                      <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                        <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                        </i>
                        <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                        </i>
                      </span>
                    </div>
                    <div
                      class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200">
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/authentication/branded/sign-in.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Sign In
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/authentication/branded/sign-up.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Sign Up
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/authentication/branded/2fa.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            2FA
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                          href="html/demo1/authentication/branded/check-email.html" tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                            Check Email
                          </span>
                        </a>
                      </div>
                      <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                        <div
                          class="menu-link grow cursor-pointer gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px]"
                          tabindex="0">
                          <span
                            class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                          </span>
                          <span
                            class="menu-title me-1 text-2sm font-normal text-gray-800 menu-item-active:font-medium menu-item-active:text-primary menu-link-hover:!text-primary">
                            Reset Password
                          </span>
                          <span class="menu-arrow me-[-10px] ms-1 w-[20px] shrink-0 justify-end text-gray-400">
                            <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                            </i>
                            <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                            </i>
                          </span>
                        </div>
                        <div
                          class="menu-accordion relative gap-0.5 ps-[22px] before:absolute before:bottom-0 before:start-[32px] before:top-0 before:border-s before:border-gray-200">
                          <div class="menu-item">
                            <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                              href="html/demo1/authentication/branded/reset-password/enter-email.html" tabindex="0">
                              <span
                                class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                              </span>
                              <span
                                class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                                Enter Email
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                              href="html/demo1/authentication/branded/reset-password/check-email.html" tabindex="0">
                              <span
                                class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                              </span>
                              <span
                                class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                                Check Email
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                              href="html/demo1/authentication/branded/reset-password/change-password.html"
                              tabindex="0">
                              <span
                                class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                              </span>
                              <span
                                class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                                Change Password
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link grow items-center gap-[5px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                              href="html/demo1/authentication/branded/reset-password/password-changed.html"
                              tabindex="0">
                              <span
                                class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                              </span>
                              <span
                                class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                                Password is Changed
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="menu-item">
                    <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                      href="html/demo1/authentication/welcome-message.html" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                        Welcome Message
                      </span>
                    </a>
                  </div>
                  <div class="menu-item">
                    <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                      href="html/demo1/authentication/account-deactivated.html" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                        Account Deactivated
                      </span>
                    </a>
                  </div>
                  <div class="menu-item">
                    <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                      href="html/demo1/authentication/error-404.html" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                        Error 404
                      </span>
                    </a>
                  </div>
                  <div class="menu-item">
                    <a class="menu-link grow items-center gap-[14px] border border-transparent py-[8px] pe-[10px] ps-[10px] hover:rounded-lg hover:bg-secondary-active menu-item-active:rounded-lg menu-item-active:bg-secondary-active dark:hover:border-gray-100 dark:hover:bg-coal-300 dark:menu-item-active:border-gray-100 dark:menu-item-active:bg-coal-300"
                      href="html/demo1/authentication/error-500.html" tabindex="0">
                      <span
                        class="menu-item-hover:before:bg-primary menu-bullet relative -start-[3px] flex w-[6px] before:absolute before:top-0 before:size-[6px] before:-translate-y-1/2 before:rounded-full menu-item-active:before:bg-primary rtl:start-0 rtl:before:translate-x-1/2">
                      </span>
                      <span
                        class="menu-title text-2sm font-normal text-gray-800 menu-item-active:font-semibold menu-item-active:text-primary menu-link-hover:!text-primary">
                        Error 500
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="menu-item pb-px pt-2.25">
                <span class="menu-heading pe-[10px] ps-[10px] text-2sm font-medium uppercase text-gray-500">
                  Apps
                </span>
              </div>
              <div class="menu-item">
                <div class="menu-label gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                  href="" tabindex="0">
                  <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                    <i class="ki-filled ki-users text-lg">
                    </i>
                  </span>
                  <span class="menu-title text-sm font-medium text-gray-800">
                    User Management
                  </span>
                  <span class="menu-badge me-[-10px]">
                    <span class="badge badge-xs">
                      Soon
                    </span>
                  </span>
                </div>
              </div>
              <div class="menu-item">
                <div class="menu-label gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                  href="" tabindex="0">
                  <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                    <i class="ki-filled ki-questionnaire-tablet text-lg">
                    </i>
                  </span>
                  <span class="menu-title text-sm font-medium text-gray-800">
                    Projects
                  </span>
                  <span class="menu-badge me-[-10px]">
                    <span class="badge badge-xs">
                      Soon
                    </span>
                  </span>
                </div>
              </div>
              <div class="menu-item">
                <div class="menu-label gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                  href="" tabindex="0">
                  <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                    <i class="ki-filled ki-handcart text-lg">
                    </i>
                  </span>
                  <span class="menu-title text-sm font-medium text-gray-800">
                    eCommerce
                  </span>
                  <span class="menu-badge me-[-10px]">
                    <span class="badge badge-xs">
                      Soon
                    </span>
                  </span>
                </div>
              </div>
              <div class="menu-item pb-px pt-2.25">
                <span class="menu-heading pe-[10px] ps-[10px] text-2sm font-medium uppercase text-gray-500">
                  Miscellaneous
                </span>
              </div>
              <div class="menu-item">
                <div class="menu-label gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                  href="" tabindex="0">
                  <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                    <i class="ki-filled ki-some-files text-lg">
                    </i>
                  </span>
                  <span class="menu-title text-sm font-medium text-gray-800">
                    Modals
                  </span>
                  <span class="menu-badge me-[-10px]">
                    <span class="badge badge-xs">
                      Soon
                    </span>
                  </span>
                </div>
              </div>
              <div class="menu-item">
                <div class="menu-label gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]"
                  href="" tabindex="0">
                  <span class="menu-icon w-[20px] items-start text-gray-500 dark:text-gray-400">
                    <i class="ki-filled ki-note-2 text-lg">
                    </i>
                  </span>
                  <span class="menu-title text-sm font-medium text-gray-800">
                    Wizards
                  </span>
                  <span class="menu-badge me-[-10px]">
                    <span class="badge badge-xs">
                      Soon
                    </span>
                  </span>
                </div>
              </div>
            </div>
            <!-- End of Sidebar Menu -->
          </div>
        </div>
      </div>
      <!-- End of Sidebar -->
      <!-- Wrapper -->
      <div class="wrapper flex grow flex-col">
        <!-- Header -->
        <header
          class="header fixed end-0 start-0 top-0 z-10 flex shrink-0 items-stretch bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]"
          id="header" data-sticky="true" data-sticky-class="shadow-sm" data-sticky-name="header">
          <!-- Container -->
          <div class="container-fixed flex items-stretch justify-between lg:gap-4" id="header_container">
            <!-- Mobile Logo -->
            <div class="-ms-1 flex items-center gap-1 lg:hidden">
              <a class="shrink-0" href="html/demo1.html">
                <img class="max-h-[25px] w-full" src="assets/media/app/mini-logo.svg" />
              </a>
              <div class="flex items-center">
                <button class="btn-icon btn btn-sm btn-clear btn-light" data-drawer-toggle="#sidebar">
                  <i class="ki-filled ki-menu">
                  </i>
                </button>
                <button class="btn-icon btn btn-sm btn-clear btn-light" data-drawer-toggle="#mega_menu_wrapper">
                  <i class="ki-filled ki-burger-menu-2">
                  </i>
                </button>
              </div>
            </div>
            <!-- End of Mobile Logo -->
            <!--Megamenu Contaoner-->
            <div class="flex items-stretch" id="mega_menu_container">
              <!--Megamenu Inner-->
              <div class="flex items-stretch" data-reparent="true" data-reparent-mode="prepend|lg:prepend"
                data-reparent-target="body|lg:#mega_menu_container">
                <!--Megamenu Wrapper-->
                <div class="hidden lg:flex lg:items-stretch" id="mega_menu_wrapper" data-drawer="true"
                  data-drawer-class="drawer drawer-start fixed z-10 top-0 bottom-0 w-full me-5 max-w-[250px] p-5 lg:p-0 overflow-auto"
                  data-drawer-enable="true|lg:false">
                  <!--Megamenu-->
                  <div class="menu flex-col gap-5 lg:flex-row lg:gap-7.5" id="mega_menu" data-menu="true">
                    <!--Megamenu Item-->
                    <div class="menu-item active">
                      <a class="menu-item-hover:text-primary menu-link text-nowrap text-sm font-medium text-gray-800 menu-item-active:font-medium menu-item-active:text-gray-900"
                        href="html/demo1.html">
                        <span class="menu-title text-nowrap">
                          Home
                        </span>
                      </a>
                    </div>
                    <!--End of Megamenu Item-->
                    <!--Megamenu Item-->
                    <div class="menu-item" data-menu-item-placement="bottom-start"
                      data-menu-item-placement-rtl="bottom-end" data-menu-item-toggle="accordion|lg:dropdown"
                      data-menu-item-trigger="click|lg:hover">
                      <div
                        class="menu-link text-sm text-gray-800 menu-item-active:font-medium menu-item-active:text-gray-900 menu-item-here:font-medium menu-item-here:text-gray-900 menu-item-show:text-primary menu-link-hover:text-primary">
                        <span class="menu-title text-nowrap">
                          Profiles
                        </span>
                        <span class="menu-arrow flex lg:hidden">
                          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                          </i>
                          <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                          </i>
                        </span>
                      </div>
                      <div class="menu-dropdown w-full gap-0 lg:max-w-[875px]">
                        <div class="pb-2 pt-4 lg:p-7.5">
                          <div class="grid gap-5 lg:grid-cols-2 lg:gap-10">
                            <div class="menu menu-default menu-fit flex-col">
                              <h3 class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5">
                                Profiles
                              </h3>
                              <div class="grid lg:grid-cols-2 lg:gap-5">
                                <div class="flex flex-col">
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/profiles/default.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-badge">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Default
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/profiles/creator.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-coffee">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Creator
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/profiles/company.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-abstract-41">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Company
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/profiles/nft.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-bitcoin">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        NFT
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/profiles/blogger.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-message-text">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Blogger
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/profiles/crm.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-devices">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        CRM
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/profiles/gamer.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-ghost">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Gamer
                                      </span>
                                    </a>
                                  </div>
                                </div>
                                <div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/profiles/feeds.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-book">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Feeds
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/profiles/plain.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-files">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Plain
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/profiles/modal.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-mouse-square">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Modal
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="#" tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-financial-schedule">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Freelancer
                                      </span>
                                      <span class="menu-badge">
                                        <span class="badge badge-xs">
                                          Soon
                                        </span>
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="#" tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-technology-4">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Developer
                                      </span>
                                      <span class="menu-badge">
                                        <span class="badge badge-xs">
                                          Soon
                                        </span>
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="#" tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-users">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Team
                                      </span>
                                      <span class="menu-badge">
                                        <span class="badge badge-xs">
                                          Soon
                                        </span>
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="#" tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-calendar-tick">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Events
                                      </span>
                                      <span class="menu-badge">
                                        <span class="badge badge-xs">
                                          Soon
                                        </span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="menu menu-default menu-fit flex-col">
                              <h3 class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5">
                                Other Pages
                              </h3>
                              <div class="grid lg:grid-cols-2 lg:gap-5">
                                <div class="flex flex-col">
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/projects/3-columns.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-element-6">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Projects - 3 Columns
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/projects/2-columns.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-element-4">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Projects - 2 Columns
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/works.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-office-bag">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Works
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/teams.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-people">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Teams
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/network.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-icon">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Network
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/activity.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-chart-line-up-2">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Activity
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/campaigns/card.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-element-11">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Campaigns - Card
                                      </span>
                                    </a>
                                  </div>
                                </div>
                                <div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/campaigns/list.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-kanban">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Campaigns - List
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/public-profile/empty.html"
                                      tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-file-sheet">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Empty Page
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="#" tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-document">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Documents
                                      </span>
                                      <span class="menu-badge">
                                        <span class="badge badge-xs">
                                          Soon
                                        </span>
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="#" tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-award">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Badges
                                      </span>
                                      <span class="menu-badge">
                                        <span class="badge badge-xs">
                                          Soon
                                        </span>
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="#" tabindex="0">
                                      <span class="menu-icon">
                                        <i class="ki-filled ki-gift">
                                        </i>
                                      </span>
                                      <span class="menu-title grow-0">
                                        Awards
                                      </span>
                                      <span class="menu-badge">
                                        <span class="badge badge-xs">
                                          Soon
                                        </span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="flex flex-wrap items-center gap-2.5 rounded-xl border border-gray-300 bg-light-active px-4 py-4 dark:bg-coal-500 lg:justify-between lg:rounded-t-none lg:border-0 lg:border-t lg:border-t-gray-300 lg:px-7.5 lg:py-5 dark:lg:border-t-gray-100">
                          <div class="flex flex-col gap-1.5">
                            <div class="text-md font-semibold leading-none text-gray-900">
                              Read to Get Started ?
                            </div>
                            <div class="fomt-medium text-2sm text-gray-600">
                              Take your docs to the next level of Metronic
                            </div>
                          </div>
                          <a class="btn btn-sm btn-dark" href="#">
                            Read Documentation
                          </a>
                        </div>
                      </div>
                    </div>
                    <!--End of Megamenu Item-->
                    <!--Megamenu Item-->
                    <div class="menu-item" data-menu-item-offset="-300px, 0" data-menu-item-offset-rtl="300px, 0"
                      data-menu-item-overflow="true" data-menu-item-placement="bottom-start"
                      data-menu-item-placement-rtl="bottom-end" data-menu-item-toggle="accordion|lg:dropdown"
                      data-menu-item-trigger="click|lg:hover">
                      <div
                        class="menu-link text-sm font-medium text-gray-700 menu-item-active:font-semibold menu-item-active:text-gray-900 menu-item-here:font-semibold menu-item-here:text-gray-900 menu-item-show:text-primary menu-link-hover:text-primary">
                        <span class="menu-title text-nowrap">
                          My Account
                        </span>
                        <span class="menu-arrow flex lg:hidden">
                          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                          </i>
                          <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                          </i>
                        </span>
                      </div>
                      <div class="menu-dropdown w-full flex-col gap-0 lg:max-w-[1240px] lg:flex-row">
                        <div
                          class="mt-2 shrink-0 rounded-xl bg-light-active px-3 py-4 dark:bg-coal-500 lg:mt-0 lg:w-[250px] lg:rounded-l-xl lg:rounded-r-none lg:border-r lg:border-r-gray-200 lg:p-7.5 dark:lg:border-r-coal-100">
                          <h3 class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5">
                            General Pages
                          </h3>
                          <div class="menu menu-default menu-fit flex-col">
                            <div class="menu-item">
                              <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                href="html/demo1/account/integrations.html">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-technology-2">
                                  </i>
                                </span>
                                <span class="menu-title grow-0">
                                  Integrations
                                </span>
                              </a>
                            </div>
                            <div class="menu-item">
                              <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                href="html/demo1/account/notifications.html">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-notification-1">
                                  </i>
                                </span>
                                <span class="menu-title grow-0">
                                  Notifications
                                </span>
                              </a>
                            </div>
                            <div class="menu-item">
                              <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                href="html/demo1/account/api-keys.html">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-key">
                                  </i>
                                </span>
                                <span class="menu-title grow-0">
                                  API Keys
                                </span>
                              </a>
                            </div>
                            <div class="menu-item">
                              <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                href="html/demo1/account/appearance.html">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-eye">
                                  </i>
                                </span>
                                <span class="menu-title grow-0">
                                  Appearance
                                </span>
                              </a>
                            </div>
                            <div class="menu-item">
                              <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                href="html/demo1/account/invite-a-friend.html">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-user-tick">
                                  </i>
                                </span>
                                <span class="menu-title grow-0">
                                  Invite a Friend
                                </span>
                              </a>
                            </div>
                            <div class="menu-item">
                              <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                href="html/demo1/account/activity.html">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-support">
                                  </i>
                                </span>
                                <span class="menu-title grow-0">
                                  Activity
                                </span>
                              </a>
                            </div>
                            <div class="menu-item">
                              <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                href="">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-verify">
                                  </i>
                                </span>
                                <span class="menu-title grow-0">
                                  Brand
                                </span>
                                <span class="menu-badge">
                                  <span class="badge badge-xs">
                                    Soon
                                  </span>
                                </span>
                              </a>
                            </div>
                            <div class="menu-item">
                              <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                href="">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-euro">
                                  </i>
                                </span>
                                <span class="menu-title grow-0">
                                  Get Paid
                                </span>
                                <span class="menu-badge">
                                  <span class="badge badge-xs">
                                    Soon
                                  </span>
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="grow pb-2 pt-4 lg:p-7.5 lg:pb-5">
                          <div class="grid gap-5 lg:grid-cols-5">
                            <div class="flex flex-col">
                              <h3 class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5">
                                Account Home
                              </h3>
                              <div class="menu menu-default menu-fit flex-col">
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/home/get-started.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Get Started
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/home/user-profile.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      User Profile
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/home/company-profile.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Company Profile
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      With Sidebar
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/home/settings-enterprise.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Enterprise
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/home/settings-plain.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Plain
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/home/settings-modal.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Modal
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="flex flex-col">
                              <h3 class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5">
                                Billing
                              </h3>
                              <div class="menu menu-default menu-fit flex-col">
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/billing/basic.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Basic Billing
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/billing/enterprise.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Enterprise
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/billing/plans.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Plans
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/billing/history.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Billing History
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="" tabindex="0">
                                    <span class="menu-title grow-0">
                                      Tax Info
                                    </span>
                                    <span class="menu-badge">
                                      <span class="badge badge-xs">
                                        Soon
                                      </span>
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="" tabindex="0">
                                    <span class="menu-title grow-0">
                                      Invoices
                                    </span>
                                    <span class="menu-badge">
                                      <span class="badge badge-xs">
                                        Soon
                                      </span>
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="" tabindex="0">
                                    <span class="menu-title grow-0">
                                      Gateaways
                                    </span>
                                    <span class="menu-badge">
                                      <span class="badge badge-xs">
                                        Soon
                                      </span>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="flex flex-col">
                              <h3 class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5">
                                Security
                              </h3>
                              <div class="menu menu-default menu-fit flex-col">
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/security/get-started.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Get Started
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/security/overview.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Security Overview
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/security/allowed-ip-addresses.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      IP Addresses
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/security/privacy-settings.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Privacy Settings
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/security/device-management.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Device Management
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/security/backup-and-recovery.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Backup & Recovery
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/security/current-sessions.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Current Sessions
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/security/security-log.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Security Log
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="flex flex-col">
                              <h3 class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5">
                                Members & Roles
                              </h3>
                              <div class="menu menu-default menu-fit flex-col">
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/members/team-starter.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Teams Starter
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/members/teams.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Teams
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/members/team-info.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Team Info
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/members/members-starter.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Members Starter
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/members/team-members.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Team Members
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/members/import-members.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Import Members
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/members/roles.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Roles
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/members/permissions-toggle.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Persmissions - Toggler
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/members/permissions-check.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Persmissions - Check
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="flex flex-col">
                              <h3 class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5">
                                Other Pages
                              </h3>
                              <div class="menu menu-default menu-fit flex-col">
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/integrations.html" tabindex="0">
                                    <span class="menu-title grow-0">
                                      Integrations
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/notifications.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Notifications
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/api-keys.html" tabindex="0">
                                    <span class="menu-title grow-0">
                                      API Keys
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/appearance.html" tabindex="0">
                                    <span class="menu-title grow-0">
                                      Appearance
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/invite-a-friend.html"
                                    tabindex="0">
                                    <span class="menu-title grow-0">
                                      Invite a Friend
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/activity.html" tabindex="0">
                                    <span class="menu-title grow-0">
                                      Activity
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--End of Megamenu Item-->
                    <!--Megamenu Item-->
                    <div class="menu-item" data-menu-item-offset="-300px, 0" data-menu-item-offset-rtl="300px, 0"
                      data-menu-item-overflow="true" data-menu-item-placement="bottom-start"
                      data-menu-item-placement-rtl="bottom-end" data-menu-item-toggle="accordion|lg:dropdown"
                      data-menu-item-trigger="click|lg:hover">
                      <div
                        class="menu-link text-sm font-medium text-gray-700 menu-item-active:font-semibold menu-item-active:text-gray-900 menu-item-here:font-semibold menu-item-here:text-gray-900 menu-item-show:text-primary menu-link-hover:text-primary">
                        <span class="menu-title text-nowrap">
                          Network
                        </span>
                        <span class="menu-arrow flex lg:hidden">
                          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                          </i>
                          <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                          </i>
                        </span>
                      </div>
                      <div class="menu-dropdown w-full flex-col gap-0 lg:max-w-[670px]">
                        <div class="flex flex-col lg:flex-row">
                          <div
                            class="mt-2 flex shrink-0 flex-col gap-5 rounded-xl bg-light-active px-3 py-4 dark:bg-coal-500 lg:mt-0 lg:w-[250px] lg:rounded-none lg:rounded-tl-xl lg:border-r lg:border-r-gray-200 lg:p-7.5 dark:lg:border-r-coal-100">
                            <h3 class="h-3.5 ps-2.5 text-sm font-semibold leading-none text-gray-800">
                              General Pages
                            </h3>
                            <div class="menu menu-default menu-fit flex-col">
                              <div class="menu-item">
                                <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                  href="#">
                                  <span class="menu-icon">
                                    <i class="ki-filled ki-flag">
                                    </i>
                                  </span>
                                  <span class="menu-title grow-0">
                                    Get Started
                                  </span>
                                </a>
                              </div>
                              <div class="menu-item">
                                <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                  href="#">
                                  <span class="menu-icon">
                                    <i class="ki-filled ki-users">
                                    </i>
                                  </span>
                                  <span class="menu-title grow-0">
                                    Colleagues
                                  </span>
                                  <span class="menu-badge">
                                    <span class="badge badge-xs">
                                      Soon
                                    </span>
                                  </span>
                                </a>
                              </div>
                              <div class="menu-item">
                                <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                  href="#">
                                  <span class="menu-icon">
                                    <i class="ki-filled ki-heart">
                                    </i>
                                  </span>
                                  <span class="menu-title grow-0">
                                    Donators
                                  </span>
                                  <span class="menu-badge">
                                    <span class="badge badge-xs">
                                      Soon
                                    </span>
                                  </span>
                                </a>
                              </div>
                              <div class="menu-item">
                                <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                  href="#">
                                  <span class="menu-icon">
                                    <i class="ki-filled ki-abstract-21">
                                    </i>
                                  </span>
                                  <span class="menu-title grow-0">
                                    Leads
                                  </span>
                                  <span class="menu-badge">
                                    <span class="badge badge-xs">
                                      Soon
                                    </span>
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="grow pb-2 pt-4 lg:p-7.5 lg:pb-5">
                            <div class="grid gap-5 lg:grid-cols-2">
                              <div class="flex flex-col gap-5">
                                <h3
                                  class="flex h-3.5 items-center gap-1.5 ps-2.5 text-sm font-semibold leading-none text-gray-800">
                                  User Cards
                                </h3>
                                <div class="menu menu-default menu-fit flex-col">
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/network/user-cards/mini-cards.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Mini Cards
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/network/user-cards/team-crew.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Team Crew
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/network/user-cards/nft.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Authors
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/network/user-cards/social.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        NFT Users
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="#" tabindex="0">
                                      <span class="menu-title grow-0">
                                        Social Users
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="#" tabindex="0">
                                      <span class="menu-title grow-0">
                                        Gamers
                                      </span>
                                      <span class="menu-badge">
                                        <span class="badge badge-xs">
                                          Soon
                                        </span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="flex flex-col gap-5">
                                <h3
                                  class="flex h-3.5 items-center gap-1.5 ps-2.5 text-sm font-semibold leading-none text-gray-800">
                                  User Base
                                  <span class="badge badge-xs badge-outline badge-primary left-auto">
                                    Datatables
                                  </span>
                                </h3>
                                <div class="menu menu-default menu-fit flex-col">
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/network/user-table/team-crew.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Team Crew
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/network/user-table/app-roster.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        App Roster
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/network/user-table/market-authors.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Market Authors
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/network/user-table/saas-users.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        SaaS Users
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/network/user-table/store-clients.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Store Clients
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/network/user-table/visitors.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Visitors
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="flex flex-wrap items-center gap-2.5 rounded-xl border border-gray-300 bg-light-active px-4 py-4 dark:bg-coal-500 lg:justify-between lg:rounded-t-none lg:border-0 lg:border-t lg:border-t-gray-300 lg:px-7.5 lg:py-5 dark:lg:border-t-gray-100">
                          <div class="flex flex-col gap-1.5">
                            <div class="text-md font-semibold leading-none text-gray-900">
                              Read to Get Started ?
                            </div>
                            <div class="fomt-medium text-2sm text-gray-600">
                              Take your docs to the next level of Metronic
                            </div>
                          </div>
                          <a class="btn btn-sm btn-dark" href="#">
                            Read Documentation
                          </a>
                        </div>
                      </div>
                    </div>
                    <!--End of Megamenu Item-->
                    <!--Megamenu Item-->
                    <div class="menu-item" data-menu-item-offset="-300px, 0" data-menu-item-offset-rtl="300px, 0"
                      data-menu-item-overflow="true" data-menu-item-placement="bottom-start"
                      data-menu-item-placement-rtl="bottom-end" data-menu-item-toggle="accordion|lg:dropdown"
                      data-menu-item-trigger="click|lg:hover">
                      <div
                        class="menu-link text-sm font-medium text-gray-700 menu-item-active:font-semibold menu-item-active:text-gray-900 menu-item-here:font-semibold menu-item-here:text-gray-900 menu-item-show:text-primary menu-link-hover:text-primary">
                        <span class="menu-title text-nowrap">
                          Authentication
                        </span>
                        <span class="menu-arrow flex lg:hidden">
                          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                          </i>
                          <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                          </i>
                        </span>
                      </div>
                      <div class="menu-dropdown w-full flex-col gap-0 lg:max-w-[670px]">
                        <div class="flex flex-col lg:flex-row">
                          <div class="grow pb-2 pt-4 lg:p-7.5 lg:pb-5">
                            <div class="grid gap-5 lg:grid-cols-2">
                              <div class="flex flex-col">
                                <h3 class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5">
                                  Classic Layout
                                </h3>
                                <div class="menu menu-default menu-fit flex-col">
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/authentication/classic/sign-in.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Sign In
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/authentication/classic/sign-up.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Sign Up
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/authentication/classic/2fa.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        2FA
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/authentication/classic/check-email.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Check Email
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item pt-1">
                                    <span class="p-2.5 text-2sm font-medium text-gray-600">
                                      Reset Password
                                    </span>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link"
                                      href="html/demo1/authentication/classic/reset-password/enter-email.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Enter Email
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link"
                                      href="html/demo1/authentication/classic/reset-password/check-email.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Check Email
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link"
                                      href="html/demo1/authentication/classic/reset-password/change-password.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Change Password
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link"
                                      href="html/demo1/authentication/classic/reset-password/password-changed.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Password is Changed
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="flex flex-col">
                                <h3 class="mb-2 ps-2.5 text-sm font-semibold leading-none text-gray-800 lg:mb-5">
                                  Branded Layout
                                </h3>
                                <div class="menu menu-default menu-fit flex-col">
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/authentication/branded/sign-in.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Sign In
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/authentication/branded/sign-up.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Sign Up
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/authentication/branded/2fa.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        2FA
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link" href="html/demo1/authentication/branded/check-email.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Check Email
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item pt-1">
                                    <span class="p-2.5 text-2sm font-medium text-gray-600">
                                      Reset Password
                                    </span>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link"
                                      href="html/demo1/authentication/branded/reset-password/enter-email.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Enter Email
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link"
                                      href="html/demo1/authentication/branded/reset-password/check-email.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Check Email
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link"
                                      href="html/demo1/authentication/branded/reset-password/change-password.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Change Password
                                      </span>
                                    </a>
                                  </div>
                                  <div class="menu-item">
                                    <a class="menu-link"
                                      href="html/demo1/authentication/branded/reset-password/password-changed.html"
                                      tabindex="0">
                                      <span class="menu-title grow-0">
                                        Password is Changed
                                      </span>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="mb-4 shrink-0 rounded-xl bg-light-active px-3 py-4 dark:bg-coal-500 lg:mb-0 lg:w-[250px] lg:rounded-l-none lg:rounded-r-xl lg:border-l lg:border-l-gray-200 lg:p-7.5 dark:lg:border-l-coal-100">
                            <h3 class="mb-5 ps-2.5 text-sm font-semibold leading-none text-gray-800">
                              Other Pages
                            </h3>
                            <div class="menu menu-default menu-fit flex-col">
                              <div class="menu-item">
                                <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                  href="html/demo1/authentication/welcome-message.html">
                                  <span class="menu-icon">
                                    <i class="ki-filled ki-like-2">
                                    </i>
                                  </span>
                                  <span class="menu-title grow-0">
                                    Welcome Message
                                  </span>
                                </a>
                              </div>
                              <div class="menu-item">
                                <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                  href="html/demo1/authentication/account-deactivated.html">
                                  <span class="menu-icon">
                                    <i class="ki-filled ki-shield-cross">
                                    </i>
                                  </span>
                                  <span class="menu-title grow-0">
                                    Account Deactivated
                                  </span>
                                </a>
                              </div>
                              <div class="menu-item">
                                <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                  href="html/demo1/authentication/error-404.html">
                                  <span class="menu-icon">
                                    <i class="ki-filled ki-message-question">
                                    </i>
                                  </span>
                                  <span class="menu-title grow-0">
                                    Error 404
                                  </span>
                                </a>
                              </div>
                              <div class="menu-item">
                                <a class="menu-link border border-transparent menu-item-active:border-gray-200 menu-item-active:!bg-light menu-link-hover:border-gray-200 menu-link-hover:!bg-light dark:menu-item-active:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-link-hover:!bg-coal-600"
                                  href="html/demo1/authentication/error-500.html">
                                  <span class="menu-icon">
                                    <i class="ki-filled ki-information">
                                    </i>
                                  </span>
                                  <span class="menu-title grow-0">
                                    Error 500
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="flex flex-wrap items-center gap-2.5 rounded-xl border border-gray-300 bg-light-active px-4 py-4 dark:bg-coal-500 lg:justify-between lg:rounded-t-none lg:border-0 lg:border-t lg:border-t-gray-300 lg:px-7.5 lg:py-5 dark:lg:border-t-gray-100">
                          <div class="flex flex-col gap-1.5">
                            <div class="text-md font-semibold leading-none text-gray-900">
                              Read to Get Started ?
                            </div>
                            <div class="fomt-medium text-2sm text-gray-600">
                              Take your docs to the next level of Metronic
                            </div>
                          </div>
                          <a class="btn btn-sm btn-dark" href="#">
                            Read Documentation
                          </a>
                        </div>
                      </div>
                    </div>
                    <!--End of Megamenu Item-->
                    <!--Megamenu Item-->
                    <div class="menu-item" data-menu-item-offset="0,0|lg:-20px, 0"
                      data-menu-item-offset-rtl="0,0|lg:20px, 0" data-menu-item-overflow="true"
                      data-menu-item-placement="bottom-start" data-menu-item-placement-rtl="bottom-end"
                      data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
                      <div
                        class="menu-link text-sm font-medium text-gray-700 menu-item-active:font-semibold menu-item-active:text-gray-900 menu-item-here:font-semibold menu-item-here:text-gray-900 menu-item-show:text-primary menu-link-hover:text-primary">
                        <span class="menu-title text-nowrap">
                          Help
                        </span>
                        <span class="menu-arrow flex lg:hidden">
                          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                          </i>
                          <i class="ki-filled ki-minus hidden text-2xs menu-item-show:inline-flex">
                          </i>
                        </span>
                      </div>
                      <div class="menu-dropdown menu-default w-full max-w-[220px] py-2.5">
                        <div class="menu-item">
                          <a class="menu-link"
                            href="https://keenthemes.com/metronic/tailwind/docs/getting-started/installation"
                            tabindex="0">
                            <span class="menu-icon">
                              <i class="ki-filled ki-coffee">
                              </i>
                            </span>
                            <span class="menu-title grow-0">
                              Getting Started
                            </span>
                          </a>
                        </div>
                        <div class="menu-item" data-menu-item-placement="right-start"
                          data-menu-item-placement-rtl="left-start" data-menu-item-toggle="dropdown"
                          data-menu-item-trigger="click|lg:hover">
                          <div class="menu-link">
                            <span class="menu-icon">
                              <i class="ki-filled ki-information">
                              </i>
                            </span>
                            <span class="menu-title">
                              Support Forum
                            </span>
                            <span class="menu-arrow">
                              <i class="ki-filled ki-right text-3xs rtl:rotate-180 rtl:transform">
                              </i>
                            </span>
                          </div>
                          <div class="menu-dropdown menu-default w-full max-w-[175px] lg:max-w-[220px]">
                            <div class="menu-item">
                              <a class="menu-link" href="https://devs.keenthemes.com" tabindex="0">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-questionnaire-tablet">
                                  </i>
                                </span>
                                <span class="menu-title grow-0">
                                  All Questions
                                </span>
                              </a>
                            </div>
                            <div class="menu-item">
                              <a class="menu-link" href="https://devs.keenthemes.com/popular" tabindex="0">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-star">
                                  </i>
                                </span>
                                <span class="menu-title grow-0">
                                  Popular Questions
                                </span>
                              </a>
                            </div>
                            <div class="menu-item">
                              <a class="menu-link" href="https://devs.keenthemes.com/question/create"
                                tabindex="0">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-message-question">
                                  </i>
                                </span>
                                <span class="menu-title grow-0">
                                  Ask Question
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="menu-item">
                          <a class="menu-link"
                            href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license"
                            tabindex="0">
                            <span class="menu-icon">
                              <i class="ki-filled ki-subtitle">
                              </i>
                            </span>
                            <span class="menu-title">
                              Licenses & FAQ
                            </span>
                            <span class="menu-badge" data-tooltip="#menu_tooltip_3">
                              <i class="ki-filled ki-information-2 text-md text-gray-500">
                              </i>
                            </span>
                            <div class="tooltip" id="menu_tooltip_3">
                              Learn more about licenses
                            </div>
                          </a>
                        </div>
                        <div class="menu-item">
                          <a class="menu-link" href="https://keenthemes.com/metronic/tailwind/docs"
                            tabindex="0">
                            <span class="menu-icon">
                              <i class="ki-filled ki-questionnaire-tablet">
                              </i>
                            </span>
                            <span class="menu-title grow-0">
                              Documentation
                            </span>
                          </a>
                        </div>
                        <div class="menu-separator">
                        </div>
                        <div class="menu-item">
                          <a class="menu-link" href="https://keenthemes.com/contact" tabindex="0">
                            <span class="menu-icon">
                              <i class="ki-filled ki-share">
                              </i>
                            </span>
                            <span class="menu-title grow-0">
                              Contact Us
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <!--End of Megamenu Item-->
                  </div>
                  <!--End of Megamenu-->
                </div>
                <!--End of Megamenu Wrapper-->
              </div>
              <!--End of Megamenu Inner-->
            </div>
            <!--End of Megamenu Contaoner-->
            <!-- Topbar -->
            <div class="flex items-center gap-2 lg:gap-3.5">
              <button
                class="btn-icon btn btn-icon-lg size-9 rounded-full text-gray-500 hover:bg-primary-light hover:text-primary"
                data-modal-toggle="#search_modal">
                <i class="ki-filled ki-magnifier">
                </i>
              </button>
              <div class="dropdown" data-dropdown="true" data-dropdown-offset="170px, 10px"
                data-dropdown-offset-rtl="-170px, 10px" data-dropdown-placement="bottom-end"
                data-dropdown-placement-rtl="bottom-start" data-dropdown-trigger="click|lg:click">
                <button
                  class="dropdown-toggle btn-icon btn btn-icon-lg size-9 rounded-full text-gray-500 hover:bg-primary-light hover:text-primary dropdown-open:bg-primary-light dropdown-open:text-primary">
                  <i class="ki-filled ki-messages">
                  </i>
                </button>
                <div class="dropdown-content w-screen max-w-[450px] light:border-gray-300">
                  <div>
                    <div
                      class="flex items-center justify-between gap-2.5 px-5 py-2.5 text-sm font-semibold text-gray-900">
                      Chat
                      <button class="btn-icon btn btn-sm btn-clear btn-light shrink-0" data-dropdown-dismiss="true">
                        <i class="ki-filled ki-cross">
                        </i>
                      </button>
                    </div>
                    <div class="border-b border-b-gray-200">
                    </div>
                    <div class="border-b border-gray-200 py-2.5 shadow-card">
                      <div class="flex flex-wrap items-center justify-between gap-2 px-5">
                        <div class="flex flex-wrap items-center gap-2">
                          <div
                            class="flex size-11 shrink-0 items-center justify-center rounded-full border border-gray-200 bg-gray-100">
                            <img class="size-7" src="assets/media/brand-logos/gitlab.svg" alt="" />
                          </div>
                          <div class="flex flex-col">
                            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active"
                              href="#">
                              HR Team
                            </a>
                            <span class="text-2xs font-medium italic text-gray-500">
                              Jessy is typing..
                            </span>
                          </div>
                        </div>
                        <div class="flex items-center gap-2.5">
                          <div class="flex -space-x-2">
                            <div class="flex">
                              <img
                                class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                src="assets/media/avatars/300-4.png" />
                            </div>
                            <div class="flex">
                              <img
                                class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                src="assets/media/avatars/300-1.png" />
                            </div>
                            <div class="flex">
                              <img
                                class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                src="assets/media/avatars/300-2.png" />
                            </div>
                            <div class="flex">
                              <span
                                class="relative inline-flex size-6 size-[30px] shrink-0 items-center justify-center rounded-full bg-success text-3xs font-semibold leading-none text-success-inverse ring-1 ring-success-light hover:z-5">
                                +10
                              </span>
                            </div>
                          </div>
                          <div class="menu" data-menu="true">
                            <div class="menu-item" data-menu-item-offset="0, 10px"
                              data-menu-item-placement="bottom-end" data-menu-item-placement-rtl="bottom-start"
                              data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
                              <button class="menu-toggle btn-icon btn btn-sm btn-clear btn-light">
                                <i class="ki-filled ki-dots-vertical">
                                </i>
                              </button>
                              <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/members/teams.html">
                                    <span class="menu-icon">
                                      <i class="ki-filled ki-users">
                                      </i>
                                    </span>
                                    <span class="menu-title">
                                      Invite Users
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item" data-menu-item-offset="-15px, 0"
                                  data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
                                  data-menu-item-trigger="click|lg:hover">
                                  <div class="menu-link">
                                    <span class="menu-icon">
                                      <i class="ki-filled ki-people">
                                      </i>
                                    </span>
                                    <span class="menu-title">
                                      Team
                                    </span>
                                    <span class="menu-arrow">
                                      <i class="ki-filled ki-right text-3xs rtl:rotate-180 rtl:transform">
                                      </i>
                                    </span>
                                  </div>
                                  <div class="menu-dropdown menu-default w-full max-w-[175px]">
                                    <div class="menu-item">
                                      <a class="menu-link" href="html/demo1/account/members/import-members.html">
                                        <span class="menu-icon">
                                          <i class="ki-filled ki-shield-search">
                                          </i>
                                        </span>
                                        <span class="menu-title">
                                          Find Members
                                        </span>
                                      </a>
                                    </div>
                                    <div class="menu-item">
                                      <a class="menu-link" href="html/demo1/account/members/import-members.html">
                                        <span class="menu-icon">
                                          <i class="ki-filled ki-calendar">
                                          </i>
                                        </span>
                                        <span class="menu-title">
                                          Meetings
                                        </span>
                                      </a>
                                    </div>
                                    <div class="menu-item">
                                      <a class="menu-link" href="html/demo1/account/members/import-members.html">
                                        <span class="menu-icon">
                                          <i class="ki-filled ki-filter-edit">
                                          </i>
                                        </span>
                                        <span class="menu-title">
                                          Group Settings
                                        </span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/security/privacy-settings.html">
                                    <span class="menu-icon">
                                      <i class="ki-filled ki-setting-3">
                                      </i>
                                    </span>
                                    <span class="menu-title">
                                      Settings
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header"
                    data-scrollable-max-height="auto" data-scrollable-offset="280px">
                    <div class="flex flex-col gap-5 py-5">
                      <div class="flex items-end gap-3.5 px-5">
                        <img class="size-9 rounded-full" src="assets/media/avatars/300-5.png" alt="" />
                        <div class="flex flex-col gap-1.5">
                          <div class="card flex flex-col gap-2.5 rounded-bl-none bg-gray-100 p-3 shadow-none">
                            <p class="text-2sm font-medium text-gray-700">
                              Hello!
                              <br />
                              Next week we are closing the project. Do You have questions?
                            </p>
                          </div>
                          <span class="text-2xs font-medium text-gray-500">
                            14:04
                          </span>
                        </div>
                      </div>
                      <div class="flex items-end justify-end gap-3.5 px-5">
                        <div class="flex flex-col gap-1.5">
                          <div class="card flex flex-col gap-2.5 rounded-br-none bg-primary p-3 shadow-none">
                            <p class="text-2sm font-medium text-light">
                              This is excellent news!
                            </p>
                          </div>
                          <div class="relative flex items-center justify-end">
                            <span class="me-6 text-2xs font-medium text-gray-600">
                              14:08
                            </span>
                            <i class="ki-filled ki-double-check absolute text-lg text-success">
                            </i>
                          </div>
                        </div>
                        <div class="relative shrink-0">
                          <img class="size-9 rounded-full" src="assets/media/avatars/300-2.png" alt="" />
                          <span
                            class="badge badge-circle badge-success absolute end-0 top-7 size-[4.8px] -translate-y-1/2 transform">
                          </span>
                        </div>
                      </div>
                      <div class="flex items-end gap-3.5 px-5">
                        <img class="size-9 rounded-full" src="assets/media/avatars/300-4.png" alt="" />
                        <div class="flex flex-col gap-1.5">
                          <div class="card flex flex-col gap-2.5 rounded-bl-none bg-gray-100 p-3 shadow-none">
                            <p class="text-2sm font-medium text-gray-700">
                              I have checked the features, can not wait to demo them!
                            </p>
                          </div>
                          <span class="text-2xs font-medium text-gray-500">
                            14:26
                          </span>
                        </div>
                      </div>
                      <div class="flex items-end gap-3.5 px-5">
                        <img class="size-9 rounded-full" src="assets/media/avatars/300-1.png" alt="" />
                        <div class="flex flex-col gap-1.5">
                          <div class="card flex flex-col gap-2.5 rounded-bl-none bg-gray-100 p-3 shadow-none">
                            <p class="text-2sm font-medium text-gray-700">
                              I have looked over the rollout plan, and everything seems spot on. I am ready on my end
                              and can not wait for the user feedback.
                            </p>
                          </div>
                          <span class="text-2xs font-medium text-gray-500">
                            15:09
                          </span>
                        </div>
                      </div>
                      <div class="flex items-end justify-end gap-3.5 px-5">
                        <div class="flex flex-col gap-1.5">
                          <div class="card flex flex-col gap-2.5 rounded-br-none bg-primary p-3 shadow-none">
                            <p class="text-2sm font-medium text-light">
                              Haven't seen the build yet, I'll look now.
                            </p>
                          </div>
                          <div class="relative flex items-center justify-end">
                            <span class="me-6 text-2xs font-medium text-gray-600">
                              15:52
                            </span>
                            <i class="ki-filled ki-double-check absolute text-lg text-gray-400">
                            </i>
                          </div>
                        </div>
                        <div class="relative shrink-0">
                          <img class="size-9 rounded-full" src="assets/media/avatars/300-2.png" alt="" />
                          <span
                            class="badge badge-circle badge-success absolute end-0 top-7 size-[4.8px] -translate-y-1/2 transform">
                          </span>
                        </div>
                      </div>
                      <div class="flex items-end justify-end gap-3.5 px-5">
                        <div class="flex flex-col gap-1.5">
                          <div class="card flex flex-col gap-2.5 rounded-br-none bg-primary p-3 shadow-none">
                            <p class="text-2sm font-medium text-light">
                              Checking the build now
                            </p>
                          </div>
                          <div class="relative flex items-center justify-end">
                            <span class="me-6 text-2xs font-medium text-gray-600">
                              15:52
                            </span>
                            <i class="ki-filled ki-double-check absolute text-lg text-gray-400">
                            </i>
                          </div>
                        </div>
                        <div class="relative shrink-0">
                          <img class="size-9 rounded-full" src="assets/media/avatars/300-2.png" alt="" />
                          <span
                            class="badge badge-circle badge-success absolute end-0 top-7 size-[4.8px] -translate-y-1/2 transform">
                          </span>
                        </div>
                      </div>
                      <div class="flex items-end gap-3.5 px-5">
                        <img class="size-9 rounded-full" src="assets/media/avatars/300-4.png" alt="" />
                        <div class="flex flex-col gap-1.5">
                          <div class="card flex flex-col gap-2.5 rounded-bl-none bg-gray-100 p-3 shadow-none">
                            <p class="text-2sm font-medium text-gray-700">
                              Tomorrow, I will send the link for the meeting
                            </p>
                          </div>
                          <span class="text-2xs font-medium text-gray-500">
                            17:40
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-2.5">
                    <div class="mb-2.5 flex grow gap-2 bg-gray-100 p-5" id="join_request">
                      <div class="relative shrink-0">
                        <img class="size-8 rounded-full" src="assets/media/avatars/300-14.png" alt="" />
                        <span
                          class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light">
                        </span>
                      </div>
                      <div class="flex grow items-center justify-between gap-3">
                        <div class="flex flex-col">
                          <div class="mb-px text-2sm">
                            <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                              Jane Perez
                            </a>
                            <span class="text-gray-600">
                              wants to join chat
                            </span>
                          </div>
                          <span class="flex items-center text-2xs font-medium text-gray-500">
                            1 day ago
                            <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                            </span>
                            Design Team
                          </span>
                        </div>
                        <div class="flex gap-2.5">
                          <button class="btn btn-xs btn-light" data-dismiss="#join_request">
                            Decline
                          </button>
                          <button class="btn btn-xs btn-dark">
                            Accept
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="relative mx-5 grow">
                      <img class="absolute start-0 top-2/4 ms-2.5 size-[30px] -translate-y-2/4 rounded-full"
                        src="assets/media/avatars/300-2.png" alt="" />
                      <input class="input h-auto bg-transparent py-4 ps-12" type="text" value=""
                        placeholder="Write a message..." />
                      <div class="absolute end-3 top-1/2 flex -translate-y-1/2 items-center gap-2.5">
                        <button class="btn-icon btn btn-sm btn-clear btn-light">
                          <i class="ki-filled ki-exit-up">
                          </i>
                        </button>
                        <a class="btn btn-sm btn-dark" href="#">
                          Send
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="dropdown" data-dropdown="true" data-dropdown-offset="10px, 10px"
                data-dropdown-offset-rtl="-10px, 10px" data-dropdown-placement="bottom-end"
                data-dropdown-placement-rtl="bottom-start" data-dropdown-trigger="click|lg:click">
                <button
                  class="dropdown-toggle btn-icon btn btn-icon-lg size-9 rounded-full text-gray-500 hover:bg-primary-light hover:text-primary dropdown-open:bg-primary-light dropdown-open:text-primary">
                  <i class="ki-filled ki-element-11">
                  </i>
                </button>
                <div class="dropdown-content w-screen max-w-[320px] light:border-gray-300">
                  <div
                    class="flex items-center justify-between gap-2.5 border-b border-b-gray-200 px-5 py-3 text-2xs font-medium text-gray-600">
                    <span>
                      Apps
                    </span>
                    <span>
                      Enabled
                    </span>
                  </div>
                  <div class="scrollable-y-auto flex max-h-[400px] flex-col divide-y divide-gray-200">
                    <div class="flex flex-wrap items-center justify-between gap-2 px-5 py-3.5">
                      <div class="flex flex-wrap items-center gap-2">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-full border border-gray-200 bg-gray-100">
                          <img class="size-6" src="assets/media/brand-logos/jira.svg" alt="" />
                        </div>
                        <div class="flex flex-col">
                          <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
                            Jira
                          </a>
                          <span class="text-2xs font-medium text-gray-600">
                            Project management
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center gap-2 lg:gap-5">
                        <label class="switch switch-sm">
                          <input type="checkbox" value="2" />
                        </label>
                      </div>
                    </div>
                    <div class="flex flex-wrap items-center justify-between gap-2 px-5 py-3.5">
                      <div class="flex flex-wrap items-center gap-2">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-full border border-gray-200 bg-gray-100">
                          <img class="size-6" src="assets/media/brand-logos/inferno.svg" alt="" />
                        </div>
                        <div class="flex flex-col">
                          <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
                            Inferno
                          </a>
                          <span class="text-2xs font-medium text-gray-600">
                            Ensures healthcare app
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center gap-2 lg:gap-5">
                        <label class="switch switch-sm">
                          <input type="checkbox" value="1" checked="" />
                        </label>
                      </div>
                    </div>
                    <div class="flex flex-wrap items-center justify-between gap-2 px-5 py-3.5">
                      <div class="flex flex-wrap items-center gap-2">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-full border border-gray-200 bg-gray-100">
                          <img class="size-6" src="assets/media/brand-logos/evernote.svg" alt="" />
                        </div>
                        <div class="flex flex-col">
                          <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
                            Evernote
                          </a>
                          <span class="text-2xs font-medium text-gray-600">
                            Notes management app
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center gap-2 lg:gap-5">
                        <label class="switch switch-sm">
                          <input type="checkbox" value="1" checked="" />
                        </label>
                      </div>
                    </div>
                    <div class="flex flex-wrap items-center justify-between gap-2 px-5 py-3.5">
                      <div class="flex flex-wrap items-center gap-2">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-full border border-gray-200 bg-gray-100">
                          <img class="size-6" src="assets/media/brand-logos/gitlab.svg" alt="" />
                        </div>
                        <div class="flex flex-col">
                          <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
                            Gitlab
                          </a>
                          <span class="text-2xs font-medium text-gray-600">
                            DevOps platform
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center gap-2 lg:gap-5">
                        <label class="switch switch-sm">
                          <input type="checkbox" value="2" />
                        </label>
                      </div>
                    </div>
                    <div class="flex flex-wrap items-center justify-between gap-2 px-5 py-3.5">
                      <div class="flex flex-wrap items-center gap-2">
                        <div
                          class="flex size-10 shrink-0 items-center justify-center rounded-full border border-gray-200 bg-gray-100">
                          <img class="size-6" src="assets/media/brand-logos/google-webdev.svg" alt="" />
                        </div>
                        <div class="flex flex-col">
                          <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
                            Google webdev
                          </a>
                          <span class="text-2xs font-medium text-gray-600">
                            Building web expierences
                          </span>
                        </div>
                      </div>
                      <div class="flex items-center gap-2 lg:gap-5">
                        <label class="switch switch-sm">
                          <input type="checkbox" value="1" checked="" />
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="grid border-t border-t-gray-200 p-5">
                    <a class="btn btn-sm btn-light justify-center" href="html/demo1/account/api-keys.html">
                      Go to Apps
                    </a>
                  </div>
                </div>
              </div>
              <div class="dropdown" data-dropdown="true" data-dropdown-offset="70px, 10px"
                data-dropdown-offset-rtl="-70px, 10px" data-dropdown-placement="bottom-end"
                data-dropdown-placement-rtl="bottom-start" data-dropdown-trigger="click|lg:click">
                <button
                  class="dropdown-toggle btn-icon btn btn-icon-lg relative size-9 cursor-pointer rounded-full text-gray-500 hover:bg-primary-light hover:text-primary dropdown-open:bg-primary-light dropdown-open:text-primary">
                  <i class="ki-filled ki-notification-status">
                  </i>
                </button>
                <div class="dropdown-content w-full max-w-[460px] light:border-gray-300">
                  <div
                    class="flex items-center justify-between gap-2.5 border-b border-b-gray-200 px-5 py-2.5 text-sm font-semibold text-gray-900"
                    id="notifications_header">
                    Notifications
                    <button class="btn-icon btn btn-sm btn-clear btn-light shrink-0" data-dropdown-dismiss="true">
                      <i class="ki-filled ki-cross">
                      </i>
                    </button>
                  </div>
                  <div class="tabs mb-2 justify-between px-5" id="notifications_tabs" data-tabs="true">
                    <div class="flex items-center gap-5">
                      <button class="active tab" data-tab-toggle="#notifications_tab_all">
                        All
                      </button>
                      <button class="tab relative" data-tab-toggle="#notifications_tab_inbox">
                        Inbox
                        <span
                          class="badge badge-dot badge-success absolute end-0 top-2 size-[5px] translate-x-full translate-y-1/2 transform rtl:start-0">
                        </span>
                      </button>
                      <button class="tab" data-tab-toggle="#notifications_tab_team">
                        Team
                      </button>
                      <button class="tab" data-tab-toggle="#notifications_tab_following">
                        Following
                      </button>
                    </div>
                    <div class="menu" data-menu="true">
                      <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end"
                        data-menu-item-placement-rtl="bottom-start" data-menu-item-toggle="dropdown"
                        data-menu-item-trigger="click|lg:hover">
                        <button class="menu-toggle btn-icon btn btn-sm btn-clear btn-light">
                          <i class="ki-filled ki-setting-2">
                          </i>
                        </button>
                        <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                          <div class="menu-item">
                            <a class="menu-link" href="#">
                              <span class="menu-icon">
                                <i class="ki-filled ki-document">
                                </i>
                              </span>
                              <span class="menu-title">
                                View
                              </span>
                            </a>
                          </div>
                          <div class="menu-item" data-menu-item-offset="-15px, 0"
                            data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
                            data-menu-item-trigger="click|lg:hover">
                            <div class="menu-link">
                              <span class="menu-icon">
                                <i class="ki-filled ki-notification-status">
                                </i>
                              </span>
                              <span class="menu-title">
                                Export
                              </span>
                              <span class="menu-arrow">
                                <i class="ki-filled ki-right text-3xs rtl:rotate-180 rtl:transform">
                                </i>
                              </span>
                            </div>
                            <div class="menu-dropdown menu-default w-full max-w-[175px]">
                              <div class="menu-item">
                                <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                                  <span class="menu-icon">
                                    <i class="ki-filled ki-sms">
                                    </i>
                                  </span>
                                  <span class="menu-title">
                                    Email
                                  </span>
                                </a>
                              </div>
                              <div class="menu-item">
                                <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                                  <span class="menu-icon">
                                    <i class="ki-filled ki-message-notify">
                                    </i>
                                  </span>
                                  <span class="menu-title">
                                    SMS
                                  </span>
                                </a>
                              </div>
                              <div class="menu-item">
                                <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                                  <span class="menu-icon">
                                    <i class="ki-filled ki-notification-status">
                                    </i>
                                  </span>
                                  <span class="menu-title">
                                    Push
                                  </span>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link" href="#">
                              <span class="menu-icon">
                                <i class="ki-filled ki-pencil">
                                </i>
                              </span>
                              <span class="menu-title">
                                Edit
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link" href="#">
                              <span class="menu-icon">
                                <i class="ki-filled ki-trash">
                                </i>
                              </span>
                              <span class="menu-title">
                                Delete
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="grow" id="notifications_tab_all">
                    <div class="flex flex-col">
                      <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header"
                        data-scrollable-max-height="auto" data-scrollable-offset="200px">
                        <div class="divider-y divider-gray-200 flex flex-col gap-5 pb-4 pt-3">
                          <div class="flex grow gap-2.5 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-4.png"
                                alt="" />
                              <span
                                class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex flex-col gap-3.5">
                              <div class="flex flex-col gap-1">
                                <div class="text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Joe Lincoln
                                  </a>
                                  <span class="text-gray-700">
                                    mentioned you in
                                  </span>
                                  <a class="text-primary hover:text-primary-active" href="#">
                                    Latest Trends
                                  </a>
                                  <span class="text-gray-700">
                                    topic
                                  </span>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  18 mins ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  Web Design 2024
                                </span>
                              </div>
                              <div class="card flex flex-col gap-2.5 rounded-lg bg-light-active p-3.5 shadow-none">
                                <div class="mb-px text-2sm font-semibold text-gray-600">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    @Cody
                                  </a>
                                  <span class="font-medium text-gray-700">
                                    For an expert opinion, check out what Mike has to say on this topic!
                                  </span>
                                </div>
                                <label class="input input-sm">
                                  <input type="text" value="" placeholder="Reply">
                                  <button class="btn-icon btn">
                                    <i class="ki-filled ki-picture">
                                    </i>
                                  </button>
                                  </input>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-5.png"
                                alt="" />
                              <span
                                class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex flex-col gap-3.5">
                              <div class="flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Leslie Alexander
                                  </a>
                                  <span class="text-gray-700">
                                    added new tags to
                                  </span>
                                  <a class="text-primary hover:text-primary-active" href="#">
                                    Web Redesign 2024
                                  </a>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  53 mins ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  ACME
                                </span>
                              </div>
                              <div class="flex flex-wrap gap-2.5">
                                <span class="badge badge-sm badge-outline badge-info">
                                  Client-Request
                                </span>
                                <span class="badge badge-sm badge-outline badge-warning">
                                  Figma
                                </span>
                                <span class="badge-light badge badge-sm badge-outline">
                                  Redesign
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5" id="notification_request_3">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-27.png"
                                alt="" />
                              <span
                                class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex flex-col gap-3.5">
                              <div class="flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Guy Hawkins
                                  </a>
                                  <span class="text-gray-700">
                                    requested access to
                                  </span>
                                  <a class="text-primary hover:text-primary-active" href="#">
                                    AirSpace
                                  </a>
                                  <span class="text-gray-700">
                                    project
                                  </span>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  14 hours ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  Dev Team
                                </span>
                              </div>
                              <div class="flex flex-wrap gap-2.5">
                                <button class="btn btn-sm btn-light" data-dismiss="#notification_request_3">
                                  Decline
                                </button>
                                <button class="btn btn-sm btn-dark" data-dismiss="#notification_request_3">
                                  Accept
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-1.png"
                                alt="" />
                              <span
                                class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex grow flex-col gap-3.5">
                              <div class="flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Jane Perez
                                  </a>
                                  <span class="text-gray-700">
                                    invites you to review a file.
                                  </span>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  3 hours ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  742kb
                                </span>
                              </div>
                              <div
                                class="card flex flex-row items-center gap-1.5 rounded-lg bg-light-active p-2.5 shadow-none">
                                <img class="h-5" src="assets/media/file-types/pdf.svg" />
                                <a class="me-1 text-xs font-medium text-gray-700 hover:text-primary-active"
                                  href="#">
                                  Launch_nov24.pptx
                                </a>
                                <span class="text-2xs font-medium text-gray-500">
                                  Edited 39 mins ago
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-11.png"
                                alt="" />
                              <span
                                class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex flex-col gap-1">
                              <div class="mb-px text-2sm font-medium">
                                <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                  Raymond Pawell
                                </a>
                                <span class="text-gray-700">
                                  posted a new article
                                </span>
                                <a class="text-primary hover:text-primary-active" href="#">
                                  2024 Roadmap
                                </a>
                              </div>
                              <span class="flex items-center text-2xs font-medium text-gray-500">
                                1 hour ago
                                <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                </span>
                                Roadmap
                              </span>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-14.png"
                                alt="" />
                              <span
                                class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex grow flex-col gap-3.5">
                              <div class="flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Tyler Hero
                                  </a>
                                  <span class="text-gray-700">
                                    wants to view your design project
                                  </span>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  3 day ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  Metronic Launcher mockups
                                </span>
                              </div>
                              <div
                                class="card flex flex-row items-center gap-1.5 rounded-lg bg-light-active p-2.5 shadow-none">
                                <div
                                  class="flex h-[30px] w-[26px] shrink-0 items-center justify-center rounded border border-gray-200 bg-light">
                                  <img class="h-5" src="assets/media/file-types/figma.svg" />
                                </div>
                                <a class="me-1 text-xs font-medium text-gray-700 hover:text-primary-active"
                                  href="#">
                                  Launcher-UIkit.fig
                                </a>
                                <span class="text-2xs font-medium text-gray-500">
                                  Edited 2 mins ago
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="border-b border-b-gray-200">
                      </div>
                      <div class="grid grid-cols-2 gap-2.5 p-5" id="notifications_all_footer">
                        <button class="btn btn-sm btn-light justify-center">
                          Archive all
                        </button>
                        <button class="btn btn-sm btn-light justify-center">
                          Mark all as read
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="hidden grow" id="notifications_tab_inbox">
                    <div class="flex flex-col">
                      <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header"
                        data-scrollable-max-height="auto" data-scrollable-offset="200px">
                        <div class="flex flex-col gap-5 pb-4 pt-3">
                          <div class="flex grow gap-2.5 px-5" id="notification_request_13">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-25.png"
                                alt="" />
                              <span
                                class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex grow flex-col gap-3.5">
                              <div class="flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Samuel Lee
                                  </a>
                                  <span class="text-gray-700">
                                    requested to add user to
                                  </span>
                                  <a class="font-semibold text-primary hover:text-primary-active" href="#">
                                    TechSynergy
                                  </a>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  22 hours ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  Dev Team
                                </span>
                              </div>
                              <div
                                class="card flex flex-row items-center justify-between gap-1.5 rounded-lg bg-light-active px-2.5 py-2 shadow-none">
                                <div class="flex flex-col">
                                  <a class="text-xs font-medium text-gray-900 hover:text-primary-active"
                                    href="#">
                                    Ronald Richards
                                  </a>
                                  <a class="text-3xs font-medium text-gray-500 hover:text-primary-active"
                                    href="#">
                                    ronald.richards@gmail.com
                                  </a>
                                </div>
                                <a class="text-xs font-medium text-gray-700 hover:text-primary-active"
                                  href="#">
                                  Go to profile
                                </a>
                              </div>
                              <div class="flex flex-wrap gap-2.5">
                                <button class="btn btn-sm btn-light" data-dismiss="#notification_request_13">
                                  Decline
                                </button>
                                <button class="btn btn-sm btn-dark" data-dismiss="#notification_request_13">
                                  Accept
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow items-center gap-2.5 px-5">
                            <div
                              class="flex size-8 items-center justify-center rounded-full border border-success-clarity bg-success-light">
                              <i class="ki-filled ki-check text-lg text-success">
                              </i>
                            </div>
                            <div class="flex flex-col gap-1">
                              <span class="text-2sm font-medium text-gray-700">
                                You have succesfully verified your account
                              </span>
                              <span class="text-2xs font-medium text-gray-500">
                                2 days ago
                              </span>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-34.png"
                                alt="" />
                              <span
                                class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex grow flex-col gap-3.5">
                              <div class="flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Ava Peterson
                                  </a>
                                  <span class="text-gray-700">
                                    uploaded attachment
                                  </span>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  3 days ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  ACME
                                </span>
                              </div>
                              <div
                                class="card flex flex-row items-center justify-between gap-1.5 rounded-lg bg-light-active p-2.5 shadow-none">
                                <div class="flex items-center gap-1.5">
                                  <img class="h-6" src="assets/media/file-types/xls.svg" />
                                  <div class="flex flex-col gap-0.5">
                                    <a class="text-xs font-medium text-gray-700 hover:text-primary-active"
                                      href="#">
                                      Redesign-2024.xls
                                    </a>
                                    <span class="text-2xs font-medium text-gray-500">
                                      2.6 MB
                                    </span>
                                  </div>
                                </div>
                                <button class="btn-icon btn btn-xs btn-clear btn-light">
                                  <svg fill="none" height="14" viewbox="0 0 14 14" width="14"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd"
                                      d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z"
                                      fill="#99A1B7" fill-rule="evenodd">
                                    </path>
                                    <path clip-rule="evenodd"
                                      d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z"
                                      fill="#99A1B7" fill-rule="evenodd">
                                    </path>
                                    <path clip-rule="evenodd"
                                      d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z"
                                      fill="#99A1B7" fill-rule="evenodd">
                                    </path>
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-29.png"
                                alt="" />
                              <span
                                class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex grow flex-col gap-3">
                              <div class="flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Ethan Parker
                                  </a>
                                  <span class="text-gray-700">
                                    created a new tasks to
                                  </span>
                                  <a class="text-primary hover:text-primary-active" href="#">
                                    Site Sculpt
                                  </a>
                                  <span class="text-gray-700">
                                    project
                                  </span>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  3 days ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  Web Designer
                                </span>
                              </div>
                              <div class="card gap-3.5 rounded-lg bg-light-active p-3.5 shadow-none">
                                <div class="flex flex-wrap items-center justify-between gap-2.5">
                                  <div class="flex flex-col gap-1">
                                    <span class="text-xs font-medium text-gray-900">
                                      Location history is erased after Logging In
                                    </span>
                                    <span class="text-3xs font-medium text-gray-500">
                                      Due Date: 15 May, 2024
                                    </span>
                                  </div>
                                  <div class="flex -space-x-2">
                                    <div class="flex">
                                      <img
                                        class="relative size-6 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                        src="assets/media/avatars/300-3.png" />
                                    </div>
                                    <div class="flex">
                                      <img
                                        class="relative size-6 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                        src="assets/media/avatars/300-2.png" />
                                    </div>
                                  </div>
                                </div>
                                <div class="flex items-center gap-2.5">
                                  <span class="badge badge-sm badge-outline badge-success">
                                    Improvement
                                  </span>
                                  <span class="badge badge-sm badge-outline badge-danger">
                                    Bug
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5" id="notification_request_3">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-30.png"
                                alt="" />
                              <span
                                class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex flex-col gap-3.5">
                              <div class="flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Benjamin Harris
                                  </a>
                                  <span class="text-gray-700">
                                    requested to upgrade plan
                                  </span>
                                  <a class="text-primary hover:text-primary-active" href="#">
                                  </a>
                                  <span class="text-gray-700">
                                  </span>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  4 days ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  Marketing
                                </span>
                              </div>
                              <div class="flex flex-wrap gap-2.5">
                                <button class="btn btn-sm btn-light" data-dismiss="#notification_request_3">
                                  Decline
                                </button>
                                <button class="btn btn-sm btn-dark" data-dismiss="#notification_request_3">
                                  Accept
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-24.png"
                                alt="" />
                              <span
                                class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex flex-col gap-1">
                              <div class="mb-px text-2sm font-medium">
                                <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                  Isaac Morgan
                                </a>
                                <span class="text-gray-700">
                                  mentioned you in
                                </span>
                                <a class="text-primary hover:text-primary-active" href="#">
                                  Data Transmission
                                </a>
                                topic
                              </div>
                              <span class="flex items-center text-2xs font-medium text-gray-500">
                                6 days ago
                                <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                </span>
                                Dev Team
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="border-b border-b-gray-200">
                      </div>
                      <div class="grid grid-cols-2 gap-2.5 p-5" id="notifications_inbox_footer">
                        <button class="btn btn-sm btn-light justify-center">
                          Archive all
                        </button>
                        <button class="btn btn-sm btn-light justify-center">
                          Mark all as read
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="hidden grow" id="notifications_tab_team">
                    <div class="flex flex-col">
                      <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header"
                        data-scrollable-max-height="auto" data-scrollable-offset="200px">
                        <div class="flex flex-col gap-5 pb-4 pt-3">
                          <div class="flex grow gap-2 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-15.png"
                                alt="" />
                              <span
                                class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex grow flex-col gap-3" id="notification_request_10">
                              <div class="flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Nova Hawthorne
                                  </a>
                                  <span class="text-gray-700">
                                    sent you an meeting invation
                                  </span>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  2 days ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  Dev Team
                                </span>
                              </div>
                              <div class="card rounded-lg bg-light-active p-2.5 shadow-none">
                                <div class="flex flex-wrap items-center justify-between gap-2.5">
                                  <div class="flex items-center gap-2.5">
                                    <div class="rounded-lg border border-brand-clarity">
                                      <div
                                        class="flex items-center justify-center rounded-t-lg border-b border-b-brand-clarity bg-brand-light">
                                        <span class="fw-medium p-1.5 text-3xs text-brand">
                                          Apr
                                        </span>
                                      </div>
                                      <div class="flex size-9 items-center justify-center">
                                        <span class="fw-semibold text-md tracking-tight text-gray-900">
                                          12
                                        </span>
                                      </div>
                                    </div>
                                    <div class="flex flex-col gap-1.5">
                                      <a class="text-xs font-medium text-gray-700 hover:text-primary-active"
                                        href="#">
                                        Peparation For Release
                                      </a>
                                      <span class="text-2xs font-medium text-gray-600">
                                        9:00 PM - 10:00 PM
                                      </span>
                                    </div>
                                  </div>
                                  <div class="flex -space-x-2">
                                    <div class="flex">
                                      <img
                                        class="relative size-6 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                        src="assets/media/avatars/300-4.png" />
                                    </div>
                                    <div class="flex">
                                      <img
                                        class="relative size-6 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                        src="assets/media/avatars/300-1.png" />
                                    </div>
                                    <div class="flex">
                                      <img
                                        class="relative size-6 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                        src="assets/media/avatars/300-2.png" />
                                    </div>
                                    <div class="flex">
                                      <span
                                        class="relative inline-flex size-6 size-6 shrink-0 items-center justify-center rounded-full bg-success text-3xs font-semibold leading-none text-success-inverse ring-1 ring-success-light hover:z-5">
                                        +3
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="flex flex-wrap gap-2.5">
                                <button class="btn btn-sm btn-light" data-dismiss="#notification_request_10">
                                  Decline
                                </button>
                                <button class="btn btn-sm btn-dark" data-dismiss="#notification_request_10">
                                  Accept
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-6.png"
                                alt="" />
                              <span
                                class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex flex-col gap-1">
                              <div class="mb-px text-2sm font-medium">
                                <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                  Adrian Vale
                                </a>
                                <span class="text-gray-700">
                                  change the due date of
                                </span>
                                <a class="text-primary hover:text-primary-active" href="#">
                                  Marketing
                                </a>
                                to 13 May
                              </div>
                              <span class="flex items-center text-2xs font-medium text-gray-500">
                                2 days ago
                                <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                </span>
                                Marketing
                              </span>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-12.png"
                                alt="" />
                              <span
                                class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex grow flex-col gap-3.5">
                              <div class="flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Skylar Frost
                                  </a>
                                  <span class="text-gray-700">
                                    uploaded 2 attachments
                                  </span>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  3 days ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  Web Design
                                </span>
                              </div>
                              <div
                                class="card flex flex-row items-center justify-between gap-1.5 rounded-lg bg-light-active p-2.5 shadow-none">
                                <div class="flex items-center gap-1.5">
                                  <img class="h-6" src="assets/media/file-types/word.svg" />
                                  <div class="flex flex-col gap-0.5">
                                    <a class="text-xs font-medium text-gray-700 hover:text-primary-active"
                                      href="#">
                                      Landing-page.docx
                                    </a>
                                    <span class="text-2xs font-medium text-gray-500">
                                      1.9 MB
                                    </span>
                                  </div>
                                </div>
                                <button class="btn-icon btn btn-xs btn-clear btn-light">
                                  <svg fill="none" height="14" viewbox="0 0 14 14" width="14"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd"
                                      d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z"
                                      fill="#99A1B7" fill-rule="evenodd">
                                    </path>
                                    <path clip-rule="evenodd"
                                      d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z"
                                      fill="#99A1B7" fill-rule="evenodd">
                                    </path>
                                    <path clip-rule="evenodd"
                                      d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z"
                                      fill="#99A1B7" fill-rule="evenodd">
                                    </path>
                                  </svg>
                                </button>
                              </div>
                              <div
                                class="card flex flex-row items-center justify-between gap-1.5 rounded-lg bg-light-active p-2.5 shadow-none">
                                <div class="flex items-center gap-1.5">
                                  <img class="h-6" src="assets/media/file-types/svg.svg" />
                                  <div class="flex flex-col gap-0.5">
                                    <a class="text-xs font-medium text-gray-700 hover:text-primary-active"
                                      href="#">
                                      New-icon.svg
                                    </a>
                                    <span class="text-2xs font-medium text-gray-500">
                                      2.3 MB
                                    </span>
                                  </div>
                                </div>
                                <button class="btn-icon btn btn-xs btn-clear btn-light">
                                  <svg fill="none" height="14" viewbox="0 0 14 14" width="14"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd"
                                      d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z"
                                      fill="#99A1B7" fill-rule="evenodd">
                                    </path>
                                    <path clip-rule="evenodd"
                                      d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z"
                                      fill="#99A1B7" fill-rule="evenodd">
                                    </path>
                                    <path clip-rule="evenodd"
                                      d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z"
                                      fill="#99A1B7" fill-rule="evenodd">
                                    </path>
                                  </svg>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-21.png"
                                alt="" />
                              <span
                                class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex flex-col gap-3.5">
                              <div class="flex flex-col gap-1">
                                <div class="text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Selene Silverleaf
                                  </a>
                                  <span class="text-gray-700">
                                    commented on
                                  </span>
                                  <a class="text-primary hover:text-primary-active" href="#">
                                    SiteSculpt
                                  </a>
                                  <span class="text-gray-700">
                                  </span>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  4 days ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  Manager
                                </span>
                              </div>
                              <div class="card flex flex-col gap-2.5 rounded-lg bg-light-active p-3.5 shadow-none">
                                <div class="mb-px text-2sm font-semibold text-gray-600">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    @Cody
                                  </a>
                                  <span class="font-medium text-gray-700">
                                    This design is simply stunning! From layout to color, it's a work of art!
                                  </span>
                                </div>
                                <label class="input input-sm">
                                  <input type="text" value="" placeholder="Reply">
                                  <button class="btn-icon btn">
                                    <i class="ki-filled ki-picture">
                                    </i>
                                  </button>
                                  </input>
                                </label>
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5" id="notification_request_3">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-13.png"
                                alt="" />
                              <span
                                class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex flex-col gap-3.5">
                              <div class="flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Thalia Fox
                                  </a>
                                  <span class="text-gray-700">
                                    has invited you to join
                                  </span>
                                  <a class="text-primary hover:text-primary-active" href="#">
                                    Design Research
                                  </a>
                                  <span class="text-gray-700">
                                  </span>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  4 days ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  Dev Team
                                </span>
                              </div>
                              <div class="flex flex-wrap gap-2.5">
                                <button class="btn btn-sm btn-light" data-dismiss="#notification_request_3">
                                  Decline
                                </button>
                                <button class="btn btn-sm btn-dark" data-dismiss="#notification_request_3">
                                  Accept
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="border-b border-b-gray-200">
                      </div>
                      <div class="grid grid-cols-2 gap-2.5 p-5" id="notifications_team_footer">
                        <button class="btn btn-sm btn-light justify-center">
                          Archive all
                        </button>
                        <button class="btn btn-sm btn-light justify-center">
                          Mark all as read
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="hidden grow" id="notifications_tab_following">
                    <div class="flex flex-col">
                      <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header"
                        data-scrollable-max-height="auto" data-scrollable-offset="200px">
                        <div class="flex flex-col gap-5 pb-4 pt-3">
                          <div class="flex grow gap-2.5 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-1.png"
                                alt="" />
                              <span
                                class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex grow flex-col gap-2.5">
                              <div class="mb-1 flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Jane Perez
                                  </a>
                                  <span class="text-gray-700">
                                    added 2 new works to
                                  </span>
                                  <a class="font-semibold text-primary hover:text-primary-active" href="#">
                                    Inspirations 2024
                                  </a>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  23 hours ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  Craftwork Design
                                </span>
                              </div>
                              <div class="flex items-center gap-2.5">
                                <div class="card flex w-40 flex-col gap-3.5 bg-light-active shadow-none">
                                  <div class="card-rounded-t h-24 shrink-0 bg-cover bg-no-repeat"
                                    style="background-image: url('assets/media/images/600x600/6.jpg')">
                                  </div>
                                  <div class="px-2.5 pb-2">
                                    <a class="mb-0.5 block text-xs font-medium leading-4 text-gray-700 hover:text-primary"
                                      href="#">
                                      Geometric Patterns
                                    </a>
                                    <div class="text-2xs font-medium text-gray-500">
                                      Token ID:
                                      <span class="text-2xs font-medium text-gray-700">
                                        81023
                                      </span>
                                    </div>
                                  </div>
                                </div>
                                <div class="card flex w-40 flex-col gap-3.5 bg-light-active shadow-none">
                                  <div class="card-rounded-t h-24 shrink-0 bg-cover bg-no-repeat"
                                    style="background-image: url('assets/media/images/600x600/1.jpg')">
                                  </div>
                                  <div class="px-2.5 pb-2">
                                    <a class="mb-0.5 block text-xs font-medium leading-4 text-gray-700 hover:text-primary"
                                      href="#">
                                      Artistic Expressions
                                    </a>
                                    <div class="text-2xs font-medium text-gray-500">
                                      Token ID:
                                      <span class="text-2xs font-medium text-gray-700">
                                        67890
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5" id="notification_request_17">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-19.png"
                                alt="" />
                              <span
                                class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex grow flex-col gap-2.5">
                              <div class="mb-1 flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Natalie Wood
                                  </a>
                                  <span class="text-gray-700">
                                    wants to edit marketing project
                                  </span>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  1 day ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  Designer
                                </span>
                              </div>
                              <div
                                class="card flex flex-row items-center gap-1.5 rounded-lg bg-light-active p-2.5 shadow-none">
                                <div
                                  class="flex h-[30px] w-[26px] shrink-0 items-center justify-center rounded border border-gray-200 bg-white">
                                  <img class="h-5" src="assets/media/brand-logos/jira.svg" />
                                </div>
                                <a class="me-1 text-xs font-medium text-gray-700 hover:text-primary-active"
                                  href="#">
                                  User-feedback.jira
                                </a>
                                <span class="text-2xs font-medium text-gray-500">
                                  Edited 1 hour ago
                                </span>
                              </div>
                              <div class="flex flex-wrap gap-2.5">
                                <button class="btn btn-sm btn-light" data-dismiss="#notification_request_17">
                                  Decline
                                </button>
                                <button class="btn btn-sm btn-dark" data-dismiss="#notification_request_17">
                                  Accept
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-17.png"
                                alt="" />
                              <span
                                class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex grow flex-col gap-2.5">
                              <div class="mb-1 flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Aaron Foster
                                  </a>
                                  <span class="text-gray-700">
                                    requested to view
                                  </span>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  3 day ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  Larsen Ltd
                                </span>
                              </div>
                              <div
                                class="card flex flex-row items-center gap-1.5 rounded-lg bg-light-active px-2.5 py-1.5 shadow-none">
                                <i class="ki-filled ki-user-tick text-base text-success">
                                </i>
                                <span class="text-2sm font-medium text-success">
                                  You allowed Aaron to view
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-34.png"
                                alt="" />
                              <span
                                class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex flex-col gap-1">
                              <div class="mb-px text-2sm font-medium">
                                <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                  Chloe Morgan
                                </a>
                                <span class="text-gray-700">
                                  posted a new article
                                </span>
                                <a class="text-primary hover:text-primary-active" href="#">
                                  User Experience
                                </a>
                              </div>
                              <span class="flex items-center text-2xs font-medium text-gray-500">
                                1 day ago
                                <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                </span>
                                Nexus
                              </span>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-9.png"
                                alt="" />
                              <span
                                class="badge badge-circle absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform bg-gray-400 ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex grow flex-col gap-2.5">
                              <div class="mb-1 flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Gabriel Bennett
                                  </a>
                                  <span class="text-gray-700">
                                    started connect you
                                  </span>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  3 day ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  Development
                                </span>
                              </div>
                              <div class="flex flex-wrap gap-2.5">
                                <button class="btn btn-sm btn-light">
                                  <i class="ki-filled ki-check-circle">
                                  </i>
                                  Connected
                                </button>
                                <button class="btn btn-sm btn-dark">
                                  Go to profile
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="border-b border-b-gray-200">
                          </div>
                          <div class="flex grow gap-2.5 px-5" id="notification_request_3">
                            <div class="relative mt-0.5 shrink-0">
                              <img class="size-8 rounded-full" src="assets/media/avatars/300-13.png"
                                alt="" />
                              <span
                                class="badge badge-circle badge-success absolute end-0.5 top-7 size-1.5 -translate-y-1/2 transform ring-1 ring-light">
                              </span>
                            </div>
                            <div class="flex flex-col gap-3.5">
                              <div class="flex flex-col gap-1">
                                <div class="mb-px text-2sm font-medium">
                                  <a class="font-semibold text-gray-900 hover:text-primary-active" href="#">
                                    Thalia Fox
                                  </a>
                                  <span class="text-gray-700">
                                    has invited you to join
                                  </span>
                                  <a class="text-primary hover:text-primary-active" href="#">
                                    Design Research
                                  </a>
                                  <span class="text-gray-700">
                                  </span>
                                </div>
                                <span class="flex items-center text-2xs font-medium text-gray-500">
                                  4 days ago
                                  <span class="badge badge-circle mx-1.5 size-1 bg-gray-500">
                                  </span>
                                  Dev Team
                                </span>
                              </div>
                              <div class="flex flex-wrap gap-2.5">
                                <button class="btn btn-sm btn-light" data-dismiss="#notification_request_3">
                                  Decline
                                </button>
                                <button class="btn btn-sm btn-dark" data-dismiss="#notification_request_3">
                                  Accept
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="border-b border-b-gray-200">
                      </div>
                      <div class="grid grid-cols-2 gap-2.5 p-5" id="notifications_following_footer">
                        <button class="btn btn-sm btn-light justify-center">
                          Archive all
                        </button>
                        <button class="btn btn-sm btn-light justify-center">
                          Mark all as read
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="menu" data-menu="true">
                <div class="menu-item" data-menu-item-offset="20px, 10px" data-menu-item-offset-rtl="-20px, 10px"
                  data-menu-item-placement="bottom-end" data-menu-item-placement-rtl="bottom-start"
                  data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                  <div class="menu-toggle btn-icon btn rounded-full">
                    <img class="size-9 shrink-0 rounded-full border-2 border-success"
                      src="assets/media/avatars/300-2.png" alt="">
                    </img>
                  </div>
                  <div class="menu-dropdown menu-default w-screen max-w-[250px] light:border-gray-300">
                    <div class="flex items-center justify-between gap-1.5 px-5 py-1.5">
                      <div class="flex items-center gap-2">
                        <img class="size-9 rounded-full border-2 border-success"
                          src="assets/media/avatars/300-2.png" alt="">
                        <div class="flex flex-col gap-1.5">
                          <span class="text-sm font-semibold leading-none text-gray-800">
                            Cody Fisher
                          </span>
                          <a class="text-xs font-medium leading-none text-gray-600 hover:text-primary"
                            href="html/demo1/account/home/get-started.html">
                            c.fisher@gmail.com
                          </a>
                        </div>
                        </img>
                      </div>
                      <span class="badge badge-xs badge-outline badge-primary">
                        Pro
                      </span>
                    </div>
                    <div class="menu-separator">
                    </div>
                    <div class="flex flex-col">
                      <div class="menu-item">
                        <a class="menu-link" href="html/demo1/public-profile/profiles/default.html">
                          <span class="menu-icon">
                            <i class="ki-filled ki-badge">
                            </i>
                          </span>
                          <span class="menu-title">
                            Public Profile
                          </span>
                        </a>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link" href="html/demo1/account/home/user-profile.html">
                          <span class="menu-icon">
                            <i class="ki-filled ki-profile-circle">
                            </i>
                          </span>
                          <span class="menu-title">
                            My Profile
                          </span>
                        </a>
                      </div>
                      <div class="menu-item" data-menu-item-offset="-50px, 0"
                        data-menu-item-placement="left-start" data-menu-item-placement-rtl="right-start"
                        data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
                        <div class="menu-link">
                          <span class="menu-icon">
                            <i class="ki-filled ki-setting-2">
                            </i>
                          </span>
                          <span class="menu-title">
                            My Account
                          </span>
                          <span class="menu-arrow">
                            <i class="ki-filled ki-right text-3xs rtl:rotate-180 rtl:transform">
                            </i>
                          </span>
                        </div>
                        <div class="menu-dropdown menu-default w-full max-w-[220px] light:border-gray-300">
                          <div class="menu-item">
                            <a class="menu-link" href="html/demo1/account/home/get-started.html">
                              <span class="menu-icon">
                                <i class="ki-filled ki-coffee">
                                </i>
                              </span>
                              <span class="menu-title">
                                Get Started
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link" href="html/demo1/account/home/user-profile.html">
                              <span class="menu-icon">
                                <i class="ki-filled ki-some-files">
                                </i>
                              </span>
                              <span class="menu-title">
                                My Profile
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link" href="#">
                              <span class="menu-icon">
                                <i class="ki-filled ki-icon">
                                </i>
                              </span>
                              <span class="menu-title">
                                Billing
                              </span>
                              <span class="menu-badge" data-tooltip="true" data-tooltip-placement="top">
                                <i class="ki-filled ki-information-2 text-md text-gray-500">
                                </i>
                                <span class="tooltip" data-tooltip-content="true">
                                  Payment and subscription info
                                </span>
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link" href="html/demo1/account/security/overview.html">
                              <span class="menu-icon">
                                <i class="ki-filled ki-medal-star">
                                </i>
                              </span>
                              <span class="menu-title">
                                Security
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link" href="html/demo1/account/members/teams.html">
                              <span class="menu-icon">
                                <i class="ki-filled ki-setting">
                                </i>
                              </span>
                              <span class="menu-title">
                                Members & Roles
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link" href="html/demo1/account/integrations.html">
                              <span class="menu-icon">
                                <i class="ki-filled ki-switch">
                                </i>
                              </span>
                              <span class="menu-title">
                                Integrations
                              </span>
                            </a>
                          </div>
                          <div class="menu-separator">
                          </div>
                          <div class="menu-item">
                            <a class="menu-link" href="html/demo1/account/security/overview.html">
                              <span class="menu-icon">
                                <i class="ki-filled ki-shield-tick">
                                </i>
                              </span>
                              <span class="menu-title">
                                Notifications
                              </span>
                              <label class="switch switch-sm">
                                <input name="check" type="checkbox" value="1" checked="">
                                </input>
                              </label>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="menu-item">
                        <a class="menu-link" href="https://devs.keenthemes.com">
                          <span class="menu-icon">
                            <i class="ki-filled ki-message-programming">
                            </i>
                          </span>
                          <span class="menu-title">
                            Dev Forum
                          </span>
                        </a>
                      </div>
                      <div class="menu-item" data-menu-item-offset="-10px, 0"
                        data-menu-item-placement="left-start" data-menu-item-toggle="dropdown"
                        data-menu-item-trigger="click|lg:hover">
                        <div class="menu-link">
                          <span class="menu-icon">
                            <i class="ki-filled ki-icon">
                            </i>
                          </span>
                          <span class="menu-title">
                            Language
                          </span>
                          <div
                            class="flex shrink-0 items-center gap-1.5 rounded-md border border-gray-300 p-1.5 text-2xs font-medium text-gray-600">
                            English
                            <img class="inline-block size-3.5 rounded-full"
                              src="assets/media/flags/united-states.svg" alt="" />
                          </div>
                        </div>
                        <div class="menu-dropdown menu-default w-full max-w-[170px] light:border-gray-300">
                          <div class="menu-item active">
                            <a class="menu-link h-10" href="?dir=ltr">
                              <span class="menu-icon">
                                <img class="inline-block size-4 rounded-full"
                                  src="assets/media/flags/united-states.svg" alt="" />
                              </span>
                              <span class="menu-title">
                                English
                              </span>
                              <span class="menu-badge">
                                <i class="ki-solid ki-check-circle text-base text-success">
                                </i>
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link h-10" href="?dir=rtl">
                              <span class="menu-icon">
                                <img class="inline-block size-4 rounded-full"
                                  src="assets/media/flags/saudi-arabia.svg" alt="" />
                              </span>
                              <span class="menu-title">
                                Arabic(Saudi)
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link h-10" href="?dir=ltr">
                              <span class="menu-icon">
                                <img class="inline-block size-4 rounded-full" src="assets/media/flags/spain.svg"
                                  alt="" />
                              </span>
                              <span class="menu-title">
                                Spanish
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link h-10" href="?dir=ltr">
                              <span class="menu-icon">
                                <img class="inline-block size-4 rounded-full" src="assets/media/flags/germany.svg"
                                  alt="" />
                              </span>
                              <span class="menu-title">
                                German
                              </span>
                            </a>
                          </div>
                          <div class="menu-item">
                            <a class="menu-link h-10" href="?dir=ltr">
                              <span class="menu-icon">
                                <img class="inline-block size-4 rounded-full" src="assets/media/flags/japan.svg"
                                  alt="" />
                              </span>
                              <span class="menu-title">
                                Japanese
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="menu-separator">
                    </div>
                    <div class="flex flex-col">
                      <div class="menu-item mb-0.5">
                        <div class="menu-link">
                          <span class="menu-icon">
                            <i class="ki-filled ki-moon">
                            </i>
                          </span>
                          <span class="menu-title">
                            Dark Mode
                          </span>
                          <label class="switch switch-sm">
                            <input name="check" data-theme-state="dark" data-theme-toggle="true"
                              type="checkbox" value="1">
                            </input>
                          </label>
                        </div>
                      </div>
                      <div class="menu-item px-4 py-1.5">
                        <a class="btn btn-sm btn-light justify-center"
                          href="html/demo1/authentication/classic/sign-in.html">
                          Log out
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End of Topbar -->
          </div>
          <!-- End of Container -->
        </header>
        <!-- End of Header -->
        <!-- Content -->
        <main class="content grow pt-5" id="content" role="content">
          <!-- Container -->
          <div class="container-fixed" id="content_container">
          </div>
          <!-- End of Container -->
          <!-- Container -->
          <div class="container-fixed">
            <div class="flex flex-wrap items-center justify-between gap-5 pb-7.5 lg:items-end">
              <div class="flex flex-col justify-center gap-2">
                <h1 class="text-xl font-medium leading-none text-gray-900">
                  Dashboard
                </h1>
                <div class="flex items-center gap-2 text-sm font-normal text-gray-700">
                  Central Hub for Personal Customization
                </div>
              </div>
              <div class="flex items-center gap-2.5">
                <a class="btn btn-sm btn-light" href="html/demo1/public-profile/profiles/default.html">
                  View Profile
                </a>
              </div>
            </div>
          </div>
          <!-- End of Container -->
          <!-- Container -->
          <div class="container-fixed">
            <div class="grid gap-5 lg:gap-7.5">
              <!-- begin: grid -->
              <div class="grid items-stretch gap-y-5 lg:grid-cols-3 lg:gap-7.5">
                <div class="lg:col-span-1">
                  <div class="grid h-full grid-cols-2 items-stretch gap-5 lg:gap-7.5">
                    <style>
                      .channel-stats-bg {
                        background-image: url('assets/media/images/2600x1600/bg-3.png');
                      }

                      .dark .channel-stats-bg {
                        background-image: url('assets/media/images/2600x1600/bg-3-dark.png');
                      }
                    </style>
                    <div
                      class="channel-stats-bg card h-full flex-col justify-between gap-6 bg-cover bg-[right_top_-1.7rem] bg-no-repeat rtl:bg-[left_top_-1.7rem]">
                      <img class="ms-5 mt-4 w-7" src="assets/media/brand-logos/linkedin-2.svg" alt="" />
                      <div class="flex flex-col gap-1 px-5 pb-4">
                        <span class="text-3xl font-semibold text-gray-900">
                          9.3k
                        </span>
                        <span class="text-2sm font-normal text-gray-700">
                          Amazing mates
                        </span>
                      </div>
                    </div>
                    <div
                      class="channel-stats-bg card h-full flex-col justify-between gap-6 bg-cover bg-[right_top_-1.7rem] bg-no-repeat rtl:bg-[left_top_-1.7rem]">
                      <img class="ms-5 mt-4 w-7" src="assets/media/brand-logos/youtube-2.svg" alt="" />
                      <div class="flex flex-col gap-1 px-5 pb-4">
                        <span class="text-3xl font-semibold text-gray-900">
                          24k
                        </span>
                        <span class="text-2sm font-normal text-gray-700">
                          Lessons Views
                        </span>
                      </div>
                    </div>
                    <div
                      class="channel-stats-bg card h-full flex-col justify-between gap-6 bg-cover bg-[right_top_-1.7rem] bg-no-repeat rtl:bg-[left_top_-1.7rem]">
                      <img class="ms-5 mt-4 w-7" src="assets/media/brand-logos/instagram-03.svg" alt="" />
                      <div class="flex flex-col gap-1 px-5 pb-4">
                        <span class="text-3xl font-semibold text-gray-900">
                          608
                        </span>
                        <span class="text-2sm font-normal text-gray-700">
                          New subscribers
                        </span>
                      </div>
                    </div>
                    <div
                      class="channel-stats-bg card h-full flex-col justify-between gap-6 bg-cover bg-[right_top_-1.7rem] bg-no-repeat rtl:bg-[left_top_-1.7rem]">
                      <img class="ms-5 mt-4 w-7 dark:hidden" src="assets/media/brand-logos/tiktok.svg"
                        alt="" />
                      <img class="ms-5 mt-4 w-7 light:hidden" src="assets/media/brand-logos/tiktok-dark.svg"
                        alt="" />
                      <div class="flex flex-col gap-1 px-5 pb-4">
                        <span class="text-3xl font-semibold text-gray-900">
                          2.5k
                        </span>
                        <span class="text-2sm font-normal text-gray-700">
                          Stream audience
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="lg:col-span-2">
                  <style>
                    .entry-callout-bg {
                      background-image: url('assets/media/images/2600x1600/2.png');
                    }

                    .dark .entry-callout-bg {
                      background-image: url('assets/media/images/2600x1600/2-dark.png');
                    }
                  </style>
                  <div class="card h-full h-full">
                    <div
                      class="entry-callout-bg card-body bg-[length:80%] bg-no-repeat p-10 [background-position:175%_25%] rtl:[background-position:-70%_25%]">
                      <div class="flex flex-col justify-center gap-4">
                        <div class="flex -space-x-2">
                          <div class="flex">
                            <img class="relative size-10 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                              src="assets/media/avatars/300-4.png" />
                          </div>
                          <div class="flex">
                            <img class="relative size-10 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                              src="assets/media/avatars/300-1.png" />
                          </div>
                          <div class="flex">
                            <img class="relative size-10 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                              src="assets/media/avatars/300-2.png" />
                          </div>
                          <div class="flex">
                            <span
                              class="relative inline-flex size-10 shrink-0 items-center justify-center rounded-full bg-success text-3xs text-xs font-semibold leading-none text-success-inverse ring-1 ring-success-light hover:z-5">
                              S
                            </span>
                          </div>
                        </div>
                        <h2 class="text-1.5xl font-semibold text-gray-900">
                          Connect Today & Join
                          <br />
                          the
                          <a class="link" href="#">
                            KeenThemes Network
                          </a>
                        </h2>
                        <p class="text-sm font-normal leading-5.5 text-gray-700">
                          Enhance your projects with premium themes and
                          <br />
                          templates. Join the KeenThemes community today
                          <br />
                          for top-quality designs and resources.
                        </p>
                      </div>
                    </div>
                    <div class="card-footer justify-center">
                      <a class="btn btn-link" href="html/demo1/account/home/get-started.html">
                        Get Started
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end: grid -->
              <!-- begin: grid -->
              <div class="grid items-stretch gap-5 lg:grid-cols-3 lg:gap-7.5">
                <div class="lg:col-span-1">
                  <div class="card h-full">
                    <div class="card-header">
                      <h3 class="card-title">
                        Highlights
                      </h3>
                      <div class="menu" data-menu="true">
                        <div class="menu-item" data-menu-item-offset="0, 10px"
                          data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown"
                          data-menu-item-trigger="click|lg:click">
                          <button class="menu-toggle btn-icon btn btn-sm btn-clear btn-light">
                            <i class="ki-filled ki-dots-vertical">
                            </i>
                          </button>
                          <div class="menu-dropdown menu-default w-full max-w-[200px]" data-menu-dismiss="true">
                            <div class="menu-item">
                              <a class="menu-link" href="html/demo1/account/activity.html">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-cloud-change">
                                  </i>
                                </span>
                                <span class="menu-title">
                                  Activity
                                </span>
                              </a>
                            </div>
                            <div class="menu-item">
                              <a class="menu-link" data-modal-toggle="#share_profile_modal" href="#">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-share">
                                  </i>
                                </span>
                                <span class="menu-title">
                                  Share
                                </span>
                              </a>
                            </div>
                            <div class="menu-item" data-menu-item-offset="-15px, 0"
                              data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
                              data-menu-item-trigger="click|lg:hover">
                              <div class="menu-link">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-notification-status">
                                  </i>
                                </span>
                                <span class="menu-title">
                                  Notifications
                                </span>
                                <span class="menu-arrow">
                                  <i class="ki-filled ki-right text-3xs rtl:rotate-180 rtl:transform">
                                  </i>
                                </span>
                              </div>
                              <div class="menu-dropdown menu-default w-full max-w-[175px]">
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                                    <span class="menu-icon">
                                      <i class="ki-filled ki-sms">
                                      </i>
                                    </span>
                                    <span class="menu-title">
                                      Email
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                                    <span class="menu-icon">
                                      <i class="ki-filled ki-message-notify">
                                      </i>
                                    </span>
                                    <span class="menu-title">
                                      SMS
                                    </span>
                                  </a>
                                </div>
                                <div class="menu-item">
                                  <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                                    <span class="menu-icon">
                                      <i class="ki-filled ki-notification-status">
                                      </i>
                                    </span>
                                    <span class="menu-title">
                                      Push
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="menu-item">
                              <a class="menu-link" data-modal-toggle="#report_user_modal" href="#">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-dislike">
                                  </i>
                                </span>
                                <span class="menu-title">
                                  Report
                                </span>
                              </a>
                            </div>
                            <div class="menu-separator">
                            </div>
                            <div class="menu-item">
                              <a class="menu-link" href="html/demo1/account/home/settings-enterprise.html">
                                <span class="menu-icon">
                                  <i class="ki-filled ki-setting-3">
                                  </i>
                                </span>
                                <span class="menu-title">
                                  Settings
                                </span>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body flex flex-col gap-4 p-5 lg:p-7.5 lg:pt-4">
                      <div class="flex flex-col gap-0.5">
                        <span class="text-sm font-normal text-gray-700">
                          All time sales
                        </span>
                        <div class="flex items-center gap-2.5">
                          <span class="text-3xl font-semibold text-gray-900">
                            $295.7k
                          </span>
                          <span class="badge badge-sm badge-outline badge-success">
                            +2.7%
                          </span>
                        </div>
                      </div>
                      <div class="mb-1.5 flex items-center gap-1">
                        <div class="h-2 w-full max-w-[60%] rounded-sm bg-success">
                        </div>
                        <div class="h-2 w-full max-w-[25%] rounded-sm bg-brand">
                        </div>
                        <div class="h-2 w-full max-w-[15%] rounded-sm bg-info">
                        </div>
                      </div>
                      <div class="mb-1 flex flex-wrap items-center gap-4">
                        <div class="flex items-center gap-1.5">
                          <span class="badge badge-dot badge-success size-2">
                          </span>
                          <span class="text-sm font-normal text-gray-800">
                            Metronic
                          </span>
                        </div>
                        <div class="flex items-center gap-1.5">
                          <span class="badge badge-dot badge-danger size-2">
                          </span>
                          <span class="text-sm font-normal text-gray-800">
                            Bundle
                          </span>
                        </div>
                        <div class="flex items-center gap-1.5">
                          <span class="badge badge-dot badge-info size-2">
                          </span>
                          <span class="text-sm font-normal text-gray-800">
                            MetronicNest
                          </span>
                        </div>
                      </div>
                      <div class="border-b border-gray-300">
                      </div>
                      <div class="grid gap-3">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                          <div class="flex items-center gap-1.5">
                            <i class="ki-filled ki-shop text-base text-gray-500">
                            </i>
                            <span class="text-sm font-normal text-gray-900">
                              Online Store
                            </span>
                          </div>
                          <div class="flex items-center gap-6 text-sm font-medium text-gray-800">
                            <span class="lg:text-right">
                              $172k
                            </span>
                            <span class="lg:text-right">
                              <i class="ki-filled ki-arrow-up text-success">
                              </i>
                              3.9%
                            </span>
                          </div>
                        </div>
                        <div class="flex flex-wrap items-center justify-between gap-2">
                          <div class="flex items-center gap-1.5">
                            <i class="ki-filled ki-facebook text-base text-gray-500">
                            </i>
                            <span class="text-sm font-normal text-gray-900">
                              Facebook
                            </span>
                          </div>
                          <div class="flex items-center gap-6 text-sm font-medium text-gray-800">
                            <span class="lg:text-right">
                              $85k
                            </span>
                            <span class="lg:text-right">
                              <i class="ki-filled ki-arrow-down text-danger">
                              </i>
                              0.7%
                            </span>
                          </div>
                        </div>
                        <div class="flex flex-wrap items-center justify-between gap-2">
                          <div class="flex items-center gap-1.5">
                            <i class="ki-filled ki-instagram text-base text-gray-500">
                            </i>
                            <span class="text-sm font-normal text-gray-900">
                              Instagram
                            </span>
                          </div>
                          <div class="flex items-center gap-6 text-sm font-medium text-gray-800">
                            <span class="lg:text-right">
                              $36k
                            </span>
                            <span class="lg:text-right">
                              <i class="ki-filled ki-arrow-up text-success">
                              </i>
                              8.2%
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="lg:col-span-2">
                  <div class="card h-full">
                    <div class="card-header">
                      <h3 class="card-title">
                        Earnings
                      </h3>
                      <div class="flex gap-5">
                        <label class="switch switch-sm">
                          <input class="order-2" name="check" type="checkbox" value="1" />
                          <span class="switch-label order-1">
                            Referrals only
                          </span>
                        </label>
                        <select class="select select-sm w-28" name="select">
                          <option value="1">
                            1 month
                          </option>
                          <option value="2">
                            3 month
                          </option>
                          <option value="3">
                            6 month
                          </option>
                          <option value="4" selected="">
                            12 month
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="card-body flex grow flex-col items-stretch justify-end px-3 py-1">
                      <div id="earnings_chart">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end: grid -->
              <!-- begin: grid -->
              <div class="grid items-stretch gap-5 lg:grid-cols-3 lg:gap-7.5">
                <div class="lg:col-span-1">
                  <div class="card h-full">
                    <div class="card-body p-5 lg:p-7.5 lg:pt-6">
                      <div class="mb-7.5 flex flex-wrap items-center justify-between gap-5">
                        <div class="flex flex-col gap-1">
                          <span class="text-1.5xl font-semibold text-gray-900">
                            Team Meeting
                          </span>
                          <span class="text-sm font-semibold text-gray-800">
                            09:00 - 09:30
                          </span>
                        </div>
                        <img class="size-7" src="assets/media/brand-logos/zoom.svg" alt="" />
                      </div>
                      <p class="mb-8 text-sm font-normal leading-5.5 text-gray-800">
                        Team meeting to discuss strategies, outline
                        <br />
                        project milestones, define key goals, and
                        <br />
                        establish clear timelines.
                      </p>
                      <div class="flex gap-10 rounded-lg bg-gray-100 p-5">
                        <div class="flex flex-col gap-5">
                          <div class="flex items-center gap-1.5 text-sm font-normal text-gray-800">
                            <i class="ki-filled ki-geolocation text-base text-gray-500">
                            </i>
                            Location
                          </div>
                          <div class="pt-1.5 text-sm font-medium text-gray-800">
                            Amsterdam
                          </div>
                        </div>
                        <div class="flex flex-col gap-5">
                          <div class="flex items-center gap-1.5 text-sm font-normal text-gray-800">
                            <i class="ki-filled ki-users text-base text-gray-500">
                            </i>
                            Team
                          </div>
                          <div class="flex -space-x-2">
                            <div class="flex">
                              <img
                                class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                src="assets/media/avatars/300-4.png" />
                            </div>
                            <div class="flex">
                              <img
                                class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                src="assets/media/avatars/300-1.png" />
                            </div>
                            <div class="flex">
                              <img
                                class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                src="assets/media/avatars/300-2.png" />
                            </div>
                            <div class="flex">
                              <span
                                class="relative inline-flex size-[30px] shrink-0 items-center justify-center rounded-full bg-success text-3xs text-4xs font-semibold leading-none text-success-inverse ring-1 ring-success-light hover:z-5">
                                +10
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer justify-center">
                      <a class="btn btn-link" href="">
                        Join Meeting
                      </a>
                    </div>
                  </div>
                </div>
                <div class="lg:col-span-2">
                  <div class="grid">
                    <div class="card card-grid h-full min-w-full">
                      <div class="card-header">
                        <h3 class="card-title">
                          Teams
                        </h3>
                        <div class="input input-sm max-w-48">
                          <i class="ki-filled ki-magnifier">
                          </i>
                          <input type="text" placeholder="Search Teams" />
                        </div>
                      </div>
                      <div class="card-body">
                        <div data-datatable="true" data-datatable-page-size="5">
                          <div class="scrollable-x-auto">
                            <table class="table table-border" data-datatable-table="true">
                              <thead>
                                <tr>
                                  <th class="w-[60px]">
                                    <input class="checkbox checkbox-sm" data-datatable-check="true"
                                      type="checkbox" />
                                  </th>
                                  <th class="min-w-[280px]">
                                    <span class="sort asc">
                                      <span class="sort-label">
                                        Team
                                      </span>
                                      <span class="sort-icon">
                                      </span>
                                    </span>
                                  </th>
                                  <th class="min-w-[135px]">
                                    <span class="sort">
                                      <span class="sort-label">
                                        Rating
                                      </span>
                                      <span class="sort-icon">
                                      </span>
                                    </span>
                                  </th>
                                  <th class="min-w-[135px]">
                                    <span class="sort">
                                      <span class="sort-label">
                                        Last Modified
                                      </span>
                                      <span class="sort-icon">
                                      </span>
                                    </span>
                                  </th>
                                  <th class="min-w-[135px]">
                                    <span class="sort">
                                      <span class="sort-label">
                                        Members
                                      </span>
                                      <span class="sort-icon">
                                      </span>
                                    </span>
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true"
                                      type="checkbox" value="1" />
                                  </td>
                                  <td>
                                    <div class="flex flex-col gap-2">
                                      <a class="text-sm font-medium leading-none text-gray-900 hover:text-primary"
                                        href="#">
                                        Product Management
                                      </a>
                                      <span class="text-2sm font-normal leading-3 text-gray-700">
                                        Product development & lifecycle
                                      </span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="rating">
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    21 Oct, 2024
                                  </td>
                                  <td>
                                    <div class="flex -space-x-2">
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-4.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-1.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-2.png" />
                                      </div>
                                      <div class="flex">
                                        <span
                                          class="relative inline-flex size-[30px] shrink-0 items-center justify-center rounded-full bg-success text-3xs font-semibold leading-none text-success-inverse ring-1 ring-success-light">
                                          +10
                                        </span>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true"
                                      type="checkbox" value="2" />
                                  </td>
                                  <td>
                                    <div class="flex flex-col gap-2">
                                      <a class="text-sm font-medium leading-none text-gray-900 hover:text-primary"
                                        href="#">
                                        Marketing Team
                                      </a>
                                      <span class="text-2sm font-normal leading-3 text-gray-700">
                                        Campaigns & market analysis
                                      </span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="rating">
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label indeterminate">
                                        <i class="ki-solid ki-star rating-on text-base leading-none"
                                          style="width: 50.0%">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    15 Oct, 2024
                                  </td>
                                  <td>
                                    <div class="flex -space-x-2">
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-4.png" />
                                      </div>
                                      <div class="flex">
                                        <span
                                          class="relative inline-flex size-[30px] shrink-0 items-center justify-center rounded-full bg-warning text-3xs font-semibold uppercase leading-none text-warning-inverse ring-1 ring-warning-light hover:z-5">
                                          g
                                        </span>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true"
                                      type="checkbox" value="3" />
                                  </td>
                                  <td>
                                    <div class="flex flex-col gap-2">
                                      <a class="text-sm font-medium leading-none text-gray-900 hover:text-primary"
                                        href="#">
                                        HR Department
                                      </a>
                                      <span class="text-2sm font-normal leading-3 text-gray-700">
                                        Talent acquisition, employee welfare
                                      </span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="rating">
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    10 Oct, 2024
                                  </td>
                                  <td>
                                    <div class="flex -space-x-2">
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-4.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-1.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-2.png" />
                                      </div>
                                      <div class="flex">
                                        <span
                                          class="relative inline-flex size-[30px] shrink-0 items-center justify-center rounded-full bg-info text-3xs font-semibold leading-none text-info-inverse ring-1 ring-info-light">
                                          +A
                                        </span>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true"
                                      type="checkbox" value="4" />
                                  </td>
                                  <td>
                                    <div class="flex flex-col gap-2">
                                      <a class="text-sm font-medium leading-none text-gray-900 hover:text-primary"
                                        href="#">
                                        Sales Division
                                      </a>
                                      <span class="text-2sm font-normal leading-3 text-gray-700">
                                        Customer relations, sales strategy
                                      </span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="rating">
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    05 Oct, 2024
                                  </td>
                                  <td>
                                    <div class="flex -space-x-2">
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-24.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-7.png" />
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true"
                                      type="checkbox" value="5" />
                                  </td>
                                  <td>
                                    <div class="flex flex-col gap-2">
                                      <a class="text-sm font-medium leading-none text-gray-900 hover:text-primary"
                                        href="#">
                                        Development Team
                                      </a>
                                      <span class="text-2sm font-normal leading-3 text-gray-700">
                                        Software development
                                      </span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="rating">
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label indeterminate">
                                        <i class="ki-solid ki-star rating-on text-base leading-none"
                                          style="width: 50.0%">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    01 Oct, 2024
                                  </td>
                                  <td>
                                    <div class="flex -space-x-2">
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-3.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-8.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-9.png" />
                                      </div>
                                      <div class="flex">
                                        <span
                                          class="relative inline-flex size-[30px] shrink-0 items-center justify-center rounded-full bg-danger text-3xs font-semibold leading-none text-danger-inverse ring-1 ring-danger-light">
                                          +5
                                        </span>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true"
                                      type="checkbox" value="6" />
                                  </td>
                                  <td>
                                    <div class="flex flex-col gap-2">
                                      <a class="text-sm font-medium leading-none text-gray-900 hover:text-primary"
                                        href="#">
                                        Quality Assurance
                                      </a>
                                      <span class="text-2sm font-normal leading-3 text-gray-700">
                                        Product testing
                                      </span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="rating">
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    25 Sep, 2024
                                  </td>
                                  <td>
                                    <div class="flex -space-x-2">
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-6.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-5.png" />
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true"
                                      type="checkbox" value="7" />
                                  </td>
                                  <td>
                                    <div class="flex flex-col gap-2">
                                      <a class="text-sm font-medium leading-none text-gray-900 hover:text-primary"
                                        href="#">
                                        Finance Team
                                      </a>
                                      <span class="text-2sm font-normal leading-3 text-gray-700">
                                        Financial planning
                                      </span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="rating">
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    20 Sep, 2024
                                  </td>
                                  <td>
                                    <div class="flex -space-x-2">
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-10.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-11.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-12.png" />
                                      </div>
                                      <div class="flex">
                                        <span
                                          class="relative inline-flex size-[30px] shrink-0 items-center justify-center rounded-full bg-primary text-3xs font-semibold leading-none text-primary-inverse ring-1 ring-primary-light">
                                          +8
                                        </span>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true"
                                      type="checkbox" value="8" />
                                  </td>
                                  <td>
                                    <div class="flex flex-col gap-2">
                                      <a class="text-sm font-medium leading-none text-gray-900 hover:text-primary"
                                        href="#">
                                        Customer Support
                                      </a>
                                      <span class="text-2sm font-normal leading-3 text-gray-700">
                                        Customer service
                                      </span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="rating">
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label indeterminate">
                                        <i class="ki-solid ki-star rating-on text-base leading-none"
                                          style="width: 50.0%">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    15 Sep, 2024
                                  </td>
                                  <td>
                                    <div class="flex -space-x-2">
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-13.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-14.png" />
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true"
                                      type="checkbox" value="9" />
                                  </td>
                                  <td>
                                    <div class="flex flex-col gap-2">
                                      <a class="text-sm font-medium leading-none text-gray-900 hover:text-primary"
                                        href="#">
                                        R&D Team
                                      </a>
                                      <span class="text-2sm font-normal leading-3 text-gray-700">
                                        Research & development
                                      </span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="rating">
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    10 Sep, 2024
                                  </td>
                                  <td>
                                    <div class="flex -space-x-2">
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-15.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-16.png" />
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true"
                                      type="checkbox" value="10" />
                                  </td>
                                  <td>
                                    <div class="flex flex-col gap-2">
                                      <a class="text-sm font-medium leading-none text-gray-900 hover:text-primary"
                                        href="#">
                                        Operations Team
                                      </a>
                                      <span class="text-2sm font-normal leading-3 text-gray-700">
                                        Operations management
                                      </span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="rating">
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    05 Sep, 2024
                                  </td>
                                  <td>
                                    <div class="flex -space-x-2">
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-17.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-18.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-19.png" />
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true"
                                      type="checkbox" value="11" />
                                  </td>
                                  <td>
                                    <div class="flex flex-col gap-2">
                                      <a class="text-sm font-medium leading-none text-gray-900 hover:text-primary"
                                        href="#">
                                        IT Support
                                      </a>
                                      <span class="text-2sm font-normal leading-3 text-gray-700">
                                        Technical support
                                      </span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="rating">
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    01 Sep, 2024
                                  </td>
                                  <td>
                                    <div class="flex -space-x-2">
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-20.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-21.png" />
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true"
                                      type="checkbox" value="12" />
                                  </td>
                                  <td>
                                    <div class="flex flex-col gap-2">
                                      <a class="text-sm font-medium leading-none text-gray-900 hover:text-primary"
                                        href="#">
                                        Legal Team
                                      </a>
                                      <span class="text-2sm font-normal leading-3 text-gray-700">
                                        Legal support
                                      </span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="rating">
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    25 Aug, 2024
                                  </td>
                                  <td>
                                    <div class="flex -space-x-2">
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-22.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-23.png" />
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true"
                                      type="checkbox" value="13" />
                                  </td>
                                  <td>
                                    <div class="flex flex-col gap-2">
                                      <a class="text-sm font-medium leading-none text-gray-900 hover:text-primary"
                                        href="#">
                                        Logistics Team
                                      </a>
                                      <span class="text-2sm font-normal leading-3 text-gray-700">
                                        Supply chain
                                      </span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="rating">
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label indeterminate">
                                        <i class="ki-solid ki-star rating-on text-base leading-none"
                                          style="width: 50.0%">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    20 Aug, 2024
                                  </td>
                                  <td>
                                    <div class="flex -space-x-2">
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-24.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-25.png" />
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true"
                                      type="checkbox" value="14" />
                                  </td>
                                  <td>
                                    <div class="flex flex-col gap-2">
                                      <a class="text-sm font-medium leading-none text-gray-900 hover:text-primary"
                                        href="#">
                                        Procurement Team
                                      </a>
                                      <span class="text-2sm font-normal leading-3 text-gray-700">
                                        Supplier management
                                      </span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="rating">
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    15 Aug, 2024
                                  </td>
                                  <td>
                                    <div class="flex -space-x-2">
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-26.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-27.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-28.png" />
                                      </div>
                                      <div class="flex">
                                        <span
                                          class="relative inline-flex size-[30px] shrink-0 items-center justify-center rounded-full bg-info text-3xs font-semibold leading-none text-info-inverse ring-1 ring-info-light">
                                          +3
                                        </span>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input class="checkbox checkbox-sm" data-datatable-row-check="true"
                                      type="checkbox" value="15" />
                                  </td>
                                  <td>
                                    <div class="flex flex-col gap-2">
                                      <a class="text-sm font-medium leading-none text-gray-900 hover:text-primary"
                                        href="#">
                                        Training Team
                                      </a>
                                      <span class="text-2sm font-normal leading-3 text-gray-700">
                                        Employee training
                                      </span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="rating">
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label checked">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                      <div class="rating-label">
                                        <i class="ki-solid ki-star rating-on text-base leading-none">
                                        </i>
                                        <i class="ki-outline ki-star rating-off text-base leading-none">
                                        </i>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    10 Aug, 2024
                                  </td>
                                  <td>
                                    <div class="flex -space-x-2">
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-29.png" />
                                      </div>
                                      <div class="flex">
                                        <img
                                          class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                          src="assets/media/avatars/300-30.png" />
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div
                            class="card-footer flex-col justify-center gap-5 text-2sm font-medium text-gray-600 md:flex-row md:justify-between">
                            <div class="order-2 flex items-center gap-2 md:order-1">
                              Show
                              <select class="select select-sm w-16" name="perpage" data-datatable-size="true">
                              </select>
                              per page
                            </div>
                            <div class="order-1 flex items-center gap-4 md:order-2">
                              <span data-datatable-info="true">
                              </span>
                              <div class="pagination" data-datatable-pagination="true">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end: grid -->
            </div>
          </div>
          <!-- End of Container -->
        </main>
        <!-- End of Content -->
        <!-- Footer -->
        <footer class="footer">
          <!-- Container -->
          <div class="container-fixed">
            <div class="flex flex-col items-center justify-center gap-3 py-5 md:flex-row md:justify-between">
              <div class="order-2 flex gap-2 text-2sm font-normal md:order-1">
                <span class="text-gray-500">
                  2024©
                </span>
                <a class="text-gray-600 hover:text-primary" href="https://keenthemes.com">
                  Keenthemes Inc.
                </a>
              </div>
              <nav class="order-1 flex gap-4 text-2sm font-normal text-gray-600 md:order-2">
                <a class="hover:text-primary" href="https://keenthemes.com/metronic/tailwind/docs">
                  Docs
                </a>
                <a class="hover:text-primary" href="https://1.envato.market/Vm7VRE">
                  Purchase
                </a>
                <a class="hover:text-primary"
                  href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license">
                  FAQ
                </a>
                <a class="hover:text-primary" href="https://devs.keenthemes.com">
                  Support
                </a>
                <a class="hover:text-primary"
                  href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license">
                  License
                </a>
              </nav>
            </div>
          </div>
          <!-- End of Container -->
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Wrapper -->
    </div>

    <script type="module">
      import {
        createChat
      } from 'https://cdn.jsdelivr.net/npm/@n8n/chat/dist/chat.bundle.es.js';

      createChat({
        webhookUrl: 'https://datasea.app.n8n.cloud/webhook/3165afb3-2464-4be9-8be4-850a7e539408/chat',
      });
    </script>
  </body>

</html>
