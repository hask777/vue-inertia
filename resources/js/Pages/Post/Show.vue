<template>
  
        <h1 class="text-lg mb-2">Post</h1>
        
        <Link :href="route('post.index')" class="text-sky-500 text-sm mb-8">Back</Link>
        <div v-if="post">
            <div class="mt-8 pt-8 border-t border-gray-500">
                <div>{{ post.title }}</div>
                <div>{{ post.content }}</div>
                <div>{{ post.date }}</div>
                
            </div>

        </div>
    
</template>

<script>
    import {Link} from '@inertiajs/vue3'
    import MainLayout from "@/Layouts/MainLayout.vue"
    
    export default {
        name: "Show",

        layout: MainLayout,

        props: [
            'post'
        ],

        components: {
            Link
        }
    }
</script>


<style scoped>

</style>
