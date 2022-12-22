<template>
  <main class="text-black bg-white w-full">
    <h1 class="text-3xl p-2 bg-blue-100 antialiased font-bold ml-12  mt-5">
      Medical History
    </h1>
    <form
      :key="1"
      v-on:submit.prevent="save_personal_details"
      class="text-black py-5 px-10 font-semibold placeholder-red-500"
    >

      <div class="flex flex-wrap">
        <div class="m-2">
          <label class="">Epilepsy/Deppression</label>
          <input
            required="required"
            type="text"
            placeholder="Epilepsy/Deppression"
            v-model="form['deppression']"
            class="
              mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>
        <div class="m-2">
          <label for="">allergy</label>
          <input
            v-model="form['allergy']"
            class="
            mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
            placeholder="First Name"
            required="required"
            type="text"
          />
        </div>
        <div class="m-2">
          <label for="">Others</label>
          <input
            required="required"
            type="text"
            placeholder="others"
            v-model="form['others']"
            class="
            mt-1
              px-5
              py-2.5
              rounded-lg
              border
              text-black
              flex
            "
          />
        </div>

       
      </div>

      <button
        type="submit"
        class="
          py-2.5
          px-12
          font-bold
          mt-6
          rounded-lg
          transition-all
          text-white
          backdrop-blur-lg
          drop-shadow-lg
        "
        :class="{
          'bg-blue-600': done,
          'bg-blue-300 px-36': !done,
        }"
      >
        {{ done ? "Updated ✅ " : "Not Submited" }}
      </button>
    </form>
  </main>
</template>

<script>
export default {
  data() {
    return {
      done: false,
      form: {
       "deppression" : '',
       "allergy" : '',
       "others" : '',
      },
    };
  },
  mounted() {
   
  },
  computed: {

  },
  methods: {
    save_personal_details:  function () {
        this.done = !this.done;
        this.$store.commit('save_medical_history' , this.form)
    //   this.$store.commit("save_personal_details", this.form);
    },
    init: (form, edit_data) => {},
  },
};
</script>