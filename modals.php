<!-- Add New -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <form method="POST" action="action.php" onsubmit="return validationEvent(this);">
            <div class="modal-header">
                <h4 class="modal-title">Add Movie</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                            <label class="control-label" style="position:relative; top:7px;">Movie Title:</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" pattern="[a-zA-Z0-9\s]+" class="form-control" name="title" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label class="control-label" style="position:relative; top:7px;">Format:</label>
                        </div>
                        <div class="col-lg-9">
                            <select class="custom-select" name="format">
                                <option value="VHS">VHS</option>
                                <option value="DVD">DVD</option>
                                <option value="Streaming">Streaming</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label class="control-label" style="position:relative; top:7px;">Length (mins):</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="number" class="form-control" name="length" value="" maxlength="3" min="0" max="500" placeholder="0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label class="control-label" style="position:relative; top:7px;">Release Year:</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="number" class="form-control" name="released" value="" maxlength="4" min="1800" max="2100">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label class="control-label" style="position:relative; top:7px;">Rating:</label>
                        </div>
                        <div class="col-lg-9">
                        <select class="custom-select" name="rating">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="3">5</option>
                            </select>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="submit" name="add" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- /.modal -->

<!-- Delete -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
        <form method="POST" action="action.php">
            <div class="modal-header">
                <h4 class="modal-title">Delete Movie</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                <div class="row">
                        <div class="col-lg-10">
                            <p>Are you sure you want to delete <span id="movie-name">this</span>?</p>
                            <input type="hidden" class="form-control" name="id" value="">
                        </div>
                    </div>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="submit" name="delete" class="btn btn-primary">Delete record</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- /.modal -->
    
<!-- Edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <form method="POST" action="action.php" onsubmit="return validationEvent(this);">
            <div class="modal-header">
                <h4 class="modal-title">Edit Movie</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <label class="control-label" style="position:relative; top:7px;">Movie Title:</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="text" pattern="[a-zA-Z0-9\s]+" class="form-control" name="title" value="">
                            <input type="hidden" name="id" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label class="control-label" style="position:relative; top:7px;">Format:</label>
                        </div>
                        <div class="col-lg-9">
                            <select class="custom-select" name="format">
                                <option value="VHS">VHS</option>
                                <option value="DVD">DVD</option>
                                <option value="Streaming">Streaming</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label class="control-label" style="position:relative; top:7px;">Length (mins):</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="number" class="form-control" name="length" value="" maxlength="3" min="0" max="500" placeholder="0">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label class="control-label" style="position:relative; top:7px;">Release Year:</label>
                        </div>
                        <div class="col-lg-9">
                            <input type="number" class="form-control" name="released" value="" maxlength="4" min="1800" max="2100">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label class="control-label" style="position:relative; top:7px;">Rating:</label>
                        </div>
                        <div class="col-lg-9">
                        <select class="custom-select" name="rating">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="3">5</option>
                            </select>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="submit" name="edit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- /.modal -->