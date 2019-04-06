new Vue({
    el: '#app',
    created: function(){
        this.getAllBlogs()
    },
    data: {
        blogs: []
    },
    methods: {
        getAllBlogs: function(){
            var urlBlogs = "api/blog"
            axios.get(urlBlogs).then(response => {
                this.blogs = response.data
            })
        },
        deleteBlog: function(blogs){
            var urlDelete =  "api/blog/" + blogs.id
            axios.delete(urlDelete).then(response => {
                this.getAllBlogs()
                toastr.success("Eliminado Correctamente")
            })
        }
    }
})