document.getElementById('applicationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Here you can handle the form submission, e.g., send data to a server
    // For this example, we will just show a response message
    const responseMessage = document.getElementById('responseMessage');
    responseMessage.classList.remove('hidden');
    responseMessage.innerText = `Thank you, ${name}. Your application has been submitted!`;
});