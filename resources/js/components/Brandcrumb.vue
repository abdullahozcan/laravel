<template>
    <div class="row mb-2 mb-xl-3">
        <div class="col-auto d-none d-sm-block">
            <h3><strong> {{ title }} </strong> > {{titleTwo}}</h3>
        </div>

        <div class="col-auto ms-auto text-end mt-n1">
            <a href="#" v-if="buttons" v-for="button in buttons" class="btn btn-light bg-white me-2"> <i class="fas fa-kiwi-bird"></i> {{ button.title }}</a>
            <a href="#" data-bs-toggle="modal" data-bs-target="#sizedModalLg" class="btn btn-primary">New</a>
        </div>
    </div>
</template>

<script>
export default {
    props:['title', 'titleTwo','buttons'],
    data(){
        return{

        }
    },
}
</script>

<style scoped>

</style>
