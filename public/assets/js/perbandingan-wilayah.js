$(document).ready(function () {
    $('#tabel-perbandingan').DataTable({
        ajax: 'http://localhost:8080/assets/data/data.txt',
        columns: [
            { data: 'name' },
            { data: 'position' },
            { data: 'head' },
            { data: 'extn' },
            { data: 'start_date' },
        ],
        orderFixed: [[2, 'asc']],
        rowGroup: {
            dataSrc: 'head'
        },
        columnDefs: [{
            targets: [2],
            visible: false
        }]
    });
});

// $(document).ready(function () {
//     $('#example').DataTable({
//         orderFixed: [2, 'asc'],
//         rowGroup: {
//             dataSrc: 2
//         }
//     });
// });