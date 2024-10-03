 <?php 
include_once("../includes/config.php");
 $serial_no = rand(100, 1000); ?>

 <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../plugins/dropzone/min/dropzone.min.css">
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <div class="container">
    <br>
<div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">New Admission</h3>
              </div>
              <div class="card-body p-0">
                <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#school-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="school-part" id="school-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Class & Sections</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Student Info</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Gurdian Infomations</span>
                      </button>
                    </div>
                  </div>
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="school-part" class="content" role="tabpanel" aria-labelledby="school-part-trigger">
                       <form method="POST" action="insert-student" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-4"><label for="section">Section</label>
                              <?php // Step 2: Retrieve data for the dropdown
                $sql = "SELECT id, section FROM sections";
                $result = $con->query($sql);

                if($result==false){

                    die("Error: ". $con->error);
                }

                if ($result->num_rows > 0) {
                    // Step 3: Create the dropdown
                    echo '<select name="section" class="form-control form-control-lg">';
                    echo'<option>Section</option>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['id'] . '">' . $row['section'] . '</option>';
                    }
                    echo '</select>';
                } else {
                    echo 'No data available.';
                }?>
                            </div>
                            <div class="col-4"><label for="class">Class</label>
                              <?php 
                              // Step 2: Retrieve data for the dropdown
                $sql = "SELECT classes.name name,classes.id mid,classes.section,sections.section sec,sections.id FROM classes  join sections on classes.section = sections.id where class_numeric>0";
                $result = $con->query($sql);

                if($result==false){

                    die("Error: ". $con->error);
                }

                if ($result->num_rows > 0) {
                    // Step 3: Create the dropdown
                    echo '<select name="class" class="form-control form-control-lg">';
                    echo'<option>Class</option>';
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['mid'] . '">' . $row['sec']."-". $row['name'] .'</option>';
                    }
                    echo '</select>';
                } else {
                    echo ' No data available.';
                }
                              ?>
                            </div>
                            <div class="col-4"><label for="serial_no">Serial Number</label>
                              <input type="text" class="form-control" placeholder="<?=$serial_no;?>" name="serial_no" value="<?=$serial_no;?>" readonly>
                            </div>
                          </div>
                        <br>
                      <a class="btn btn-primary" onclick="stepper.next()">Next</a>
                    </div>
                    <!-- .............. -->
                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                      
                          <div class="row">
                            <div class="col-5"><label for="fname">First Name</label>
                              <input type="text" class="form-control" placeholder="First Name" name="fname">
                            </div>
                            <div class="col-5"><label for="lname">Other Name(s)</label>
                              <input type="text" class="form-control" placeholder="Other Name(s)" name="lname">
                            </div>
                            <div class="col-2"><label for="passport">Passport</label>
                              <input type="file" class="form-control" name="passport">
                            </div>
                          </div>
                            <div class="row">
                            <div class="col-4"><br><label for="gender">Gender</label>
                              <select type="text" class="form-control" name="gender">
                                <option>Gender...</option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                              </select>
                            </div>
                            <div class="col-4"><br><label for="dob">Date of Birth</label>
                              <input type="date" name="dob" class="form-control" >
                            </div>
                            <div class="col-4"><br><label for="disability">Disability</label>
                              <input type="text" name="disability" class="form-control" placeholder="Disability" >
                            </div>
                          </div>
                          <!-- <br><label for="state">Address of Origin</label> -->
                          <div class="row">
                            <div class="col-4"><br><label for="state_of_origin">State Of Origin</label>
                              <select name="state_of_origin" class="form-control">
                                <option>State...</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kano">Kano</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Katsina">Katsina</option>
                              </select>
                            </div>
                           <div class="col-4"><br><label for="lga_of_origin">L.G.A</label>
                              <select name="lga_of_origin" class="form-control">
                                <option>local government...</option>
                                <option value="Dutse">Dutse</option>
                                <option value="Kombotso">Kombotso</option>
                                <option value="Gwaram">Gwaram</option>
                                <option value="Matsango">Matsango</option>
                                <option value="Karnaya">Karnaya</option>
                                <option value="gusau">gusau</option>
                                <option value="Tsibiri">Tsibiri</option>
                              </select>
                            </div>
                            <div class="col-4"><br><label for="home_address">Address</label>
                              <textarea name="home_address" class="form-control"></textarea>
                                
                            </div>

                          </div>

                            <!-- <br><label for="state">Residential Address</label> -->
                          <div class="row">
                            <div class="col-4"><br><label for="state_of_residence">State Of Residence</label>
                              <select name="state_of_residence" class="form-control">
                                <option>State...</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kano">Kano</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Katsina">Katsina</option>
                              </select>
                            </div>
                           <div class="col-4"><br><label for="lga_of_residence">L.G.A</label>
                              <select name="lga_of_residence" class="form-control">
                                <option>local government...</option>
                                <option value="Dutse">Dutse</option>
                                <option value="Kombotso">Kombotso</option>
                                <option value="Gwaram">Gwaram</option>
                                <option value="Matsango">Matsango</option>
                                <option value="Karnaya">Karnaya</option>
                                <option value="gusau">gusau</option>
                                <option value="Tsibiri">Tsibiri</option>
                              </select>
                            </div>
                            <div class="col-4"><br><label for="address_of_residence">Address</label>
                              <textarea name="address_of_residence" class="form-control"></textarea>
                                
                            </div></div><br>
                        <a class="btn btn-primary" onclick="stepper.previous()">Previous</a>
                      <a class="btn btn-primary" onclick="stepper.next()">Next</a>
                    </div>
                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                      <div class="form-group">
                         <div class="row">
                            <div class="col-4"><label for="gurdian_name">Full Name</label>
                              <input type="text" class="form-control" placeholder="Full Name" name="gurdian_name">
                            </div>
                            <div class="col-4"><label for="gurdian_ocupation"> Ocupation</label>
                              <input type="text" class="form-control" placeholder="Ocupation" name="gurdian_ocupation">
                            </div>
                            <div class="col-4"><label for="gurdian_phone"> Contact</label>
                              <input type="text" class="form-control" placeholder="+234" name="gurdian_phone">
                            </div>
                          </div>
                        <div class="row">
                            <div class="col-4"><br><label for="gurdian_state">State</label>
                              <select name="gurdian_state" class="form-control">
                                <option>State...</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kano">Kano</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Katsina">Katsina</option>
                              </select>
                            </div>
                           <div class="col-4"><br><label for="gurdian_lga">L.G.A</label>
                              <select name="gurdian_lga" class="form-control">
                                <option>local government...</option>
                                <option value="Dutse">Dutse</option>
                                <option value="Kombotso">Kombotso</option>
                                <option value="Gwaram">Gwaram</option>
                                <option value="Matsango">Matsango</option>
                                <option value="Karnaya">Karnaya</option>
                                <option value="gusau">gusau</option>
                                <option value="Tsibiri">Tsibiri</option>
                              </select>
                            </div>
                            <div class="col-4"><br><label for="gurdian_address">Address</label>
                              <textarea name="gurdian_address" class="form-control"></textarea>
                                
                            </div>

                          </div>

                      </div>
                      <a class="btn btn-primary" onclick="stepper.previous()">Previous</a>
                      <input type="submit" name="submit" class="btn btn-primary"value="Register">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <a href="../php/dashboard" class="btn btn-default">Dashboard</a>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
</div>

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>