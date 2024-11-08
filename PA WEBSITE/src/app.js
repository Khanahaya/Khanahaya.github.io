document.addEventListener('alpine:init', () => {
    Alpine.data('produk', () => ({
        open: false,

        toggle() {
            this.open = ! this.open
        }
    }))
})