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

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <!-- <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  /> -->
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  
                  
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="admin/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">  {{ Auth::user()->name }}</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('profile.show') }}">
                      <i class="bx bx-cog me-2"></i>
                             
                        <span class="align-middle">   {{ __('Settings') }}</span>
                       
                      </a>
                    </li>
                    <!-- <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li> -->
                 
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class=" " >
                        <form class="" method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <!-- <i style="margin-right:-2vw !important;" class="bx bx-power-off me-2"></i> -->

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                         <button class="btn btn-success" >Log Out</button>                           
                                 </x-dropdown-link>
                            </form> 
                       
                      </a>
                       
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper p-4">
            <!-- Content -->
            @include('admin.partials.breadcrumbs')
            @include('admin.partials.ui-components')
            
                         @if(session()->has('message'))
                            <div
                                class="alert alert-danger alert-dismissible fade show"
                                role="alert"
                            >
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="Close"
                                ></button>
                          <span class="bold">{{session()->get('message')}}</span> 
                        
                            </div>
                            @endif
                            
                            <script>
                                var alertList = document.querySelectorAll(".alert");
                                alertList.forEach(function (alert) {
                                    new bootstrap.Alert(alert);
                                });
                            </script>
                            

            <div class="row">
                <div class="col-12">
                  <form action="{{url('events_upload')}}" enctype="multipart/form-data" method="post" id="eventForm">
                    @csrf
                  <div class="card">
                    <h5 class="card-header">EVENT FORM</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                      @if($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                          @foreach($errors->all() as $error)
                            <div><i class="bx bx-error-circle"></i> {{ $error }}</div>
                          @endforeach
                        </div>
                      @endif
                      
                      <div class="input-group">
                        <label class="input-group-text" for="inputGroupFile01">Header</label>
                        <input type="input" class="form-control" name="header" id="inputGroupFile01" required />
                      </div>

                      <div class="input-group">
                         <label class="input-group-text" for="inputGroupFile02">Date</label>
                        <input type="date" class="form-control" name="date" id="inputGroupFile02" required />
                      </div>
                      <div class="input-group">
                         <label class="input-group-text" for="inputGroupFile02">Location</label>
                        <input type="text" class="form-control" name="location" id="inputGroupFile02" required />
                      </div>

                      <div class="input-group">
                        <label class="btn btn-outline-primary" type="button" id="inputGroupFileAddon03">Time</label>
                        <input type="time" class="form-control" id="inputGroupFile03" name="time" required />
                      </div>
                      
                      <div class="input-group">
                        <label class="btn btn-outline-primary">Image</label>
                        <input type="file" class="form-control" id="eventImage" name="image" accept="image/jpeg,image/jpg,image/png,image/webp" required />
                      </div>
                      <div id="eventImagePreview" class="mt-2" style="display:none;">
                        <img id="eventPreviewImg" style="max-width:200px; max-height:200px; border-radius:8px; border:2px solid #ddd;" />
                      </div>

                      <div class="input-group">
                        <textarea type="text" class="form-control" id="inputGroupFile04" placeholder="Write Up" name="writeup" required></textarea>
                      </div>
                      
                      <div id="uploadProgress" style="display:none;" class="mt-3">
                        <div class="progress">
                          <div id="progressBar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%">0%</div>
                        </div>
                      </div>
                      
                      <button class="btn btn-church-primary" type="submit" id="submitBtn">Save</button>

                    </div>
                  </div>
                  </form>
                </div>
              </div>

<script>
const eventImage = document.getElementById('eventImage');
const eventPreview = document.getElementById('eventImagePreview');
const eventPreviewImg = document.getElementById('eventPreviewImg');
const eventForm = document.getElementById('eventForm');
const submitBtn = document.getElementById('submitBtn');
const progressBar = document.getElementById('progressBar');
const uploadProgress = document.getElementById('uploadProgress');

eventImage.addEventListener('change', function(e) {
  const file = e.target.files[0];
  if (file && file.type.startsWith('image/')) {
    const reader = new FileReader();
    reader.onload = function(e) {
      eventPreviewImg.src = e.target.result;
      eventPreview.style.display = 'block';
    };
    reader.readAsDataURL(file);
  }
});

eventForm.addEventListener('submit', function(e) {
  if (!this.checkValidity()) return;
  e.preventDefault();
  
  submitBtn.disabled = true;
  submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Uploading...';
  uploadProgress.style.display = 'block';
  
  const formData = new FormData(this);
  const xhr = new XMLHttpRequest();
  
  xhr.upload.addEventListener('progress', function(e) {
    if (e.lengthComputable) {
      const percent = Math.round((e.loaded / e.total) * 100);
      progressBar.style.width = percent + '%';
      progressBar.textContent = percent + '%';
    }
  });
  
  xhr.addEventListener('load', function() {
    if (xhr.status === 200) {
      window.location.reload();
    } else {
      submitBtn.disabled = false;
      submitBtn.innerHTML = 'Save';
      uploadProgress.style.display = 'none';
      alert('Upload failed. Please try again.');
    }
  });
  
  xhr.addEventListener('error', function() {
    submitBtn.disabled = false;
    submitBtn.innerHTML = 'Save';
    uploadProgress.style.display = 'none';
    alert('Upload failed. Please check your connection.');
  });
  
  xhr.open('POST', '{{url("events_upload")}}');
  xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('input[name="_token"]').value);
  xhr.send(formData);
});
</script>

              <div style="margin-top:7vh;" class="card">
                <div class="card-header d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
                  <h5 class="mb-0">All Events</h5>
                  <form method="GET" class="d-flex gap-2">
                    <input type="text" name="search" class="form-control form-control-sm" placeholder="Search events..." value="{{ request('search') }}" style="min-width: 200px;">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="bx bx-search"></i></button>
                    @if(request('search'))
                      <a href="{{ url('events') }}" class="btn btn-sm btn-secondary"><i class="bx bx-x"></i></a>
                    @endif
                  </form>
                </div>
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th><a href="?sort=header&order={{ request('sort') == 'header' && request('order') == 'asc' ? 'desc' : 'asc' }}{{ request('search') ? '&search='.request('search') : '' }}" class="text-decoration-none text-dark">Header @if(request('sort') == 'header')<i class="bx bx-{{ request('order') == 'asc' ? 'up' : 'down' }}-arrow"></i>@endif</a></th>
                        <th><a href="?sort=date&order={{ request('sort') == 'date' && request('order') == 'asc' ? 'desc' : 'asc' }}{{ request('search') ? '&search='.request('search') : '' }}" class="text-decoration-none text-dark">Date @if(request('sort') == 'date')<i class="bx bx-{{ request('order') == 'asc' ? 'up' : 'down' }}-arrow"></i>@endif</a></th>
                        <th class="d-none d-md-table-cell">Time</th>
                        <th class="d-none d-lg-table-cell">Location</th>
                        <th class="d-none d-xl-table-cell">Image</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @forelse($data as $event)
                      <tr>
                        <td><strong>{{$event->header}}</strong><div class="d-md-none small text-muted">{{$event->date}} at {{$event->time}}</div></td>
                        <td>{{$event->date}}</td>
                        <td class="d-none d-md-table-cell">{{$event->time}}</td>
                        <td class="d-none d-lg-table-cell"><span class="badge bg-label-success">{{$event->location}}</span></td>
                        <td class="d-none d-xl-table-cell"><img style="border-radius:50%; width:50px; height:50px; object-fit:cover;" src="/images/{{$event->image}}" alt="image"/></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ url('/event_id', $event->id) }}"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                                <a class="dropdown-item" onclick="return confirmDelete('{{ url('delete_event', $event->id) }}');" href="#"><i class="bx bx-trash me-2"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @empty
                      <tr><td colspan="6" class="text-center text-muted py-4">@if(request('search'))No events found matching "{{ request('search') }}"@else No events yet @endif</td></tr>
                      @endforelse
                    </tbody>
                  </table>
                </div>
                @if($data->hasPages())
                  <div class="card-body">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
                      <div class="text-muted small">Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of {{ $data->total() }} events</div>
                      <nav>{{ $data->links('pagination::bootstrap-4') }}</nav>
                    </div>
                  </div>
                @endif
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
                  <a href="#"  class="footer-link fw-bolder">Salva Tech</a>
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
