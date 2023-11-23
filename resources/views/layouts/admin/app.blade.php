<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="/backend/assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="/backend/assets/vendor/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/backend/assets/vendor/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/backend/assets/vendor/css/daterangepicker.css">
    <link rel="stylesheet" href="/backend/assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="/backend/assets/css/style.css">
    <link rel="stylesheet" id="primaryColor" href="/backend/assets/css/blue-color.css">
    <link rel="stylesheet" href="/backend/assets/vendor/css/material-icon.css">
    <link rel="stylesheet" href="/backend/assets/vendor/css/bootstrap-material-datetimepicker.css">
    <link rel="stylesheet" href="/backend/assets/vendor/css/jquery.uploader.css">
    <link rel="stylesheet" href="/backend/assets/vendor/css/select2.min.css">
    <link rel="stylesheet" href="/backend/assets/vendor/css/selectize.css">
    <link rel="stylesheet" href="/backend/assets/vendor/css/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="/backend/assets/css/amsify.suggestags.css">
    <link rel="stylesheet" id="rtlStyle" href="#">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Amsify Plugin -->
    <script type="text/javascript" src="/backend/assets/js/jquery.amsify.suggestags.js"></script>

    <script src="/assets/js/dselect.js"></script>

</head>
<style>
    input[type="file"] {
        display: none;
    }

    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
        text-align: center;
        width: 150px;
        min-height: 150px;
    }

    .uploa-image-preview {
        width: 150px;
        height: 150px;
        object-fit: contain;
        object-position: center;
    }

    .myhidden {
        display: none;
    }

    .modal-backdrop {
        /* bug fix - no overlay */
        display: none;
    }
</style>
@yield('css')

