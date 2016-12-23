
$(document).ready(function () { 
    $('#tab').DataTable({
        responsive: false,
        pagingType: "simple_numbers",
        pageLength: 3,
        lengthMenu: [3, 10, 15, 20],
        columns: [
            {type: "text", orderable: false},
            {type: "text", orderable: true},
            {type: "text", orderable: true},
            {type: "text", orderable: true},
            {type: "text", orderable: true},
            {type: "text", orderable: false}
        ]
    });
});