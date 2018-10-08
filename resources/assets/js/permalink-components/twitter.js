import entity from '../mixins/entity'

export default {
    mixins: [entity],

    computed: {
        title: {
            get() {
                return this.sharedState.twitter.title || ''
            },
            set(value) {
                this.$set(this.sharedState.twitter, 'title', value)
            }
        },
        description: {
            get() {
                return this.sharedState.twitter.description || ''
            },
            set(value) {
                this.$set(this.sharedState.twitter, 'description', value)
            }
        },
        image: {
            get() {
                return this.sharedState.twitter.image || ''
            },
            set(value) {
                this.$set(this.sharedState.twitter, 'image', value)
            }
        }
    }
}