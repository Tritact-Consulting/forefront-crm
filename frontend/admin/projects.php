<?php include 'include/header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Audit Cycle</h4>
                </div>
                <div class="col-6 text-end">
                    <a href="projects-list.php" class="btn btn-primary">Audit Cycle List</a>
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
                                                <option value="">Select Client</option>
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
                                                <option value="">ISO Standards 1</option>
                                                <option value="">ISO Standards 2</option>
                                                <option value="">ISO Standards 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">EA Codes</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Scope of Certification </label>
                                            <input type="text" class="form-control">
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
                        <h4>Audit Cycle List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Client</th>
                                        <th>ISO Standards</th>
                                        <th>Audit</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>ISO 9001</td>
                                        <td>
                                            <a href="add-audit.php" class="btn btn-primary btn-sm">Add Audit</a>
                                        </td>
                                        <td>
                                            <ul class="action align-items-center">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>ISO 2015</td>
                                        <td>
                                            <a href="add-audit.php" class="btn btn-primary btn-sm">Add Audit</a>
                                        </td>
                                        <td>
                                            <ul class="action align-items-center">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>ISO 14001</td>
                                        <td>
                                            <a href="add-audit.php" class="btn btn-primary btn-sm">Add Audit</a>
                                        </td>
                                        <td>
                                            <ul class="action align-items-center">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>ISO/IEC 27001</td>
                                        <td>
                                            <a href="add-audit.php" class="btn btn-primary btn-sm">Add Audit</a>
                                        </td>
                                        <td>
                                            <ul class="action align-items-center">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sonya Frost</td>
                                        <td>ISO/IEC 2022</td>
                                        <td>
                                            <a href="add-audit.php" class="btn btn-primary btn-sm">Add Audit</a>
                                        </td>
                                        <td>
                                            <ul class="action align-items-center">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jena Gaines</td>
                                        <td>ISO 50001</td>
                                        <td>
                                            <a href="add-audit.php" class="btn btn-primary btn-sm">Add Audit</a>
                                        </td>
                                        <td>
                                            <ul class="action align-items-center">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quinn Flynn</td>
                                        <td>ISO/IEC 2022</td>
                                        <td>
                                            <a href="add-audit.php" class="btn btn-primary btn-sm">Add Audit</a>
                                        </td>
                                        <td>
                                            <ul class="action align-items-center">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Charde Marshall</td>
                                        <td>ISO 14001</td>
                                        <td>
                                            <a href="add-audit.php" class="btn btn-primary btn-sm">Add Audit</a>
                                        </td>
                                        <td>
                                            <ul class="action align-items-center">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>ISO 2015</td>
                                        <td>
                                            <a href="add-audit.php" class="btn btn-primary btn-sm">Add Audit</a>
                                        </td>
                                        <td>
                                            <ul class="action align-items-center">
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
<div class="modal fade" id="exampleModalgetbootstrap" tabindex="-1" role="dialog" aria-labelledby="exampleModalgetbootstrap" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-toggle-wrapper social-profile text-start dark-sign-up">
                <h3 class="modal-header justify-content-center border-0">Add Audit</h3>
                <div class="modal-body">
                    <form class="row g-3 needs-validation" novalidate="">
                        <div class="col-md-12">
                            <label class="form-label" for="audit_type">Audit Type</label>
                            <select name="audit_type" id="audit_type" class="form-control">
                                <option value="">Stage 1</option>
                                <option value="">Stage 2</option>
                                <option value="">Surveillance 1</option>
                                <option value="">Surveillance 2</option>
                                <option value="">Recertification</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="date">Date</label>
                            <input class="form-control" id="date" type="date" required="">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="auditor_name">Auditor</label>
                            <select name="auditor_name" id="auditor_name" class="form-control">
                                <option value="">Auditor 1</option>
                                <option value="">Auditor 2</option>
                                <option value="">Auditor 3</option>
                                <option value="">Auditor 4</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="start_date">Audit Start Date</label>
                            <input class="form-control" id="start_date" type="date" required="">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="end_date">Audit End Date</label>
                            <input class="form-control" id="end_date" type="date" required="">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="audit_month">Audit Due Month</label>
                            <input type="month" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="report_date">Report Due Date</label>
                            <input class="form-control" id="report_date" type="date" required="">
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>