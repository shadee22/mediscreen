

<template>
  <main class="min-h-screen antialiased pb-32">
    <Navbar />

    <div class="grid grid-cols-12">
      <SideBar />
      <div class="col-span-10 px-4">
        <!-- Documents -->
        <p class="font-bold text-3xl py-2">Documents</p>
        <p class="text-xl font-semibold text-gray-400 mb-4">
          Click Any documents to view it
        </p>
        <ul class="flex flex-wrap text-sm gap-4">
          <a
            v-for="(doc, i) in documents"
            :key="i"
            class="
              bg-blue-200
              w-52
              hover:bg-gray-800 hover:text-white
              transition-all
              h-36
              text-xl
              font-bold
              text-black
              py-6
              cursor-pointer
              px-4
              rounded-xl
            "
            href="https://docs.google.com/document/d/1y_zMUilay01qyNUGN3luoMKzy2VAJxjs/edit"
            target="_blank"
          >
            {{ doc.name }}
          </a>
        </ul>
      </div>
    </div>
  </main>
</template>

<script >
export default {
  data() {
    return {
      documents: [
        {
          name: "BETA HCG",
          link: "https://docs.google.com/document/d/1sHpJ8EagSW5p2caSkU93aagJ6XY_1W2p/edit?rtpof=true",
        },
        {
          name: "BLOOD GROUPING",
          link: "https://docs.google.com/document/d/1LHHf9fPidCHVUgMHSt_pDUeg96VQ0Hsw/edit?rtpof=true",
        },
        {
          name: "FASTING BLOOD SUGER",
          link: "https://docs.google.com/document/d/1t2iNtZ9e4779cNAg3yXbgUvq4iWO7dpL/edit",
        },
        {
          name: "FULL BLOOD COUNT",
          link: "https://docs.google.com/document/d/1nHZr7JeB09LT2CFFs9KBp1cOREei1MBz/edit",
        },
        {
          name: "HEPATITIS A",
          link: "https://docs.google.com/document/d/1nUYMdYpOwc33eJinUy6blUxYR201AsV-/edit",
        },
        {
          name: "HEPATITIS B",
          link: "https://docs.google.com/document/d/1ECIKfqg22kMfJUitk5AeR7ReO06fK8sK/edit",
        },
        {
          name: "HIV Antigen and Antibodies",
          link: "https://docs.google.com/document/d/1CqEGR4vKYkAn03kcjqF1UF7-CF4rZ6Re/edit",
        },
        {
          name: "LIPID PROFILE",
          link: "https://docs.google.com/document/d/1KdwP5d8IqJaP1TJrlswzryrsKT7ww91f/edit",
        },
        {
          name: "LIVER PROFILE",
          link: "https://docs.google.com/document/d/1oLYg8mehJRRgWuZW6gUVW_SMRplAoNH9/edit",
        },
        {
          name: "RANDOM PLASMA GLUCOSE",
          link: "https://docs.google.com/document/d/1p3pvVKd2R5pD0YkzMOeKFUC0Q858iE_N/edit",
        },
        {
          name: "SERUM CHOLESTEROL",
          link: "https://docs.google.com/document/d/1dnTBirIhm4MJ2wesZlhGCitG_LYVn1E-/edit",
        },
        {
          name: "TPHA",
          link: "https://docs.google.com/document/d/1KNRZQkWQU0SdXGrpQ22FdZenG6XsUab6/edit",
        },
        {
          name: "Urine HCG",
          link: "https://docs.google.com/document/d/1rnZm5WpwZQgIB4ssgMKyYxFBjTfGgC65/edit",
        },
        {
          name: "Urine Suger",
          link: "https://docs.google.com/document/d/1G4SixXNrUe8VBGqMxUMSg5Qx0iiUoU8x/edit",
        },
        {
          name: "VDRL",
          link: "https://docs.google.com/document/d/1u_uH5ik9WOabDYdaGUtcTKBlzgOg18ON/edit",
        },
      ],
    };
  },
  methods: {
    hello() {},
  },
  mounted() {
    this.$store.commit("reset_details");
  },
};
</script>
