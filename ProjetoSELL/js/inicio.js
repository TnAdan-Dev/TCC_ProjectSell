document.addEventListener('DOMContentLoaded', function() {
    const item1Btn = document.getElementById('item1-btn');
    const item2Btn = document.getElementById('item2-btn');
    const item1 = document.getElementById('item1');
    const item2 = document.getElementById('item2');

    item1Btn.addEventListener('click', function() {
        if (item1.classList.contains('hidden')) {
            item1.classList.remove('hidden'); // Mostra o Item 1
            item2.classList.add('hidden');    // Oculta o Item 2
        } else {
            item1.classList.add('hidden');    // Oculta o Item 1
        }
    });

    item2Btn.addEventListener('click', function() {
        if (item2.classList.contains('hidden')) {
            item2.classList.remove('hidden'); // Mostra o Item 2
            item1.classList.add('hidden');    // Oculta o Item 1
        } else {
            item2.classList.add('hidden');    // Oculta o Item 2
        }
    });
});