<body class="body-padding body-p-top light-theme">
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    @include('layouts.admin.header')
    @include('layouts.admin.rightside')
    @include('layouts.admin.sidebar')
    <div class="main-content">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success !</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error !</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @yield('content')
        @include('layouts.admin.footer')
        <!-- edit task modal -->
        <div class="modal fade" id="editTaskModal" tabindex="-1" aria-labelledby="editTaskModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="editTaskModalLabel">Edit Task</h2>
                        <button type="button" class="btn btn-sm btn-icon btn-outline-primary" data-bs-dismiss="modal"
                            aria-label="Close"><i class="fa-light fa-times"></i></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="editTaskName" class="form-label">Name</label>
                                <input type="text" id="editTaskName" class="form-control form-control-sm"
                                    placeholder="Task Name" value="Web Design & Development">
                            </div>
                            <div class="col-12">
                                <label for="editTaskAttchment" class="form-label">Attach File</label>
                                <input type="file" id="editTaskAttchment" class="form-control form-control-sm"
                                    multiple>
                            </div>
                            <div class="col-sm-6">
                                <label for="editTaskStartDate" class="form-label">Start Date</label>
                                <input type="text" id="editTaskStartDate"
                                    class="form-control form-control-sm date-picker" placeholder="Eg: 12 Feb, 20"
                                    value="12 Feb, 23" readonly>
                            </div>
                            <div class="col-sm-6">
                                <label for="editTaskEndDate" class="form-label">End Date</label>
                                <input type="text" id="editTaskEndDate"
                                    class="form-control form-control-sm date-picker" placeholder="Eg: 12 Feb, 20"
                                    value="12 Mar, 23" readonly>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Priority</label>
                                <select class="form-control form-control-sm" data-placeholder="Select Priority">
                                    <option value="">Select Priority</option>
                                    <option value="low">Low</option>
                                    <option value="medium" selected>Medium</option>
                                    <option value="high">High</option>
                                    <option value="urgent">Urgent</option>
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <label class="form-label">Repeat every</label>
                                <select class="form-control form-control-sm" data-placeholder="Select Time">
                                    <option value="">Select Time</option>
                                    <option value="week">Week</option>
                                    <option value="2week" selected>2 Weeks</option>
                                    <option value="month">1 Month</option>
                                    <option value="2months">2 Months</option>
                                    <option value="3months">3 Months</option>
                                    <option value="6months">6 Months</option>
                                    <option value="year">1 Year</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Assign To</label>
                                <select class="form-control form-control-sm select-multiple"
                                    data-placeholder="Eg: Natasha Hancock" multiple>
                                    <option value="">Eg: Natasha Hancock</option>
                                    <option value="LewisStone">Lewis Stone</option>
                                    <option value="JackHolland">Jack Holland</option>
                                    <option value="LilyBurgess">Lily Burgess</option>
                                    <option value="HarrisonFrench" selected>Harrison French</option>
                                    <option value="IsabelMellor" selected>Isabel Mellor</option>
                                    <option value="AdamBates" selected>Adam Bates</option>
                                    <option value="MillieLee">Millie Lee</option>
                                    <option value="MadeleineHart">Madeleine Hart</option>
                                    <option value="LouiseGoddard">Louise Goddard</option>
                                    <option value="JosephFrancis">Joseph Francis</option>
                                    <option value="KaiBarker" selected>Kai Barker</option>
                                    <option value="ErinKnight">Erin Knight</option>
                                    <option value="JaydenTaylor">Jayden Taylor</option>
                                    <option value="SophieHilton">Sophie Hilton</option>
                                    <option value="LeahWright">Leah Wright</option>
                                    <option value="LewisHooper">Lewis Hooper</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Task Description</label>
                                <textarea class="editor">Et quo odio aut aut natus facere consequatur eius. Eos non enim repudiandae voluptatem. Animi libero illo tempora. Id ut autem quis omnis fuga. Enim est reiciendis et. Ipsam autem maxime culpa quos. Velit reiciendis eos saepe. Nemo ut officiis dolores sequi error cum eum facilis. Praesentium porro porro ipsa nihil ipsum rerum sint. Sit omnis consequatur consequatur voluptates ipsa. Quam in occaecati alias sapiente voluptas eveniet. Consequuntur non deserunt exercitationem amet.</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm btn-primary">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- edit task modal -->
    </div>

    <script src="/backend/assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="/backend/assets/vendor/js/jquery.overlayScrollbars.min.js"></script>
    <script src="/backend/assets/vendor/js/ckeditor.js"></script>
    <script src="/backend/assets/vendor/js/jquery.uploader.min.js"></script>
    <script src="/backend/assets/vendor/js/select2.min.js"></script>
    <script src="/backend/assets/vendor/js/apexcharts.js"></script>
    <script src="/backend/assets/vendor/js/jquery.dataTables.min.js"></script>
    <script src="/backend/assets/vendor/js/moment.min.js"></script>
    <script src="/backend/assets/vendor/js/daterangepicker.js"></script>
    <script src="/backend/assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/assets/vendor/js/selectize.min.js"></script>
    <script src="/backend/assets/vendor/js/bootstrap-material-datetimepicker.js"></script>
    <script src="/backend/assets/js/dashboard.js"></script>
    <script src="/backend/assets/js/main.js"></script>
    <script src="/backend/assets/js/select2-init.js"></script>
    <script src="/backend/assets/js/add-product.js"></script>
    <script src="/backend/assets/js/category.js"></script>
    <script src="/backend/assets/js/sweet-alert-init.js"></script>
    <script type="module" src="https://unpkg.com/@github/include-fragment-element@latest?module"></script>
    <script src="/backend/assets/vendor/js/sweetalert2.all.min.js"></script>
    <script>
        var _URL = window.URL || window.webkitURL;
        imgInp.onchange = evt => {
            var img;
            const [file] = imgInp.files
            if (file) {
                img = new Image();
                img.onload = function() {
                    //alert(this.width + " " + this.height);
                    if (this.width < 200 || this.height < 150) {
                        imgInp.value = "";
                        alert('image dimension too small');
                    } else {
                        $('#blah').show();
                        $('.img-placeholder').hide();
                        blah.src = _URL.createObjectURL(file);
                    }
                };
                img.onerror = function() {
                    alert("not a valid file: " + file.type);
                };
                img.src = _URL.createObjectURL(file);

            }
        }
        imgInpe.onchange = evt => {
            const [file] = imgInpe.files
            if (file) {
                $('#blah').show();
                blahe.src = URL.createObjectURL(file)
            }
        }

        function executeval(url, message) {
            if (confirm("Are you sure You want to " + message + "?")) {
                window.location.assign(url);
            }
        }
    </script>
    <script>
        var toastElList = [].slice.call(document.querySelectorAll('.toast'))
        var toastList = toastElList.map(function(toastEl) {
            return new bootstrap.Toast(toastEl, option)
        })
    </script>
    <script>
        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML('<img style="width:100%;height:100px;object-fit:contain">')).attr(
                                'src', event.target.result).appendTo(
                                placeToInsertImagePreview);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#gallery-photo-add').on('change', function() {
                imagesPreview(this, 'div.gallery');
            });
        });
    </script>



    <script>
        function remove(id) {
            $('#file' + id).remove();
            var data = $("#galleryimages").html();
            if (data == "") {
                addpicker();
            }
        }

        function addpicker() {
            var newid = makeid(7);
            var data = '<div class="col-sm-4" id="file' + newid + '">' +
                '<label class="custom-file-upload" id="picker' + newid + '">' +
                '<input type="file" id="inp' + newid +
                '" accept="image/png, image/jpeg,image/jpg,image/webp,image/gif" name="images[]">' +
                '<i class="fa-light fa-image"></i><br />' +
                '<span>Add Image</span>' +
                '</label>' +
                '<div class="custom-file-upload" style="display: none" id="disp' + newid + '" >' +
                '<div class=" d-grid gap-2"><img id="image' + newid +
                '" style="width: 100%;height :150px;object-fit:contain" />' +
                '<button type="button" class="btn btn-danger" id="button' + newid +
                '"><i class="fa fa-trash"></i></button>' +
                '</div></div>'

            '</div>';
            $("#galleryimages").append(data);
            $("#inp" + newid).change(function(e) {
                loadFile(event, newid);

            });
        }

        var loadFile = function(event, id) {
            var output = document.getElementById('image' + id);
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
            $('#disp' + id).show();
            $("#picker" + id).hide();
            $('#button' + id).click(function(e) {
                remove(id);
            });
            addpicker();
        };
    </script>
    @if (session()->has('success'))
        <script>
            Swal.fire(
                'Success!',
                '{{ session('success') }}',
                'success'
            )
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}',
                footer: 'Please Try Again'
            })
        </script>
    @endif
    @yield('js')
</body>

</html>
