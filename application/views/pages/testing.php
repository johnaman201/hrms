<?php
    require('fpdf182/fpdf.php');
 


class PDF extends FPDF {
	function Header(){

		$this->SetFont('Courier','B',13);
		$this->Cell(190,1,'SAMPLE',0,0,'L');
		$this->Ln(5);
		$this->Cell(190,10,'PERSONAL DATA SHEET',0,0,'C');
		$this->Ln(20);


	}
	function Footer(){
		
		//Go to 1.5 cm from bottom
		$this->SetY(-15);
				
		$this->SetFont('Courier','',8);
		
		//width = 0 means the cell is extended up to the right margin
		$this->Cell(0,5,'Page '.$this->PageNo()." / {pages}",0,0,'C');
	}
}
		$pdf = new PDF(); //use new class
		$pdf->AliasNbPages('{pages}');
		$pdf->AddPage();
		$pdf->Cell(190,5,'I. PERSONAL INFORMATION',1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "FULLNAME:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(80, 5, $emp->fname.' '.$emp->mname.' '.$emp->lname,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(20, 5, "GENDER:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(20, 5, $emp->gender,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(20, 5, "AGE:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(10, 5, $emp->age,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "DATE OF BIRTH:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(50, 5, isset($emp->bday)? set_value('bday', date('M-d-Y',strtotime($emp->bday))) : set_value('bday'),1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(30, 5, "PLACE OF BIRTH:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(70, 5, $emp->bplace,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "RESIDENTIAL ADDRESS:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(150, 5, $emp->readd,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "RESIDENTIAL TYPE:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(50, 5, $emp->retype,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(30, 5, "YEAR OF STAY:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(70, 5, $emp->restay,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "PERMANENT ADDRESS:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(150, 5, $emp->peadd,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "PERMANENT TYPE:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(50, 5, $emp->petype,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(30, 5, "YEAR OF STAY:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(70, 5, $emp->pestay,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "ZIPCODE:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(50, 5, $emp->zipcode,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(30, 5, "CIVIL STATUS:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(70, 5, $emp->civilstats,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "CELLPHONE NO.:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(50, 5, $emp->cellno,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(30, 5, "TELEPHONE NO.:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(70, 5, $emp->teleno,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "SSS NO.:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(50, 5, $emp->sss,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(30, 5, "TIN NO.:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(70, 5, $emp->tin,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "PHILHEALTH NO.:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(50, 5, $emp->philhealth,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(30, 5, "PAG-IBIG NO.:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(70, 5, $emp->pagibig,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "NICKNAME:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(50, 5, $emp->nickname,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(30, 5, "EMAIL ADDRESS:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(70, 5, $emp->email,1,0,'J');
		$pdf->Ln(5);
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',13);
		$pdf->Cell(190,5,'II. FAMILY BACKGROUND',1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "NAME OF SPOUSE:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(80, 5, $emp->spouse,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(30, 5, "DATE OF BIRTH:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(40, 5, $emp->spousebday,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "PLACE OF BIRTH:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(80, 5, $emp->spouseplace,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(30, 5, "OCCUPATION:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(40, 5, $emp->spouseoccu,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',11);
		$pdf->Cell(190, 5, "CHILDREN",1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "FULLNAME:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(150, 5, $emp->child1,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "PLACE OF BIRTH:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(80, 5, $emp->place1,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(30, 5, "DATE OF BIRTH:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(40, 5, $emp->bday1,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "FULLNAME:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(150, 5, $emp->child2,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "PLACE OF BIRTH:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(80, 5, $emp->place2,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(30, 5, "DATE OF BIRTH:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(40, 5, $emp->bday2,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',11);
		$pdf->Cell(190, 5, "PARENTS",1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "FATHER'S NAME:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(150, 5, $emp->father,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "PLACE OF BIRTH:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(150, 5, $emp->fplace,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "MOTHER'S NAME:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(150, 5, $emp->mother,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "PLACE OF BIRTH:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(150, 5, $emp->mplace,1,0,'J');
		$pdf->Ln(5);

		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',13);
		$pdf->Cell(190,5,'III. WORK EXPERIENCE',1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "PREVIOUS COMPANY:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(55, 5, $emp->precompany1,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "PREVIOUS POSITION:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(55, 5, $emp->preposition1,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "DATE HIRED:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(55, 5, $emp->prefdate1,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "LAST DAY OF WORK:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(55, 5, $emp->preldate1,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "PREVIOUS COMPANY:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(55, 5, $emp->precompany2,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "PREVIOUS POSITION:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(55, 5, $emp->preposition2,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "DATE HIRED:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(55, 5, $emp->prefdate2,1,0,'J');
		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(40, 5, "LAST DAY OF WORK:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(55, 5, $emp->preldate2,1,0,'J');
		$pdf->Ln(5);

		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',13);
		$pdf->Cell(190,5,'IV. OTHER INFORMATION',1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(70, 5, "DO YOU HAVE ANY CASE FILED WITH DOLE:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(120, 5, $emp->dole,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(70, 5, "IF YES, COMPANY NAME:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(120, 5, $emp->issuecom,1,0,'J');
		$pdf->Ln(5);

		$pdf->SetFont('Courier','B',8);
		$pdf->Cell(70, 5, "MEMBERSHIP IN ASSOCIATION/ORGANIZATION:",1,0,'J');
		$pdf->SetFont('Courier','',8);
		$pdf->Cell(120, 5, $emp->issuecom,1,0,'J');
		$pdf->Ln(5);

		//$pdf->SetFont('Courier','B',13);
		//$pdf->Cell(190,5,'EMPLOYEMENT INFORMATION',1,0,'J');
		//$pdf->Ln(5);

		//$pdf->SetFont('Courier','B',8);
		//$pdf->Cell(30, 5, "DEPARTMENT/STORE",1,0,'J');
		//$pdf->SetFont('Courier','',8);

		//$pdf->Cell(160, 5,$emp->designation ,1,0,'J');
		

		$pdf->Ln(5);

	
		

$pdf->Output();
    ?>