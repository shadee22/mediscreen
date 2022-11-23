<template >
  <main class="flex items-center justify-center h-screen text-white">
    <div>
      <h1 class="rounded-lg font-bold text-5xl">
        {{ name }} Testing this page
      </h1>
      <nuxt-link to="/fun">
        <p
          class="
            bg-gray-800
            w-full
            px-5
            text-center
            py-2.5
            font-bold
            rounded-lg
            mt-4
          "
        >
          To fun page
        </p>
      </nuxt-link>
      <div>
        {{ posts }}
      </div>
    </div>
    <Nuxt />
  </main>
</template>


<script>
import axios from "axios";

export default {
  props: ["name"],
  data() {
    return {
      posts: [],
    };
  },
    mounted() {
    //    setInterval(this.gReq , 1000);
  },
  methods: {
    gReq: function () {
      this.$axios
        .post("http://127.0.0.1:8000/api/test", { from_vue: "its vue request" })
        .then((res) => {
          this.posts = res.data;
        })
        .catch((error) => {
          this.posts = error;
          console.log(error);
        });
    },
   
  },
};
</script>