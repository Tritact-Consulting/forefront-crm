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
                                            <select name="iso_standards" id="iso_standards" class="form-control">
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
</div>
<?php include 'include/footer.php'; ?>