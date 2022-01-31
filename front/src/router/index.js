import { createRouter } from "vue-router";
import Posts from "@/components/Posts";
import Post from "@/components/Post";

const routes = [
  {
    path: '/',
    name: 'posts',
    component: Posts
  },
  {
    path: "/post/:id",
    name: "Post",
    component: Post,
    props: true,
  },
];

const router = createRouter({
  history: router.createWebHistory(),
  routes,
});

export default router;