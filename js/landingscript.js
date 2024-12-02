/** // Smooth Scrolling for Navigation Links
const navLinks = document.querySelectorAll("nav ul li a");

navLinks.forEach(link => {
  link.addEventListener("click", event => {
    event.preventDefault();
    const targetId = link.getAttribute("href").substring(1);
    const targetSection = document.getElementById(targetId);

    if (targetSection) {
      targetSection.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });
    }
  });
});

// Button Hover Animation
const buttons = document.querySelectorAll("button");

buttons.forEach(button => {
  button.addEventListener("mouseover", () => {
    button.style.transform = "scale(1.1)";
    button.style.transition = "transform 0.3s ease";
  });

  button.addEventListener("mouseout", () => {
    button.style.transform = "scale(1)";
  });
});

// Subscription Form Validation
const subscriptionForm = document.querySelector(".footer form");
const emailInput = document.querySelector(".footer input[type='email']");

subscriptionForm.addEventListener("submit", event => {
  event.preventDefault(); // Prevent form from submitting

  const emailValue = emailInput.value.trim();
  if (emailValue === "" || !validateEmail(emailValue)) {
    alert("Please enter a valid email address.");
  } else {
    alert("Thank you for subscribing!");
    emailInput.value = ""; // Clear the input field
  }
});

// Validate Email Function
function validateEmail(email) {
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return emailRegex.test(email);
}

// Scroll Animation for Apply Now Button
const applyNowButton = document.querySelector(".apply-now");

if (applyNowButton) {
  applyNowButton.addEventListener("click", () => {
    const target = document.getElementById("application-section"); // Example section
    target.scrollIntoView({ behavior: "smooth", block: "start" });
  });
}

// Sticky Navigation on Scroll
window.addEventListener("scroll", () => {
  const navbar = document.querySelector("nav");
  if (window.scrollY > 50) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
});
