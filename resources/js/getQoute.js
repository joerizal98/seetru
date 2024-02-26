document.addEventListener('DOMContentLoaded', function() {
    // Make a GET request to the favqs.com API endpoint
    fetch('https://favqs.com/api/qotd')
        .then(response => response.json())
        .then(data => {
            // Get the quote from the response data
            const quote = data.quote.body;
            const author = data.quote.author;

            // Update the content of the quote container with the received quote
            const quoteContainer = document.getElementById('quote-container');
            quoteContainer.innerHTML = `<p>"${quote}" - ${author}</p>`;
        })
        .catch(error => {
            console.error('Error fetching quote:', error);
        });
});
