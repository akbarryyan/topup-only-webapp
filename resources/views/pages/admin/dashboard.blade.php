@extends('layouts.admin')
@section('content')    
      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

<div class="row g-6">
  <!-- Website Analytics -->
  <div class="col-lg-6">
    <div class="swiper-container swiper-container-horizontal swiper swiper-card-advance-bg" id="swiper-with-pagination-cards">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0">PI TOPUP Analytics</h5>
              <small>Total 32.8% Conversion Rate Hari Ini</small>
            </div>
            <div class="row">
              <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1 pt-md-9">
                <h6 class="text-white mt-0 mt-md-3 mb-4">Traffic Game</h6>
                <div class="row">
                  <div class="col-6">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">42%</p>
                        <p class="mb-0">Sessions</p>
                      </li>
                      <li class="d-flex align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">2.8k</p>
                        <p class="mb-0">Customers</p>
                      </li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-unstyled mb-0">
                      <li class="d-flex mb-4 align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">5.2k</p>
                        <p class="mb-0">Top Up Views</p>
                      </li>
                      <li class="d-flex align-items-center">
                        <p class="mb-0 fw-medium me-2 website-analytics-text-bg">18%</p>
                        <p class="mb-0">Purchases</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
                <img src="{{ asset('assets/img/illustrations/card-website-analytics-1.png') }}" alt="PI TOPUP Analytics" height="150" class="card-website-analytics-img">
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0">Revenue Top Up</h5>
              <small>Total 45.2% Growth Minggu Ini</small>
            </div>
            <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1 pt-md-9">
              <h6 class="text-white mt-0 mt-md-3 mb-4">Penjualan</h6>
              <div class="row">
                <div class="col-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-4 align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">24j</p>
                      <p class="mb-0">Spend</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">2,847</p>
                      <p class="mb-0">Order</p>
                    </li>
                  </ul>
                </div>
                <div class="col-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-4 align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">156</p>
                      <p class="mb-0">Game Aktif</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">12.6k</p>
                      <p class="mb-0">Items Terjual</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
              <img src="{{ asset('assets/img/illustrations/card-website-analytics-2.png') }}" alt="Revenue Analytics" height="150" class="card-website-analytics-img">
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="row">
            <div class="col-12">
              <h5 class="text-white mb-0">Game Sources</h5>
              <small>Top Performing Games Bulan Ini</small>
            </div>
            <div class="col-lg-7 col-md-9 col-12 order-2 order-md-1 pt-md-9">
              <h6 class="text-white mt-0 mt-md-3 mb-4">Platform Game</h6>
              <div class="row">
                <div class="col-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-4 align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">2.8k</p>
                      <p class="mb-0">Mobile Legends</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">1.2k</p>
                      <p class="mb-0">Free Fire</p>
                    </li>
                  </ul>
                </div>
                <div class="col-6">
                  <ul class="list-unstyled mb-0">
                    <li class="d-flex mb-4 align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">890</p>
                      <p class="mb-0">PUBG Mobile</p>
                    </li>
                    <li class="d-flex align-items-center">
                      <p class="mb-0 fw-medium me-2 website-analytics-text-bg">645</p>
                      <p class="mb-0">Genshin Impact</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-3 col-12 order-1 order-md-2 my-4 my-md-0 text-center">
              <img src="{{ asset('assets/img/illustrations/card-website-analytics-3.png') }}" alt="Game Analytics" height="150" class="card-website-analytics-img">
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <!--/ Website Analytics -->

  <!-- Daily Top Up Sales -->
  <div class="col-xl-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header pb-0">
        <h5 class="mb-3 card-title">Daily Top Up Sales</h5>
        <p class="mb-0 text-body">Total Sales Hari Ini</p>
        <h4 class="mb-0">Rp 28.450.000</h4>
      </div>
      <div class="card-body px-0">
        <div id="averageDailySales"></div>
      </div>
    </div>
  </div>
  <!--/ Daily Top Up Sales -->

  <!-- Game Sales Overview -->
  <div class="col-xl-3 col-sm-6">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <p class="mb-0 text-body">Game Sales Overview</p>
          <p class="card-text fw-medium text-success">+24.8%</p>
        </div>
        <h4 class="card-title mb-1">Rp 186.5k</h4>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <div class="d-flex gap-2 align-items-center mb-2">
              <span class="badge bg-label-info p-1 rounded"><i class="ti ti-device-gamepad ti-sm"></i></span>
              <p class="mb-0">Mobile</p>
            </div>
            <h5 class="mb-0 pt-1">78.4%</h5>
            <small class="text-muted">6,440</small>
          </div>
          <div class="col-4">
            <div class="divider divider-vertical">
              <div class="divider-text">
                <span class="badge-divider-bg bg-label-secondary">VS</span>
              </div>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="d-flex gap-2 justify-content-end align-items-center mb-2">
              <p class="mb-0">PC</p>
              <span class="badge bg-label-primary p-1 rounded"><i class="ti ti-device-desktop ti-sm"></i></span>
            </div>
            <h5 class="mb-0 pt-1">21.6%</h5>
            <small class="text-muted">1,749</small>
          </div>
        </div>
        <div class="d-flex align-items-center mt-6">
          <div class="progress w-100" style="height: 10px;">
            <div class="progress-bar bg-info" style="width: 78%" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-primary" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Game Sales Overview -->

  <!-- Revenue Reports -->
  <div class="col-lg-6">
    <div class="card h-100">
      <div class="card-header pb-0 d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Revenue Reports</h5>
          <p class="card-subtitle">Weekly Revenue Overview</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="earningReportsId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsId">
            <a class="dropdown-item" href="javascript:void(0);">View More</a>
            <a class="dropdown-item" href="javascript:void(0);">Export Data</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="row align-items-center g-md-8">
          <div class="col-12 col-md-5 d-flex flex-column">
            <div class="d-flex gap-2 align-items-center mb-3 flex-wrap">
              <h2 class="mb-0">Rp 12.6M</h2>
              <div class="badge rounded bg-label-success">+18.4%</div>
            </div>
            <small class="text-body">Revenue minggu ini dibanding minggu lalu</small>
          </div>
          <div class="col-12 col-md-7 ps-xl-8">
            <div id="weeklyEarningReports"></div>
          </div>
        </div>
        <div class="border rounded p-5 mt-5">
          <div class="row gap-4 gap-sm-0">
            <div class="col-12 col-sm-4">
              <div class="d-flex gap-2 align-items-center">
                <div class="badge rounded bg-label-primary p-1"><i class="ti ti-device-gamepad ti-sm"></i></div>
                <h6 class="mb-0 fw-normal">Top Up Revenue</h6>
              </div>
              <h4 class="my-2">Rp 8.45M</h4>
              <div class="progress w-75" style="height:4px">
                <div class="progress-bar" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="d-flex gap-2 align-items-center">
                <div class="badge rounded bg-label-info p-1"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                <h6 class="mb-0 fw-normal">Commission</h6>
              </div>
              <h4 class="my-2">Rp 2.84M</h4>
              <div class="progress w-75" style="height:4px">
                <div class="progress-bar bg-info" role="progressbar" style="width: 23%" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="col-12 col-sm-4">
              <div class="d-flex gap-2 align-items-center">
                <div class="badge rounded bg-label-danger p-1"><i class="ti ti-credit-card ti-sm"></i></div>
                <h6 class="mb-0 fw-normal">Fees</h6>
              </div>
              <h4 class="my-2">Rp 1.31M</h4>
              <div class="progress w-75" style="height:4px">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Revenue Reports -->

  <!-- Customer Support Tracker -->
  <div class="col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Customer Support</h5>
          <p class="card-subtitle">7 Hari Terakhir</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="supportTrackerMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="supportTrackerMenu">
            <a class="dropdown-item" href="javascript:void(0);">View More</a>
            <a class="dropdown-item" href="javascript:void(0);">Export</a>
          </div>
        </div>
      </div>
      <div class="card-body row">
        <div class="col-12 col-sm-4 col-md-12 col-lg-4">
          <div class="mt-lg-4 mt-lg-2 mb-lg-6 mb-2">
            <h2 class="mb-0">89</h2>
            <p class="mb-0">Total Tickets</p>
          </div>
          <ul class="p-0 m-0">
            <li class="d-flex gap-4 align-items-center mb-lg-3 pb-1">
              <div class="badge rounded bg-label-primary p-1_5"><i class="ti ti-ticket ti-md"></i></div>
              <div>
                <h6 class="mb-0 text-nowrap">New Tickets</h6>
                <small class="text-muted">24</small>
              </div>
            </li>
            <li class="d-flex gap-4 align-items-center mb-lg-3 pb-1">
              <div class="badge rounded bg-label-info p-1_5"><i class="ti ti-circle-check ti-md"></i></div>
              <div>
                <h6 class="mb-0 text-nowrap">Resolved</h6>
                <small class="text-muted">56</small>
              </div>
            </li>
            <li class="d-flex gap-4 align-items-center pb-1">
              <div class="badge rounded bg-label-warning p-1_5"><i class="ti ti-clock ti-md"></i></div>
              <div>
                <h6 class="mb-0 text-nowrap">Response Time</h6>
                <small class="text-muted">2.4 Hours</small>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-8 col-md-12 col-lg-8">
          <div id="supportTracker"></div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Customer Support Tracker -->

  <!-- Top Up by Countries -->
  <div class="col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Top Up by Countries</h5>
          <p class="card-subtitle">Monthly Top Up Overview</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="salesByCountry" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesByCountry">
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="d-flex align-items-center mb-4">
            <div class="avatar flex-shrink-0 me-4">
              <i class="fis fi fi-id rounded-circle fs-2"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">Rp 48.2M</h6>
                </div>
                <small class="text-body">Indonesia</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-up'></i>
                  38.4%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <div class="avatar flex-shrink-0 me-4">
              <i class="fis fi fi-my rounded-circle fs-2"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">Rp 12.8M</h6>
                </div>
                <small class="text-body">Malaysia</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-up'></i>
                  14.2%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <div class="avatar flex-shrink-0 me-4">
              <i class="fis fi fi-sg rounded-circle fs-2"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">Rp 8.6M</h6>
                </div>
                <small class="text-body">Singapore</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-up'></i>
                  21.8%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <div class="avatar flex-shrink-0 me-4">
              <i class="fis fi fi-th rounded-circle fs-2"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">Rp 4.2M</h6>
                </div>
                <small class="text-body">Thailand</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-up'></i>
                  8.9%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center mb-4">
            <div class="avatar flex-shrink-0 me-4">
              <i class="fis fi fi-ph rounded-circle fs-2"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">Rp 3.1M</h6>
                </div>
                <small class="text-body">Philippines</small>
              </div>
              <div class="user-progress">
                <p class="text-danger fw-medium mb-0 d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-down'></i>
                  2.4%
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex align-items-center">
            <div class="avatar flex-shrink-0 me-4">
              <i class="fis fi fi-vn rounded-circle fs-2"></i>
            </div>
            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
              <div class="me-2">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">Rp 2.8M</h6>
                </div>
                <small class="text-body">Vietnam</small>
              </div>
              <div class="user-progress">
                <p class="text-success fw-medium mb-0 d-flex align-items-center gap-1">
                  <i class='ti ti-chevron-up'></i>
                  12.6%
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Top Up by Countries -->

  <!-- Total Earning -->
  <div class="col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="mb-0 card-title">Total Earning</h5>
          <div class="dropdown">
            <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="totalEarning" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="ti ti-dots-vertical ti-md text-muted"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalEarning">
              <a class="dropdown-item" href="javascript:void(0);">View More</a>
              <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center">
          <h2 class="mb-0 me-2">87%</h2>
          <i class="ti ti-chevron-up text-success me-1"></i>
          <h6 class="text-success mb-0">25.8%</h6>
        </div>
      </div>
      <div class="card-body">
        <div id="totalEarningChart"></div>
        <div class="d-flex align-items-start my-4">
          <div class="badge rounded bg-label-primary p-2 me-4 rounded"><i class="ti ti-brand-paypal ti-md"></i></div>
          <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
            <div class="me-2">
              <h6 class="mb-0">Total Revenue</h6>
              <small class="text-body">Client Payment</small>
            </div>
            <h6 class="mb-0 text-success">+$126</h6>
          </div>
        </div>
        <div class="d-flex align-items-start">
          <div class="badge rounded bg-label-secondary p-2 me-4 rounded"><i class="ti ti-currency-dollar ti-md"></i></div>
          <div class="d-flex justify-content-between w-100 gap-2 align-items-center">
            <div class="me-2">
              <h6 class="mb-0">Total Sales</h6>
              <small class="text-body">Refund</small>
            </div>
            <h6 class="mb-0 text-success">+$98</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Total Earning -->

  <!-- Monthly Campaign State -->
  <div class="col-xxl-4 col-md-6">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Monthly Campaign State</h5>
          <p class="card-subtitle">8.52k Social Visiters</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="MonthlyCampaign" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="MonthlyCampaign">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="p-0 m-0">
          <li class="mb-6 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-success rounded p-1_5"><i class="ti ti-mail ti-md"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-4">Emails</h6>
              <div class="d-flex">
                <p class="mb-0">12,346</p>
                <p class="ms-4 text-success mb-0">0.3%</p>
              </div>
            </div>
          </li>
          <li class="mb-6 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-info rounded p-1_5"><i class="ti ti-link ti-md"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-4">Opened</h6>
              <div class="d-flex">
                <p class="mb-0">8,734</p>
                <p class="ms-4 text-success mb-0">2.1%</p>
              </div>
            </div>
          </li>
          <li class="mb-6 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-warning rounded p-1_5"><i class="ti ti-mouse ti-md"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-4">Clicked</h6>
              <div class="d-flex">
                <p class="mb-0">967</p>
                <p class="ms-4 text-danger mb-0">1.4%</p>
              </div>
            </div>
          </li>
          <li class="mb-6 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-primary rounded p-1_5"><i class="ti ti-users ti-md"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-4">Subscribe</h6>
              <div class="d-flex">
                <p class="mb-0">345</p>
                <p class="ms-4 text-success mb-0">8.5%</p>
              </div>
            </div>
          </li>
          <li class="mb-6 d-flex justify-content-between align-items-center">
            <div class="badge bg-label-secondary rounded p-1_5"><i class="ti ti-alert-triangle ti-md"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-4">Complaints</h6>
              <div class="d-flex">
                <p class="mb-0">10</p>
                <p class="ms-4 text-danger mb-0">1.5%</p>
              </div>
            </div>
          </li>
          <li class="d-flex justify-content-between align-items-center">
            <div class="badge bg-label-danger rounded p-1_5"><i class="ti ti-ban ti-md"></i></div>
            <div class="d-flex justify-content-between w-100 flex-wrap">
              <h6 class="mb-0 ms-4">Unsubscribe</h6>
              <div class="d-flex">
                <p class="mb-0">86</p>
                <p class="ms-4 text-success mb-0">0.8%</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Monthly Campaign State -->

  <!-- Source Visit -->
  <div class="col-xxl-4 col-xl-6 col-lg-12">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Source Visits</h5>
          <p class="card-subtitle">38.4k Visitors</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="sourceVisits" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sourceVisits">
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Download</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <ul class="list-unstyled mb-0">
          <li class="mb-6">
            <div class="d-flex align-items-center">
              <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-shadow ti-md"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Direct Source</h6>
                  <small class="text-body">Direct link click</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">1.2k</p>
                  <div class="ms-4 badge bg-label-success">+4.2%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="mb-6">
            <div class="d-flex align-items-center">
              <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-globe ti-md"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Social Network</h6>
                  <small class="text-body">Social Channels</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">31.5k</p>
                  <div class="ms-4 badge bg-label-success">+8.2%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="mb-6">
            <div class="d-flex align-items-center">
              <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-mail ti-md"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Email Newsletter</h6>
                  <small class="text-body">Mail Campaigns</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">893</p>
                  <div class="ms-4 badge bg-label-success">+2.4%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="mb-6">
            <div class="d-flex align-items-center">
              <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-external-link ti-md"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Referrals</h6>
                  <small class="text-body">Impact Radius Visits</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">342</p>
                  <div class="ms-4 badge bg-label-danger">-0.4%</div>
                </div>
              </div>
            </div>
          </li>
          <li class="mb-6">
            <div class="d-flex align-items-center">
              <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-ad ti-md"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">ADVT</h6>
                  <small class="text-body">Google ADVT</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">2.15k</p>
                  <div class="ms-4 badge bg-label-success">+9.1%</div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="d-flex align-items-center">
              <div class="badge bg-label-secondary text-body p-2 me-4 rounded"><i class="ti ti-star ti-md"></i></div>
              <div class="d-flex justify-content-between w-100 flex-wrap gap-2">
                <div class="me-2">
                  <h6 class="mb-0">Other</h6>
                  <small class="text-body">Many Sources</small>
                </div>
                <div class="d-flex align-items-center">
                  <p class="mb-0">12.5k</p>
                  <div class="ms-4 badge bg-label-success">+6.2%</div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--/ Source Visit -->

  <!-- Recent Transactions table -->
  <div class="col-xxl-8">
    <div class="card">
      <div class="card-header d-flex justify-content-between">
        <div class="card-title mb-0">
          <h5 class="mb-1">Recent Transactions</h5>
          <p class="card-subtitle">Latest top-up transactions overview</p>
        </div>
        <div class="dropdown">
          <button class="btn btn-text-secondary rounded-pill text-muted border-0 p-2 me-n1" type="button" id="recentTransactions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ti ti-dots-vertical ti-md text-muted"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="recentTransactions">
            <a class="dropdown-item" href="javascript:void(0);">Export</a>
            <a class="dropdown-item" href="javascript:void(0);">View All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
          </div>
        </div>
      </div>
      <div class="card-datatable table-responsive">
        <table class="table table-sm">
          <thead>
            <tr>
              <th>User</th>
              <th>Game</th>
              <th>Product</th>
              <th>Amount</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{ asset('assets/img/avatars/1.png') }}" alt="Avatar" class="rounded-circle">
                  </div>
                  <div>
                    <h6 class="mb-0">GamerPro123</h6>
                    <small class="text-body">ID: 125844</small>
                  </div>
                </div>
              </td>
              <td>Mobile Legends</td>
              <td>275 Diamonds</td>
              <td>Rp 85.000</td>
              <td><span class="badge bg-label-success rounded-pill">Success</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-md"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Print Receipt</a></li>
                  </ul>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{ asset('assets/img/avatars/2.png') }}" alt="Avatar" class="rounded-circle">
                  </div>
                  <div>
                    <h6 class="mb-0">FFPlayer</h6>
                    <small class="text-body">ID: 128854</small>
                  </div>
                </div>
              </td>
              <td>Free Fire</td>
              <td>1000 Diamonds</td>
              <td>Rp 250.000</td>
              <td><span class="badge bg-label-warning rounded-pill">Pending</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-md"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">Process Now</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Cancel</a></li>
                  </ul>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar" class="rounded-circle">
                  </div>
                  <div>
                    <h6 class="mb-0">PUBGMaster</h6>
                    <small class="text-body">ID: 154789</small>
                  </div>
                </div>
              </td>
              <td>PUBG Mobile</td>
              <td>600 UC</td>
              <td>Rp 95.000</td>
              <td><span class="badge bg-label-success rounded-pill">Success</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-md"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Print Receipt</a></li>
                  </ul>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{ asset('assets/img/avatars/4.png') }}" alt="Avatar" class="rounded-circle">
                  </div>
                  <div>
                    <h6 class="mb-0">ValorantPro</h6>
                    <small class="text-body">ID: 198764</small>
                  </div>
                </div>
              </td>
              <td>Valorant</td>
              <td>5350 VP</td>
              <td>Rp 750.000</td>
              <td><span class="badge bg-label-success rounded-pill">Success</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-md"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">View Details</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Print Receipt</a></li>
                  </ul>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-sm me-3">
                    <img src="{{ asset('assets/img/avatars/5.png') }}" alt="Avatar" class="rounded-circle">
                  </div>
                  <div>
                    <h6 class="mb-0">GenshinPlayer</h6>
                    <small class="text-body">ID: 201458</small>
                  </div>
                </div>
              </td>
              <td>Genshin Impact</td>
              <td>3280 Genesis</td>
              <td>Rp 799.000</td>
              <td><span class="badge bg-label-danger rounded-pill">Failed</span></td>
              <td>
                <div class="dropdown">
                  <button type="button" class="btn btn-sm btn-icon btn-text-secondary rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ti ti-dots-vertical ti-md"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="javascript:void(0);">Retry Payment</a></li>
                    <li><a class="dropdown-item" href="javascript:void(0);">Contact Support</a></li>
                  </ul>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!--/ Recent Transactions table -->
</div>


          </div>
          <!-- / Content -->

          
          

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl">
    <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
      <div class="text-body">
        © <script>
        document.write(new Date().getFullYear())

        </script>, made with ❤️ by <a href="https://pixinvent.com/" target="_blank" class="footer-link">Pixinvent</a>
      </div>
      <div class="d-none d-lg-inline-block">
        
        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>
        
        <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>
        
        
        <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
        
      </div>
    </div>
  </div>
</footer>
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
@endsection

