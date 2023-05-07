<?= $this->extend('v2\product\base') ?>
<?= $this->section('content') ?>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                    
                                <tbody>
                                <?php $no = 0; ?>
                                <?php foreach ($products as $item): ?>
                                <tr>
                                    <td><?= $no += 1; ?></td>
                                    <td><?= $item['name'] ?></td>
                                    <td><?= $item['stock'] ?></td>
                                    <td><?= $item['price'] ?></td>
                                    <td><?= $item['category'] ?></td>
                                    <td>
                                        <div class="btn-group " role="group " aria-label="Basic example ">
                                            <form action="/product/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">
                                                <a href="/product/<?= $item['id'] ?>/edit" class="btn btn-info text-white "><i class='bx bx-pencil'></i></a>
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <button class="btn btn-danger text-white" type="submit">
                                                    <i class='bx bx-trash'></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>