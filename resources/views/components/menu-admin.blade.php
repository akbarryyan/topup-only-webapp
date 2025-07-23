<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo ">
    <a href="index.html" class="app-brand-link">
      <span class="app-brand-logo demo">
      <svg width="32" height="22" viewBox="0 0 32 22" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z" fill="#7367F0" />
        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z" fill="#161616" />
        <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd" d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z" fill="#161616" />
        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z" fill="#7367F0" />
      </svg>
      </span>
      <span class="app-brand-text demo menu-text fw-bold">PI TOPUP</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>
  
  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}">
      <a href="{{ route('admin.dashboard') }}" class="menu-link">
        <i class="menu-icon tf-icons ti ti-smart-home"></i>
        <div data-i18n="Dashboard">Dashboard</div>
      </a>
    </li>

    <!-- Transactions -->
    <li class="menu-header small">
      <span class="menu-header-text" data-i18n="Transactions">Transaksi</span>
    </li>
    <li class="menu-item {{ Request::routeIs('admin.transactions*') ? 'active' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-credit-card"></i>
        <div data-i18n="Transactions">Transaksi</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ Request::routeIs('admin.transactions.index') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="All Transactions">Semua Transaksi</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.transactions.pending') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="Pending">Pending</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.transactions.success') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="Success">Berhasil</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.transactions.failed') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="Failed">Gagal</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Products & Games -->
    <li class="menu-header small">
      <span class="menu-header-text" data-i18n="Products">Produk</span>
    </li>
    <li class="menu-item {{ Request::routeIs('admin.games*') ? 'active' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-device-gamepad-2"></i>
        <div data-i18n="Games">Game</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ Request::routeIs('admin.games.index') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="All Games">Semua Game</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.games.mobile') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="Mobile Games">Game Mobile</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.games.pc') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="PC Games">Game PC</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.games.console') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="Console Games">Game Console</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item {{ Request::routeIs('admin.products*') ? 'active' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-package"></i>
        <div data-i18n="Products">Produk</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ Request::routeIs('admin.products.index') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="All Products">Semua Produk</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.products.diamonds') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="Diamonds">Diamonds</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.products.uc') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="UC">UC</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.products.vp') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="VP">VP</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Users & Management -->
    <li class="menu-header small">
      <span class="menu-header-text" data-i18n="Management">Manajemen</span>
    </li>
    <li class="menu-item {{ Request::routeIs('admin.users*') ? 'active' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-users"></i>
        <div data-i18n="Users">Users</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ Request::routeIs('admin.users.index') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="All Users">Semua Users</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.users.active') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="Active Users">Users Aktif</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.users.banned') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="Banned Users">Users Banned</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item {{ Request::routeIs('admin.payments*') ? 'active' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-wallet"></i>
        <div data-i18n="Payment Methods">Metode Pembayaran</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ Request::routeIs('admin.payments.index') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="All Methods">Semua Metode</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.payments.bank') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="Bank Transfer">Transfer Bank</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.payments.ewallet') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="E-Wallet">E-Wallet</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.payments.pulsa') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="Pulsa">Pulsa</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Reports & Analytics -->
    <li class="menu-header small">
      <span class="menu-header-text" data-i18n="Reports">Laporan</span>
    </li>
    <li class="menu-item {{ Request::routeIs('admin.reports*') ? 'active' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-chart-bar"></i>
        <div data-i18n="Reports">Laporan</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ Request::routeIs('admin.reports.revenue') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="Revenue">Revenue</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.reports.transactions') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="Transaction Reports">Laporan Transaksi</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.reports.popular-games') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="Popular Games">Game Populer</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Settings -->
    <li class="menu-header small">
      <span class="menu-header-text" data-i18n="Settings">Pengaturan</span>
    </li>
    <li class="menu-item {{ Request::routeIs('admin.settings*') ? 'active' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div data-i18n="Settings">Pengaturan</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ Request::routeIs('admin.settings.general') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="General">Umum</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.settings.api') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="API Settings">Pengaturan API</div>
          </a>
        </li>
        <li class="menu-item {{ Request::routeIs('admin.settings.notifications') ? 'active' : '' }}">
          <a href="#" class="menu-link">
            <div data-i18n="Notifications">Notifikasi</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item {{ Request::routeIs('admin.support*') ? 'active' : '' }}">
      <a href="#" class="menu-link">
        <i class="menu-icon tf-icons ti ti-headset"></i>
        <div data-i18n="Support">Support</div>
      </a>
    </li>
  </ul>
</aside>