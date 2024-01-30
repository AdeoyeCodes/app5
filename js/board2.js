function uploadVideo(event) {
    event.preventDefault();
    
    var formData = new FormData($('#uploadForm')[0]);
    var progressBar = $('#progressBar');

    var formData = new FormData($('#uploadForm')[0]);

    $.ajax({
        type: "POST",
        url: "db3.php",
        data: formData,
        contentType: false,
        processData: false,
        xhr: function () {
            var xhr = new window.XMLHttpRequest();
            
            // Upload progress
            xhr.upload.addEventListener("progress", function (evt) {
                if (evt.lengthComputable) {
                    var percentComplete = (evt.loaded / evt.total) * 100;
                    progressBar.css('width', percentComplete + '%');
                }
            }, false);

            return xhr;
        },
        success: function (response) {
            // Reset progress bar after successful upload
            progressBar.css('width', '0%');
            $('#videoContainer').html(response);
            
            $('#videoUpload').val('');
        },
        error: function (error) {
            console.log(error);
            alert('Error uploading video. Please try again.');
        }
    });
}

function incrementViewCount() {
    var viewBtn = document.getElementById('viewBtn');
    var viewsParagraph = document.querySelector('#videoContainer p');

    if (viewBtn.getAttribute('data-clicked') !== 'true') {
        var viewCount = parseInt(viewsParagraph.innerHTML.match(/\d+/)[0], 10) + 1;
        viewsParagraph.innerText = 'You have ' + viewCount + ' view(s)';

        viewBtn.setAttribute('data-clicked', 'true');

        viewBtn.style.display = 'none';
    }
}

$('#uploadForm').submit(uploadVideo);