<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-2">Posts</h1>
        
        <div>
            <Link :href="route('post.create')" class="hover:bg-white hover:text-sky-500 border border-sky-500 block w-32 bg-sky-500 rounded-full text-center text-white p-2">
                Add Post
            </Link>
        </div>
        <div v-if="posts">
            <div v-for="post in posts" class="mt-8 pt-8 border-t border-gray-500">
                <div>{{ post.title }}</div>
                <div>{{ post.content }}</div>
            </div>

        </div>
    </div>
</template>

<script>
    import {Link} from '@inertiajs/vue3'
    export default {
        name: "Index",

        props: [
            'posts'
        ],

        components: {
            Link
        }
    }
</script>


<style scoped>

</style>
