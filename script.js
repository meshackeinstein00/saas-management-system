document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.querySelector('.menu-btn');
    const closeBtn = document.querySelector('.close-btn');
    const sidePanel = document.querySelector('.side-panel');
    const darkModeSwitch = document.getElementById('darkModeSwitch');

    // Open sidebar
    menuBtn.addEventListener('click', function () {
        sidePanel.style.transform = 'translateX(0)';
    });

    // Close sidebar
    closeBtn.addEventListener('click', function () {
        sidePanel.style.transform = 'translateX(-100%)';
    });

    // Dark mode toggle
    darkModeSwitch.addEventListener('change', function () {
        document.body.classList.toggle('dark-mode');
    });
});
