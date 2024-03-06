<!DOCTYPE html>

<html>

<head>
    <title>CONGRATULATIONS, Registration complete for Elite Holiday Camp</title>
</head>

<body>
@php
    $campName = $registration->camp==='football'?'Football Camp':'Multi Sport Camp';
    $locationName = $arrivalTime = $food = $collection = $paymentLink = "";
    if($registration->location === 'beachhall') {
        $locationName = "Beech Hall School Riyadh";
        $arrivalTime = "8:45am – 9.00am";
        $collection = "3:15pm – 3:30pm";
        $food = "Please pack your child with sufficient food for 2 snacks, lunch and a water bottle (refillable water is available)";
    } elseif($registration->location === 'reigate') {
        $locationName = "Reigate Grammar School Riyadh";
        $arrivalTime = "8:15am – 8:30am";
        $collection = "3:15pm – 3:30pm";
        $food = "Please pack your child with sufficient food for 2 snacks, lunch and a water bottle (refillable water is available)";
    } elseif($registration->location === 'kings') {
        $locationName = "Kings College Riyadh";
        $arrivalTime = "8:15am – 8:30am";
        $collection = $registration->camp==='football'?'1.00pm – 1.15pm':'3:15pm – 3:30pm';
        $food = "Please pack your child with sufficient food for 2 snacks, lunch and a water bottle (refillable water is available)";
        $paymentLink = "https://secure.telr.com/gateway/ql/EliteSportsAcademyLLC_838314.html";
    }
@endphp

<p>Dear {{ $registration->parent_name }},</p>
<p>Thank you for registering for the Elite Sports Academy {{$campName}} at {{ $locationName }}</p>
<table>
    <tr><td>Child name:</td><td>{{ $registration->child_name }}</td></tr>
    <tr><td>Child age:</td><td>{{ $registration->age }}</td></tr>
    <tr><td>Phone number:</td><td>{{ $registration->phone }}</td></tr>
    <tr><td>Email address:</td><td>{{ $registration->email }}</td></tr>
    <tr><td>Medical conditions:</td><td>{{ $registration->medical }}</td></tr>
</table>
<p><b>Holiday Camp Details:</b></p>
<p>We are excited to welcome your child and would like to provide you with some important information:</p>
<ul>
    <li><b>Dates:</b> Sunday 31st March – Thursday 4th April</li>
    <li><b>Location:</b> {{ $locationName }}</li>
    <li><b>Facilities:</b> Activities will be mainly indoor, the coaches may do a small amount of games outside if the weather is cool.</li>

    <li><b>Arrival Time:</b> {{$arrivalTime}}</li>
    <li><b>Collection:</b> {{$collection}}</li>

    <li><b>Food and drink:</b> {{ $food }}</li>
    <li><b>Clothing:</b> Comfortable sports clothes with trainers</li>
    <li><b>Toilet:</b> Children MUST be toilet trained, as we do not allow our coaches to enter bathrooms with children, due to safeguarding guidelines.</li>
    <li><b>Ramadan:</b> As camp is falling during the holy month of Ramadan, food and drink will only be allowed in the cafeteria and that any children fasting will be separated during breaks.</li>
    <li><b>What NOT to bring:</b> We kindly ask for no electronics or toys / Pokemon cards etc. to be bought to camp, as we will focus on sport for the duration of the day and want to ensure no children lose / damage their belongings.</li>
</ul>

<p style="padding: 5px;font-size:18px;font-weight: bold;">
    @if($paymentLink)
        <span style="padding: 5px;background-color: #FFFF00;">To complete your payment and registration, please follow the link </span><a href="{{ $paymentLink }}" style="color: blue;">here</a>
    @else
        <b>Our Team will be in touch to advise how to make payment</b>.
    @endif
</p>
<p>
    We look forward to seeing you at the camp and hope your child has a great week ahead.
    <br>
    If you need to reach us, please contact: <a href="mailto:info@elitesportsksa.com">info@elitesportsksa.com</a> / <a href="https://wa.me/966502428451?text=HI%20there%21">+966 50 242 8451</a> (WhatsApp)
</p>
<br>
<p>Kind Regards,
    <br>
    The Elite Sports Academy Team
</p>
</body>
