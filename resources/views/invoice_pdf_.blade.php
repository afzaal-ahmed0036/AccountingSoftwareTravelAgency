<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Invoice</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">

body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
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
                margin-top: 0.5cm;
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
        <td valign="top"><div align="left">YASEEN</div></td>
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
        <td width="3%" height="15"><div align="center"><strong>S#</strong></div></td>
        <td width="14%" height="15" ><div align="center"><strong>DESCRIPTION</strong></div></td>
        <td width="14%" height="15" ><div align="center"><strong>PAX NAME </strong></div></td>
        <td width="9%" height="15" ><div align="center"><strong>PNR</strong></div></td>
        <td width="8%" height="15" ><div align="center"><strong>SECTOR</strong></div></td>
        <td width="8%" height="15" ><div align="center"><strong>FARE</strong></div></td>
        <td width="3%" height="15" ><div align="center"><strong>VAT </strong></div></td>
        <td width="5%" height="15" ><div align="center"><strong>TOTAL</strong></div></td>
      </tr>
   
      <tr >
        <td height="400" valign="top" > @foreach($invoice_det as $key => $value) 
          <div style="padding: 1px;">{{$key+1}}</div>  <BR> @endforeach</td>
        <td height="400" valign="top" > @foreach($invoice_det as $key => $value) 
          <div style="padding: 1px;">{{$value->ItemName}}<Br>{{$value->RefNo}}  </div><BR> @endforeach</td>
        <td height="400" valign="top" > @foreach($invoice_det as $key => $value) 
          <div style="padding: 1px;">{{$value->PaxName}}  </div><BR> @endforeach</td>
        <td height="400" valign="top" > @foreach($invoice_det as $key => $value) 
          <div style="padding: 1px;">{{$value->PNR}}  </div><BR> @endforeach</td>
        <td height="400" valign="top" > @foreach($invoice_det as $key => $value) 
          <div style="padding: 1px;">{{$value->Sector}}  </div><BR> @endforeach</td>
        <td height="400" valign="top" > @foreach($invoice_det as $key => $value)
          <div style="padding: 1px;"> 
          <div align="right">{{number_format($value->Total1,2)}} </div>
        </div><BR> @endforeach</td>
        <td height="400" valign="top" > @foreach($invoice_det as $key => $value)
          <div style="padding: 1px;"> 
          <div align="right">{{number_format($value->Taxable,2)}} </div>
        </div><BR> @endforeach</td>
        <td height="400" valign="top" > @foreach($invoice_det as $key => $value) 
          <div style="padding: 1px;">
          <div align="right">{{number_format($value->Total1,2)}} </div>
        </div><BR> @endforeach</td>
        </tr>
      
 <tr>
        <td height="15" colspan="5" bgcolor="#CCCCCC" style="padding-left: 10px;" ><strong>TOTAL </strong>
            <div align="center">
            <div align="center">
            <div align="center"></td>
        <td height="15" bgcolor="#CCCCCC" >&nbsp;</td>
        <td width="10%" height="15" bgcolor="#CCCCCC" >&nbsp;</td>
        <td width="10%" height="15" bgcolor="#CCCCCC" ><div align="right"><strong>{{number_format($invoice_mst[0]->Total,2)}}</strong></div></td>
      </tr>
 <tr>
   <td height="15"  colspan="7" style="padding-left: 10px;" ><strong>PREVIOUS BALANCE </strong></td>
   <td height="15" ><div align="right"><strong>{{number_format($invoice_mst[0]->Paid,2)}}</strong></div></td>
 </tr>
 <tr>
   <td height="15"  colspan="7" style="padding-left: 10px;" ><strong>NET PAYABLE AED </strong>{{ucwords(convert_number_to_words($invoice_mst[0]->Paid))}} Only/-</td>
   <td height="15" ><div align="right"><strong>{{number_format($invoice_mst[0]->Balance,2)}}</strong></div></td>
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