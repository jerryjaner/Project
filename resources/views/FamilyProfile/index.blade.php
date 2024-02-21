@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Household/Family Profile</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Family Table -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header w-100 d-flex justify-content-between align-items-center">
                            <h4 class="text-dark w-100 pt-2">Manage Family</h4>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductModal">
                                Add
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped">
                                    <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">First</th>
                                          <th scope="col">Last</th>
                                          <th scope="col">Handle</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">2</th>
                                          <td>Jacob</td>
                                          <td>Thornton</td>
                                          <td>@fat</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">3</th>
                                          <td>Larry</td>
                                          <td>the Bird</td>
                                          <td>@twitter</td>
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

    <!-- /.Add Family -->
    <div class="modal fade bd-example-modal-lg" id="addProductModal" tabindex="-1" aria-labelledby="exampleModalLabel"data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-xl">
            <div class="modal-content modal-content-scrollable">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">New Family Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#" method="POST" id="add_product_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4 bg-light">
                <div class="row">
                    <div class="col-lg">
                    <label for="p_name">Product Name</label>
                    <input type="text" name="p_name" class="form-control" placeholder="Product Name" required>
                    </div>
                    <div class="col-lg">
                    <label for="p_unit">Unit</label>
                    <input type="text" name="p_unit" class="form-control" placeholder="Unit" required>
                    </div>
                </div>
                <div class="my-2">
                    <label for="p_price">Price</label>
                    <input type="number" name="p_price" class="form-control" placeholder="Price" required>
                </div>
                <div class="my-2">
                    <label for="p_xdate">Expiry Date</label>
                    <input type="date" name="p_xdate" class="form-control" placeholder="" required>
                </div>
                <div class="my-2">
                    <label for="p_available">Available</label>
                    <input type="number" name="p_available" class="form-control" placeholder="Available" required>
                </div>
                <div class="my-2">
                    <label for="p_image">Select Image</label>
                    <input type="file" name="p_image" class="form-control" required>
                </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="add_product_button" class="btn btn-primary">Add Product</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script> --}}
    {{-- <script>
        $('#example').DataTable({
            "paging": true, // Enable pagination
            "searching": true, // Enable search bar
            "ordering": true, // Disable sorting
            "responsive": true,
            responsive: true,
            columnDefs: [
                {
                    targets: 2, // Target the third column (index 2)
                    responsivePriority: 1, // Set a priority for responsiveness
                    className: 'none' // Hide the column in smaller screens
                }
            ]
            });
    </script> --}}
@endsection
