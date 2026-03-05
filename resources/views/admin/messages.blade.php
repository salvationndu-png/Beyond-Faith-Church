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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


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
     
                @if(session('success'))
<div class="position-fixed top-50 start-50 translate-middle p-3" style="z-index: 1055;">
  <div id="successToast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body text-center">
        {{ session('success') }} <!-- Your success message -->
      </div>
      <button type="button" class="btn-close btn-close-white m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var toastEl = document.getElementById('successToast');
    if (toastEl) {
        var toast = new bootstrap.Toast(toastEl);
        toast.show();
    }
});
</script>
@endif
            
                         
            <!-- Content -->

            @include('admin.partials.breadcrumbs')
            @include('admin.partials.ui-components')

<div class="row">
    <div class="col-12">
        <form action="{{ url('messageupload') }}" method="POST" enctype="multipart/form-data" id="messageForm">
            @csrf
            <div class="card">
                <h5 class="card-header">UPLOAD MESSAGES</h5>
                <div class="card-body demo-vertical-spacing demo-only-element">
                    @if($errors->any())
                      <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        @foreach($errors->all() as $error)
                          <div><i class="bx bx-error-circle"></i> {{ $error }}</div>
                        @endforeach
                      </div>
                    @endif

                    <div class="input-group mb-3">
                        <label class="input-group-text">Heading</label>
                        <input type="text" class="form-control" name="header" required />
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text">Audio</label>
                        <input type="file" class="form-control" name="audio" id="messageAudio" accept="audio/mpeg,audio/mp3,audio/wav,audio/ogg" required />
                    </div>
                    <div id="audioPreview" style="display:none;" class="mb-3">
                      <audio id="audioPlayer" controls style="width:100%; max-width:400px;"></audio>
                    </div>

                    <div class="input-group mb-3">
                      <label class="input-group-text">Thumbnail</label>
                      <input type="file" class="form-control" name="images" id="messageThumbnail" accept="image/jpeg,image/jpg,image/png,image/webp" required />
                    </div>
                    <div id="thumbnailPreview" style="display:none;" class="mb-3">
                      <img id="thumbnailImg" style="max-width:200px; max-height:200px; border-radius:8px; border:2px solid #ddd;" />
                    </div>

                    <div class="input-group">
                      <textarea class="form-control" placeholder="Write Up" name="message" required></textarea>
                    </div>
                    
                    <div id="messageProgress" style="display:none;" class="mt-3">
                      <div class="progress">
                        <div id="messageProgressBar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%">0%</div>
                      </div>
                    </div>

                    <button class="btn btn-church-primary mt-3" type="submit" id="messageSubmitBtn">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
const messageAudio = document.getElementById('messageAudio');
const audioPreview = document.getElementById('audioPreview');
const audioPlayer = document.getElementById('audioPlayer');
const messageThumbnail = document.getElementById('messageThumbnail');
const thumbnailPreview = document.getElementById('thumbnailPreview');
const thumbnailImg = document.getElementById('thumbnailImg');
const messageForm = document.getElementById('messageForm');
const messageSubmitBtn = document.getElementById('messageSubmitBtn');
const messageProgressBar = document.getElementById('messageProgressBar');
const messageProgress = document.getElementById('messageProgress');

messageAudio.addEventListener('change', function(e) {
  const file = e.target.files[0];
  if (file && file.type.startsWith('audio/')) {
    audioPlayer.src = URL.createObjectURL(file);
    audioPreview.style.display = 'block';
  }
});

messageThumbnail.addEventListener('change', function(e) {
  const file = e.target.files[0];
  if (file && file.type.startsWith('image/')) {
    const reader = new FileReader();
    reader.onload = function(e) {
      thumbnailImg.src = e.target.result;
      thumbnailPreview.style.display = 'block';
    };
    reader.readAsDataURL(file);
  }
});

