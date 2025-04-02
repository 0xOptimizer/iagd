$(function () {
    const handleSidebarStatus = () => {
        const toggleStatus = localStorage.getItem("sidebar-toggle");


        if (!toggleStatus || toggleStatus == "false" || toggleStatus == null) {
            console.log('Sidebar is hidden');
            $(".floating-sidebar").addClass("hidden");
            $(".floating-sidebar").removeClass("show");

        } else {
            
            console.log('Sidebar is shown');
            $(".floating-sidebar").addClass("show");
            $(".floating-sidebar").removeClass("hidden");
        }
    };

    handleSidebarStatus();

    $(".toggle-sidebar").on("click", function () {
        const toggleStatus = localStorage.getItem("sidebar-toggle");

        if (!toggleStatus || toggleStatus == "false" || toggleStatus == null) {
            console.log('Sidebar is hidden');
            $(".floating-sidebar").addClass("show");
            $(".floating-sidebar").removeClass("hidden");
            localStorage.setItem('sidebar-toggle',true);
        } else {
            console.log('Sidebar is shown');
            $(".floating-sidebar").addClass("hidden");
            $(".floating-sidebar").removeClass("show");
            localStorage.setItem('sidebar-toggle',false);
        }


    });

    // localStorage.setItem('sidebar-toggle',false);
});
