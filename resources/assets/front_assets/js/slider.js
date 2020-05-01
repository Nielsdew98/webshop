$( document ).ready(function() {
    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 1000,
            values: [0, 1000],
            slide: function (event, ui) {
                $("#amount").val("€" + ui.values[0] + " - €" + ui.values[1]);
            }
        });
        $("#amount").val("€" + $("#slider-range").slider("values", 0) + " - €" + $("#slider-range").slider("values", 1));
    });
    $(function () {
        $("#slider-range2").slider({
            range: true,
            min: 0,
            max: 1000,
            values: [0, 1000],
            slide: function (event, ui) {
                $("#amount2").val("€" + ui.values[0] + " - €" + ui.values[1]);
            }
        });
        $("#amount2").val("€" + $("#slider-range2").slider("values", 0) + " - €" + $("#slider-range2").slider("values", 1));
    });
});