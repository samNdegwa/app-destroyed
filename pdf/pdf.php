<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('
     <img src="letter.jpg"><br>
     <b>Our Ref: <i>SLCMC/ADM/SEPT/2022</i>					Date: 9th  June 2022</b><br>

     <b>Dear Njeri Maureen Mwangi</b><br>
 
     <b>RE: <u>PROVISIONAL LETTER OF ADMISSION</u></b> 

     <p>
       Following your application and fulfilment of course requirements, I am pleased to congratulate you on your selection for <b>Higher Diploma in Kenya Registered Nephrology Nursing (KRNN)</b>.  The course shall run for one (1) year on a full time basis. The reporting date shall be in March 2023, a date to be communicated to you later. 
     </p>
     <p>
      To be admitted, 50% of the first instalment fee <b>(Ksh. 47,535.00)</b> must be paid as indicated below.  </p>
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

     <p> Yours faithfully, </p>



	');
$mpdf->Output();
?>