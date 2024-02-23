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
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                                Add
                            </button>
                        </div>
                        <div class="card-body" id="show_all_data">


                                <h1 class="text-center text-secondary my-5">Loading...</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->

    {{-- Add Household Modal--}}
    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel"data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centeredmodal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalLabel">Add new Household/Family</h5>

                </div>
                <form action="{{ route('familyprofile.store') }}" method="POST" id="create_family_member" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body p-4 bg-light">
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <label for="p_name" class="form-label required">Profile No.</label>
                                <input type="text" name="p_name" class="form-control" placeholder="No.">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg mb-3">
                                <label for="">Lastname</label>
                                <input type="text" name="lastname"  class="form-control" placeholder="Lastname" >
                                <span class="text-danger error-text lastname_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Firstname</label>
                                <input type="text" name="firstname"  class="form-control" placeholder="firstname" >
                                <span class="text-danger error-text firstname_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Middlename</label>
                                <input type="text" name="middlename" class="form-control" placeholder="Middlename">
                                <span class="text-danger error-text middlename_error"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg mb-3">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Address">
                                <span class="text-danger error-text address_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Birthdate</label>
                                <input type="date" name="birthdate" class="form-control" placeholder="Birthdate">
                                <span class="text-danger error-text birthdate_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Age</label>
                                <input type="number" name="age" class="form-control" placeholder="Age">
                                <span class="text-danger error-text age_error"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg mb-3">

                                <label for="">Civil Status</label>
                                <input type="text" name="civil_status" class="form-control" placeholder="Civil Status" >
                                <span class="text-danger error-text civil_status_error"></span>

                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Monthly Income</label>
                                <input type="number" name="monthly_income" class="form-control" placeholder="Monthly Income" >
                                <span class="text-danger error-text monthly_income_error"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg mb-3">

                                <label for="">Occupation</label>
                                <input type="text" name="occupation" class="form-control" placeholder="Occupation" >
                                <span class="text-danger error-text occupation_error"></span>

                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Educational Level</label>
                                <input type="text" name="educational_level" class="form-control" placeholder="Educational Level" >
                                <span class="text-danger error-text educational_level_error"></span>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg mb-3">
                                <label for="">Spouse name(Live in Partner)</label>
                                <input type="text" name="spouse_name" class="form-control" placeholder="Occupation">
                                <span class="text-danger error-text spouse_name_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Age</label>
                                <input type="number" name="spouse_age" class="form-control" placeholder="Age">
                                <span class="text-danger error-text spouse_age_error"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg mb-3">
                                <label for="">Educational Level</label>
                                <input type="text" name="spouse_education_level" class="form-control" placeholder="Educational Level" >
                                <span class="text-danger error-text spouse_education_level_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Occupation</label>
                                <input type="text" name="spouse_occupation" class="form-control" placeholder="Occupation" >
                                <span class="text-danger error-text spouse_occupation_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Monthly Income</label>
                                <input type="number" name="spouse_monthly_income" class="form-control" placeholder="Monthly Income" >
                                <span class="text-danger error-text spouse_monthly_income_error"></span>
                            </div>
                        </div>


                        <div class="row mb-2">
                            <div class="col-lg mb-3">
                                <label for="">No. of household member</label>
                                <input type="number" name="no_households" class="form-control" placeholder="No." >
                                <span class="text-danger error-text no_households_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">No. of families included in household</label>
                                <input type="number" name="no_family" class="form-control" placeholder="No.">
                                <span class="text-danger error-text no_family_error"></span>
                            </div>
                        </div>


                        <div id="input-group-container" class="mb-3">
                            <div class="input-group mb-3">
                                <table class="table table-bordered" id="repeater">
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Relationship</th>
                                        <th>Education Level</th>
                                        <th>occupation</th>
                                        <th>Action</th>
                                    </tr>
                                    <tr>
                                        <td> <input type="text" class="form-control" placeholder="Name" name="inputs[0][name]"></td>
                                        <td> <input type="number" class="form-control" placeholder="Age" name="inputs[0][age]"></td>
                                        <td> <select class="form-select" aria-label="Sex" name="inputs[0][sex]">
                                                <option selected>Choose Sex</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </td>
                                        <td> <input type="text" class="form-control" placeholder="Relationship" name="inputs[0][relationship]"></td>
                                        <td> <input type="text" class="form-control" placeholder="Education level" name="inputs[0][educational_level]"></td>
                                        <td> <input type="text" class="form-control" placeholder="Occupation" name="inputs[0][occupation]"></td>
                                        <td><button type="button" name="add" id="add" class="btn btn-success" >Add More</button></td>
                                    </tr>

                                </table>
                            </div>
                        </div>

                        <div class="row g-2 p-0 m-0 gap-3">
                            <div class="col-md mb-3 p-0 m-0">
                                <div class="form-floating">
                                    <div class="col-lg p-0 m-0">
                                        <label for="floatingInputGrid">Picture of Family</label>
                                        <input type="file" class="form-control image-upload" id="imageInput" accept="image/*" name="image">
                                        <img id="previewImage" class="img-fluid mt-2" alt="Uploaded Image" style="display: none; width:300px; height: auto;">
                                        <span class="text-danger error-text image_error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md mb-3 p-0 m-0">
                                <div class="form-floating">
                                    <div class="col-lg mb-3 p-0 m-0">
                                        <label for="floatingInputGrid">Occupancy status(Owner/Renter)</label>
                                        <input type="text" class="form-control mb-3" id="floatingInputGrid" placeholder="" name="occupancy_status">
                                        <span class="mb-2 text-danger error-text occupancy_status_error"></span>
                                    </div>
                                    <div class="col-lg mb-3 p-0 m-0">
                                        <label for="floatingInputGrid">Period of occupancy</label>
                                        <input type="date" class="form-control mb-3" id="floatingInputGrid" placeholder="" name='occupancy_period'>
                                        <span class="mb-2 text-danger error-text occupancy_period_error"></span><br>
                                    </div>
                                    <div class="col-lg mb-3 p-0 m-0">
                                        <label for="floatingInputGrid">Date of interview</label>
                                        <input type="date" class="form-control mb-3" id="floatingInputGrid" placeholder="" name="interview_date">
                                        <span class="mb-2 text-danger error-text interview_date_error"></span>
                                    </div>
                                    <div class="col-lg mb-3 p-0 m-0" hidden>
                                        <label for="floatingInputGrid">Signature of interviewee</label>
                                        <input type="text" class="form-control mb-3" id="floatingInputGrid" placeholder="Signature">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="mb-3" hidden>
                            <label for="p_xdate">Name of interviewer and signature</label>
                            <input type="text" name="p_xdate" class="form-control" placeholder="Name/Signature">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal" id="close_modal">Close</button>
                        <button type="submit"  id="btnSubmit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- VIew --}}
    <div class="modal fade" id="view" tabindex="-1" aria-labelledby="view"data-bs-backdrop="static" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centeredmodal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="view">ViewHousehold/Family</h5>
                </div>
                <form action="" method="" id="view_data" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="family_profile_images" id="family_profile_images">
                    <div class="modal-body p-4 bg-light">
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <label for="p_name" class="form-label required">Profile No.</label>
                                <input type="text" name="p_name" id="profile_no" class="form-control" placeholder="No.">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg mb-3">
                                <label for="">Lastname</label>
                                <input type="text" name="lastname" id="lastname"  class="form-control" placeholder="Lastname" >
                                <span class="text-danger error-text lastname_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Firstname</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" placeholder="firstname" >
                                <span class="text-danger error-text firstname_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Middlename</label>
                                <input type="text" name="middlename" id="middlename" class="form-control" placeholder="Middlename">
                                <span class="text-danger error-text middlename_error"></span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg mb-3">
                                <label for="">Address</label>
                                <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                                <span class="text-danger error-text address_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Birthdate</label>
                                <input type="date" name="birthdate" id="birthdate" class="form-control" placeholder="Birthdate">
                                <span class="text-danger error-text birthdate_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Age</label>
                                <input type="number" name="age" id="age" class="form-control" placeholder="Age">
                                <span class="text-danger error-text age_error"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg mb-3">

                                <label for="">Civil Status</label>
                                <input type="text" name="civil_status" id="civil_status" class="form-control" placeholder="Civil Status" >
                                <span class="text-danger error-text civil_status_error"></span>

                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Monthly Income</label>
                                <input type="number" name="monthly_income" id="monthly_income" class="form-control" placeholder="Monthly Income" >
                                <span class="text-danger error-text monthly_income_error"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg mb-3">

                                <label for="">Occupation</label>
                                <input type="text" name="occupation" id="occupation" class="form-control" placeholder="Occupation" >
                                <span class="text-danger error-text occupation_error"></span>

                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Educational Level</label>
                                <input type="text" name="educational_level" id="educational_level" class="form-control" placeholder="Educational Level" >
                                <span class="text-danger error-text educational_level_error"></span>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg mb-3">
                                <label for="">Spouse name(Live in Partner)</label>
                                <input type="text" name="spouse_name" id="spouse_name" class="form-control" placeholder="Occupation">
                                <span class="text-danger error-text spouse_name_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Age</label>
                                <input type="number" name="spouse_age" id="spouse_age" class="form-control" placeholder="Age">
                                <span class="text-danger error-text spouse_age_error"></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg mb-3">
                                <label for="">Educational Level</label>
                                <input type="text" name="spouse_education_level" id="spouse_education_level" class="form-control" placeholder="Educational Level" >
                                <span class="text-danger error-text spouse_education_level_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Occupation</label>
                                <input type="text" name="spouse_occupation" id="spouse_occupation" class="form-control" placeholder="Occupation" >
                                <span class="text-danger error-text spouse_occupation_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">Monthly Income</label>
                                <input type="number" name="spouse_monthly_income" id="spouse_monthly_income" class="form-control" placeholder="Monthly Income" >
                                <span class="text-danger error-text spouse_monthly_income_error"></span>
                            </div>
                        </div>


                        <div class="row mb-2">
                            <div class="col-lg mb-3">
                                <label for="">No. of household member</label>
                                <input type="number" name="no_households" id="no_households" class="form-control" placeholder="No." >
                                <span class="text-danger error-text no_households_error"></span>
                            </div>
                            <div class="col-lg mb-3">
                                <label for="">No. of families included in household</label>
                                <input type="number" name="no_family" id="no_family" class="form-control" placeholder="No.">
                                <span class="text-danger error-text no_family_error"></span>
                            </div>
                        </div>


                        <div id="input-group-container" class="mb-3">
                            <div class="input-group mb-3">
                                <table class="table table-bordered" id="repeater">
                                    <tr>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Relationship</th>
                                        <th>Education Level</th>
                                        <th>Occupation</th>

                                    </tr>
                                    <tbody id="householdDetails">
                                        <!-- Table rows will be populated dynamically via AJAX -->
                                    </tbody>

                                </table>
                            </div>
                        </div>

                        <div class="row g-2 p-0 m-0 gap-3">
                            <div class="col-md mb-3 p-0 m-0">
                                <div class="form-floating">
                                    <div class="col-lg p-0 m-0">
                                        <label for="floatingInputGrid">Picture of Family</label>
                                        <div class="mt-2" id="preview_family_profile_image">
                                            {{-- Render the image --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md mb-3 p-0 m-0">
                                <div class="form-floating">
                                    <div class="col-lg mb-3 p-0 m-0">
                                        <label for="floatingInputGrid">Occupancy status(Owner/Renter)</label>
                                        <input type="text" class="form-control mb-3" id="occupancy_status" placeholder="" name="occupancy_status">
                                        <span class="mb-2 text-danger error-text occupancy_status_error"></span>
                                    </div>
                                    <div class="col-lg mb-3 p-0 m-0">
                                        <label for="floatingInputGrid">Period of Occupancy</label>
                                        <input type="date" class="form-control mb-3" id="occupancy_period" placeholder="" name='occupancy_period'>
                                        <span class="mb-2 text-danger error-text occupancy_period_error"></span><br>
                                    </div>
                                    <div class="col-lg mb-3 p-0 m-0">
                                        <label for="floatingInputGrid">Date of interview</label>
                                        <input type="date" class="form-control mb-3" id="interview_date" placeholder="" name="interview_date">
                                        <span class="mb-2 text-danger error-text interview_date_error"></span>
                                    </div>
                                    <div class="col-lg mb-3 p-0 m-0" hidden>
                                        <label for="floatingInputGrid">Signature of interviewee</label>
                                        <input type="text" class="form-control mb-3" id="signature_interviewee" placeholder="Signature">
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="mb-3"hidden>
                            <label for="p_xdate">Name of interviewer and signature</label>
                            <input type="text" name="p_xdate" class="form-control" placeholder="Name/Signature">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary float-end"  data-bs-dismiss="modal" id="close_modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>

{{-- AJAX --}}
<script>
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        fetch();

        // Add event listener for when the modal is about to be hidden
        $('#create').on('hide.bs.modal', function () {
            // Remove the modal backdrop
            $('.modal-backdrop').remove();
            // Reset modal styles
            $('#create').css('display', 'none');
            $('body').removeClass('modal-open');
        });

        // Add event listener for when the modal is shown
        $('#create').on('shown.bs.modal', function () {
            // Reset modal styles
            $('#create').css('display', 'block');
            $('body').addClass('modal-open');
        });


        $('#create_family_member').on('submit',function (e) {

            e.preventDefault();
            $("#btnSubmit").text('Submitting. . .');
            $('#btnSubmit').attr("disabled", true);

            var form = this; //FORM
            $.ajax({
                url:$(form).attr('action'),
                method:$(form).attr('method'),
                data: new FormData(form),
                processData: false,
                dataType: "json",
                contentType:false,
                beforeSend: function(){
                    //Before Sending The Form
                    $(form).find('span.error-text').text('')
                },
                success: function(response) {
                    if(response.code == 0)
                    {
                        $('#btnSubmit').removeAttr("disabled"); // removing disabled button
                        //The Error Message Will Append
                        $.each(response.error, function(prefix, val){
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                        $('#btnSubmit').text('Submit');

                    }
                    else
                    {
                        $(form)[0].reset(); // TO REST FORM
                        $('#btnSubmit').removeAttr("disabled"); // removing disabled button
                        $('#btnSubmit').text('Submit');   //change the text to normal
                        fetch();
                        // SWEETALERT
                        Swal.fire({

                            icon: 'success',
                            title: 'Created Successfully',
                            showConfirmButton: false,
                            timer: 1700,
                            timerProgressBar: true,

                        });

                        $('#create').modal('hide'); // Close the modal


                    }
                    $('#close_modal').on('click', function () {
                        $(form)[0].reset();
                        $(form).find('span.error-text').text('');
                    });

                }
            });
        });

        function fetch(){
            $.ajax({
                url: '{{ route('familyprofile.fetch') }}',
                method: 'GET',
                success: function(response) {
                   $("#show_all_data").html(response);
                    $('#sample').DataTable({
                        order: [0, 'desc']
                    });
                }
            });
        }

        $(document).on('click', '.view', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            $.ajax({
            url: '{{ route('familyprofile.view') }}',
            method: 'GET',
            data: {
                id: id,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                $("#id").val(response.id);
                $("#firstname").val(response.firstname);
                $("#lastname").val(response.lastname);
                $("#middlename").val(response.middlename);
                $("#address").val(response.address);
                $("#birthdate").val(response.birthdate);
                $("#age").val(response.age);
                $("#birthdate").val(response.birthdate);
                $("#civil_status").val(response.civil_status);
                $("#birthdate").val(response.birthdate);
                $("#monthly_income").val(response.monthly_income);
                $("#occupation").val(response.occupation);
                $("#educational_level").val(response.educational_level);
                $("#spouse_name").val(response.spouse_name);
                $("#spouse_age").val(response.spouse_age);
                $("#spouse_education_level").val(response.spouse_education_level);
                $("#spouse_occupation").val(response.spouse_occupation);
                $("#spouse_monthly_income").val(response.spouse_monthly_income);
                $("#no_households").val(response.no_households);
                $("#no_family").val(response.no_family);
                $("#preview_family_profile_image").html( `<img src="storage/family/profile/images/${response.image}" class="img-fluid img-thumbnail">`);
                 $("#family_profile_image").val(response.family_profile_image);

                $("#occupancy_status").val(response.occupancy_status);
                $("#occupancy_period").val(response.occupancy_period);
                $("#interview_date").val(response.interview_date);


                $("#householdDetails").empty();

                response.households.forEach(function(household) {
                    var householdHtml = '<tr>' +
                        '<td>' + household.name + '</td>' +
                        '<td>' + household.age + '</td>' +
                        '<td>' + household.sex + '</td>' +
                        '<td>' + household.relationship + '</td>' +
                        '<td>' + household.educational_level + '</td>' +
                        '<td>' + household.occupation + '</td>' +
                        '</tr>';

                    $("#householdDetails").append(householdHtml);
                });

            }
            });
        });

        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            let id = $(this).attr('id');
            let csrf = '{{ csrf_token() }}';
            var reader = new FileReader();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            })
            .then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{ route('familyprofile.delete') }}',
                        method: 'delete',
                        data: {
                            id: id,
                            _token: csrf
                        },
                        success: function(response) {
                            console.log(response);
                            fetch();
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted Successfully.',
                                showConfirmButton: false,
                                timer: 1700,
                            })
                        }
                    });
                }
            })
        });


    });
