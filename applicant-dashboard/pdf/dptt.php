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
       Following your application and fulfilment of course requirements, I am pleased to congratulate you on your selection for <b>'.$couese_name.'</b>.  This course duration is <b>2 ½ years</b>. The reporting date shall be on <b>27th September 2022 at 8:30 a.m.</b> accompanied by your guardian or parent. 
     </p>
     <p>
      To be admitted, 50% of the first trimester fee <b>(Ksh. 30,200.00)</b> must be paid as indicated below. 
       </p>
        <ol type="i">
            <li>A deposit of <b>Kshs. 15,100.00</b> shall be paid at least one month before the admission date. The deposit slip must be brought to the college immediately failure to which replacement shall be done without notice.
            </li>
            <li>
               Along with the deposit slip in (i) above, carry with you 1 box file and 1 spring file, certified copies of your National ID, KCSE Certificate/ Result Slip, High School Leaving Certificate, Birth Certificate, Baptismal Certificate and two (2) recent coloured passport size photos.  <b>Certification must be done by the Commissioner of Oaths/ Advocate/ Magistrate.</b> 
            </li>
            <li>
             A further payment of <b>Kshs. 15,100.00</b> shall be done and deposit slip be brought on the reporting date. 
            </li>
        </ol>
   
        Enclosed herewith, please find a fees structure, a list of personal effects and a list of books to be brought on the admission day.  The student’s/guardian’s pledge section on the college rules and regulations must be signed and copy of the page be brought upon admission.
    <p> We wish you the best of luck in your training with us. </p>

     <p> Yours faithfully, </p><br><br><br><br><br>

     <b>JUMA ALFRED</b><br>
     <img src="sign.png" style="width:100px;"><br>
      <u>The College Principal</u>
     
     <br><br><br><br>
     <i style="font-size:0.5em;">This is a system generated document. &copy; Sister Leonella Consolata Medical College 2022. All rights reserved</i>
     </di>';

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($txt);
$mpdf->Output();
?>