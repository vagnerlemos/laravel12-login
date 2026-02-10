<x-ui.modal.base :id="$id" :title="$title">
    <p class="text-sm text-ui-modal-text">
        {{ $message }}
    </p>

    <div class="flex justify-end gap-2 pt-4">
        <x-ui.button.secondary x-on:click="closeModal()">
            Cancelar
        </x-ui.button.secondary>

        {{ $slot }}
    </div>
</x-ui.modal.base>
