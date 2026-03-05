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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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
          <div class="content-wrapper  p-4">
            <!-- Content -->
            @include('admin.partials.breadcrumbs')
            @include('admin.partials.ui-components')

            <div class="row">
                <div class="col-12">
<form action="{{ url('/gallery_upload') }}" method="post" enctype="multipart/form-data" id="galleryForm">
    @csrf
    <div class="card">
        <h5 class="card-header">GALLERY FORM</h5>
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
                <input type="text" class="form-control" name="header" required>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text">Subject</label>
                <input type="text" class="form-control" name="subject" required>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text">Pictures</label>
                <input type="file" class="form-control" name="images[]" id="galleryImages" multiple accept="image/jpeg,image/jpg,image/png,image/webp" required>
            </div>
            <div id="galleryPreview" class="mb-3" style="display:none;">
              <div id="previewContainer" class="d-flex flex-wrap gap-2"></div>
            </div>

            <div id="galleryProgress" style="display:none;" class="mt-3">
              <div class="progress">
                <div id="galleryProgressBar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%">0%</div>
              </div>
            </div>

            <button class="btn btn-church-primary" type="submit" id="gallerySubmitBtn">Save</button>
        </div>
    </div>
</form>

<script>
const galleryImages = document.getElementById('galleryImages');
const galleryPreview = document.getElementById('galleryPreview');
const previewContainer = document.getElementById('previewContainer');
const galleryForm = document.getElementById('galleryForm');
const gallerySubmitBtn = document.getElementById('gallerySubmitBtn');
const galleryProgressBar = document.getElementById('galleryProgressBar');
const galleryProgress = document.getElementById('galleryProgress');

galleryImages.addEventListener('change', function(e) {
  previewContainer.innerHTML = '';
  const files = Array.from(e.target.files);
  
  if (files.length > 0) {
    files.forEach(file => {
      if (file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const img = document.createElement('img');
          img.src = e.target.result;
          img.style.cssText = 'width:100px; height:100px; object-fit:cover; border-radius:8px; border:2px solid #ddd;';
          previewContainer.appendChild(img);
        };
        reader.readAsDataURL(file);
      }
    });
    galleryPreview.style.display = 'block';
  }
});

galleryForm.addEventListener('submit', function(e) {
  if (!this.checkValidity()) return;
  e.preventDefault();
  
  gallerySubmitBtn.disabled = true;
  gallerySubmitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Uploading...';
  galleryProgress.style.display = 'block';
  
  const formData = new FormData(this);
  const xhr = new XMLHttpRequest();
  
  xhr.upload.addEventListener('progress', function(e) {
    if (e.lengthComputable) {
      const percent = Math.round((e.loaded / e.total) * 100);
      galleryProgressBar.style.width = percent + '%';
      galleryProgressBar.textContent = percent + '%';
    }
  });
  
  xhr.addEventListener('load', function() {
    if (xhr.status === 200) {
      window.location.reload();
    } else {
      gallerySubmitBtn.disabled = false;
      gallerySubmitBtn.innerHTML = 'Save';
      galleryProgress.style.display = 'none';
      alert('Upload failed. Please try again.');
    }
  });
  
  xhr.addEventListener('error', function() {
    gallerySubmitBtn.disabled = false;
    gallerySubmitBtn.innerHTML = 'Save';
    galleryProgress.style.display = 'none';
    alert('Upload failed. Please check your connection.');
  });
  
  xhr.open('POST', '{{ url("/gallery_upload") }}');
  xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('input[name="_token"]').value);
  xhr.send(formData);
});
</script>


                </div>  
              </div>


                                  <style>
                        /* Remove gaps between images on large screens */
                        @media (min-width: 992px) { /* Large screens (PC) */
                            .row.no-gutters {
                                margin-right: 0;
                                margin-left: 0;
                            }
                            .row.no-gutters > [class*='col-'] {
                                padding-right: 0;
                                padding-left: 0;
                            }
                        }
                    </style>


