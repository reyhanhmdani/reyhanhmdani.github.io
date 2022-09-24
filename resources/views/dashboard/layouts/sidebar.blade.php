<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="card nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
              {{-- cara kasih link aktif ada 2 yang satu makai request seperti di atas yang satu seperti di navbar or web --}}
              <span data-feather="file-text"></span>
              My Blog
            </a>
          </li>
      </ul>
    </div>


    <div class="bottom-0 position-absolute mb-5 " style="margin-left: 20px">
        <a class="bg-primary rounded fw-bold" style="text-decoration:none; padding:10px; color: white; " href="../#">back to mainpage</a>
    </div>
  </nav>
