new Vue({
    el: "#app",
    data:
    {
        albums: [],
    },
    mounted() {
        axios.get("api/album.php")
            .then(resp => {
                this.albums = resp.data.dati;
            })
    }


})