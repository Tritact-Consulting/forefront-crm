<?php include 'include/header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h4>ISO Standards</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Add ISO Standards</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input class="form-control">
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="form-footer">
                                    <button class="btn btn-primary btn-block">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border">
                        <h4>ISO Standards List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ISO 9001</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ISO 14001</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ISO 45001</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ISO/IEC 27001</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>ISO 50001</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>