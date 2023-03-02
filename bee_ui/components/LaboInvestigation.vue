<template>
  <main class="mt-20 w-full">
    <h1 class="text-3xl p-2 bg-blue-100 antialiased font-bold ml-12  mt-5">
      Laboratary Investigation
    </h1>
    <form
      v-on:submit.prevent="save_Medical_details"
      class="text-black font-semibold"
    >
      <div class="flex flex-wrap py-5 px-10">
        <div class="grid">
          <div class="text-xl mx-2">Urine</div>
          <div class="flex">
            <div class="m-2">
              <label for="">Suger</label>
              <input
                required
                type="text"
                v-model="labo_form['Suger']"
                placeholder="Suger"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
            <div class="m-2">
              <label for="">Albumin</label>
              <input
                required
                type="text"
                v-model="labo_form.Albumin"
                placeholder=" Albumin "
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
            <div class="m-2">
              <label for="">Pregnancy</label>
              <input
                required
                type="text"
                v-model="labo_form.Pregnancy"
                placeholder="Pregnancy"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
          </div>
        </div>
        <div class="mt-4 grid">
          <div class="text-xl mx-2 font-semibold">Stool</div>
          <div class="flex">
            <div class="m-2">
              <label for="">Helmenthes</label>
              <input
                required
                type="text"
                v-model="labo_form.Helmenthes"
                placeholder=" Helmenthes "
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>

            <div class="m-2">
              <label for="">Salmonella/Shigella</label>
              <input
                required
                type="text"
                v-model="labo_form['Salmonella/Shigella']"
                placeholder="Salmonella/Shigella"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
            <div class="m-2">
              <label for="">V.Cholera</label>
              <input
                required
                type="text"
                v-model="labo_form.VCholera"
                placeholder="V.Cholera "
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
            <div class="m-2">
              <label for="">Giardia</label>
              <input
                required
                type="text"
                v-model="labo_form['Giardia']"
                placeholder="Giardia"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
          </div>
        </div>
        <div class="mt-4">
          <div class="text-xl mx-2 font-semibold">Blood</div>
          <div class="flex flex-wrap">
            <div class="m-2">
              <label for="">Hemoglobin</label>
              <input
                required
                type="text"
                v-model="labo_form.Hemoglobin"
                placeholder="Hemoglobin"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
            <div class="m-2">
              <label for="">Malaria Film</label>
              <input
                required
                type="text"
                v-model="labo_form['Malaria Film']"
                placeholder="Malaria Film"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
            <div class="m-2">
              <label for="">Micro Filaria</label>
              <input
                required
                type="text"
                v-model="labo_form['Micro Filaria']"
                placeholder="Micro Filaria"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
            <div class="m-2">
              <label for="">FBS/RBS</label>
              <input
                required
                type="text"
                v-model="labo_form['FBS/RBS']"
                placeholder="F.B.S/R.B.S"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
            <div class="m-2">
              <label for="">VDRL</label>
              <input
                required
                type="text"
                v-model="labo_form['VDRL']"
                placeholder="VDRL"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
            <div class="m-2">
              <label for="">LFTS</label>
              <input
                required
                type="text"
                v-model="labo_form['LFTS']"
                placeholder="L.F.T.S"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
            <div class="m-2">
              <label for="">Creatinine</label>
              <input
                required
                type="text"
                v-model="labo_form['Creatinine']"
                placeholder="Creatinine"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
            <div class="m-2">
              <label for="">Urea</label>
              <input
                required
                type="text"
                v-model="labo_form['Urea']"
                placeholder="Urea"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
            <div class="m-2">
              <label for="">TPHA</label>
              <input
                required
                type="text"
                v-model="labo_form['TPHA']"
                placeholder="TPHA"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
          </div>
        </div>
        <div class="mt-4">
          <div class="text-xl mx-2 font-semibold">Serology</div>
          <div class="flex">
            <div class="m-2">
              <label for="">AntiHCV</label>

              <input
                required
                type="text"
                v-model="labo_form.AntiHCV"
                placeholder="AntiHCV"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
            <div class="m-2">
              <label for="">HIVTeST(HIBI-II)</label>

              <input
                required
                type="text"
                v-model="labo_form['HIVTeST(HIBI-II)']"
                placeholder="HIVTeST(HIBI-II)"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
            <div class="m-2">
              <label for="">HbsAg</label>

              <input
                required
                type="text"
                v-model="labo_form['HbsAg']"
                placeholder="HbsAg "
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
             <div class="m-2">
              <label for="">Remarks</label>

              <input
                required
                type="text"
                v-model="labo_form.Remarks"
                placeholder="Remarks"
                class="mt-1 px-5 py-2.5 rounded-lg border text-black flex"
              />
            </div>
          </div>
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
        <span>Submit and Print 🖨️</span>
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
        Suger: "Nil",
        Albumin: "Nil",
        Pregnancy: "Nil",
        Helmenthes: "Nil",
        "Salmonella/Shigella": "Nil",
        VCholera: "Nil",
        Giardia: "Nil",
        Hemoglobin: "Not Done",
        "Malaria Film": "Not Done",
        "Micro Filaria": "Not Done",
        "FBS/RBS": "Nil",
        VDRL: "Non Reactive",
        LFTS: "Nil",
        Creatinine: "Nil",
        Urea: "Nil",
        TPHA: "Non Reactive",
        AntiHCV: "Not Done",
        "HIVTeST(HIBI-II)": "Not Done",
        HbsAg: "Not Done",
        'Remarks' : '--'
      },
      // inputs: this.$store.state.inputs,
    };
  },

  mounted() {
    if (this.$route.name !== "index") {
      console.log("edit_data" , this.edit_data)
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
              // While Editing
                this.$store.commit("save_labo_details", this.labo_form);
              if (this.$route.name !== "index") {

                this.$store.commit("edit_detail");
                this.$router.push("/printing");
              } else {
                Swal.fire({
                  title: "Confirm to Next Step!",
                  icon: "info",
                  confirmButtonText: "Print the Certificate!",
                  cancelButtonText: "Not Confirm",
                  showCancelButton: true,
                  cancelButtonColor: "red",
                }).then((res) => {
                  if (res.isConfirmed) {
                    this.$store.commit("save_labo_details", this.labo_form);
                    this.$store.commit("save_all_details");
                     this.$router.push("/printing");
                  }
                });
              }
      } else {
        Swal.fire(
          "Hohooo!",
          "Please update the Personal Details and Medical Examination Forms.",
          "error"
        );
      }
    },
  },
  init: function () {
    // this.$axios
    //   .get("http://127.0.0.1:8000/api/medi/all_medical_inputs")
    //   .then((res) => {
    //     this.$store.commit("get_all_medical_inputs", res.data);
    //     // this.all_medical_inputs = this.$store.state.medical_inputs;
    //     // this.all_personal_inputs = this.$store.state.inputs;
    //   });
  },
};
</script>
