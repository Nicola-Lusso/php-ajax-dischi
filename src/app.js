let app = new Vue({
  el: '#app',
  data:{
    album: []
  },
  mounted(){
    axios
      .get('db.php')
      .then( response => {
        this.$albums = response.data;
        console.log(this.albums);
      });
  }
});
