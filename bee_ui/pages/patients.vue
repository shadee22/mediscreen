<template>
  <main class="min-h-screen">
    <Navbar />
    <main class="grid grid-cols-12">
      <SideBar />
      <div class="col-span-10 mx-12">
        <h1 class="text-3xl font-bold my-2">Patients</h1>
        <h1 class="text-lg text-gray-400 font-semibold mt-2 mb-4">
          You can view all patients details from this table
        </h1>
        <vue-good-table
          class="text-xs"
          :columns="cols"
          :rows="rows"
          @on-row-click="onRowClick"
        />
      </div>
    </main>
  </main>
</template>

<script>
import "vue-good-table/dist/vue-good-table.css";
import { VueGoodTable } from "vue-good-table";
import Swal from "sweetalert2";
export default {
  components: {
    VueGoodTable,
  },
  data() {
    return {
      data: this.$store.state.table_details,
      cols: [],
      rows: [],
      // columns: [
      //   {
      //     label: "Name",
      //     field: "name",
      //     width: '500px',
      //     filterOptions: {
      //       enabled: true,
      //     },
      //   },
      //   {
      //     label: "Age",
      //     field: "age",
      //     type: "number",
      //   },
      //   {
      //     label: "Created On",
      //     field: "createdAt",
      //     type: "date",
      //     dateInputFormat: "yyyy-MM-dd",
      //     dateOutputFormat: "MMM do yy",
      //   },
      //   {
      //     label: "Percent",
      //     field: "score",
      //     type: "percentage",
      //   },
      // ],
    };
  },

  mounted() {
    this.$store.commit("get_table_details");
    this.$axios.get("api/get_all_patients_details").then((res) => {
      console.log(res);
      let col2 = [];
      Object.keys(res.data[0]).forEach((el) => {
        col2.push({
          label: el,
          field: el,
        });
      });
      col2[1].filterOptions = { enabled: true };
      col2[2].filterOptions = { enabled: true };
      col2[2].width =  '150px';
      col2[3].filterOptions = { enabled: true };
      col2[3].width =  '150px';
      col2[4].filterOptions = { enabled: true };
      col2[5].filterOptions = { enabled: true };
      col2[6].filterOptions = { enabled: true };
      col2[7].filterOptions = { enabled: true };
      col2[8].filterOptions = { enabled: true };
      col2[9].filterOptions = { enabled: true };
      col2[10].filterOptions = { enabled: true };
      col2[11].filterOptions = { enabled: true };
      col2[12].filterOptions = { enabled: true };
      col2[13].filterOptions = { enabled: true };
      col2[14 ].filterOptions = { enabled: true };
     
      this.cols = col2;
      this.rows = res.data;
    });
  },
  methods: {
    onRowClick(params) {
      Swal.fire({
        title: "Rfg com Code No " + params.row["Rfg com Code No"],
        text: params.row["First Name"] + " " + params.row["Last Name"],
        icon: "warning",
        showDenyButton: true,
        confirmButtonText: "Edit",
        denyButtonText: "Delete",
      }).then((res) => {
        if (res.isDenied) {
          Swal.fire({
            title: "Are you sure to delete it?",
            showDenyButton: true,
            confirmButtonText: "Yes Delete",
            confirmButtonColor : "red",
            denyButtonColor : "skyblue",
          }).then((res) => {
            if (res.isConfirmed) {
              this.$axios.post("/api/delete_selected_patient", {
                id: params.row.id,
              });
              Swal.fire("Deleted", "Succussfully deleted", "success");
            }
          });

         
        }
        if (res.isConfirmed) {
          this.$router.push({
            path: "/edit/" + params.row.id,
          });
        }
      });
    },
  },
};
</script>
