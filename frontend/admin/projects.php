<?php include 'include/header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Projects</h4>
                </div>
                <div class="col-6 text-end">
                    <a href="projects-list.php" class="btn btn-primary">Projects List</a>
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
                            <h4 class="card-title mb-0">Add Project</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Client Name</label>
                                            <select name="client_name" id="client_name" class="form-control">
                                                <option value="">Select Actual Client</option>
                                                <option value="">Actual Client 1</option>
                                                <option value="">Actual Client 2</option>
                                                <option value="">Actual Client 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">ISO Standards</label>
                                            <select name="iso_standards" id="iso_standards" class="form-control select2" multiple>
                                                <option value="">Select ISO Standards</option>
                                                <option value="">ISO Standards 1</option>
                                                <option value="">ISO Standards 2</option>
                                                <option value="">ISO Standards 3</option>
                                            </select>
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
                        <h4>Projects List Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Client</th>
                                        <th>ISO Standards</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>ISO 9001</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>ISO 2015</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>ISO 14001</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>ISO/IEC 27001</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>ISO/IEC 2022</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>ISO 50001</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>ISO/IEC 2022</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>ISO 14001</td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>ISO 2015</td>
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