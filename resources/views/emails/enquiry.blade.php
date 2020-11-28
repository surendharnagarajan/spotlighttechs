<html>
<head>
    <title>Course Enquiry Mail from {{ $mail['name'] }}</title>
</head>
<body>
    <table style="width: 500px; font-family: arial; font-size: 14px;" border="1">
    <tr style="height: 32px;">
        <th align="right" style="width:150px; padding-right:5px;">Name:</th>
        <td align="left" style="padding-left:5px; line-height: 20px;">{{ $mail['name'] }}</td>
    </tr>
    <tr style="height: 32px;">
        <th align="right" style="width:150px; padding-right:5px;">Mobile Number:</th>
        <td align="left" style="padding-left:5px; line-height: 20px;">{{ $mail['phone'] }}</td>
    </tr>
    <tr style="height: 32px;">
        <th align="right" style="width:150px; padding-right:5px;">E-mail:</th>
        <td align="left" style="padding-left:5px; line-height: 20px;">{{ $mail['email'] }}</td>
    </tr>
    <tr style="height: 32px;">
        <th align="right" style="width:150px; padding-right:5px;">Choosing course:</th>
        <td align="left" style="padding-left:5px; line-height: 20px;">{{ $mail['course'] }}</td>
    </tr>
    <tr style="height: 32px;">
        <th align="right" style="width:150px; padding-right:5px;">Message:</th>
        <td align="left" style="padding-left:5px; line-height: 20px;">{{ $mail['message'] }}</td>
    </tr>
    </table>
</body>
</html>