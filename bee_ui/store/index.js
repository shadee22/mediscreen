import Swal from "sweetalert2";

export const state = () => ({
  all_inputs: Object.create({}),
  personal_inputs: [],
  medical_inputs: [],
  labo_inputs: [],
  table_details: {},
})

export const mutations = {
  edit_detail(state) {
    this.$axios.post('api/update_data', state.all_inputs).then(res => { console.log('edited' , res); })
  },
  get_table_details(state) {
    this.$axios.get("api/get_all_patients_details").then((res) => {
      let col2 = [];
        Object.keys(res.data[0]).forEach(el => {
        col2.push({ label: el, field: el, });
      });
      state.table_details.cols = col2;
      state.table_details.rows = res.data;
    });
  },
  reset_details(state) {
    state.all_inputs = Object.create({});
  },
  save_all_details(state) {
    console.log('all details is ' , state.all_inputs);
    this.$axios.post('/save_all_details', state.all_inputs).then(res => {
      console.log(res);
    })
  },
  save_personal_details(state, data) {
    state.all_inputs['personal'] = data;

    // this.$axios.post('http://127.0.0.1:8000/api/medi/save_personal_detail' , data).then(res=>{
    //   console.log(res.data);
    // });
  },
  save_medical_history(state ,data){
    state.all_inputs['medical_history'] = data;
  },
  save_medical_details(state, data) {
    state.all_inputs['medical'] = data;

    // this.$axios.post('http://127.0.0.1:8000/api/medi/save_medical_detail' , data).then(res=>{
    //   console.log(res.data);
    // });
  },
  save_labo_details(state, data) {
    state.all_inputs['labo'] = data;

    // this.$axios.post('http://127.0.0.1:8000/api/medi/save_labo_detail' , data).then(res=>{
    //   console.log(res.data);
    // });
  },
  async get_all_personal_inputs(state, res) { state.personal_inputs = res; },
  async get_all_medical_inputs(state, res) { state.medical_inputs = res; },
  async get_all_labo_inputs(state, res) { state.labo_inputs = res; },
  add_input(state, add_input_list) {
    state.personal_inputs = [{ 'name': add_input_list[0], 'width': add_input_list[1], 'type': add_input_list[2] }, ...state.personal_inputs];

    this.$axios.post('api/medi/add_personal_input',
      { 'title': add_input_list[0], 'width': add_input_list[1], 'type': add_input_list[2] })
      .then(res => {
        console.log(res.data);
      });
  },
  getting_products(state, list) {
    state.all_products = list
  },
  add_product(state, data) {
    state.all_products = [data, ...state.all_products];
    return this.$axios
      .post("http://127.0.0.1:8000/api/test", data)
      .catch((error) => {
        console.log(error);
      });
  },
  edit_product(state, data) {
    state.all_products.forEach(e => {
      if (e.id == data.id) {
        e.name = data.name;
        e.detail = data.detail;
      }
    });
    this.$axios
      .put("api/test", data)
      .catch((e) => {
        // alert(e);
      });
  },
  delete_product(state, id) {
    let obj = state.all_products.find(o => o.id == id);
    state.all_products.splice(state.all_products.indexOf(obj), 1);
    this.$axios.post('api/test/delete', {
      id: id
    }).then(res => {
      console.log(res);
    });

  }

}
export const actions = {
  manipulate_data() {

  },
}