</script>

<script>
    var i = 0;
    $("#add").click(function(){
        ++i;

        $('#repeater').append(

            `<tr>
                <td>
                    <input type="text" name="inputs[`+i+`][name]" placeholder="Name" class="form-control"/>
                </td>
                <td> <input type="number" class="form-control" placeholder="Age" name="inputs[`+i+`][age]"></td>
                <td> <select class="form-select" aria-label="Sex" name="inputs[`+i+`][sex]">
                    <option selected>Choose Sex</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    </select>
                </td>
                <td> <input type="text" class="form-control" placeholder="Relationship" name="inputs[`+i+`][relationship]"></td>
                <td> <input type="text" class="form-control" placeholder="Education level" name="inputs[`+i+`][educational_level]"></td>
                <td> <input type="text" class="form-control" placeholder="Occupation" name="inputs[`+i+`][occupation]"></td>
                <td>
                    <button type="button" class="btn btn-danger remove-table-row">Remove</button>
                 </td>
             </tr>`);


    });

   $(document).on('click', '.remove-table-row', function(){
        $(this).parents('tr').remove();
   });
</script>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        const imageInput = document.getElementById('imageInput');
        const previewImage = document.getElementById('previewImage');

        imageInput.addEventListener('change', function () {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.addEventListener('load', function () {
                    previewImage.src = reader.result;
                    previewImage.style.display = 'block';
                });

                reader.readAsDataURL(file);
            } else {
                // If no file is selected, display a text message
                previewImage.src = ''; // Clear any existing image
                previewImage.alt = 'No Image Choosen';
                previewImage.style.display = 'block';
            }

        });
    });

</script>





@endsection

