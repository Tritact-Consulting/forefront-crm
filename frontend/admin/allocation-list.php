<?php include 'include/header.php'; ?>
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12">
                    <h4>Allocation List</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0 card-no-border d-flex justify-content-between">
                        <h4>Allocation List</h4>
                        <div class="status-wrapper">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label mb-0" for="inlineCheckbox1">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label mb-0" for="inlineCheckbox2">Withdrawn</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label mb-0" for="inlineCheckbox3">Suspended</label>
                            </div>
                            <div class="form-check form-check-inline mx-0">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                <label class="form-check-label mb-0" for="inlineCheckbox4">Expired</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Client</th>
                                        <th>Certificate</th>
                                        <th>ISO Standards</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Client 01</td>
                                        <td>Certificate 01</td>
                                        <td>ISO 14001</td>
                                        <td>21-04-22</td>
                                        <td>
                                            <div class="txt-primary d-flex align-items-center"><span class="pending bg-primary"></span><span class="f-w-500 f-13 txt-primary">Active</span></div>
                                        </td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Client 02</td>
                                        <td>Certificate 02</td>
                                        <td>ISO 45001</td>
                                        <td>04-01-23</td>
                                        <td>
                                            <div class="txt-warning d-flex align-items-center"><span class="pending bg-warning"></span><span class="f-w-500 f-13 txt-warning">Withdrawn</span></div>
                                        </td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Client 03</td>
                                        <td>Certificate 03</td>
                                        <td>ISO 50001</td>
                                        <td>12-02-22</td>
                                        <td>
                                            <div class="txt-warning d-flex align-items-center"><span class="pending bg-info"></span><span class="f-w-500 f-13 txt-info">Suspended</span></div>
                                        </td>
                                        <td>
                                            <ul class="action">
                                                <li class="edit"> <a href="#"><i class="fa fa-edit"></i></a></li>
                                                <li class="delete"><a href="#"><i class="fa fa-trash-o"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Client 04</td>
                                        <td>Certificate 04</td>
                                        <td>ISO 9001</td>
                                        <td>27-01-22</td>
                                        <td>
                                            <div class="txt-secondary d-flex align-items-center"><span class="pending bg-secondary"></span><span class="f-w-500 f-13 txt-secondary">Expired</span></div>
                                        </td>
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