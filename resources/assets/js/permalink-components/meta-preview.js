import store from '../store'
import '../../scss/permalink.scss'

export default {
    data() {
        return {
            privateState: {
                url: window.location.href
            },
            sharedState: store.state
        }
    },

    computed: {
        url() {
            let prefix = window.location.host.concat('/')

            if (this.sharedState.path.length) {
                prefix = prefix.concat(this.sharedState.path).concat('/')
            }

            if (this.sharedState.slug.length) {
                prefix = prefix.concat(`<span class="font-weight-bold">${this.sharedState.slug}</span>`)
            }

            return prefix
        },
        title() {
            return compiler.compile(this.sharedState.meta.title)
        },
        description() {
            return compiler.compile(this.sharedState.meta.description)
        }
    }
}