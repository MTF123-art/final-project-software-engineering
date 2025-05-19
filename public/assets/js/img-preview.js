function previewImages() {
        const fileInput = document.getElementById('gambar');
        const previewContainer = document.getElementById('image-preview');
        const warning = document.getElementById('image-warning');
        const fileCountDisplay = document.getElementById('image-count');

        const files = fileInput.files;
        previewContainer.innerHTML = '';
        warning.innerText = '';
        fileCountDisplay.innerText = '';

        if (files.length === 0) {
        return;
        }

        if (files.length < 5 || files.length> 8) {
            warning.innerText = 'Please select between 5 and 8 images.';
            fileInput.value = '';
            return;
            }

            fileCountDisplay.innerText = `${files.length} image(s) selected`;

            const validTypes = ['image/jpeg', 'image/jpg', 'image/png'];

            for (let i = 0; i < files.length; i++) { const file=files[i]; if (!validTypes.includes(file.type)) {
                warning.innerText='Only JPG, JPEG, and PNG files are allowed.' ; fileInput.value='' ;
                previewContainer.innerHTML='' ; fileCountDisplay.innerText='' ; return; } if (file.size> 2 * 1024 * 1024) {
                warning.innerText = 'Each image must be less than 2MB.';
                fileInput.value = '';
                previewContainer.innerHTML = '';
                fileCountDisplay.innerText = '';
                return;
                }

                const reader = new FileReader();
                reader.onload = function(event) {
                const img = document.createElement('img');
                img.src = event.target.result;
                img.classList.add('img-thumbnail');
                img.style.width = '150px';
                img.style.marginRight = '10px';
                img.style.marginBottom = '10px';
                previewContainer.appendChild(img);
                };
                reader.readAsDataURL(file);
                }
                }
        function previewHighlightPhoto() {
        const input = document.getElementById('highlight_photo');
        const preview = document.getElementById('highlight-photo-preview');
        const warning = document.getElementById('highlight-photo-warning');

        preview.innerHTML = '';
        warning.textContent = '';

        const file = input.files[0];
        if (!file) return;

        if (file.size > 2 * 1024 * 1024) {
        warning.textContent = 'File size must be less than 2MB.';
        input.value = '';
        return;
        }

        const reader = new FileReader();
        reader.onload = function (e) {
        const img = document.createElement('img');
        img.src = e.target.result;
        img.classList.add('img-thumbnail');
        img.style.width = '100%';
        img.style.maxWidth = '100%';
        img.style.height = 'auto';
        preview.appendChild(img);
        };

        reader.readAsDataURL(file);
        }
