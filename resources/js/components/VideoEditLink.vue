<template>
    <a :href="'/vue/manage/videos/' + video.id" target="_blank" class="text-indigo-600 hover:text-indigo-900">Edit</a>
</template>

<script>
export default {
    name: "VideoShowLink",
    props: {
        video: {
            type: Object,
            require: true
        }
    }
}
</script>

<style scoped>

</style>
