function filterItems() {
    const input = document.getElementById('search-input').value.toLowerCase();
    const items = document.querySelectorAll('#search-results li');
    const resultsContainer = document.getElementById('search-results');

    let hasResults = false;


    items.forEach(item => {
        if (item.textContent.toLowerCase().includes(input)) {
            item.style.display = 'block';
            hasResults = true;
        } else {
            item.style.display = 'none';
        }
    });

    if (input && hasResults) {
        resultsContainer.style.display = 'block';
    } else {
        resultsContainer.style.display = 'none';
    }
}
