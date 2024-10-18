<?php include 'include/header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Add Audit</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form theme-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Client Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>ISO Standards</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Audit Type</label>
                                        <select name="audit_type" id="audit_type" class="form-control">
                                            <option value="">Stage 1</option>
                                            <option value="">Stage 2</option>
                                            <option value="">Surveillance 1</option>
                                            <option value="">Surveillance 2</option>
                                            <option value="">Recertification</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Date</label>
                                        <input class="datepicker-here form-control" type="text" data-language="en">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Auditor</label>
                                        <select name="auditor_name" id="auditor_name" class="form-control">
                                            <option value="">Auditor 1</option>
                                            <option value="">Auditor 2</option>
                                            <option value="">Auditor 3</option>
                                            <option value="">Auditor 4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Audit Start Date</label>
                                        <input class="datepicker-here form-control" type="text" data-language="en">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Audit End Date</label>
                                        <input class="datepicker-here form-control" type="text" data-language="en">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Audit Due Month</label>
                                        <input class="form-control" type="month" data-language="en">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label>Report Due Date</label>
                                        <input class="datepicker-here form-control" type="text" data-language="en">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label>Upload project file</label>
                                        <form class="dropzone" id="singleFileUpload" action="/upload.php">
                                            <div class="dz-message needsclick">
                                                <i class="icon-cloud-up"></i>
                                                <h6 class="f-w-600">Drop files here or click to upload.</h6>
                                                <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="text-end"><a class="btn btn-success me-3" href="#">Add</a><a class="btn btn-danger" href="#">Cancel</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>