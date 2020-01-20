import axios from 'axios';

export default {
    props: ["success", "successes"],
    methods: {
        getId(e) {
            console.log(e);
        }
    },
}