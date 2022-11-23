<template>
  <main>
    <form
      ref="form"
      v-on:submit.prevent="addProduct"
      class="mx-32 grid grid-cols-10"
    >
      <input
        required="required"
        type="text"
        placeholder="Product Name"
        class="col-span-4 border rounded-lg m-3 h-12 px-5 py-2.5"
        @keypress.enter="name"
        v-model="name"
      />

      <input
        required="required"
        type="text"
        placeholder="Product Detail"
        v-model="detail"
        class="col-span-4 border rounded-lg m-3 h-12 px-5 py-2.5"
      />
      <input
        type="submit"
        value="Add Product"
        class="
          col-span-2
          border
          bg-blue-600
          hover:bg-blue-700 hover:rounded-none
          text-white
          font-bold
          border-none
          transition-all
          cursor-pointer
          rounded-lg
          m-3
          h-12
          px-5
          py-2.5
        "
      />
    </form>
  </main>
</template>


<script>
import axios from "axios";

export default {
  data() {
    return {
      name: "",
      detail: "",
    };
  },
  methods: {
    addProduct() {
      let data = {
        name: this.name,
        detail: this.detail,
      };
      this.name = '';
      this.detail = '';
      this.$store.commit('add_product' , data)
      
    },
  },
};
</script>