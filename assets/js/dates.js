

function generateDates() {
    $("#ToDate").datepicker({
        format: "mm",
        startView: "months",
        minViewMode: "months"
    });

    // jQuery.noConflict();
    $("#ToDate").click(function (e) {
        e.preventDefault();
    });

    $('#FromDate').datepicker({
        format: "yyyy",
        startView: "years",
        minViewMode: "years"

    });

    $('#FromDate').click(function (e) {

        console.log("Clicked ToDate");

        e.preventDefault();
    });
}