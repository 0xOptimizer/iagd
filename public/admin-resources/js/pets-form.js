$(function () {
    /**
     * On click submit pet for ( Need improvement )
     * @param {any} "#submitPetForm"
     * @returns {any}
     */
    $("#submitPetForm").on("click", function () {
        const fd = new FormData();

        let images = $("#pet_images")[0].files;

        if (images.length == 0) {
            console.log("Please select at least one image.");
            return;
        }

        $.each(images, function (i, file) {
            fd.append("images[]", file); // Add each file to the fd
        });

        fd.append("pet_name", $("#pet_name").val());
        fd.append("pet_type", $("#pet_type").val());

        fd.append("breed", $("#pet_breed").val());
        fd.append("iagd_number", $("#iagd_number").val());
        fd.append("stars", $("#pet_type").val());
        fd.append("owner", $("#owner_name").val());
        fd.append("co_owner", $("#co_owner_name").val());
        fd.append("location", $("#location").val());
        fd.append("breeder", $("#breeder").val());
        fd.append("animal_facility", $("#animal_facility").val());
        fd.append("gender", $("#gender").val());
        fd.append("date_of_birth", $("#date_of_birth").val());
        fd.append("markings", $("#markings").val());
        fd.append("colors_body", $("#fur_color").val());
        fd.append("colors_eye", $("#eye_color").val());
        fd.append("weight", $("#weight").val());
        fd.append("height", $("#height").val());
        fd.append("icgd_number", $("#icgd_number").val());
        fd.append("link", $("#link").val());
        fd.append("male_parent", $("#parent_male").val());
        fd.append("female_parent", $("#parent_female").val());

        $.ajax({
            url: `${window.urlBase}/rest/v1/pets/create`,
            method: "POST",
            data: fd,
            contentType: false,
            processData: false,
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            success: function (response) {
                console.log(response);
            },
            error: function (error) {
                console.error(error);
            },
        });
    });
});
