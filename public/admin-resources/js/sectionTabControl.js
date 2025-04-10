$(function () {
    let sectionPageMin = 1;

    let currentPage = 1;

    let idNumberCount = 0;

    let sectionPageMax = 0;

    const sectionTabContainer = () => {
        const sectionTabContainer = $(".sectionTabContainer");

        const children = sectionTabContainer.find(".sectionTabContainerTabs");

        $(children).each(function (index, element) {

            idNumberCount++;

            let el = $(this);

            el.attr("id", `thisPage${idNumberCount}`);

            if (sectionPageMin == idNumberCount) {
                el.css("display", "block");
                el.css("visibility", "visible");
            }

        });

        sectionPageMax = idNumberCount;

        console.log(`sectionPageMin = ${sectionPageMin}`);
        console.log(`currentPage = ${currentPage}`);
        console.log(`idNumberCount = ${idNumberCount}`);
        console.log(`sectionPageMax = ${sectionPageMax}`);

    };

    sectionTabContainer();

    $(".nextSectionTabs").on("click", function () {


        if (currentPage  > sectionPageMax) {

            return;
        }

        currentPage++;

        let sectionTabContainer = $(this).closest(".sectionTabContainer");

        const children = sectionTabContainer.find(".sectionTabContainerTabs");

        $(children).each(function (index, element) {

            let el = $(this);

            if (el.attr("id") == `thisPage${currentPage}`) {
                el.css("display", "block");
                el.css("visibility", "visible");

            } else {
                el.css("display", "none");
                el.css("visibility", "hidden");
            }

        });
    });

    $(".prevSectionTabs").on("click", function () {
        if (currentPage  < sectionPageMin) {

            return;
        }

        currentPage--;

        let sectionTabContainer = $(this).closest(".sectionTabContainer");

        const children = sectionTabContainer.find(".sectionTabContainerTabs");

        $(children).each(function (index, element) {

            let el = $(this);

            if (el.attr("id") == `thisPage${currentPage}`) {
                el.css("display", "block");
                el.css("visibility", "visible");

            } else {
                el.css("display", "none");
                el.css("visibility", "hidden");
            }

        });
    });


});
