<template>

    <MainLayout>
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
                <div>{{ post.date }}</div>
                <div>
                    <Link class="text-sky-500" :href="route('post.show', post.id)">Show Post</Link>
                </div>
                <div>
                    <Link class="text-sky-500" :href="route('post.edit', post.id)">Edit Post</Link>
                </div>
                <div>
                    <p class="text-red-500 cursor-pointer" @click="deletePost(post.id)">Delete Post</p>
                </div>
            </div>
        </div>
    </MainLayout>

</template>

<script>
    import {Link} from '@inertiajs/vue3'
    import MainLayout from "@/Layouts/MainLayout.vue"

    export default {
        name: "Index",

        layout: MainLayout,

        props: [
            'posts'
        ],

        components: {
            Link
        },

        methods: {
            deletePost(id){
                this.$inertia.delete(`/post/${id}`)
            }
        }
    }
</script>


<style scoped>

</style>
