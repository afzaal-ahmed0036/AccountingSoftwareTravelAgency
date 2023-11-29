
<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf-8">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no, date=no, address=no, email=no">
  <!--[if mso]>
    <xml><o:officedocumentsettings><o:pixelsperinch>96</o:pixelsperinch></o:officedocumentsettings></xml>
  <![endif]-->
    <title>Invoice</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700" rel="stylesheet" media="screen">
    <style>
.hover-underline:hover {
  text-decoration: underline !important;
}
@media (max-width: 600px) {
  .sm-w-full {
    width: 100% !important;
  }
  .sm-px-24 {
    padding-left: 24px !important;
    padding-right: 24px !important;
  }
  .sm-py-32 {
    padding-top: 32px !important;
    padding-bottom: 32px !important;
  }
  .sm-leading-32 {
    line-height: 32px !important;
  }
}
</style>
</head>

<?php 
$company = DB::table('company')->get();
 ?>

 <?php 

$invoice_master = DB::table('v_invoice_master')->where('InvoiceMasterID',$InvoiceMasterID)->get(); ?>


<body style="margin: 0; width: 100%; padding: 0; word-break: break-word; -webkit-font-smoothing: antialiased; background-color: #eceff1;">
    <div style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly; display: none;">Your account on PixInvent is deactivated.</div>
  <div role="article" aria-roledescription="email" aria-label="Account Deactivated 😔" lang="en" style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly;">
    <table style="width: 100%; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif;" cellpadding="0" cellspacing="0" role="presentation">
      <tr>
        <td align="center" style="mso-line-height-rule: exactly; background-color: #eceff1; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif;">
          <table class="sm-w-full" style="width: 600px;" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
  <td class="sm-py-32 sm-px-24" style="mso-line-height-rule: exactly; padding: 48px; text-align: center; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif;">
    
  </td>
</tr>
              <tr>
                <td align="center" class="sm-px-24" style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly;">
                  <table style="width: 100%;" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <td class="sm-px-24" style="mso-line-height-rule: exactly; border-radius: 4px; background-color: #ffffff; padding: 48px; text-align: left; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; font-size: 16px; line-height: 24px; color: #626262;">
                        <p style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly; margin-bottom: 0; font-size: 20px; font-weight: 600;">Dear</p>
                        <p style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly; margin-top: 0; font-size: 24px; font-weight: 700; color: #ff5850;">{{$invoice_master[0]->PartyName}}!</p>
                        <p class="sm-leading-32" style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly; margin: 0; margin-bottom: 16px; font-size: 24px; font-weight: 600; color: #263238;">
                          Your invoice reference no is :  {{$invoice_master[0]->InvoiceCode}}
                        </p>
                        <p style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly;">Dear customer, please find the attached invoice for your record. If you have any query please call us back for further assitance. </p>
                       
                     
                        <table style="width: 100%;" cellpadding="0" cellspacing="0" role="presentation">
  <tr>
    <td style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly; padding-top: 32px; padding-bottom: 32px;">
      <div style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly; height: 1px; background-color: #eceff1; line-height: 1px;">&zwnj;</div>
    </td>
  </tr>
</table>



<p style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly; margin: 0; margin-bottom: 16px;">Thanks, <br><strong>{{$company[0]->Name}}</strong> <br>
 {{$company[0]->Address}}<br>
    {{$company[0]->Contact}}<br>
    {{$company[0]->Email}}</p>
                      </td>
                    </tr>
                    <tr>
  <td style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly; height: 20px;"></td>
</tr>
<tr>
  <td style="mso-line-height-rule: exactly; padding-left: 48px; padding-right: 48px; font-family: Montserrat, -apple-system, 'Segoe UI', sans-serif; font-size: 14px; color: #eceff1;">
    <p align="center" style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly; margin-bottom: 16px; cursor: default;">
     
    </p>
    <p style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly; color: #263238;">
      Use of our service and website is subject to our
      <a href="#" class="hover-underline" style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly; color: #7367f0; text-decoration: none;">Terms of Use</a> and
      <a href="#" class="hover-underline" style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly; color: #7367f0; text-decoration: none;">Privacy Policy</a>.
    </p>
  </td>
</tr>
<tr>
  <td style="font-family: 'Montserrat', sans-serif; mso-line-height-rule: exactly; height: 16px;"></td>
</tr>
                  </table>
                </td>
              </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>

