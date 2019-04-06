<!-- The Modal -->
<form method="POST" v-on:submit.prevent="viewBlog(fillBlog.id)">
    <div class="modal fade" id="view">
        <div class="modal-dialog">
            <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Ver Entrada</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <label for="title">Titulo</label>
                <input type="text" name="title" class="form-control" v-model="fillBlog.title">
                <label for="body">Contenido</label>
                <textarea name="body" cols="30" rows="10" class="form-control" v-model="fillBlog.body"></textarea>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</form>