import entity from '../mixins/entity'

export default {
    mixins: [entity],

    computed: {
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
        },
        url() {
            return window.location.protocol + '//' + window.location.host + '/' + (this.sharedState.path ? (this.sharedState.path + '/') : '')
        },
        slug: {
            get() {
                return this.sharedState.slug
            },
            set(value) {
                this.sharedState.slug = value
            }
        }
    }
}