<!DOCTYPE html>


<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title> Dashboard - BEYOND FAITH</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="admin/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="admin/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="admin/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('admin.partials.sidebar')

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          @include('admin.partials.navbar')
          <!-- / Navbar -->

          <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              @include('admin.partials.breadcrumbs')
              @include('admin.partials.ui-components')
              
              <!-- Metrics Cards -->
              <div class="row mb-4">
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <span class="fw-semibold d-block mb-1">Total Events</span>
                          <h3 class="card-title mb-2">{{ $totalEvents }}</h3>
                        </div>
                        <div class="avatar flex-shrink-0">
                          <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-calendar"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <span class="fw-semibold d-block mb-1">Total Ebooks</span>
                          <h3 class="card-title mb-2">{{ $totalEbooks }}</h3>
                        </div>
                        <div class="avatar flex-shrink-0">
                          <span class="avatar-initial rounded bg-label-success"><i class="bx bx-book"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <span class="fw-semibold d-block mb-1">Total Messages</span>
                          <h3 class="card-title mb-2">{{ $totalMessages }}</h3>
                        </div>
                        <div class="avatar flex-shrink-0">
                          <span class="avatar-initial rounded bg-label-info"><i class="bx bx-microphone"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div>
                          <span class="fw-semibold d-block mb-1">Contacts</span>
                          <h3 class="card-title mb-2">{{ $totalContacts }}</h3>
                        </div>
                        <div class="avatar flex-shrink-0">
                          <span class="avatar-initial rounded bg-label-warning"><i class="bx bx-envelope"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Quick Actions -->
              <div class="row mb-4">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title mb-3">Quick Actions</h5>
                      <div class="d-flex flex-wrap gap-2">
                        <a href="{{ url('events') }}" class="btn btn-church-primary"><i class="bx bx-plus"></i> Add Event</a>
                        <a href="{{ url('messages') }}" class="btn btn-success"><i class="bx bx-plus"></i> Upload Message</a>
                        <a href="{{ url('ebooksource') }}" class="btn btn-info"><i class="bx bx-plus"></i> Upload Ebook</a>
                        <a href="{{ url('admingallery') }}" class="btn btn-warning"><i class="bx bx-plus"></i> Add Gallery</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Recent Activity -->
              <div class="row">
                <!-- Recent Events -->
                <div class="col-md-6 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                      <h5 class="card-title mb-0">Recent Events</h5>
                      <a href="{{ url('events') }}" class="btn btn-sm btn-outline-primary">View All</a>
                    </div>
                    <div class="card-body">
                      @forelse($recentEvents as $event)
                        <div class="d-flex mb-3 pb-3 border-bottom">
                          <div class="flex-grow-1">
                            <h6 class="mb-1">{{ $event->header }}</h6>
                            <small class="text-muted">{{ $event->date }} at {{ $event->time }}</small>
                          </div>
                        </div>
                      @empty
                        <p class="text-muted">No events yet</p>
                      @endforelse
                    </div>
                  </div>
                </div>

                <!-- Recent Messages -->
                <div class="col-md-6 mb-4">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                      <h5 class="card-title mb-0">Recent Messages</h5>
                      <a href="{{ url('messages') }}" class="btn btn-sm btn-outline-primary">View All</a>
                    </div>
                    <div class="card-body">
                      @forelse($recentMessages as $message)
                        <div class="d-flex mb-3 pb-3 border-bottom">
                          <div class="flex-grow-1">
                            <h6 class="mb-1">{{ $message->header }}</h6>
                            <small class="text-muted">{{ $message->created_at->diffForHumans() }}</small>
                          </div>
                        </div>
                      @empty
                        <p class="text-muted">No messages yet</p>
                      @endforelse
                    </div>
                  </div>
                </div>
              </div>

              <!-- Recent Contacts -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                      <h5 class="card-title mb-0">Recent Contacts</h5>
                      <form method="GET" action="{{ url('home') }}" class="d-flex gap-2 flex-grow-1 flex-md-grow-0">
                        <input type="text" name="search" class="form-control form-control-sm" placeholder="Search contacts..." value="{{ request('search') }}" style="min-width: 200px;">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="bx bx-search"></i></button>
                        @if(request('search'))
                          <a href="{{ url('home') }}" class="btn btn-sm btn-secondary"><i class="bx bx-x"></i></a>
                        @endif
                      </form>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>
                                <a href="?sort=name&order={{ request('sort') == 'name' && request('order') == 'asc' ? 'desc' : 'asc' }}{{ request('search') ? '&search='.request('search') : '' }}" class="text-decoration-none text-dark">
                                  Name 
                                  @if(request('sort') == 'name')
                                    <i class="bx bx-{{ request('order') == 'asc' ? 'up' : 'down' }}-arrow"></i>
                                  @endif
                                </a>
                              </th>
                              <th class="d-none d-md-table-cell">
                                <a href="?sort=email&order={{ request('sort') == 'email' && request('order') == 'asc' ? 'desc' : 'asc' }}{{ request('search') ? '&search='.request('search') : '' }}" class="text-decoration-none text-dark">
                                  Email
                                  @if(request('sort') == 'email')
                                    <i class="bx bx-{{ request('order') == 'asc' ? 'up' : 'down' }}-arrow"></i>
                                  @endif
                                </a>
                              </th>
                              <th class="d-none d-lg-table-cell">Message</th>
                              <th>
                                <a href="?sort=created_at&order={{ request('sort') == 'created_at' && request('order') == 'asc' ? 'desc' : 'asc' }}{{ request('search') ? '&search='.request('search') : '' }}" class="text-decoration-none text-dark">
                                  Date
                                  @if(request('sort') == 'created_at' || !request('sort'))
                                    <i class="bx bx-{{ request('order') == 'asc' ? 'up' : 'down' }}-arrow"></i>
                                  @endif
                                </a>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($recentContacts as $contact)
                              <tr>
                                <td>
                                  <div class="fw-semibold">{{ $contact->name }}</div>
                                  <small class="text-muted d-md-none">{{ $contact->email }}</small>
                                </td>
                                <td class="d-none d-md-table-cell">{{ $contact->email }}</td>
                                <td class="d-none d-lg-table-cell">{{ Str::limit($contact->message, 50) }}</td>
                                <td>
                                  <small>{{ $contact->created_at->format('M d, Y') }}</small>
                                  <div class="d-lg-none"><small class="text-muted">{{ Str::limit($contact->message, 30) }}</small></div>
                                </td>
                              </tr>
                            @empty
                              <tr>
                                <td colspan="4" class="text-center text-muted py-4">
                                  @if(request('search'))
                                    No contacts found matching "{{ request('search') }}"
                                  @else
                                    No contacts yet
                                  @endif
                                </td>
                              </tr>
                            @endforelse
                          </tbody>
                        </table>
                      </div>
                      
                      @if($recentContacts->hasPages())
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-3 gap-2">
                          <div class="text-muted small">
                            Showing {{ $recentContacts->firstItem() }} to {{ $recentContacts->lastItem() }} of {{ $recentContacts->total() }} contacts
                          </div>
                          <nav>
                            {{ $recentContacts->links('pagination::bootstrap-4') }}
                          </nav>
                        </div>
                      @endif
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="#"  class="footer-link fw-bolder">404 Softwares Inc.</a>
                </div>
                <!-- <div>
                  <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
                  <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

                  <a
                    href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
                    target="_blank"
                    class="footer-link me-4"
                    >Documentation</a
                  >

                  <a
                    href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
                    target="_blank"
                    class="footer-link me-4"
                    >Support</a
                  >
                </div> -->
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- <div class="buy-now">
      <a
        href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Upgrade to Pro</a
      >
    </div> -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="admin/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="admin/assets/vendor/libs/popper/popper.js"></script>
    <script src="admin/assets/vendor/js/bootstrap.js"></script>
    <script src="admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="admin/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="admin/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="admin/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="admin/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
