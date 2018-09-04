import store from '../store'
import pull from 'lodash/pull'
import intersectionWith from 'lodash/intersectionWith'

export default {
    data() {
        return {
            privateState: {},
            sharedState: store.state
        }
    },

    created() {
        if (!this.sharedState.meta.hasOwnProperty('robots')) {
            this.$set(this.sharedState.meta, 'robots', [])
        }
    },

    computed: {
        index: {
            get() {
                return this.getRobotsState(['index', 'noindex'])
            },
            set(value) {
                this.setRobotsState(value, ['index', 'noindex'])
            }
        },
        follow: {
            get() {
                return this.getRobotsState(['follow', 'nofollow'])
            },
            set(value) {
                this.setRobotsState(value, ['follow', 'nofollow'])
            }
        },
        canonical: {
            get() {
                return this.sharedState.meta.canonical || ''
            },
            set(value) {
                this.$set(this.sharedState.meta, 'canonical', value)
            }
        },
        noimageindex() {
            return this.sharedState.meta.robots.indexOf('noimageindex') !== -1
        },
        nosnippet() {
            return this.sharedState.meta.robots.indexOf('nosnippet') !== -1
        },
        noarchive() {
            return this.sharedState.meta.robots.indexOf('noarchive') !== -1
        },
    },

    methods: {
        addRobotsState(option, value) {
            this.setRobotsState(value ? option : 'default', [option])
        },

        getRobotsState(options) {
            let result = intersectionWith(options, this.sharedState.meta.robots)

            return result.length ? result[0] : 'default'
        },

        setRobotsState(value, options) {
            let result = pull(this.sharedState.meta.robots, ...options)
                .concat(value === 'default' ? [] : [value])

            this.$set(this.sharedState.meta, 'robots', result)
        }
    }
}