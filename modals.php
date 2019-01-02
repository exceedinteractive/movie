<!-- Add New -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Movie</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                <form method="POST" action="action.php">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="control-label" style="position:relative; top:7px;">Movie Title:</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="title" value="">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="control-label" style="position:relative; top:7px;">Format:</label>
                        </div>
                        <div class="col-lg-10">
                            <select name="format">
                                <option value="VHS">VHS</option>
                                <option value="DVD">DVD</option>
                                <option value="Streaming">Streaming</option>
                            </select>
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="control-label" style="position:relative; top:7px;">Length:</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="length" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="control-label" style="position:relative; top:7px;">Release Year:</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="released" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="control-label" style="position:relative; top:7px;">Rating:</label>
                        </div>
                        <div class="col-lg-10">
                        <select name="rating">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5</option>
                            </select>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" name="add" class="btn btn-primary">Save</button>
            </form>
            </div>
    
        </div>
    </div>
</div>
<!-- /.modal -->

<!-- Delete -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Movie</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid text-center">
                <form method="POST" action="action.php">
                    <h5>Are sure you want to delete</h5>
                    <h2>Movie: <b></b></h2>
                    <input type="hidden" value="" name="id">
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" name="delete" class="btn btn-warning">Yes</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- /.modal -->
    
<!-- Edit -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                <form method="POST" action="action.php">
                <div class="row">
                        <div class="col-lg-2">
                            <label class="control-label" style="position:relative; top:7px;">Movie Title:</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="title" value="">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="control-label" style="position:relative; top:7px;">Format:</label>
                        </div>
                        <div class="col-lg-10">
                            <select name="format">
                                <option value="VHS">VHS</option>
                                <option value="DVD">DVD</option>
                                <option value="Streaming">Streaming</option>
                            </select>
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="control-label" style="position:relative; top:7px;">Length:</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="length" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="control-label" style="position:relative; top:7px;">Release Year:</label>
                        </div>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="released" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="control-label" style="position:relative; top:7px;">Rating:</label>
                        </div>
                        <div class="col-lg-10">
                        <select name="rating">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="3">4</option>
                                <option value="3">5</option>
                            </select>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" name="edit" class="btn btn-warning">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- /.modal -->