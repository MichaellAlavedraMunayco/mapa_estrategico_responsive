
var divA = $("#a");
var divB = $("#b")
var arrowLeft = document.getElementById("arrowLeft")
var arrowRight = document.getElementById("arrowRight")
var drawConnector = function () {
    var posnALeft = {
        x: divA.offsetLeft - 8,
        y: divA.offsetTop + divA.offsetHeight / 2
    };
    var posnARight = {
        x: divA.offsetLeft + divA.offsetWidth + 8,
        y: divA.offsetTop + divA.offsetHeight / 2
    };
    var posnBLeft = {
        x: divB.offsetLeft - 8,
        y: divB.offsetTop + divA.offsetHeight / 2
    };
    var posnBRight = {
        x: divB.offsetLeft + divB.offsetWidth + 8,
        y: divB.offsetTop + divA.offsetHeight / 2
    };
    var dStrLeft =
        "M" +
        (posnALeft.x) + "," + (posnALeft.y) + " " +
        "C" +
        (posnALeft.x - 100) + "," + (posnALeft.y) + " " +
        (posnBLeft.x - 100) + "," + (posnBLeft.y) + " " +
        (posnBLeft.x) + "," + (posnBLeft.y);
    arrowLeft.setAttribute("d", dStrLeft);
    var dStrRight =
        "M" +
        (posnBRight.x) + "," + (posnBRight.y) + " " +
        "C" +
        (posnBRight.x + 100) + "," + (posnBRight.y) + " " +
        (posnARight.x + 100) + "," + (posnARight.y) + " " +
        (posnARight.x) + "," + (posnARight.y);
    arrowRight.setAttribute("d", dStrRight);
};
drawConnector();

// $("#a, #b").draggable({
//     drag: function (event, ui) {
//         drawConnector();
//     }
// });

// setTimeout(drawConnector, 250);