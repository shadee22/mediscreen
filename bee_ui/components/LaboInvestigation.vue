<template>
  <main class="text-white mt-20 w-full">
    <h1
      class="
        text-3xl text-green-500
        antialiased
        font-bold
        ml-12
        drop-shadow-lg
        mt-5
      "
    >
      Laboratary Investigation
    </h1>
    <form
      v-on:submit.prevent="save_Medical_details"
      class="text-black text-gray-300"
    >
      <div class="flex flex-wrap py-5 px-10">
        <div class="1">
          <div class="text-xl mx-2 font-bold">Urine</div>
          <input
            required
            type="text"
            v-model="labo_form['Suger']"
            placeholder="Suger"
            class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2"
          />
          <input
            required
            type="text"
            v-model="labo_form.Albumin"
            placeholder=" Albumin "
            class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2"
          />
          <input
            required
            type="text"
            v-model="labo_form.Pregnancy"
            placeholder=" Pregnancy "
            class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2"
          />
        </div>
        <div class="mt-4">
          <div class="text-xl mx-2 font-bold">Stool</div>
          <input
            required
            type="text"
            v-model="labo_form.Helmenthes"
            placeholder=" Helmenthes "
            class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2"
          />
          <input
            required
            type="text"
            v-model="labo_form['Salmonella/Shigella']"
            placeholder="Salmonella/Shigella"
            class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2"
          />
          <input
            required
            type="text"
            v-model="labo_form.VCholera"
            placeholder="V.Cholera "
            class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2"
          />
          <input
            required
            type="text"
            v-model="labo_form['Giardia']"
            placeholder="Giardia"
            class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2"
          />
        </div>
        <div class="mt-4">
          <div class="text-xl mx-2 font-bold">Blood</div>
          <div class="flex flex-wrap">
            <input
              required
              type="text"
              v-model="labo_form.Hemoglobin"
              placeholder="Hemoglobin"
              class="
                px-5
                py-2.5
                rounded-lg
                shadow-2xl
                flex-auto
                text-black
                mx-2
                my-2
              "
            />
            <input
              required
              type="text"
              v-model="labo_form['Malaria Film']"
              placeholder="Malaria Film"
              class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2"
            />
            <input
              required
              type="text"
              v-model="labo_form['Micro Filaria']"
              placeholder="Micro Filaria"
              class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2"
            />
            <input
              required
              type="text"
              v-model="labo_form['FBS/RBS']"
              placeholder="F.B.S/R.B.S"
              class="
                px-5
                py-2.5
                rounded-lg
                shadow-2xl
                flex-auto
                text-black
                mx-2
                my-2
              "
            />
            <input
              required
              type="text"
              v-model="labo_form['VDRL']"
              placeholder="VDRL"
              class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2"
            />
            <input
              required
              type="text"
              v-model="labo_form['LFTS']"
              placeholder="L.F.T.S"
              class="
                px-5
                py-2.5
                flex-auto
                rounded-lg
                shadow-2xl
                text-black
                mx-2
                my-2
              "
            />
            <input
              required
              type="text"
              v-model="labo_form['Creatinine']"
              placeholder="Creatinine"
              class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2"
            />
            <input
              required
              type="text"
              v-model="labo_form['Urea']"
              placeholder="Urea"
              class="
                px-5
                py-2.5
                flex-auto
                rounded-lg
                shadow-2xl
                text-black
                mx-2
                my-2
              "
            />
            <input
              required
              type="text"
              v-model="labo_form['TPHA']"
              placeholder="TPHA"
              class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2"
            />
          </div>
        </div>
        <div class="mt-4">
          <div class="text-xl mx-2 font-bold">Serology</div>
          <input
            required
            type="text"
            v-model="labo_form.AntiHCV"
            placeholder="AntiHCV"
            class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2"
          />
          <input
            required
            type="text"
            v-model="labo_form['HIVTeST(HIBI-II)']"
            placeholder="HIVTeST(HIBI-II)"
            class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2"
          />
          <input
            required
            type="text"
            v-model="labo_form['HbsAg']"
            placeholder="HbsAg "
            class="px-5 py-2.5 rounded-lg shadow-2xl text-black mx-2 my-2"
          />
        </div>
      </div>

      <button
        type="submit"
        class="
          py-2.5
          w-2/4
          mx-12
          text-white
          antialiased
          hover:bg-blue-700
          font-bold
          text-lg
          mt-6
          ml-12
          rounded-full
          transition-all
          backdrop-blur-lg
          drop-shadow-lg
          bg-blue-600
        "
      >
        <!-- {{ done ? "Updated ✅ " : "Submit And Print" }} -->
        <span>Submit and Print    🖨️</span>
      </button>
      <!-- </div> -->
    </form>
  </main>
</template>


<script>
import Swal from "sweetalert2";

export default {
  props: ["edit_data"],
  data() {
    return {
      done: false,
      labo_form: {
        Suger: "",
        Albumin: "",
        Pregnancy: "",
        Helmenthes: "",
        "Salmonella/Shigella": "",
        VCholera: "",
        Giardia: "",
        Hemoglobin: "",
        "Malaria Film": "",
        "Micro Filaria": "",
        "FBS/RBS": "",
        VDRL: "",
        LFTS: "",
        Creatinine: "",
        Urea: "",
        TPHA: "",
        AntiHCV: "",
        "HIVTeST(HIBI-II)": "",
        HbsAg: "",
      },
      // inputs: this.$store.state.inputs,
    };
  },

  mounted() {
    if (this.$route.name !== "index") {
      setTimeout(() => {
        this.labo_form = this.edit_data;
      }, 1000);
    }
  },

  methods: {
    up() {
      alert("upl");
    },
    save_Medical_details: function () {
      if (
        this.$store.state.all_inputs.personal &&
        this.$store.state.all_inputs.medical !== undefined
      ) {


        if (this.$route.name !== "index") {
          this.$store.commit("edit_detail")
        } else {
          Swal.fire({
            title: 'Confirm to Next Step!',
            icon: "info",
            confirmButtonText: "Print the Certificate!",
            cancelButtonText: "Not Confirm",
            showCancelButton: true,
            cancelButtonColor: "red",
          }).then((res) => {
              if (res.isConfirmed) {
                this.$store.commit("save_labo_details", this.labo_form);
                this.$store.commit("save_all_details")  ;
                this.$router.push("/printing");
              }
            }
          );
        }


      } else {
        Swal.fire(
          "Hohooo!",
          "Please update the Personal Details and Medical Examination Forms.",
          "error"
        );
      }
    }
  },
  init: function () {
    // this.$axios
    //   .get("http://127.0.0.1:8000/api/medi/all_medical_inputs")
    //   .then((res) => {
    //     this.$store.commit("get_all_medical_inputs", res.data);
    //     // this.all_medical_inputs = this.$store.state.medical_inputs;
    //     // this.all_personal_inputs = this.$store.state.inputs;
    //   });
  }
}
</script>
