// Inizializzazione Vue Js:
const app = Vue.createApp({

  data() {

    return {
      discs: [],
      selectedDisc: null
    };

  },

  mounted() {
    this.fetchDiscs();
  },

  methods: {

    fetchDiscs() {
      axios.get('api/get_discs.php')

      .then(response => {
        this.discs = response.data;
      })

      .catch(error => {
        console.error('Error fetching discs: ', error);
      });

    },

    showDiscDetails(disc) {
      this.selectedDisc = disc.description;
    }

  }
  
});

// Mostra l'applicazione nella pagina HTML
app.mount('#app');

  