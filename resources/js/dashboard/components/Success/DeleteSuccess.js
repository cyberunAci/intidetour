import axios from 'axios';

export default {
    props: ["success", "successes"],
    data() {
        return {
            dialog: false,
        }
    },
    methods: {
        getId(e) {
            console.log(e);
        }
    },
}