<div
  class="sidebar fixed bottom-0 top-0 z-20 hidden shrink-0 flex-col items-stretch border-e border-e-gray-200 bg-light dark:border-e-coal-100 dark:bg-coal-600 lg:flex"
  id="sidebar" data-drawer="true" data-drawer-class="drawer drawer-start top-0 bottom-0"
  data-drawer-enable="true|lg:false">
  <div class="sidebar-header relative hidden shrink-0 items-center justify-between px-3 lg:flex lg:px-6"
    id="sidebar_header">
    <a class="inline-flex items-center gap-2 dark:hidden" href="/">
      <img class="default-logo max-h-[50px] min-h-[22px] max-w-none" src="assets/smart-logo.jpg" />
      <img class="small-logo max-h-[50px] min-h-[22px] max-w-none" src="assets/smart-logo.jpg" />
      <h1 class="text-2xl font-semibold">SmartAsset</h1>
    </a>
    <a class="hidden items-center gap-2 dark:inline-flex" href="html/demo1.html">
      <img class="default-logo min-h-[22px] max-w-none" src="assets/smart-logo.jpg" />
      <img class="small-logo min-h-[22px] max-w-none" src="assets/smart-logo.jpg" />
      <h1 class="text-2xl font-semibold">SmartAsset</h1>
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
              Asset Master Data
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
            <div class="menu-item flex-col-reverse" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
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
            <div class="menu-item flex-col-reverse" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
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
              Inspection
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
                        href="html/demo1/authentication/classic/reset-password/change-password.html" tabindex="0">
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
                        href="html/demo1/authentication/classic/reset-password/password-changed.html" tabindex="0">
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
                        href="html/demo1/authentication/branded/reset-password/change-password.html" tabindex="0">
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
                        href="html/demo1/authentication/branded/reset-password/password-changed.html" tabindex="0">
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
          <div class="menu-label gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]" href=""
            tabindex="0">
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
          <div class="menu-label gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]" href=""
            tabindex="0">
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
          <div class="menu-label gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]" href=""
            tabindex="0">
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
          <div class="menu-label gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]" href=""
            tabindex="0">
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
          <div class="menu-label gap-[10px] border border-transparent py-[6px] pe-[10px] ps-[10px]" href=""
            tabindex="0">
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
