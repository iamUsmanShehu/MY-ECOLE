<?php
include("../includes/config.php");
//$Serial_no = mysqli_real_escape_string($con, $_POST['Serial_no']);
//$Pin = mysqli_real_escape_string($con, $_POST['Pin']);
# import from namespace
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader\PageBoundaries;
# constants
define("TWO_YEARS", 63072055);
# helper collection
function die_4() { header("HTTP/1.1 404 Not Found", TRUE, 404); die(); }
function die_gone() { header("HTTP/2 410 Expired", FALSE, 410); http_response_code(410); exit(0); }
# kill if void
if (empty($_GET["NO"])) { die_4(); } else { $_GET["NO"] = intval($_GET["NO"], 0XA); }
# initialize drupal
define("PROJECT_ROOT", __DIR__); # on linux erratic escape
$SAND_BACK = realpath(PROJECT_ROOT . "/sand-0.5"); # directory
const A4_MW = 25.4; # one inch # margin
const A4_MH = 25.4;
try { # debug exposure safe fetch data
   
   $record = ["expiration" => "2039-04-05"];
   # verify
   if (empty($record)) die_4();
   # confirm validity
   if (strtotime($record["expiration"]) + TWO_YEARS < time()) die_gone();
   # build work
   include "{$SAND_BACK}/FPDF_1.84/main.php";
   include "{$SAND_BACK}/FPDI-2.3.6/autoload.php";
   class OPDF extends Fpdi {
      private int $creationDate;
      protected function _putinfo() {
         $timestamp = empty($this->creationDate) ? time() : $this->creationDate;
         $this->metadata["Producer"] = "OPDF" . " " . FPDF_VERSION; # 1.84
         $this->metadata["CreationDate"] = 'D' . ':' . date("YmdHis", $timestamp);
         foreach ($this->metadata as $key => $value) {
            $this->_put('/' . $key . " " . $this->_textstring($value));
         }
      }
      public function SetCreationDate(int $timestamp): bool {
         if ($timestamp > time()) return false; # cannot be future
         $this->creationDate = $timestamp; return true;
      }
   }


   $document = new OPDF('P', "mm", "A4"); # assignment & by reference
   $document->setSourceFile("{$SAND_BACK}/ResultSheetTemplate.pdf");
   $document->AddFont("Consolas", 'R', "consolas.php");
   $document->AddFont("Consolas", 'B', "consolas-bold.php");
   $document->AddFont("Times", 'R', "times.php");
   $document->AddFont("helvetica", 'B', "helveticab.php");
   $document->AddFont("Open Sans", "SB", "open_sans-semibold.php");
   $page_id = $document->importPage(1, PageBoundaries::MEDIA_BOX);
   $document->SetAuthor(hex2bin("536f6c7665204379636c652049636f6e"));
   $document->SetSubject(hex2bin("456e64206f66205465726d2053747564656e7420526573756c74"));
   $document->SetTitle("Report Sheet");
   $document->SetMargins(A4_MW, A4_MH, null); # 25.4 X 50 millimetre
   $document->AddPage('P', "A4", 0);
   $document->SetCreationDate(strtotime(""));
   $document->SetTextColor(0, 0,0);
   $document->SetDisplayMode("fullpage", "single"); # 67 % suggest
   $document->SetFont("Open Sans", "SB", 14);
   $document->useTemplate($page_id, 0, 0, null, null, false);
   // <img src="dist/img/myechole.png" style="width: 100%;">
      $studentId = $_GET['NO'];
   $quary = "SELECT students.id AS 'count_students', students.serial_no,students.gender,students.passport pass,terms.term, sessions.session, students.fname,students.lname,classes.name AS 'class',sections.section,subjects.name AS 'subject',grades.ca,grades.exam, grades.total, grades.status,grades.id FROM `grades` JOIN students ON grades.student_id = students.id JOIN classes ON grades.class_id = classes.id JOIN subjects ON grades.subject_id = subjects.id JOIN sections ON classes.section = sections.id JOIN sessions ON sessions.id = grades.session_id JOIN terms ON terms.id = grades.term_id WHERE students.serial_no = $studentId ";
            // var_dump($quary);
              $result = $con -> query($quary);
              $margin_buttum = 1;
              $total2 = 0;
              $total_subjects = 1;
              $count_students = 0;
                while ($row = $result->fetch_assoc()) {
                  $id = $row['id'];
                  $count_students =$row['count_students'];
                  $student_fname = $row['fname'];
                  $student_lname = $row['lname'];
                  $pass = $row['pass'];
                  $gender =$row['gender'];
                  $serial_no =$row['serial_no'];
                  $class =$row['class'];
                  $section =$row['section'];
                  $session =$row['session'];
                  $term =$row['term'];
                  $subject =$row['subject'];
                  $ca =$row['ca'];
                  $exam =$row['exam'];
                  $total =$row['total'];
                  $status =$row['status'];
                  $grade = $total;
                  $margin_buttum+=12;
                  // $total2 = $total;
                  $total2+=$total;
                  $count_students ++;
                  $total_subjects++;
                  if ($gender = "M") {
                     $gender = "Male";
                  }elseif ($gender = "F") {
                     $gender = "Female";
                  }else{}
                  $document->SetY(0);
                  $document->Image("../dist/img/myechole.png", 3, -2, 30, 30, "png");
                  $document->SetY(0);
                  $document->Image("../php/uploads/$pass", 175, -2, 30, 30, "jpg");
                  $document->SetY(5.9);
                  $document->SetFont("helvetica", 'B', 15.5);
                  $document->Cell(170, 10.6, "SOLVE CYCLE INTERNATIONAL SCHOOL", 10, 30, 'C');
                  
                  $document->SetY(5.9);
                  $document->SetFont("Times", 'R', 14.5);
                  $document->Cell(170, 22.6, "Nursery, Primary and Secondary School", 10, 30, 'C');
                   $document->SetFont("Times", 'R', 13.5);
                  $document->Cell(170, -10, "Student's Report Sheeet", 10, 30, 'C');
                  
                  $document->line(7, 28, 205, 28);

                  $document->SetY(5.9);
                  $document->SetFont("Times", 'R', 12);
                  $document->Cell(160, 50.6, "Gender: $gender", 10, 30, 'C');

                  $document->SetY(5.9);
                  $document->SetFont("Times", 'R', 12);
                  $document->Cell(7, 50.6, "Name: $student_fname $student_lname", 10, 30, 'C');
                  $document->line(7, 35, 205, 35);
                  
                  $document->SetY(5.9);
                  $document->SetFont("Times", 'R', 12);
                  $document->Cell(300, 50.6, "Admission No: $serial_no", 10, 30, 'C');

                  $document->SetY(5.9);
                  $document->SetFont("Times", 'R', 12);
                  $document->Cell(3, 70.6, "Session: $session", 10, 30, 'C');

                  $document->SetY(5.9);
                  $document->SetFont("Times", 'R', 12);
                  $document->Cell(160, 80.6, "$term Report Sheeet", 10, 30, 'C');

                  $document->SetY(5.9);
                  $document->SetFont("Times", 'R', 12);
                  $document->Cell(7, 85.6, "Class: $section -  $class", 10, 30, 'C');

                  $document->SetY(5.9);
                  $document->SetFont("Times", 'R', 11);
                  $document->SetX($document->GetX() - 17);
                  $document->Cell(-14, 118+$margin_buttum, "$subject", 2, 1, 'L');
                  $document->SetX($document->GetX() + 17);

                  $document->SetY(5.9);
                  $document->SetFont("Times", 'R', 11);
                  $document->Cell(62, 118+$margin_buttum, "$ca", 10, 30, 'C');

                  $document->SetY(5.9);
                  $document->SetFont("Times", 'R', 11);
                  $document->Cell(95, 118+$margin_buttum, "$exam", 10, 30, 'C');

                  $document->SetY(5.9);
                  $document->SetFont("Times", 'R', 11);
                  $document->Cell(135, 118+$margin_buttum, "$total", 10, 30, 'C');
                  switch ($grade) {
                      case ($grade<=25):
                                 $document->SetY(5.9);
                                 $document->SetFont("Times", 'R', 11);
                                 $document->Cell(163, 118+$margin_buttum, "F", 10, 30, 'C');
                          break;
                      case ($grade<=35):
                                 $document->SetY(5.9);
                                 $document->SetFont("Times", 'R', 11);
                                 $document->Cell(163, 118+$margin_buttum, "E", 10, 30, 'C');
                          break;
                      case ($grade<=45):
                                 $document->SetY(5.9);
                                 $document->SetFont("Times", 'R', 11);
                                 $document->Cell(163, 118+$margin_buttum, "D", 10, 30, 'C');
                          break;
                      case ($grade<=55):
                                 $document->SetY(5.9);
                                 $document->SetFont("Times", 'R', 11);
                                 $document->Cell(163, 118+$margin_buttum, "C", 10, 30, 'C');
                          break;
                      case ($grade<=65):
                                 $document->SetY(5.9);
                                 $document->SetFont("Times", 'R', 11);
                                 $document->Cell(163, 118+$margin_buttum, "B", 10, 30, 'C');
                          break;
                      case ($grade<=100):
                                 $document->SetY(5.9);
                                 $document->SetFont("Times", 'R', 11);
                                 $document->Cell(163, 118+$margin_buttum, "A", 10, 30, 'C');
                          break;
                  } 
                     switch ($total) {
                            case ($total<=25):
                                 $document->SetY(5.9);
                                 $document->SetFont("Times", 'R', 10);
                                 $document->Cell(205, 118+$margin_buttum, "FAIL", 10, 30, 'C');
                                break;
                            case ($total<=35):
                                 $document->SetY(5.9);
                                 $document->SetFont("Times", 'R', 10);
                                 $document->Cell(205, 118+$margin_buttum, "POOR", 10, 30, 'C');
                                break;
                            case ($total<=45):
                                 $document->SetY(5.9);
                                 $document->SetFont("Times", 'R', 10);
                                 $document->Cell(205, 118+$margin_buttum, "PASS", 10, 30, 'C');
                                break;
                            case ($total<=55):
                                 $document->SetY(5.9);
                                 $document->SetFont("Times", 'R', 10);
                                 $document->Cell(205, 118+$margin_buttum, "GOOD", 10, 30, 'C');
                                break;
                            case ($total<=65):
                                 $document->SetY(5.9);
                                 $document->SetFont("Times", 'R', 10);
                                 $document->Cell(205, 118+$margin_buttum, "V.GOOD", 10, 30, 'C');
                                break;
                            case ($total<=100):
                                 $document->SetY(5.9);
                                 $document->SetFont("Times", 'R', 9);
                                  $document->SetX($document->GetX() - 1);
                                 $document->Cell(208, 118+$margin_buttum, "EXCELLENT", 10, 30, 'C');
                                 // $document->SetX($document->GetX() + 37);
                                break;
                        }
}  
   // $document->SetY($document->GetY() + 3);

   $document->SetY($document->GetY() - 60);
   $document->SetFont("Times", 'B', 10);
   //Total Scored Subjects = $total2
   $document->Cell(110, 43.6, "$total2 ______OUT OF______ ".($outOf=($total_subjects - 1) * 100)."", 10, 30, 'C');

   // $document->SetY(6);
   $document->SetFont("Times", 'B', 10);
   // $document->SetTopMargin(200.9);
   $document->Cell(79.5, -30, "".($total2 * (100) / $outOf)."%", 10, 30, 'C');
   # width 148.5 half
   // $dates_margin_start = intval($document->GetPageWidth()) / 2 + 54;
   // $document->SetXY($dates_margin_start, 1.9);
   // $document->Cell(0, 5.7, date("j F Y", strtotime($student_fname)), 0, 0, 'L');
   // $document->SetY($document->GetY() + 11.04, false); $document->SetX($dates_margin_start);
   // $document->Cell(0, 5.7, date("j F Y", strtotime($record["term"])), 0, 0, 'L');
   # make quick response code 1994 matrix barcode
   require "{$SAND_BACK}/phpqrcode-1.1.4" . DIRECTORY_SEPARATOR . "phpqrcode.php";
   $TEMP_DUMP_DIR = "{$SAND_BACK}/temp-dump" . DIRECTORY_SEPARATOR;
   # consider stream lock
   if (! file_exists($TEMP_DUMP_DIR)) mkdir($TEMP_DUMP_DIR, 0777, true);
   # compute URL components
  // $URL[0] = "https://example.org/certificate/54";
   //$URL[3] = parse_url("https://example.org/certificate/54", -1);
   //$URL[3] = $URL[3]["host"] . $URL[3]["path"];
   //$QRC = $TEMP_DUMP_DIR . hash("MD5", $URL[0]) . '.' . "PNG";
   # quartile 25 percent error correction capability level
  // QRcode::png($URL[0], $QRC, QR_ECLEVEL_Q, 11.7, 4); # dynamic pattern
   # render graphics
   //$image = imagecreatefrompng($QRC);
   //$bg_color = imagecolorat($image, 4, 5); # left-top pixel
   //imagecolortransparent($image, $bg_color);
   //imagepng($image, $QRC); imagedestroy($image);
   //$document->SetFont("Consolas", 'R', 11.4);
   //$document->Image($QRC, A4_M, 135, 0, 0, "PNG");
   # print-embed link
   // $document->SetTextColor(14, 35, 209);
   // $document->SetY($document->GetY() + 127, true);
   // $document->SetX($document->GetX() + 10.9);
   // $document->Write(5.4, $URL[3] . '/', $URL[0]);
   // $document->SetFont("Consolas", 'B', 19.5);
   // $document->Write(5.3, $_GET["NO"], $URL[0]);
   # delete temporary content
   // unlink($QRC); unset($image, $QRC);
   # print document to browser
   $document->Output('I', $_GET["NO"] . '.' . "PDF", true);
   # debug code
   // header("Content-Type: application/json");
   // var_dump($record, $_GET["NO"], $GLOBALS["base_url"], $URL, $QRC, $document->GetX());
   // print_r($document->GetPageWidth() . '-' . $document->GetStringWidth($_GET["NO"]));
} catch (Throwable $t) { throw $t; }