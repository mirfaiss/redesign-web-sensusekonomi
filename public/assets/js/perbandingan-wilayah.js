$(document).ready(function () {
    $('#tabel-perbandingan').DataTable({
        ajax: 'http://localhost:8080/assets/data/data.txt',
        columns: [
            { data: 'name' },
            { data: 'satuan' },
            { data: 'head' },
            { data: 'jateng' },
            { data: 'jatim' },
        ],
        orderFixed: [[2, 'asc']],
        rowGroup: {
            dataSrc: 'head'
        },
        columnDefs: [{
            targets: [2],
            visible: false
        }, {
            targets: [3, 4],
            className: 'dt-body-right'
        }, {
            targets: [0, 1, 2, 3, 4],
            className: ["dt-head-center"]
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