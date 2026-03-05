<!-- Loading Spinner Overlay -->
<div id="loadingSpinner" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:9999; justify-content:center; align-items:center;">
    <div class="spinner-border text-light" style="width:3rem; height:3rem;" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>

<!-- Toast Container -->
<div class="toast-container position-fixed top-0 end-0 p-3" style="z-index:9999;">
    <div id="successToast" class="toast align-items-center text-white bg-success border-0" role="alert">
        <div class="d-flex">
            <div class="toast-body">
                <i class="bx bx-check-circle me-2"></i>
                <span id="successMessage"></span>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
    </div>
    <div id="errorToast" class="toast align-items-center text-white bg-danger border-0" role="alert">
        <div class="d-flex">
            <div class="toast-body">
                <i class="bx bx-error-circle me-2"></i>
                <span id="errorMessage"></span>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title"><i class="bx bx-trash me-2"></i>Confirm Delete</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Are you sure you want to delete this item? This action cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <a href="#" id="confirmDeleteBtn" class="btn btn-danger">Delete</a>
            </div>
        </div>
    </div>
</div>

<!-- Church-Themed Styles -->
<style>
:root {
    --church-primary: #6f42c1;
    --church-secondary: #4a5568;
    --church-gold: #d4af37;
    --church-light: #f8f9fa;
    --church-dark: #2d3748;
}

.bg-church-primary { background-color: var(--church-primary) !important; }
.bg-church-gold { background-color: var(--church-gold) !important; }
.text-church-primary { color: var(--church-primary) !important; }
.text-church-gold { color: var(--church-gold) !important; }

.btn-church-primary {
    background-color: var(--church-primary);
    border-color: var(--church-primary);
    color: white;
}
.btn-church-primary:hover {
    background-color: #5a32a3;
    border-color: #5a32a3;
}

.card {
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    border: none;
}

.breadcrumb {
    background-color: transparent;
    padding: 0.75rem 0;
    margin-bottom: 1rem;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: "›";
    font-size: 1.2rem;
}
</style>

<!-- JavaScript Functions -->
<script>
// Show loading spinner
function showLoading() {
    document.getElementById('loadingSpinner').style.display = 'flex';
}

// Hide loading spinner
function hideLoading() {
    document.getElementById('loadingSpinner').style.display = 'none';
}

// Show success toast
function showSuccess(message) {
    document.getElementById('successMessage').textContent = message;
    const toast = new bootstrap.Toast(document.getElementById('successToast'));
    toast.show();
}

// Show error toast
function showError(message) {
    document.getElementById('errorMessage').textContent = message;
    const toast = new bootstrap.Toast(document.getElementById('errorToast'));
    toast.show();
}

// Confirm delete with modal
function confirmDelete(url, itemName = 'this item') {
    const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
    document.getElementById('confirmDeleteBtn').href = url;
    modal.show();
    return false;
}

// Auto-show toasts from session
@if(session('success'))
    showSuccess('{{ session('success') }}');
@endif

@if(session('message'))
    showSuccess('{{ session('message') }}');
@endif

@if(session('error'))
    showError('{{ session('error') }}');
@endif

@if($errors->any())
    showError('{{ $errors->first() }}');
@endif
</script>
