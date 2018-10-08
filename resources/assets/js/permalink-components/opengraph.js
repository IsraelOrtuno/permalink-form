import entity from '../mixins/entity'

export default {
    mixins: [entity],

    computed: {
        title: {
            get() {
                return this.sharedState.opengraph.title || ''
            },
            set(value) {
                this.$set(this.sharedState.opengraph, 'title', value)
            }
        },
        description: {
            get() {
                return this.sharedState.opengraph.description || ''
            },
            set(value) {
                this.$set(this.sharedState.opengraph, 'description', value)
            }
        },
        image: {
            get() {
                return this.sharedState.opengraph.image || ''
            },
            set(value) {
                this.$set(this.sharedState.opengraph, 'image', value)
            }
        }
    }
}