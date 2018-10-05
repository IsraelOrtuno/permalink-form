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
            sharedState: {}
        }
    },

    beforeMount() {
        Object.assign(store.state, this.store.seo, {
            path: this.path || '',
            slug: this.store.slug || ''
        })

        this.sharedState = store.state

        compiler.setSources(this.data)
    },

    methods: {
        show() {
            this.privateState.form = true
        }
    }
}