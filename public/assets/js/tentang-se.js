function loadContent() {
    fetch('app/Views/tentang-se/metadata/met-kegiatan.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('result').innerHTML = data;
        });
}

// function loadContent() {
//     fetch('other_directory/otherfile.php')
//         .then(response => response.text())
//         .then(data => {
//             document.getElementById('result').innerHTML = data;
//         })
//         .catch(error => {
//             console.error('Error loading content:', error);
//         });
// }