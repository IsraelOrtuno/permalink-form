import store from '../store'

export default {
    data() {
        return {
            privateState: {},
            sharedState: store.state
        }
    },

    computed: {
        url() {
            return window.location.protocol + '//' + window.location.host + '/'
        },
        slug: {
            get() {
                return this.sharedState.slug
            },
            set(value) {
                this.sharedState.slug = value
            }
        },
        title: {
            get() {
                return this.sharedState.title || ''
            },
            set(value) {
                this.$set(this.sharedState, 'title', value)
            }
        },
        description: {
            get() {
                return this.sharedState.description || ''
            },
            set(value) {
                this.$set(this.sharedState, 'description', value)
            }
        }
    }
}