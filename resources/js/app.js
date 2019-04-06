new Vue({
    el: '#app',
    created: function(){
        this.getAllBlogs()
    },
    data: {
        blogs: [],
        title: "",
        body: "",
        errors: []
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
        },
        createBlog: function(){
            var urlCreate = "api/blog"
            axios.post(urlCreate, {
                title: this.title,
                body: this.body
            }).then(response => {
                this.getAllBlogs()
                this.title = ""
                this.body = ""
                this.errors = []
                $("#create").modal("hide")
                toastr.success("Agregado Correctamente")
            }).catch(error => {
                console.log(error.response.data)
                this.errors = error.response.data.errors
            })
        }
    }
})