let app = new Vue({
  el: '#app',
  data:{
    albums: []
  },
  mounted(){
    axios
      .get('server.php')
      .then( response => {
        this.album = response.data;
        console.log(this.album);
      });
  }
});
