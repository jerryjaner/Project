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
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
    <!-- /.content -->

    {{-- Add Household --}}
    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel"data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centeredmodal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Add New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST" id="add_product_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg mb-3">
                            <label for="p_name">Lastname</label>
                            <input type="text" name="p_name" class="form-control" placeholder="Lastname" required>
                        </div>
                        <div class="col-lg mb-3">
                            <label for="p_unit">Firstname</label>
                            <input type="text" name="p_unit" class="form-control" placeholder="Firstname" required>
                        </div>
                        <div class="col-lg mb-3">
                            <label for="p_unit">Middlename</label>
                            <input type="text" name="p_unit" class="form-control" placeholder="Middlename">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg mb-3">
                            <label for="p_name">Address</label>
                            <input type="text" name="p_name" class="form-control" placeholder="Address" required>
                        </div>
                        <div class="col-lg mb-3">
                            <label for="p_unit">Birthdate</label>
                            <input type="date" name="p_unit" class="form-control" placeholder="Birthdate" required>
                        </div>
                        <div class="col-lg mb-3">
                            <label for="p_unit">Age</label>
                            <input type="number" name="p_unit" class="form-control" placeholder="Age">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg mb-3">
                            <label for="p_name">Civil Status</label>
                            <input type="text" name="p_name" class="form-control" placeholder="Civil Status" required>
                        </div>
                        <div class="col-lg mb-3">
                            <label for="p_unit">Monthly Income</label>
                            <input type="number" name="p_unit" class="form-control" placeholder="Monthly Income" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg mb-3">
                            <label for="p_name">Occupation</label>
                            <input type="text" name="p_name" class="form-control" placeholder="Occupation" required>
                        </div>
                        <div class="col-lg mb-3">
                            <label for="p_unit">Educational Level</label>
                            <input type="text" name="p_unit" class="form-control" placeholder="Educational Level" required>
                        </div>
                    </div>

                    {{-- Spouse info --}}
                    <div class="row">
                        <div class="col-lg mb-3">
                            <label for="p_name">Spouse name(Live in Partner)</label>
                            <input type="text" name="p_name" class="form-control" placeholder="Occupation" required>
                        </div>
                        <div class="col-lg mb-3">
                            <label for="p_unit">Age</label>
                            <input type="number" name="p_unit" class="form-control" placeholder="Age">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg mb-3">
                            <label for="p_unit">Educational Level</label>
                            <input type="text" name="p_unit" class="form-control" placeholder="Educational Level" required>
                        </div>
                        <div class="col-lg mb-3">
                            <label for="p_name">Occupation</label>
                            <input type="text" name="p_name" class="form-control" placeholder="Occupation" required>
                        </div>
                        <div class="col-lg mb-3">
                            <label for="p_unit">Monthly Income</label>
                            <input type="number" name="p_unit" class="form-control" placeholder="Monthly Income" required>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-lg mb-3">
                            <label for="p_name">No. of household member</label>
                            <input type="number" name="p_name" class="form-control" placeholder="No." required>
                        </div>
                        <div class="col-lg mb-3">
                            <label for="p_unit">No. of families included in household</label>
                            <input type="number" name="p_unit" class="form-control" placeholder="No.">
                        </div>
                    </div>


                    <div id="input-group-container" class="">
                        <!-- Initial input group -->
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Name">
                            <input type="number" class="form-control" placeholder="Age">
                            <select class="form-select" aria-label="Sex">
                                <option selected>Choose Sex</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Relationship">
                            <input type="text" class="form-control" placeholder="Educational">
                            <input type="text" class="form-control" placeholder="Occupation">
                            <button class="btn btn-outline-secondary" type="button" onclick="addInput()">Add</button>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md mb-3">
                          <div class="form-floating">
                            <label for="floatingInputGrid">Email address</label>
                            <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
                          </div>
                        </div>
                        <div class="col-md mb-3">
                          <div class="form-floating">
                            <label for="floatingInputGrid">Occupancy status(Owner/Renter)</label>
                            <input type="text" class="form-control mb-3" id="floatingInputGrid" placeholder="Select" value="mdo@example.com">
                            <label for="floatingInputGrid">Period of occupancy</label>
                            <input type="date" class="form-control mb-3" id="floatingInputGrid" placeholder="" value="mdo@example.com">
                            <label for="floatingInputGrid">Date of interview</label>
                            <input type="date" class="form-control mb-3" id="floatingInputGrid" placeholder="" value="mdo@example.com">
                            <label for="floatingInputGrid">Signature of interviewee</label>
                            <input type="text" class="form-control mb-3" id="floatingInputGrid" placeholder="Signature" value="mdo@example.com">
                          </div>
                        </div>
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
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_product_button" class="btn btn-primary">Add Product</button>
                </div>
                </form>
            </div>
        </div>
    </div>



<script>
    function addInput() {
        // Create a new input group
        var newInputGroup = document.createElement('div');
        newInputGroup.className = 'input-group mb-3';

        // Create new input fields
        var newNameInput = createInput('text', 'form-control', 'Name');
        var newAgeInput = createInput('number', 'form-control', 'Age');
        var newSexSelect = createSelect('form-select', 'Sex', ['Choose Sex', 'Male', 'Female']);
        var newRelationshipInput = createInput('text', 'form-control', 'Relationship');
        var newEducationalInput = createInput('text', 'form-control', 'Educational');
        var newOccupationInput = createInput('text', 'form-control', 'Occupation');

        // Create a new "Remove" button
        var removeButton = document.createElement('button');
        removeButton.className = 'btn btn-outline-secondary';
        removeButton.type = 'button';
        removeButton.innerText = 'Remove';
        removeButton.addEventListener('click', function() {
            // Remove the parent input group when the "Remove" button is clicked
            newInputGroup.remove();
        });

        // Append the new inputs and button to the input group
        newInputGroup.appendChild(newNameInput);
        newInputGroup.appendChild(newAgeInput);
        newInputGroup.appendChild(newSexSelect);
        newInputGroup.appendChild(newRelationshipInput);
        newInputGroup.appendChild(newEducationalInput);
        newInputGroup.appendChild(newOccupationInput);
        newInputGroup.appendChild(removeButton);

        // Append the new input group to the container
        document.getElementById('input-group-container').appendChild(newInputGroup);
    }

    function createInput(type, className, placeholder) {
        var newInput = document.createElement('input');
        newInput.type = type;
        newInput.className = className;
        newInput.placeholder = placeholder;
        return newInput;
    }

    function createSelect(className, label, options) {
        var newSelect = document.createElement('select');
        newSelect.className = className;
        newSelect.setAttribute('aria-label', label);

        options.forEach(function(optionText) {
            var option = document.createElement('option');
            option.text = option.value = optionText;
            newSelect.add(option);
        });

        return newSelect;
    }
</script>
@endsection
