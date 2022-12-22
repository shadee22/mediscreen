

<template>
  <main
    class="
      h-20
      grid grid-cols-7
      bg-blue-300
      text-center
      antialiased
      font-normal

    "
  >
    <!-- <div class="col-span-2 center">
      <Nuxt-link to="/">
        <div
          class="
            hover:border hover:bg-gray-100
            bg-white
            text-blue-800
            hover:text-blue-800
            flex

            rounded-2xl
            transition
            px-5
            py-2.5
          "
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="current"
            class="w-6 mr-4 text-white hover:text-white h-6"
          >
            <path
              fill-rule="evenodd"
              d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z"
              clip-rule="evenodd"
            />
            <path
              d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z"
            />
          </svg>
          <p>New Report</p>
        </div>
      </Nuxt-link>
    </div> -->
    <div class="col-span-5 flex items-center px-16 text-left">
      <NuxtLink to="/">
        <p class="font-bold text-3xl uppercase">Medical Report</p>
      </NuxtLink>
    </div>
    <div class="col-span-2 center">
      <div
        @click.prevent="logout"
        class="
          hover:bg-gray-100
          rounded-2xl
          transition
          px-5
          py-2.5
          flex
          cursor-pointer
        "
      >
        <!-- <div>{{ capitalize(this.$auth.user.data.name) }}</div> -->
        <div>Logout</div>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="w-6 h-6 ml-2"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9"
          />
        </svg>
      </div>
    </div>
  </main>
</template>

<script>
import Swal from "sweetalert2";
export default {
  data() {
    return {
      name: this.$auth.user,
    };
  },
  mounted() {},
  methods: {
    capitalize(value) {
      return value.replace(/(?:^|\s|-)\S/g, (x) => x.toUpperCase());
    },
    async logout() {
      Swal.fire({
        title: `Logout`,
        text: "Do you want to quit the application?",
        confirmButtonText: "Logout",
        confirmButtonColor: "red",
        showCancelButton: true,
        cancelButtonText: "Cancel",
      }).then((res) => {
        if (res.isConfirmed) {
          this.$auth.logout();
        }
      });
    },
  },
};
</script>
