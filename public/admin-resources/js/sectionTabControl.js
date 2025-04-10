$(function () {
    let sectionPageCurrent = 0;
    let maxSectionPage = null;

    localStorage.setItem("sectionPageCurrent", sectionPageCurrent);

    const sectionTabContainer = () => {
        const sectionTabContainer = $(".sectionTabContainer");

        const children = sectionTabContainer.find(".sectionTabContainerTabs");

        $(children).each(function (index, element) {
            sectionPageCurrent++;

            let el = $(this);

            el.attr("id", `thisPage${sectionPageCurrent}`);

            if (sectionPageCurrent == 1) {
                el.css("display", "block");
                el.css("visibility", "visible");
            }

            console.log(sectionPageCurrent);
        });

        maxSectionPage = sectionPageCurrent;

        console.log(sectionPageCurrent);
    };

    sectionTabContainer();

    $(".nextSectionTabs").on("click", function () {
        if (maxSectionPage > sectionPageCurrent) {
            return;
        }

        let sectionTabContainer = $(this).closest(".sectionTabContainer");

        const children = sectionTabContainer.find(".sectionTabContainerTabs");

        $(children).each(function (index, element) {

            let el = $(this);

            el.css("display", "none");
            el.css("visibility", "hidden");

            if (el.attr("id") == `thisPage${sectionPageCurrent}`) {
                el.css("display", "block");
                el.css("visibility", "visible");
 
            }

        });
    });
});
