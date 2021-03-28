function megejelenites() {
    var varosok = "<select>";
    for (var varos in eredmeny) {
        varosok+= "<option>"+tomb[varos].nev+"</option>";
    }
    varosok += "</select>";
    $("#megjelenit").html(varosok);
}
var tomb = [];

$(document).ready(function () {
    $('#beviteli').keyup(ajax);
});

function ajax() {
    $.ajax(
            {
                type: "GET",
                url: "index.php?beviteli=" + $("#beviteli").val(),
                success: function (result) {
                    eredmeny = JSON.parse(result);
                    megjelenites();
                }
               
            });
}