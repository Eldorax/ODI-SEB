
$(document).ready(function () { 
    $('#tab').DataTable({
        responsive: false,
        pagingType: "simple_numbers",
        pageLength: 15,
        lengthMenu: [15, 30, 45, 60],
        columns: [
            {type: "text", orderable: true},
            {type: "num", orderable: true},
            {type: "num", orderable: true},
            {type: "text", orderable: false}
        ]
    });
});