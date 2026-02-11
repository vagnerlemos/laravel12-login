// resources/js/app.js
import Alpine from 'alpinejs'
import focus from '@alpinejs/focus'

import themeSwitch from './components/theme-switch'
import toastComponent from './components/toast'
import { uiUpload } from './components/upload'
import './core/ui-form';
import './core/form-submit';



/* =========================================================
   UI MODAL — DEVE EXISTIR ANTES DO Alpine.start()
========================================================= */
globalThis.uiModal = function (id) {
    return {
        open: false,

        init() {
            globalThis.addEventListener('ui-modal-open', (e) => {
                if (e.detail === id) this.open = true
            })

            globalThis.addEventListener('ui-modal-close', (e) => {
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
        globalThis.dispatchEvent(new CustomEvent('ui-toast', { detail: { message, type: 'success' } }))
    },
    error(message) {
        globalThis.dispatchEvent(new CustomEvent('ui-toast', { detail: { message, type: 'error' } }))
    },
    warning(message) {
        globalThis.dispatchEvent(new CustomEvent('ui-toast', { detail: { message, type: 'warning' } }))
    },
    info(message) {
        globalThis.dispatchEvent(new CustomEvent('ui-toast', { detail: { message, type: 'info' } }))
    },
}

globalThis.ui.modal = {
    open(id) {
        globalThis.dispatchEvent(new CustomEvent('ui-modal-open', { detail: id }))
    },
    close(id) {
        globalThis.dispatchEvent(new CustomEvent('ui-modal-close', { detail: id }))
    },
    closeAll() {
        globalThis.dispatchEvent(new CustomEvent('ui-modal-close'))
    },
}

globalThis.ui.loader = {
    show() {
        globalThis.dispatchEvent(new CustomEvent('ui-loader-show'))
    },
    hide() {
        globalThis.dispatchEvent(new CustomEvent('ui-loader-hide'))
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

/**
 * Upload System (Fase 3)
 */
globalThis.uiUpload = uiUpload

globalThis.Alpine = Alpine
Alpine.start()
