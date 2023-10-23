<template>
  <div>

  </div>
</template>

<script>
export default {
  data() {
    return {
      data:[],
      reveal: false,
      loading: false,
      selection: 1,
      dialog: false,
      headers: [
        {
          text: "Dessert (100g serving)",
          align: "start",
          sortable: false,
          value: "name",
        },
        { text: "Calories", value: "calories" },
        { text: "Fat (g)", value: "fat" },
        { text: "Carbs (g)", value: "carbs" },
        { text: "Protein (g)", value: "protein" },
        { text: "Iron (%)", value: "iron" },
      ],
    };
  },
  methods: {
    reserve() {
      this.loading = true;
      setTimeout(() => (this.loading = false), 2000);
    },
    async fetchArticle() {
      const response = await axios.get(`/blog4-publication-enable/`)
      this.data = response.data
      console.log(this.data)
    },
  },
  created(){
    this.$router.push('/auth/login');
  },
};
</script>

<style>
.v-card--reveal {
  bottom: 0;
  opacity: 1 !important;
  position: absolute;
  width: 100%;
}
</style>