import store from "../store";

export default {
    data() {
        return {
            privateState: {},
            sharedState: store.state
        }
    }
}