<div class="container mt-5">
    <div class="card">
      <div class="card-header d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
        <h5 class="mb-0">All Gallery Items</h5>
        <form method="GET" class="d-flex gap-2">
          <input type="text" name="search" class="form-control form-control-sm" placeholder="Search gallery..." value="{{ request('search') }}" style="min-width: 200px;">
          <button type="submit" class="btn btn-sm btn-primary"><i class="bx bx-search"></i></button>
          @if(request('search'))
            <a href="{{ url('admingallery') }}" class="btn btn-sm btn-secondary"><i class="bx bx-x"></i></a>
          @endif
        </form>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th><a href="?sort=header&order={{ request('sort') == 'header' && request('order') == 'asc' ? 'desc' : 'asc' }}{{ request('search') ? '&search='.request('search') : '' }}" class="text-decoration-none text-dark">Header @if(request('sort') == 'header')<i class="bx bx-{{ request('order') == 'asc' ? 'up' : 'down' }}-arrow"></i>@endif</a></th>
                <th><a href="?sort=subject&order={{ request('sort') == 'subject' && request('order') == 'asc' ? 'desc' : 'asc' }}{{ request('search') ? '&search='.request('search') : '' }}" class="text-decoration-none text-dark">Subject @if(request('sort') == 'subject')<i class="bx bx-{{ request('order') == 'asc' ? 'up' : 'down' }}-arrow"></i>@endif</a></th>
                <th class="d-none d-lg-table-cell">Images</th>
                <th class="d-none d-md-table-cell"><a href="?sort=created_at&order={{ request('sort') == 'created_at' && request('order') == 'asc' ? 'desc' : 'asc' }}{{ request('search') ? '&search='.request('search') : '' }}" class="text-decoration-none text-dark">Created @if(request('sort') == 'created_at' || !request('sort'))<i class="bx bx-{{ request('order') == 'asc' ? 'up' : 'down' }}-arrow"></i>@endif</a></th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @forelse($data as $item)
                <tr>
                  <td><strong>{{ $item->header }}</strong></td>
                  <td>{{ $item->subject }}</td>
                  <td class="d-none d-lg-table-cell">
                    @if($item->images)
                      @foreach(array_slice($item->images, 0, 3) as $image)
                        <img src="{{ asset($image) }}" alt="image" class="gallery-thumb">
                      @endforeach
                      @if(count($item->images) > 3)<span class="badge bg-secondary">+{{ count($item->images) - 3 }}</span>@endif
                    @else
                      <span>No images</span>
                    @endif
                  </td>
                  <td class="d-none d-md-table-cell">{{ $item->created_at->format('d M Y H:i') }}</td>
                  <td>
                    <a href="{{ url('gallery_id', $item->id) }}" class="btn btn-sm btn-church-primary" title="Edit"><i class="bi bi-pencil-square"></i></a>
                    <a class="btn btn-sm btn-outline-danger" onclick="return confirmDelete('{{ url('gallery_delete', $item->id) }}');" href="#" title="Delete"><i class="bi bi-trash"></i></a>
                  </td>
                </tr>
              @empty
                <tr><td colspan="5" class="text-center text-muted py-4">@if(request('search'))No gallery items found matching "{{ request('search') }}"@else No gallery items yet @endif</td></tr>
              @endforelse
            </tbody>
          </table>
        </div>
        @if($data->hasPages())
          <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-3 gap-2">
            <div class="text-muted small">Showing {{ $data->firstItem() }} to {{ $data->lastItem() }} of {{ $data->total() }} items</div>
            <nav>{{ $data->links('pagination::bootstrap-4') }}</nav>
          </div>
        @endif
      </div>
    </div>
</div>

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




<style>
/* Hover zoom effect for images */
.gallery-thumb {
    height: 80px;
    width: auto;
    margin: 2px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-thumb:hover {
    transform: scale(2);
    position: relative;
    z-index: 10;
}

/* Make images smaller on mobile */
@media (max-width: 576px) {
    .gallery-thumb {
        height: 50px;
        margin: 1px;
    }
}
</style>


            
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
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Page JS -->
    <script src="admin/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
