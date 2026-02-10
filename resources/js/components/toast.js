// resources/js/components/toast.js
export default function toastComponent() {
    return {
        toasts: [],

        init() {
            // Listener ÚNICO (não duplique isso no Blade)
            window.addEventListener('ui-toast', (e) => {
                // compat: aceita {msg} (legado) e {message} (novo)
                const message = e?.detail?.message ?? e?.detail?.msg ?? ''
                const type = e?.detail?.type ?? 'info'

                if (!message) return

                this.add(message, type)
            })
        },

        add(message, type = 'info', timeout = 4000) {
            // id realmente único (evita warning de key duplicada)
            const id = `${Date.now()}-${Math.random().toString(16).slice(2)}`

            this.toasts.push({
                id,
                message,
                type,
                visible: true,
            })

            window.setTimeout(() => this.remove(id), timeout)
        },

        remove(id) {
            this.toasts = this.toasts.filter((t) => t.id !== id)
        },
    }
}
