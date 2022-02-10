<template>
        <a class="text-indigo-600 hover:text-indigo-900 cursor-pointer" @click="remove()">Delete</a>
</template>

<script>
import bus from "../bus";

export default {
    name: "VideoDestroyLink",
    props: {
        video: {
            type: Object,
            require: true
        }
    },
    methods: {
       async remove(){
           try {
               await window.axeltomas_casteaching.video.destroy(this.video.id)
               this.$emit('removed')
               bus.$emit('status','Video deleted successfully')
           }catch (error){
               console.log(error);
           }
        }
    }
}
</script>

<style scoped>

</style>
