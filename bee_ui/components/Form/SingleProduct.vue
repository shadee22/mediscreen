<template>
  <main class="grid grid-cols-12">
    <div v-if="!edit_mode" class="col-span-3 leftt  transition-all">
      Name ::: {{ new_name }}
    </div>

    <input
      @keypress.enter="submit_edited"
      v-else
      class="
        col-span-3
        center
        border
        rounded
        py-2.5
        px-5
        bg-transparent
        transition-all
      "
      v-model="new_name"
    />
    <div v-if="!edit_mode" class="col-span-5 leftt">Detail ::: {{ new_detail }}</div>
    <input
      @keypress.enter="submit_edited"
      v-else
      class="col-span-5 center border rounded py-2.5 px-5 bg-transparent"
      v-model="new_detail"
    />

    <button
      @click="edit_mode = !edit_mode"
      v-bind:class="{'bg-blue-500': !edit_mode, 'bg-green-500': edit_mode}"
      class="
        col-span-2
        center
        rounded-lg
        px-10
        mx-4
        hover:rounded-2xl
        transition
        py-2.5
        font-bold 
      "
    >
      {{ edit_mode ? 'Update' : 'Edit' }}
    </button>
    <button @click="deleter" class="col-span-2 hover:bg-red-800 transition-all center bg-red-500 rounded-lg px-10 mx-4 py-2.5">
      Delete
    </button>
  </main>
</template>


<script>
export default {
  props: ["name", "detail", "id"],
  data() {
    return {
      edit_mode: false,
      new_name: "",
      new_detail: "",
      editer : 'edit'
    };
  },
  mounted() {
    this.new_name = this.name;
    this.new_detail = this.detail;
  },
  computed: {},
  methods: {
    submit_edited() {
      this.edit_mode = !this.edit_mode;
      
     
      let data = {
        id: this.id,
        name: this.new_name,
        detail: this.new_detail,
      };
      this.$store.commit("edit_product",data);
      
    },
    deleter(){
      this.$store.commit("delete_product", this.id)
    }
  },
};
</script>