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
                href="/">
                <span class="menu-title text-nowrap">
                  Home
                </span>
              </a>
            </div>
            <!--End of Megamenu Item-->
            <!--Megamenu Item-->
            <div class="menu-item">
              <a class="menu-item-hover:text-primary menu-link text-nowrap text-sm font-medium text-gray-800 menu-item-active:font-medium menu-item-active:text-gray-900"
                href="/">
                <span class="menu-title text-nowrap">
                  Profile
                </span>
              </a>
            </div>
            <!--End of Megamenu Item-->
            <!--Megamenu Item-->
            <div class="menu-item">
              <a class="menu-item-hover:text-primary menu-link text-nowrap text-sm font-medium text-gray-800 menu-item-active:font-medium menu-item-active:text-gray-900"
                href="/">
                <span class="menu-title text-nowrap">
                  My Account
                </span>
              </a>
            </div>
            <!--End of Megamenu Item-->
            <!--Megamenu Item-->
            <div class="menu-item">
              <a class="menu-item-hover:text-primary menu-link text-nowrap text-sm font-medium text-gray-800 menu-item-active:font-medium menu-item-active:text-gray-900"
                href="/">
                <span class="menu-title text-nowrap">
                  Network
                </span>
              </a>
            </div>
            <!--End of Megamenu Item-->
            <!--Megamenu Item-->
            <div class="menu-item">
              <a class="menu-item-hover:text-primary menu-link text-nowrap text-sm font-medium text-gray-800 menu-item-active:font-medium menu-item-active:text-gray-900"
                href="/">
                <span class="menu-title text-nowrap">
                  Authentication
                </span>
              </a>
            </div>
            <!--End of Megamenu Item-->
            <!--Megamenu Item-->
            <div class="menu-item">
              <a class="menu-item-hover:text-primary menu-link text-nowrap text-sm font-medium text-gray-800 menu-item-active:font-medium menu-item-active:text-gray-900"
                href="/">
                <span class="menu-title text-nowrap">
                  Help
                </span>
              </a>
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
            <div class="flex items-center justify-between gap-2.5 px-5 py-2.5 text-sm font-semibold text-gray-900">
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
                    <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
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
                      <img class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                        src="assets/media/avatars/300-4.png" />
                    </div>
                    <div class="flex">
                      <img class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                        src="assets/media/avatars/300-1.png" />
                    </div>
                    <div class="flex">
                      <img class="relative size-[30px] shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
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
                    <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end"
                      data-menu-item-placement-rtl="bottom-start" data-menu-item-toggle="dropdown"
                      data-menu-item-trigger="click|lg:hover">
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
                  <div class="menu-item" data-menu-item-offset="-15px, 0" data-menu-item-placement="right-start"
                    data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-4.png" alt="" />
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-5.png" alt="" />
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-27.png" alt="" />
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-1.png" alt="" />
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
                        <a class="me-1 text-xs font-medium text-gray-700 hover:text-primary-active" href="#">
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-11.png" alt="" />
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-14.png" alt="" />
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
                        <a class="me-1 text-xs font-medium text-gray-700 hover:text-primary-active" href="#">
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-25.png" alt="" />
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
                          <a class="text-xs font-medium text-gray-900 hover:text-primary-active" href="#">
                            Ronald Richards
                          </a>
                          <a class="text-3xs font-medium text-gray-500 hover:text-primary-active" href="#">
                            ronald.richards@gmail.com
                          </a>
                        </div>
                        <a class="text-xs font-medium text-gray-700 hover:text-primary-active" href="#">
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-34.png" alt="" />
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
                            <a class="text-xs font-medium text-gray-700 hover:text-primary-active" href="#">
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-29.png" alt="" />
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
                              <img class="relative size-6 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                src="assets/media/avatars/300-3.png" />
                            </div>
                            <div class="flex">
                              <img class="relative size-6 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-30.png" alt="" />
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-24.png" alt="" />
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-15.png" alt="" />
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
                              <a class="text-xs font-medium text-gray-700 hover:text-primary-active" href="#">
                                Peparation For Release
                              </a>
                              <span class="text-2xs font-medium text-gray-600">
                                9:00 PM - 10:00 PM
                              </span>
                            </div>
                          </div>
                          <div class="flex -space-x-2">
                            <div class="flex">
                              <img class="relative size-6 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                src="assets/media/avatars/300-4.png" />
                            </div>
                            <div class="flex">
                              <img class="relative size-6 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
                                src="assets/media/avatars/300-1.png" />
                            </div>
                            <div class="flex">
                              <img class="relative size-6 shrink-0 rounded-full ring-1 ring-light-light hover:z-5"
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-6.png" alt="" />
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-12.png" alt="" />
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
                            <a class="text-xs font-medium text-gray-700 hover:text-primary-active" href="#">
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
                            <a class="text-xs font-medium text-gray-700 hover:text-primary-active" href="#">
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-21.png" alt="" />
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-13.png" alt="" />
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-1.png" alt="" />
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-19.png" alt="" />
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
                        <a class="me-1 text-xs font-medium text-gray-700 hover:text-primary-active" href="#">
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-17.png" alt="" />
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-34.png" alt="" />
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-9.png" alt="" />
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
                      <img class="size-8 rounded-full" src="assets/media/avatars/300-13.png" alt="" />
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
            <img class="size-9 shrink-0 rounded-full border-2 border-success" src="assets/media/avatars/300-2.png"
              alt="">
            </img>
          </div>
          <div class="menu-dropdown menu-default w-screen max-w-[250px] light:border-gray-300">
            <div class="flex items-center justify-between gap-1.5 px-5 py-1.5">
              <div class="flex items-center gap-2">
                <img class="size-9 rounded-full border-2 border-success" src="assets/media/avatars/300-2.png"
                  alt="">
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
              <div class="menu-item" data-menu-item-offset="-50px, 0" data-menu-item-placement="left-start"
                data-menu-item-placement-rtl="right-start" data-menu-item-toggle="dropdown"
                data-menu-item-trigger="click|lg:hover">
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
              <div class="menu-item" data-menu-item-offset="-10px, 0" data-menu-item-placement="left-start"
                data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
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
                    <img class="inline-block size-3.5 rounded-full" src="assets/media/flags/united-states.svg"
                      alt="" />
                  </div>
                </div>
                <div class="menu-dropdown menu-default w-full max-w-[170px] light:border-gray-300">
                  <div class="menu-item active">
                    <a class="menu-link h-10" href="?dir=ltr">
                      <span class="menu-icon">
                        <img class="inline-block size-4 rounded-full" src="assets/media/flags/united-states.svg"
                          alt="" />
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
                        <img class="inline-block size-4 rounded-full" src="assets/media/flags/saudi-arabia.svg"
                          alt="" />
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
                    <input name="check" data-theme-state="dark" data-theme-toggle="true" type="checkbox"
                      value="1">
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
