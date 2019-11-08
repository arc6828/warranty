<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>PDF</title>
  <style type="text/css">
  .a {
      padding-left: 5.0em
    }
  .b{
      padding-left: 2.0em
    }
  .c{
      padding-left: 25.0em
  }

  @font-face{
  font-family:  'THSarabunNew';
  font-style: normal;
  font-weight: normal;
  src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
  }
  @font-face{
  font-family:  'THSarabunNew';
  font-style: normal;
  font-weight: bold;
  src: url("{{ asset('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
  }
  @font-face{
  font-family:  'THSarabunNew';
  font-style: italic;
  font-weight: normal;
  src: url("{{ asset('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
  }
  @font-face{
  font-family:  'THSarabunNew';
  font-style: italic;
  font-weight: bold;
  src: url("{{ asset('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
  }
  body{
    font-family: "THSarabunNew";
    font-size : 14pt;
    
    line-height: 0.9;
    padding: 15px;
  }
  p {
    line-height: 1;
    padding: 0px;
    margin: 0px;
  }
  table, th, td {
    border-collapse: collapse;
  }
  .page-break {
      page-break-after: always;
  }
  @page {
    size: A4;
  }
  @media print {
    html, body {
      width: 210mm;
      height: 297mm;
      /*font-size : 16px;*/
    }
  }
  </style>
</head>
<body >
  @include('pdf_1-1')
  @include('pdf_2-1')
  @include('pdf_3-1')
  @include('pdf_4-1')
</body>
</html>