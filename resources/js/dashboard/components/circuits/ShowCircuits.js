import ShowCircuit from "./ShowCircuit.vue";
import axios from 'axios';
import DeleteCircuit from "./DeleteCircuit.vue";
import AddCircuit from "./AddCircuit.vue";
import UploadFile from "./UploadFile.vue";
import AddTrace from "./AddTrace.vue";

export default {
    components:{
        DeleteCircuit,
        ShowCircuit,
        AddCircuit,
        UploadFile,
        AddTrace,
    },
    data:() => ({
        circuits: [],
        dialog: false,

    }),
    methods: {
        getDatas() {
            axios.get('/api/circuits')
                .then(({ data }) => {
                    data.data.forEach(circuit => {
                        this.circuits.push(circuit)
                    })
                })
                .catch();
        },
        removeCircuit(id){
            _.remove(this.circuits, function (_circuit) {
                return _circuit.id == id;
            })
        }
    },

    

    created() {
        this.getDatas();
    }
}
