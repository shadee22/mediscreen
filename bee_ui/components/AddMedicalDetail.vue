<template>
  <main class="text-white">
    <form
      v-on:submit.prevent="add_input"
      class="grid bg-black bg-opacity-40 backdrop-blur-lg rounded-lg drop-shadow-lg w-max p-10"
    >
      <label for="" class="my-2 font-bold"
        >:: Add Input for Medical Details</label
      >
      <input
        required
        type="text"
        placeholder="New Input"
        class="px-5 py-2.5 w-64 rounded text-black my-4"
        v-model="Nname"
      />
      <label for="" class="my-2">Width of Input : {{ Nvalue }}</label>
      <input
        type="range"
        min="10"
        max="20"
        class="w-60 cursor-pointer hover:bg-red-500 h-2"
        v-model="Nvalue"
      />
      <button
        type="submit"
        class="px-5 py-2.5 bg-blue-500 hover:bg-blue-600 rounded-lg mt-6"
      >
        Add Medical Input
      </button>
    </form>
  </main>
</template>

<script>
export default {
  data() {
    return {
      Nname: "",
      Nvalue: 10,
    };
  },
  methods: {
    add_input() {
      this.$store.commit("add_input", [this.Nname, this.Nvalue + "em", "text" ]);
      this.Nname = "";
      this.Nvalue = 10;
    },
  },
};
</script>