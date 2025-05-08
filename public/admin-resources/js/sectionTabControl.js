$(function () {

    /**
     * Declare vaiables
     */
    let sectionPageMin = 1;

    let currentPage = 1;

    let idNumberCount = 0;

    let sectionPageMax = 0;

    /**
     * Section Container
     * @returns {any}
     */
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

    };

    /**
     * Initialize sectionTabContainer()
     */
    sectionTabContainer();


    /**
     * On click nextSectionTabs show next section tab
     * @param {any} ".nextSectionTabs"
     * @returns {any}
     */
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

    /**
     * On click prevSectionTabs show previous section tab
     * @param {any} ".prevSectionTabs"
     * @returns {any}
     */
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
