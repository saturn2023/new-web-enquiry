<!DOCTYPE html>
<html>
<head>
    <title>Website-Enquiry</title>
</head>
<body>
   <h1>Rating {{ $order->input('rate')[0] }}</h1>
@if($order->input('issue-textarea') !== "")
<p> {{ $order->input('issue-textarea');}}</p>
 
  @endif 
  @if($order->input('additional_work') !== "")
<p> {{ $order->input('additional_work');}}</p>
 
  @endif 
</body>
</html>