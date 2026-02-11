document.addEventListener('DOMContentLoaded', () => {

    document.querySelectorAll('form').forEach(form => {

        form.addEventListener('submit', function () {

            const button = form.querySelector('button[type="submit"]');
            if (!button) return;

            if (button.dataset.submitted === 'true') {
                event.preventDefault();
                return;
            }

            button.dataset.submitted = 'true';
            button.setAttribute('disabled', 'true');

            const spinner = button.querySelector('.ui-btn-spinner');
            const label = button.querySelector('.ui-btn-label');

            if (spinner) spinner.classList.remove('hidden');
            if (label) label.classList.add('opacity-70');

            if (window.ui?.loader) {
                window.ui.loader.show();
            }
        });

    });

});
