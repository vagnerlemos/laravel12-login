// resources/js/components/upload.js

export function uiUpload(config = {}) {
    return {
        file: null,
        fileName: null,
        previewUrl: null,
        progress: 0,
        state: 'idle', // idle | ready | loading | error
        errorMessage: null,

        maxSize: config.maxSize || 5,
        accept: config.accept || '*',
        uploadUrl: config.uploadUrl || null,

        handleFile(event) {
            const selectedFile = event.target.files[0]
            if (!selectedFile) return

            this.reset(false)

            const maxBytes = this.maxSize * 1024 * 1024

            if (selectedFile.size > maxBytes) {
                this.state = 'error'
                this.errorMessage = `Arquivo maior que ${this.maxSize}MB`
                globalThis.ui?.toast?.warning(this.errorMessage)
                this.clearInput(event.target)
                return
            }

            this.file = selectedFile
            this.fileName = selectedFile.name
            this.state = 'ready'

            if (selectedFile.type.startsWith('image/')) {
                this.previewUrl = URL.createObjectURL(selectedFile)
            }
        },

        async upload() {
            if (!this.file || !this.uploadUrl) return

            this.state = 'loading'
            this.progress = 30

            const formData = new FormData()
            formData.append('file', this.file)

            try {
                const response = await fetch(this.uploadUrl, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document
                            .querySelector('meta[name="csrf-token"]')
                            ?.getAttribute('content'),
                    },
                    body: formData,
                })

                this.progress = 80

                if (!response.ok) {
                    const data = await response.json().catch(() => null)

                    this.state = 'error'
                    this.errorMessage =
                        data?.message || 'Erro ao enviar arquivo'

                    globalThis.ui?.toast?.error(this.errorMessage)
                    return
                }

                this.progress = 100
                globalThis.ui?.toast?.success('Upload realizado com sucesso')

                // RESET AUTOMÁTICO APÓS SUCESSO
                setTimeout(() => {
                    this.reset(true)
                }, 600)

            } catch (error) {
                this.state = 'error'
                this.errorMessage = 'Erro de comunicação com servidor'
                globalThis.ui?.toast?.error(this.errorMessage)
            }
        },

        reset(clearInput = true) {
            this.file = null
            this.fileName = null
            this.previewUrl = null
            this.progress = 0
            this.errorMessage = null
            this.state = 'idle'

            if (clearInput) {
                const input = document.querySelector(
                    `input[type="file"][accept="${this.accept}"]`
                )
                if (input) input.value = ''
            }
        },

        clearInput(inputElement) {
            if (inputElement) {
                inputElement.value = ''
            }
        }
    }
}
