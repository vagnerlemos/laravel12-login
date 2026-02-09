import Alpine from 'alpinejs'
import focus from '@alpinejs/focus'

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

globalThis.uiToast = function () {
    return {
        toasts: [],

        init() { },

        add(message, type = 'info', timeout = 3000) {
            const id = Date.now() + Math.random()

            this.toasts.push({
                id,
                message,
                type,
                visible: true,
            })

            setTimeout(() => this.remove(id), timeout)
        },

        remove(id) {
            const toast = this.toasts.find(t => t.id === id)
            if (!toast) return

            toast.visible = false

            setTimeout(() => {
                this.toasts = this.toasts.filter(t => t.id !== id)
            }, 200)
        }
        ,

        toastClass(type) {
            return {
                'bg-ui-toast-success': type === 'success',
                'bg-ui-toast-error': type === 'error',
                'bg-ui-toast-warning': type === 'warning',
                'bg-ui-toast-info': type === 'info',
            }
        },
    }
}

globalThis.ui.toast = {
    success(msg) { globalThis.dispatchEvent(new CustomEvent('ui-toast', { detail: { msg, type: 'success' } })) },
    error(msg) { globalThis.dispatchEvent(new CustomEvent('ui-toast', { detail: { msg, type: 'error' } })) },
    warning(msg) { globalThis.dispatchEvent(new CustomEvent('ui-toast', { detail: { msg, type: 'warning' } })) },
    info(msg) { globalThis.dispatchEvent(new CustomEvent('ui-toast', { detail: { msg, type: 'info' } })) },
}


/* =========================================================
   ALPINE — POR ÚLTIMO
========================================================= */
globalThis.Alpine = Alpine
Alpine.plugin(focus)

document.addEventListener('DOMContentLoaded', () => {
    Alpine.start()
})
