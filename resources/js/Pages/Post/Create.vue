<template>
    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg mb-2">Create</h1>
        <Link :href="route('post.index')" class="text-sky-500 text-sm mb-8">Back</Link>
        <div>
           <form @submit.prevent="store">
                <div class="mb-4">
                    <input v-model="title" class="w-full rounded-full border border-gray-400" type="text" placeholder="title">
                </div>    
                <div class="mb-4"> 
                   <textarea v-model="content" class="w-full rounded-full border border-gray-400" placeholder="content"></textarea>
                </div>
                <button class="ml-auto hover:bg-white hover:text-sky-500 border border-sky-500 block w-32 bg-sky-500 rounded-full text-center text-white p-2" type="submit">Create</button>
           </form>
        </div>
    </div>
</template>

<script>
    import {Link} from '@inertiajs/vue3'
    export default {
        name: "Index",
        components: {
            Link
        },

        data(){
            return {
                'title': '',
                'content': ''
            }
        },

        methods: {
            store(){
                this.$inertia.post('/post', {title: this.title, content: this.content})
            }
        }
    }
</script>


<style scoped>

</style>
