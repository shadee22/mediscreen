<template>
  <main
    class="mt-8 mx-10 h-screen pb-52 text-white border-bottom overflow-scroll"
  >
    <!-- <div class="bg-red-500">
        {{products}}
    </div> -->
    <div
      v-for="i in $store.state.all_products"
      :key="i.id"
      class="my-2 rounded-xl bg-gray-800 hover:bg-gray-900 transition-all px-5 py-2.5"
    >
      <FormSingleProduct :name="i.name" :detail="i.detail" :id="i.id" />
    </div>
  </main>
</template>

<script>
export default {
  data() {
    return {
      products: "",
      edit_mode: false,
    };
  },
  mounted() {
    this.get_all_products();
  },
  methods: {
    get_all_products() {
      this.$axios
        .get("/api/test")
        .then((res) => {
          this.$store.commit("getting_products", res.data);
          this.products = this.$store.state.all_products;
        })
        .catch((e) => {
          console.log(e);
        });
    },
  },
};
</script>