<template>
  <div id="app">
    <header>
      <router-link to="{name: posts}">Посты</router-link>
    </header>
    <router-view />
    <Posts></Posts>
    <Post></Post>
  </div>
</template>

<script>
import Posts  from  '@/components/Posts.vue'
import Post  from  '@/components/Post.vue'

export default {
  name: 'App',
  components: {
    Posts, Post
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
