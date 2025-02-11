<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Rag System') }}</title>
    <link type="image/x-icon" href="{{ asset('assets/smart-logo.jpg') }}" rel="icon" />
    <link href="https://cdn.jsdelivr.net/npm/@n8n/chat/dist/style.css" rel="stylesheet" />
    @vite(['resources/css/app.scss', 'resources/js/app.jsx'])
  </head>

  <body
    class="demo1 sidebar-fixed header-fixed flex h-full bg-[--tw-page-bg] text-base text-gray-700 antialiased [--tw-page-bg-dark:var(--tw-coal-500)] [--tw-page-bg:#fefefe] dark:bg-[--tw-page-bg-dark]">

    <div class="flex grow">
      <!-- Sidebar -->
      <x-sidebar />
      <!-- End of Sidebar -->
      <!-- Wrapper -->
      <div class="wrapper flex grow flex-col">
        <!-- Header -->
        <x-header />
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
                      <img class="ms-5 mt-4 w-7" src="{{ asset('assets/image.png') }}" alt="" />
                      <div class="flex flex-col gap-1 px-5 pb-4">
                        <span class="text-3xl font-semibold text-gray-900">
                          9.3k
                        </span>
                        <span class="text-2sm font-normal text-gray-700">
                          Total Asset Values
                        </span>
                      </div>
                    </div>
                    <div
                      class="channel-stats-bg card h-full flex-col justify-between gap-6 bg-cover bg-[right_top_-1.7rem] bg-no-repeat rtl:bg-[left_top_-1.7rem]">
                      <img class="ms-5 mt-4 w-7" src="{{ asset('assets/image-2.png') }}" alt="" />
                      <div class="flex flex-col gap-1 px-5 pb-4">
                        <span class="text-3xl font-semibold text-gray-900">
                          24k
                        </span>
                        <span class="text-2sm font-normal text-gray-700">
                          Low Value Assets
                        </span>
                      </div>
                    </div>
                    <div
                      class="channel-stats-bg card h-full flex-col justify-between gap-6 bg-cover bg-[right_top_-1.7rem] bg-no-repeat rtl:bg-[left_top_-1.7rem]">
                      <img class="ms-5 mt-4 w-7" src="{{ asset('assets/image-3.png') }}" alt="" />
                      <div class="flex flex-col gap-1 px-5 pb-4">
                        <span class="text-3xl font-semibold text-gray-900">
                          608
                        </span>
                        <span class="text-2sm font-normal text-gray-700">
                          Asset Inspection Schedule
                        </span>
                      </div>
                    </div>
                    <div
                      class="channel-stats-bg card h-full flex-col justify-between gap-6 bg-cover bg-[right_top_-1.7rem] bg-no-repeat rtl:bg-[left_top_-1.7rem]">
                      <img class="ms-5 mt-4 w-7 dark:hidden" src="{{ asset('assets/image-4.png') }}" alt="" />

                      <div class="flex flex-col gap-1 px-5 pb-4">
                        <span class="text-3xl font-semibold text-gray-900">
                          2.5k
                        </span>
                        <span class="text-2sm font-normal text-gray-700">
                          Total Asset Unit
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
                  <div class="card h-full">
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
                              class="relative inline-flex size-10 shrink-0 items-center justify-center rounded-full bg-success text-xs font-semibold leading-none text-success-inverse ring-1 ring-success-light hover:z-5">
                              S
                            </span>
                          </div>
                        </div>
                        <h2 class="text-1.5xl font-semibold text-gray-900">
                          Connect Today & Join
                          <br />
                          the
                          <a class="link" href="#">
                            Smart Asset Management
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
                        <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-start"
                          data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
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
        i18n: {
          en: {
            title: `Hi there!`,
            subtitle: "I'm Asetta your Smart Asset Virtual Assistant",
            footer: '',
            getStarted: 'New Conversation',
            inputPlaceholder: 'Type your question..',
          },
        },
        initialMessages: [
          'Hi there!',
          'My name is Asetta. How can I assist you today?'
        ],
        mode: 'fullscreen'
      });
    </script>
  </body>

</html>
