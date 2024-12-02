// script.js
document.addEventListener('DOMContentLoaded', () => {
    const subTabs = document.querySelectorAll('.sub-tab');
    const subTabContents = document.querySelectorAll('.sub-tab-content');

    // Sub-tab switching logic
    subTabs.forEach((subTab, index) => {
        subTab.addEventListener('click', () => {
            // Remove active class from all sub-tabs and contents
            subTabs.forEach((tab) => tab.classList.remove('active'));
            subTabContents.forEach((content) => content.classList.remove('active'));

            // Activate the clicked sub-tab and its content
            subTab.classList.add('active');
            subTabContents[index].classList.add('active');
        });
    });
});
