<?php
include '../includes/student-data.php';
$sql="SELECT applicants.applicant_id, courses.course_title, applicants.date_applied, intakes.year, intakes.month, applicants.status FROM applicants
   INNER JOIN courses ON applicants.course_id=courses.course_id INNER JOIN intakes ON applicants.intake_id=intakes.id WHERE applicant_id='$approved_app'";
    $result=mysqli_query($con,$sql) or die(mysql_error());
    while($row=mysqli_fetch_array($result))
               {  
                  $couese_name=$row['course_title'];
                  $intake_month=$row['month'];
                  $intake_year=$row['year'];
                  $date_applied=$row['date_applied'];
                  $status=$row['status'];
                }
$txt='<div style="font-family: serif; font-size: 11pt;">
<img src="letter.jpg"><br>
     <b>Our Ref: <i>SLCMC/ADM/'.$intake_month.'/'.$intake_year.'</i></b><br>                 

      <b>Date: '.$approval_date.'</b><br>

     <b>Dear '.$first_name.' '.$second_name.' '.$last_name.'</b><br>
 
     <b>RE: <u>PROVISIONAL LETTER OF ADMISSION</u></b> 

     <p>
       Following your application and fulfilment of course requirements, I am pleased to congratulate you on your selection for <b>'.$couese_name.'</b>.  The course shall run for one (1) year on a full time basis. The reporting date shall be in <b>March 2023, a date to be communicated to you later</b>. 
     </p>
     <p>
      To be admitted, 50% of the first instalment fee <b>(Ksh. 47,535.00)</b> must be paid as indicated below. 
       </p>
        <ol type="i">
            <li>A deposit of Kshs. 23,767.00 shall be paid at least one month before the admission date. The deposit slip must be brought to the college immediately failure to which replacement shall be done without notice.
            </li>
            <li>
                Along with the deposit slip in (i) above, carry with you two spring files, certified copies of your National ID, KCSE Certificate/ Result Slip, High School Leaving Certificate, Birth Certificate, Baptismal Certificate and two (2) recent coloured passport size photos.  Certification must be done by the Commissioner of Oaths/ Advocate/ Magistrate. 
            </li>
            <li>
             A further payment of Kshs. 23,768.00 shall be done and deposit slip be brought on the reporting date. 
            </li>
        </ol>
   
        Enclosed herewith, please find a fees structure, a list of personal effects and a list of books to be brought on the admission day.  The student’s/guardian’s pledge section on the college rules and regulations must be signed and copy of the page be brought upon admission.
    <p> We wish you the best of luck in your training with us. </p>

     <p> Yours faithfully, </p><br>
     </b><br>
     <img src="sign.png" style="width:100px;"><br>

     <b>JUMA ALFRED<br>
      <u>The College Principal</u>
     
     <br><br>
      <b><u>NOTE:</u></b><br>
      This is a provisional letter which must be returned to the college one month before the admission date for issuance of the official admission letter or as shall be communicated.
     <br><br> <br>
     <i style="font-size:0.5em;">This is a system generated document. &copy; Sister Leonella Consolata Medical College 2022. All rights reserved</i>
     </di>';

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($txt);
$mpdf->Output();
?>