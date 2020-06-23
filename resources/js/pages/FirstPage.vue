<template>
    <div>
        <h2 ref="myref">This is First Page</h2>
        <p>My name is {{ name }}</p>
        <hr>
        <br/><br/><br/>
        <div v-for="(blog, i) in blogs" :key="i">
            <h1>{{ blog.title }}</h1>
            <p>{{ blog.post }}</p>
        </div>
        <hr>
        <br/><br/><br/>
        <div>
            <h1> Count: {{ count }} </h1>
            <button @click="changeCount(1)">+ Increase</button>
            <button @click="changeCount(-1)">- Decrease</button>
        </div>
        <hr>
        <br/><br/><br/>
        <div>
            <h1 v-if="showItem">Show item if ShowItem equal to true</h1>
            <h1 v-else>Hidden item if ShowItem equal to false</h1>
            <button @click="showItem = !showItem">
                <span v-if="showItem">Hide</span>
                <span v-else>Show</span>
            </button>
        </div>
        <hr>
        <br/><br/><br/>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                name: 'Viet Anh',
                blogs: [
                    {title: 'This is Blog Title 1', post: 'This is Post Content 1', id: 1},
                    {title: 'This is Blog Title 2', post: 'This is Post Content 2', id: 2},
                    {title: 'This is Blog Title 3', post: 'This is Post Content 3', id: 3},
                    {title: 'This is Blog Title 4', post: 'This is Post Content 4', id: 4},
                ],
                count: 0,
                showItem: false,
            }
        },
        methods: {
            changeCount(count) {
                return this.count += count
            },
            toggleShowItem() {
                this.showItem = !this.showItem
            }
        },
        created: function() {
            this.count = 100
            console.log(this.$refs.myref)
        },
        mounted: function() {
            console.log(this.$refs.myref)
        }
    }
</script>