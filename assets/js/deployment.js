document.addEventListener("DOMContentLoaded", function () {
    var dropdownTrigger = document.querySelector('.dropdown-trigger');
    var dropdownMenu = dropdownTrigger.nextElementSibling;

    dropdownTrigger.addEventListener('click', function () {
        dropdownTrigger.classList.toggle('active');
    });

    document.addEventListener('click', function (event) {
        if (!dropdownMenu.contains(event.target) && !dropdownTrigger.contains(event.target)) {
            dropdownTrigger.classList.remove('active');
        }
    });
});
