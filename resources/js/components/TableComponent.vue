<script>
import ModalComponent from "./ModalComponent.vue";

export default {
    name:"table-component",
    components: { ModalComponent },
    props:['string','columns'],
    data(){
        return {
            modalShow:false,
        }
    },
    mounted() {
    },
    methods:{
    }
}
</script>

<template>
    <ModalComponent></ModalComponent>
    <table id="table" ref="table" class="table table-striped" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
        </tfoot>
    </table>
</template>

<style scoped>

</style>