messageForm.addEventListener('submit', function(e) {
  if (!this.checkValidity()) return;
  e.preventDefault();
  
  messageSubmitBtn.disabled = true;
  messageSubmitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Uploading...';
  messageProgress.style.display = 'block';
  
  const formData = new FormData(this);
  const xhr = new XMLHttpRequest();
  
  xhr.upload.addEventListener('progress', function(e) {
    if (e.lengthComputable) {
      const percent = Math.round((e.loaded / e.total) * 100);
      messageProgressBar.style.width = percent + '%';
      messageProgressBar.textContent = percent + '%';
    }
  });
  
  xhr.addEventListener('load', function() {
    if (xhr.status === 200) {
      window.location.reload();
    } else {
      messageSubmitBtn.disabled = false;
      messageSubmitBtn.innerHTML = 'Save';
      messageProgress.style.display = 'none';
      alert('Upload failed. Please try again.');
    }
  });
  
  xhr.addEventListener('error', function() {
    messageSubmitBtn.disabled = false;
    messageSubmitBtn.innerHTML = 'Save';
    messageProgress.style.display = 'none';
    alert('Upload failed. Please check your connection.');
  });
  
  xhr.open('POST', '{{ url("messageupload") }}');
  xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('input[name="_token"]').value);
  xhr.send(formData);
});
</script>
<!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->


<div style="margin-top:10vh" class="card">
    <div class="card-header d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
      <h5 class="mb-0">All Messages</h5>
      <form method="GET" class="d-flex gap-2">
        <input type="text" name="search" class="form-control form-control-sm" placeholder="Search messages..." value="{{ request('search') }}" style="min-width: 200px;">
        <button type="submit" class="btn btn-sm btn-primary"><i class="bx bx-search"></i></button>
        @if(request('search'))
          <a href="{{ url('messages') }}" class="btn btn-sm btn-secondary"><i class="bx bx-x"></i></a>
        @endif
      </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th class="d-none d-md-table-cell">#</th>
                        <th><a href="?sort=header&order={{ request('sort') == 'header' && request('order') == 'asc' ? 'desc' : 'asc' }}{{ request('search') ? '&search='.request('search') : '' }}" class="text-decoration-none text-dark">Header @if(request('sort') == 'header')<i class="bx bx-{{ request('order') == 'asc' ? 'up' : 'down' }}-arrow"></i>@endif</a></th>
                        <th class="d-none d-lg-table-cell">Audio</th>
                        <th class="d-none d-xl-table-cell"><a href="?sort=created_at&order={{ request('sort') == 'created_at' && request('order') == 'asc' ? 'desc' : 'asc' }}{{ request('search') ? '&search='.request('search') : '' }}" class="text-decoration-none text-dark">Uploaded @if(request('sort') == 'created_at' || !request('sort'))<i class="bx bx-{{ request('order') == 'asc' ? 'up' : 'down' }}-arrow"></i>@endif</a></th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $index => $item)
                        <tr>
                            <td class="d-none d-md-table-cell">{{ ($data->currentPage()-1) * $data->perPage() + $index + 1 }}</td>
                            <td><strong>{{ $item->header }}</strong><div class="d-xl-none small text-muted">{{ $item->created_at->format('M d, Y') }}</div></td>
                            <td class="d-none d-lg-table-cell" style="min-width:220px"><audio controls style="width:100%; height:32px;"><source src="{{ asset($item->audio) }}">Your browser does not support audio.</audio></td>
                            <td class="d-none d-xl-table-cell">{{ $item->created_at->format('d M Y, H:i') }}</td>
                            <td>
                                <a href="{{ url('message_id', $item->id) }}" class="btn btn-sm btn-church-primary" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-sm btn-outline-danger" onclick="return confirmDelete('{{ url('delete_message', $item->id) }}');" href="#" title="Delete"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="text-center text-muted py-4">@if(request('search'))No messages found matching "{{ request('search') }}"@else No audio messages uploaded yet @endif</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if($data->hasPages())
          <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-3 gap-2">
            <div class="text-muted small">Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of {{ $data->total() }} messages</div>
            <nav>{{ $data->links('pagination::bootstrap-4') }}</nav>
          </div>
        @endif
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
