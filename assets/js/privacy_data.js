document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById('customModal');
    const closeModalBtn = document.getElementById('closeModal');
    const modalText = document.getElementById('modalText'); // assuming you want to use this for showing data

    // Get all links with the class "openModalLink"
    const openModalLinks = document.querySelectorAll('.openModalLink');

    openModalLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const dataValue = link.getAttribute('data-value');
            modalText.innerHTML = nl2br(dataValue); // Update modal text
            modal.style.display = 'flex';  // Show the modal
        });
    });

    // Close the modal
    closeModalBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    // Helper function to mimic PHP's nl2br
    function nl2br(str) {
        return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1<br>$2');
    }
});




// document.addEventListener("DOMContentLoaded", function() {
//     const modal = document.getElementById('customModal');
//     const closeModalBtn = document.getElementById('closeModal');
//     const modalText = document.getElementById('modalText');

//     document.body.addEventListener('click', function(event) {
//         if (event.target.matches('.openModalLink')) {
//             const dataValue = event.target.getAttribute('data-value');
//             modalText.innerHTML = nl2br(dataValue);  // Update modal text
//             modal.style.display = 'block';  // Show the modal
//         }
//     });

//     closeModalBtn.addEventListener('click', function() {
//         modal.style.display = 'none';  // Close the modal
//     });

//     // Helper function to mimic PHP's nl2br
//     function nl2br(str) {
//         return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1<br>$2');
//     }
// });
