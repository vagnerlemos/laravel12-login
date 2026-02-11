document.addEventListener('alpine:init', () => {
    Alpine.directive('ui-submit', (el) => {

        const button = el.querySelector('button[type="submit"]');

        if (!button) return;

        el.addEventListener('submit', () => {
            if (button.hasAttribute('data-loading')) return;

            button.setAttribute('data-loading', 'true');
            button.setAttribute('disabled', 'true');

            button.classList.add('opacity-70');
        });
    });
});
