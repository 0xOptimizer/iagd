$(function () {
    $("#submitPetForm").on("click", function () {
        const fd = new FormData();

        let images = $('#pet_images')[0].files;

        if (images.length == 0) {
            console.log("Please select at least one image.");
            return;
        }

        $.each(images, function (i, file) {
            fd.append('images[]', file);  // Add each file to the fd
        });

        fd.append('pet_name',$('#pet_name').val());
        fd.append('pet_type',$('#pet_type').val());

        $.ajax({
            url: `${window.urlBase}/rest/v1/pets/create`,
            method: "POST",
            data: fd,
            contentType: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                console.log(response);
            },
            error: function (error) {
                console.error(error);

            }
        });

    });
});
