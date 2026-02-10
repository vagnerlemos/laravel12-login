export default function themeSwitch(current, endpoint) {
    return {
        open: false,
        current,
        endpoint,

        options: [
            { value: 'light', label: 'Light' },
            { value: 'dark', label: 'Dark' },
            { value: 'mixed-nav-dark', label: 'Menu escuro' },
            { value: 'mixed-content-dark', label: 'Conteúdo escuro' },
        ],

        async select(value) {
            if (value === this.current) return

            this.current = value
            this.open = false

            ui.loader.show()

            try {
                const csrfMeta = document.querySelector('meta[name="csrf-token"]')

                if (!csrfMeta) {
                    throw new Error('CSRF token não encontrado no layout.')
                }

                if (!this.endpoint) {
                    throw new Error('Endpoint do visual-profile não informado.')
                }

                const response = await fetch(this.endpoint, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfMeta.content,
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({
                        visual_profile: value,
                    }),
                })

                if (!response.ok) {
                    throw new Error(`Erro HTTP ${response.status}`)
                }

                location.reload()
            } catch (error) {
                console.error('[ThemeSwitch]', error)

                ui.loader.hide()

                if (globalThis.ui?.toast) {
                    ui.toast.error('Erro ao aplicar tema')
                } else {
                    alert('Erro ao aplicar tema')
                }
            }
        },
    }
}
