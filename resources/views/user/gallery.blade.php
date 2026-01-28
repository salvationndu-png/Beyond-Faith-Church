<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Image Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <style>
        /* General styles */
        body {
            font-family: 'Poppins', sans-serif;
            background: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #444;
            font-weight: bold;
        }

        /* Gallery styles */
        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.4);
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-item .caption {
            position: absolute;
            bottom: 10px;
            left: 10px;
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Modal styles */
        .modal-content {
            background: #333;
            border: none;
        }

        .modal-body {
            display: flex;
            justify-content: center;
            align-items: center;
            background: #222;
            padding: 20px;
        }

        .modal-body img {
            max-width: 100%;
            max-height: 80vh;
            border-radius: 10px;
        }

        .modal-title {
            color: #fff;
        }

        .btn-close {
            color: #fff;
            opacity: 1;
        }

        .btn-close:hover {
            color: #999;
        }
    </style>
</head>
<body>
    <h2>Dynamic Image Gallery</h2>
    <div class="gallery-container" id="galleryContainer">
        <!-- Example structure. Replace with dynamic image rendering from your backend -->
        <div class="gallery-item" data-caption="Image 1">
            <img src="temp/images/card.jpg" alt="Image 1">
            <div class="caption">First Day on soo</div>
        </div>
        <div class="gallery-item" data-caption="Image 2">
            <img src="images/image2.jpg" alt="Image 2">
            <div class="caption">Image 2</div>
        </div>
        <div class="gallery-item" data-caption="Image 3">
            <img src="images/image3.jpg" alt="Image 3">
            <div class="caption">Image 3</div>
        </div>
        <!-- Add more images dynamically -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Preview">
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const galleryContainer = document.getElementById('galleryContainer');

        // Event listener for all gallery items
        galleryContainer.addEventListener('click', function (event) {
            const target = event.target.closest('.gallery-item');
            if (target) {
                const modalImage = document.getElementById('modalImage');
                const modalTitle = document.getElementById('imageModalLabel');

                modalImage.src = target.querySelector('img').src;
                modalTitle.textContent = target.dataset.caption;

                const modal = new bootstrap.Modal(document.getElementById('imageModal'));
                modal.show();
            }
        });
    </script>
</body>
</html>
