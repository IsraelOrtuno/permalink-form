import store from './store'
import Compiler from "./compiler"

window.compiler = new Compiler({})

export default {
    props: ['data', 'store', 'path'],

    data() {
        return {
            privateState: {
                form: false
            },
            sharedState: store.state
        }
    },

    beforeMount() {
        let seo = this.store.seo || {}

        this.$set(this.sharedState, 'path', this.path || '')
        this.$set(this.sharedState, 'slug', this.store.slug || '')
        this.$set(this.sharedState, 'meta', seo.meta || {})
        // this.sharedState.meta = this.store.meta
        // store.state = this.store
        compiler.setSources(this.data)
    },

    methods: {
        show() {
            this.privateState.form = true
        }
    }
}