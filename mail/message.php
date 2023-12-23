<?php
// $name = '';
// $email = '';
// $phone = '';
// $msg = '';

$message = '<div>
      <p>Hello Admin,</p>
      <p class="lp">You got a mail from Website for <b>"' . $from . '"</b></p>
      <p>Please find the detail below:</p>
      <table style="font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 40%;">';
$message .= isset($name) ? '<tr>
              <td style="border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;">Name</td>
              <td style="border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;">' . $name . '</td>
          </tr>' : '';
$message .= isset($phone) ? '<tr>
              <td style="border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;">Mobile</td>
              <td style="border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;">' . $phone . '</td>
          </tr>' : '';
$message .= isset($email) ? '<tr>
              <td style="border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;">City</td>
              <td style="border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;">' . $email . '</td>
          </tr>' : '';
$message .= isset($msg) ? '<tr>
              <td style="border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;">Message</td>
              <td style="border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;">' . $msg . '</td>
          </tr>' : '';
$message .= isset($city) ? '<tr>
              <td style="border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;">City</td>
              <td style="border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;">' . $city . '</td>
          </tr>' : '';
$message .= isset($course) ? '<tr>
              <td style="border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;">Course</td>
              <td style="border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;">' . $course . '</td>
          </tr>' : '';
$message .= ' </table>
  </div><br>
  <b>Thank You Regards <br />Multitech Institute</b>';
