<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Invoice</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">

body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 9px;
}
.style3 {
	font-size: 20px;
	font-weight: bold;
}
.style5 {font-size: 14px}
.style6 {
	font-size: 16px;
	font-weight: bold;
}
  @page {
                margin-top: 0.3cm;
                margin-bottom: 0.5cm;
                margin-left: 0.3cm;
                margin-right: 0.3cm;
            }

</style>
 <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->
</head>
<body>
  
<?php 

$company = DB::table('company')->get(); 
$saleman = DB::table('saleman')->where('SalemanID',$invoice_mst[0]->UserID)->get();
 
?>

 <table width="570" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="50%"><span class="style3">{{$company[0]->Name}} </span></td>
      <td width="50%" rowspan="4" valign="top" align="right"><img src="{{asset('documents/'.$company[0]->Logo)}}" width="30%;" ></td>
    </tr>
      <tr>
        <td>{{$company[0]->Address}}</td>
    </tr>
      <tr>
        <td><span class="style5">Contact: {{$company[0]->Contact}}</span></td>
    </tr>
      <tr>
        <td>Email: {{$company[0]->Email}} </td>
      </tr>
      <tr>
        <td colspan="2" align="center"  > <u>{{$company[0]->SaleInvoiceTitle}}</u>  </td>
    </tr>
    </table>
	
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="left"> <strong>Invoice To:</strong></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="1" cellpadding="0">
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td width="10%" valign="top">Name:</td>
        <td width="90%" valign="top">
            {{$invoice_mst[0]->PartyName}}        </td>
      </tr>
      <tr>
        <td valign="top">Address:</td>
        <td valign="top"> 
             {{$invoice_mst[0]->Address}}</td>
      </tr>
      <tr>
        <td valign="top">Contact:</td>
        <td valign="top"><div align="left">  {{$invoice_mst[0]->Phone}}</div></td>
      </tr>
      <tr>
        <td valign="top">Email:</td>
        <td valign="top"><div align="left"> {{$invoice_mst[0]->Email}}</div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><div align="left"></div></td>
      </tr>
    </table></td>
    <td valign="top"><table width="47%" border="0" align="right" cellpadding="0" cellspacing="3">
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td width="47%" valign="top"><div align="left">Invoice#&nbsp;:</div></td>
        <td width="53%" valign="top">{{$invoice_mst[0]->InvoiceMasterID}}</td>
      </tr>
      <tr>
        <td valign="top"><div align="left">Date :</div></td>
        <td valign="top">{{dateformatman($invoice_mst[0]->Date)}}</td>
      </tr>
      <tr>
        <td valign="top"><div align="left">User&nbsp;:</div></td>
        <td valign="top"><div align="left">{{$saleman[0]->SalemanName}}</div></td>
      </tr>

      <tr>
        <td>&nbsp;</td>
        <td><div align="left"></div></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" border="1">
  <tr>
    <td width="50"><table width="100%" border="1" cellpadding="0" cellspacing="0" bordercolor="#999999" style="border-collapse:collapse;">
      <tr bgcolor="#CCCCCC">
        <td width="3%" height="15" align="center"><strong>S#</strong></td>
        <td width="14%" height="15" colspan="3" align="left"><strong>DESCRIPTION</strong></td>
       
        <td width="15%" height="15" ><div align="center"><strong>SECTOR</strong></div></td>
        <td width="15%" height="15" ><div align="center"><strong>FARE</strong></div></td>
        <td width="15%" height="15" ><div align="center"><strong>VAT </strong></div></td>
        <td width="15%" height="15" ><div align="center"><strong>TOTAL</strong></div></td>
      </tr>
   
@foreach($invoice_det as $key => $value) 
   <tr>
     
     <td>{{$key+1}}</td>
     <td colspan="3">{{$value->ItemName}} <br> Ticket#{{$value->RefNo}} <br> PNR: {{$value->PaxName}}</td>
     <td align="center">{{$value->Sector}}</td>
     
     <td  align="center">{{number_format($value->Total1,2)}}</td>
     <td  align="center">{{number_format($value->Taxable,2)}}</td>
     <td  align="center">{{number_format($value->Total1,2)}}</td>

   </tr>
@endforeach



     
 
 <tr>
   <td height="15"  colspan="7" style="padding-left: 10px;" ><strong>PREVIOUS BALANCE </strong></td>
   <td height="15" ><div align="center"><strong>{{number_format($invoice_mst[0]->Paid,2)}}</strong></div></td>
 </tr>
 <tr>
   <td height="15"  colspan="7" style="padding-left: 10px;" ><strong>NET PAYABLE AED </strong>{{ucwords(convert_number_to_words($invoice_mst[0]->Paid))}} Only/-</td>
   <td height="15" ><div align="center"><strong>{{number_format($invoice_mst[0]->Balance,2)}}</strong></div></td>
 </tr>
  
    </table></td>
  </tr>

</table>

<table>
  <tr >
      <td  height="40"    align="center" valign="middle">Sign & Stamp </td>
      <td  height="40"    align="center" valign="middle">Verify Online</td>
     </tr>

   


    <tr>
      <td align="center"><img src="{{asset('documents/'.$company[0]->Signature)}}" width="100%;" ></td>
      <td align="center"><img src="data:image/png;base64, {!! base64_encode(QrCode::size(65)->generate(url()->current())) !!} "></td>
    </tr>
</table>

</body>
</html>