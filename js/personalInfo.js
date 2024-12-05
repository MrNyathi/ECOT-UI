// script.js
document.addEventListener("DOMContentLoaded", () => {
  const subTabs = document.querySelectorAll(".sub-tab");
  const subTabContents = document.querySelectorAll(".sub-tab-content");

  // Sub-tab switching logic
  subTabs.forEach((subTab, index) => {
    subTab.addEventListener("click", () => {
      // Remove active class from all sub-tabs and contents
      subTabs.forEach((tab) => tab.classList.remove("active"));
      subTabContents.forEach((content) => content.classList.remove("active"));

      // Activate the clicked sub-tab and its content
      subTab.classList.add("active");
      subTabContents[index].classList.add("active");
    });
  });
});

/* toggle input divs on the form */
// Get all buttons and divs
const personalBtn = document.getElementById("personalBtn");
const addressBtn = document.getElementById("addressBtn");
const kinBtn = document.getElementById("kinBtn");

const personalTab = document.getElementById("personalTab");
const addressTab = document.getElementById("addressTab");
const kinTab = document.getElementById("kinTab");

// Function to hide all divs and show the selected one
function showDiv(divToShow) {
  // Hide all divs
  personalTab.style.display = "none";
  addressTab.style.display = "none";
  kinTab.style.display = "none";

  // Show the selected div
  divToShow.style.display = "block";
}

// Add event listeners to buttons
personalBtn.addEventListener("click", () => showDiv(personalTab));
addressBtn.addEventListener("click", () => showDiv(addressTab));
kinBtn.addEventListener("click", () => showDiv(kinTab));

/* disable and re-enable postal */
const disableKinPostal = document.getElementById("same-postal");
const disableKinPhysical = document.getElementById("same-physical");

const kinCountry = document.getElementById("kin-country");
const kinBoxCode = document.getElementById("kin-box-code");
const kinCity = document.getElementById("kin-city");
const kinResidential = document.getElementById("kin-residential");

// disable or enable postal address fields
disableKinPostal.addEventListener("change", () => {
  if (disableKinPostal.checked) {
    kinCountry.disabled = true;
    kinBoxCode.disabled = true;
    kinCity.disabled = true;
  } else {
    kinCountry.disabled = false;
    kinBoxCode.disabled = false;
    kinCity.disabled = false;
  }
});

// disable or enable physical address fields
disableKinPhysical.addEventListener("change", () => {
  if (disableKinPhysical.checked) {
    kinResidential.disabled = true;
  } else {
    kinResidential.disabled = false;
  }
});
