// resources/js/app.js
import Alpine from 'alpinejs'
import focus from '@alpinejs/focus'

import themeSwitch from './components/theme-switch'
import toastComponent from './components/toast'

/* =========================================================
   UI MODAL — DEVE EXISTIR ANTES DO Alpine.start()
========================================================= */
globalThis.uiModal = function (id) {
    return {
        open: false,

        init() {
            window.addEventListener('ui-modal-open', (e) => {
                if (e.detail === id) this.open = true
            })

            window.addEventListener('ui-modal-close', (e) => {
                if (!e.detail || e.detail === id) this.open = false
            })
        },

        closeModal() {
            this.open = false
        },
    }
}

/* =========================================================
   UI GLOBAL API (CHAMADA PELO BLADE)
   - PADRÃO: detail = { message, type }
========================================================= */
globalThis.ui = globalThis.ui || {}

globalThis.ui.toast = {
    success(message) {
        window.dispatchEvent(new CustomEvent('ui-toast', { detail: { message, type: 'success' } }))
    },
    error(message) {
        window.dispatchEvent(new CustomEvent('ui-toast', { detail: { message, type: 'error' } }))
    },
    warning(message) {
        window.dispatchEvent(new CustomEvent('ui-toast', { detail: { message, type: 'warning' } }))
    },
    info(message) {
        window.dispatchEvent(new CustomEvent('ui-toast', { detail: { message, type: 'info' } }))
    },
}

globalThis.ui.modal = {
    open(id) {
        window.dispatchEvent(new CustomEvent('ui-modal-open', { detail: id }))
    },
    close(id) {
        window.dispatchEvent(new CustomEvent('ui-modal-close', { detail: id }))
    },
    closeAll() {
        window.dispatchEvent(new CustomEvent('ui-modal-close'))
    },
}

globalThis.ui.loader = {
    show() {
        window.dispatchEvent(new CustomEvent('ui-loader-show'))
    },
    hide() {
        window.dispatchEvent(new CustomEvent('ui-loader-hide'))
    },
}

/* =========================================================
   ALPINE
========================================================= */
Alpine.plugin(focus)

/**
 * REGISTRO CANÔNICO DOS COMPONENTES
 */
Alpine.data('uiToast', toastComponent)
Alpine.data('themeSwitch', themeSwitch)

window.Alpine = Alpine
Alpine.start()
