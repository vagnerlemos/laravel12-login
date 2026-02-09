import Alpine from 'alpinejs'

/* =========================================================
   UI MODAL — DEVE EXISTIR ANTES DO Alpine.start()
========================================================= */
globalThis.uiModal = function (id) {
    return {
        open: false,

        init() {
            globalThis.addEventListener('ui-modal-open', e => {
                if (e.detail === id) this.open = true
            })

            globalThis.addEventListener('ui-modal-close', e => {
                if (!e.detail || e.detail === id) this.open = false
            })
        },

        closeModal() {
            this.open = false
        },
    }
}

/* =========================================================
   UI GLOBAL
========================================================= */
globalThis.ui = {
    loader: {
        show() {
            globalThis.dispatchEvent(new CustomEvent('ui-loader-show'))
        },
        hide() {
            globalThis.dispatchEvent(new CustomEvent('ui-loader-hide'))
        },
    },

    modal: {
        open(id) {
            globalThis.dispatchEvent(
                new CustomEvent('ui-modal-open', { detail: id })
            )
        },
        close(id) {
            globalThis.dispatchEvent(
                new CustomEvent('ui-modal-close', { detail: id })
            )
        },
    },
}

/* =========================================================
   ALPINE — POR ÚLTIMO
========================================================= */
globalThis.Alpine = Alpine
Alpine.start()
