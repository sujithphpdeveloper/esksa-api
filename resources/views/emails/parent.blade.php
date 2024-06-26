<!DOCTYPE html>

<html>

<head>
    <title>CONGRATULATIONS, Registration complete for Elite Holiday Camp</title>
</head>

<body>
@php
    $campName = '';

    switch($registration->camp) {
        case 'football':
            $campName = 'Football Camp';
            break;

        case 'football-trials':
            $campName = 'Football Trials';
            break;

        case 'multisport':
            $campName = 'Multi Sport Camp';
            break;
    }

    $locationName = $arrivalTime = $food = $collection = $paymentLink = "";
    if($registration->location === 'beachhall') {
        $locationName = "Beech Hall School Riyadh";
        $arrivalTime = "8.15am - 8.30am";
        $collection = "3:15pm – 3:30pm";
        $food = "Please pack your child with sufficient food for 2 snacks, lunch and a water bottle (refillable water is available)";
        $paymentLink = "";
    } elseif($registration->location === 'reigate') {
        $locationName = "Reigate Grammar School Riyadh";
        $arrivalTime = "8:15am – 8:30am";
        $collection = "3:15pm – 3:30pm";
        $food = "Please pack your child with sufficient food for 2 snacks, lunch and a water bottle (refillable water is available)";
        $paymentLink = "";
    } elseif($registration->location === 'british1') {
        $locationName = "British International School Riyadh - Diplomatic Quarter";
        $arrivalTime = "8:15am – 8:30am";
        $collection = "3:15pm – 3:30pm";
        $food = "Please pack your child with sufficient food for 2 snacks, lunch and a water bottle (refillable water is available)";
        $paymentLink = "";
    } elseif($registration->location === 'british2') {
        $locationName = "British International School Riyadh- Al Hamra";
        $arrivalTime = "8:15am – 8:30am";
        $collection = "3:15pm – 3:30pm";
        $food = "Please pack your child with sufficient food for 2 snacks, lunch and a water bottle (refillable water is available)";
        $paymentLink = "";
    } elseif($registration->location === 'kings') {
        $locationName = "King's College Riyadh";
        $arrivalTime = "8:15am – 8:30am";
        $collection = $registration->camp==='football'?'1.00pm – 1.15pm':'3:15pm – 3:30pm';
        $food = "Please pack your child with sufficient food for 2 snacks, lunch and a water bottle (refillable water is available)";
        if($registration->camp==='football')
            $paymentLink = "";
        else
            $paymentLink = "";
    }
@endphp

<p>Dear {{ $registration->parent_name }},</p>

@if ($registration->camp==='football-trials')

    <p>We hope this message finds you well.</p>

    <p>We are writing to confirm your registration for the Elite Sports Academy Football Trials and Open Session, scheduled for May 18th between the times 4:00 PM to 7:00 PM (we will be in touch with exact timings closer to the date). We appreciate your commitment to this event and look forward to seeing your child participate.</p>

    <p>The session will be held at King's College Riyadh and you can find the location using the following link: <a href="https://maps.app.goo.gl/QRXhy3ptma3o1fyq9">Click Here For King's College Riyadh Location.</a> Please ensure timely arrival to make the most of the session.</p>

    <p>We recommend that your child wears comfortable sports clothes and suitable footwear for the event, King's College has both indoor and outdoor facilities, we recommend wearing astroturf football trainers. Please ensure you bring plenty of water and suncream if necessary.</p>
@else


    <p>Thank you for registering for the Elite Sports Academy {{$campName}} at {{ $locationName }}</p>
    <table>
        <tr><td>Child name:</td><td>{{ $registration->child_name }}</td></tr>
        <tr><td>Child age:</td><td>{{ $registration->age }}</td></tr>
        <tr><td>Phone number:</td><td>{{ $registration->phone }}</td></tr>
        <tr><td>Email address:</td><td>{{ $registration->email }}</td></tr>
        <tr><td>Gender:</td><td>{{ $registration->gender }}</td></tr>
        <tr><td>Photo Consent:</td><td>{{ $registration->photo_consent }}</td></tr>
        <tr><td>Medical conditions:</td><td>{{ $registration->medical }}</td></tr>
    </table>
    <p><b>Holiday Camp Details:</b></p>
    <p>We are excited to welcome your child and would like to provide you with some important information:</p>
    <ul>
        <li><b>Dates:</b> {{ implode(', ', $registration->attributes['weeks']) }}</li>
        <li><b>Location:</b> {{ $locationName }}</li>
        <li><b>Facilities:</b> Activities will be mainly indoor, the coaches may do a small amount of games outside if the weather is cool enough in the morning.</li>

        <li><b>Arrival Time:</b> {{$arrivalTime}}</li>
        <li><b>Collection:</b> {{$collection}}</li>

        <li><b>Food and drink:</b> {{ $food }}</li>
        <li><b>Clothing:</b> Comfortable sports clothes with indoor trainers</li>
        <li><b>Toilet:</b> Children MUST be toilet trained, as we do not allow our coaches to enter bathrooms with children, due to safeguarding guidelines.</li>
        {{--    <li><b>Ramadan:</b> As camp is falling during the holy month of Ramadan, food and drink will only be allowed in the cafeteria and that any children fasting will be separated during breaks.</li>--}}
        <li><b>What NOT to bring:</b> We kindly ask for no electronics or toys / Pokemon cards etc. to be bought to camp, as we will focus on sport for the duration of the day and want to ensure no children lose / damage their belongings.</li>
    </ul>

    <p style="padding: 5px;font-size:18px;font-weight: bold;">
        @if($paymentLink)
            <span style="padding: 5px;background-color: #FFFF00;">To complete your payment and registration, please follow the link </span><a href="{{ $paymentLink }}" style="color: blue;">here</a>
        @else
            <b> Please note that we will send you an email shortly with the payment information inclusive of any offers if applicable.</b>.
        @endif
    </p>
    <p>
        We look forward to seeing you at the camp and hope your child has a great week ahead.
    </p>
@endif

<p>
    If you need to reach us, please contact: <a href="mailto:info@elitesportsksa.com">info@elitesportsksa.com</a> / <a href="https://wa.me/966502428451?text=HI%20there%21">+966 50 242 8451</a> (WhatsApp)
</p>
<br>
<p>Kind Regards,
    <br>
    The Elite Sports Academy Team
</p>
</body>
