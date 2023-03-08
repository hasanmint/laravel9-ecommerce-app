@extends('admin.layouts.master')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.css" integrity="sha512-3uVpgbpX33N/XhyD3eWlOgFVAraGn3AfpxywfOTEQeBDByJ/J7HkLvl4mJE1fvArGh4ye1EiPfSBnJo2fgfZmg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script type="text/javascript" src="http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<style type="text/css">
  .bootstrap-tagsinput .tag {
    background: #428bca;;
    border: 1px solid white;
    padding: 1 6px;
    padding-left: 2px;
    margin-right: 2px;
    color: white;
    border-radius: 4px;
  }
</style>

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Create</h4>

                    <div class="page-title-right">

                        <ol class="m-0 breadcrumb">
                            <li class="breadcrumb-item active">Create/product</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!--end col-->

        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body border-bottom">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 card-title flex-grow-1">Create product</h5>
                            <div class="flex-shrink-0">

                                <a href="{{ route('product.index') }}" class="btn btn-primary"><i
                                        class="align-middle bx bx-minus"></i>
                                    Back</a>
                                <a href="#!" class="btn btn-light"><i class="mdi mdi-refresh"></i></a>

                            </div>
                        </div>
                    </div>
                    <div class="mt-3 row"> </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-4 card-title"></h4>
                                    <form>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Product Name</label>
                                                    <input type="text" name="name" class="form-control"
                                                        id="formrow-email-input" placeholder="Enter Your Product Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-password-input" class="form-label">Product
                                                        Code</label>
                                                    <input type="text" name="code" class="form-control"
                                                        id="formrow-password-input" placeholder="Enter Your Product Code">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Category/Sub
                                                        Category </label>
                                                    <select id="formrow-inputState" class="form-select">
                                                        <option selected="">Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-password-input" class="form-label">Child
                                                        Category</label>
                                                    <select id="formrow-inputState" class="form-select">
                                                        <option selected="">Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Brand </label>
                                                    <select id="formrow-inputState" class="form-select">
                                                        <option selected="">Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-password-input" class="form-label">Pickup
                                                        Point</label>
                                                    <select id="formrow-inputState" class="form-select">
                                                        <option selected="">Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Unit </label>
                                                    <select id="formrow-inputState" class="form-select">
                                                        <option selected="">Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Tags</label>
                                                    <input type="email" class="form-control" id="formrow-email-input"
                                                        placeholder="Enter Your Email ID" data-role="tagsinput">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="formrow-inputCity" class="form-label">Purchase
                                                        Price</label>
                                                    <input type="text" class="form-control" id="formrow-inputCity"
                                                        placeholder="Enter Your Living City">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="formrow-inputCity" class="form-label">Selling
                                                        Price</label>
                                                    <input type="text" class="form-control" id="formrow-inputCity"
                                                        placeholder="Enter Your Living City">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label for="formrow-inputZip" class="form-label">Discount
                                                        Price</label>
                                                    <input type="text" class="form-control" id="formrow-inputZip"
                                                        placeholder="Enter Your Zip Code">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Warehouse </label>
                                                    <select id="formrow-inputState" class="form-select">
                                                        <option selected="">Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Stock</label>
                                                    <input type="email" class="form-control" id="formrow-email-input"
                                                        placeholder="Enter Your Email ID">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-email-input" class="form-label">Color</label>
                                                    <input type="text" name="name" class="form-control"
                                                        id="formrow-email-input" placeholder="Enter Your Product Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="formrow-password-input" class="form-label">Size</label>
                                                    <input type="text" name="code" class="form-control"
                                                        id="formrow-password-input" placeholder="Enter Your Product Code">
                                                </div>
                                            </div>
                                        </div>



                                        <div class="mb-3">
                                            <label for="productdesc">Product Description</label>
                                            <textarea class="form-control" id="productdesc" rows="5" placeholder="Product Description"></textarea>
                                        </div>


                                        <div>
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-4 card-title"></h4>

                                    <form>
                                        <div class="mb-3 row">
                                            <div class="form-group col-lg-12">
                                              <label for="exampleInputPassword1">Video Embed Code</label>
                                              <input class="form-control" name="video" value="{{ old('video') }}" placeholder="Only code after embed word">
                                              <small class="text-danger">Only code after embed word</small>
                                            </div>
                                          </div>

                                        <div class="mb-3 row">
                                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Main
                                                Thumbnail</label>
                                            <div class="col-sm-12">
                                                <input type="file" name="thumbnail" required="" accept="image/*"
                                                    class="dropify">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontal-email-input"
                                                class="col-sm-3 col-form-label">Add More Image</label>
                                            <div class="col-sm-12">
                                                    <div class="gap-3 hstack">
                                                        <input class="form-control me-auto" type="file" >
                                                        <button type="button" class="btn btn-success">+Add</button>
                                                    </div>
                                            </div>
                                        </div>

                                        <div class="">
                                            <table class="table table-bordered" id="dynamic_field">
                                            <div class="card-header">
                                              <h3 class="card-title">More Images (Click Add For More Image)</h3>
                                            </div>
                                              <tr>
                                                  <td><input type="file" accept="image/*" name="images[]" class="form-control name_list" /></td>
                                                  <td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>
                                              </tr>
                                            </table>
                                          </div>

                                        <div class="mb-3 row">
                                            <label for="horizontal-password-input"
                                                class="col-sm-3 col-form-label">Feature Product</label>
                                            <div class="col-sm-12">
                                                <div class="square-switch">
                                                    <input type="checkbox" id="square-switch3" switch="bool" checked="">
                                                    <label for="square-switch3" data-on-label="Yes" data-off-label="No"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontal-password-input"
                                                class="col-sm-3 col-form-label">Today Deal</label>
                                            <div class="col-sm-12">
                                                <div class="square-switch">
                                                    <input type="checkbox" id="square-switch3" switch="bool" checked="">
                                                    <label for="square-switch3" data-on-label="Yes" data-off-label="No"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="horizontal-password-input"
                                                class="col-sm-3 col-form-label">Status</label>
                                            <div class="col-sm-12">
                                                <div class="square-switch">
                                                    <input type="checkbox" id="square-switch3" switch="bool" checked="">
                                                    <label for="square-switch3" data-on-label="Yes" data-off-label="No"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                </div>
                <!--end card-->
            </div>
            <!--end col-->

        </div>
        <!--end row-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
        <script src="{{ asset('public/backend') }}/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>


        <script type="text/javascript">
            $('.dropify').dropify(); //dropify image
            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });

            //ajax request send for collect childcategory
            //  $("#subcategory_id").change(function(){
            //   var id = $(this).val();
            //   $.ajax({
            //        url: "{{ url('/get-child-category/') }}/"+id,
            //        type: 'get',
            //        success: function(data) {
            //             $('select[name="childcategory_id"]').empty();
            //                $.each(data, function(key,data){
            //                   $('select[name="childcategory_id"]').append('<option value="'+ data.id +'">'+ data.childcategory_name +'</option>');
            //             });
            //        }
            //     });
            //  });




            // $(document).ready(function(){
            //    var postURL = "<?php echo url('addmore'); ?>";
            //    var i=1;


            //    $('#add').click(function(){
            //         i++;
            //         $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="file" accept="image/*" name="images[]" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
            //    });

            //    $(document).on('click', '.btn_remove', function(){
            //         var button_id = $(this).attr("id");
            //         $('#row'+button_id+'').remove();
            //    });
            //  });
        </script>
    @endsection
