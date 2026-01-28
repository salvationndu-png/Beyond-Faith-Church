
document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);

    fetch("{{ url('/contact_upload') }}", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': document.querySelector('input[name=_token]').value
        },
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            showDerwinToast(data.message || 'Message sent successfully');
            form.reset();
        } else {
            showDerwinToast('Something went wrong', false);
        }
    })
    .catch(() => {
        showDerwinToast('Network error. Try again.', false);
    });
});

