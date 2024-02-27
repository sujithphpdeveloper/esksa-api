<!DOCTYPE html>

<html>

<head>
    <title>Thank you for registering for the Elite Sports Academy</title>
</head>

<body>

<p>Dear {{ $registration->parent_name }},</p>
<p>Thank you for registering for the Elite Sports Academy {{ $registration->camp==='football'?'Football':'Multi Sport' }} Camp.</p>
<p>We cannot wait to welcome your child this week, and you will find key details below: -</p>
<ul>
    @if($registration->location === 'aldenham')
        <li><b>Location:</b> Aldenham Grammar School (access via Gate 2)</li>
        <li><b>Arrival Time:</b> Drop off time for the camp is between 8:15 am – 8:30 am (This is to enable us to complete registrations in a controlled environment).</li>
        <li><b>Collection:</b> Pick up times between 3.15 – 3.30pm.</li>
        <li><b>Lunch:</b> Lunch will be provided as part of the registration. Just a water bottle will be required (refillable water is available)</li>
        <li><b>Clothing:</b> Comfortable sports clothes (T-shirt, shorts and trainers)</li>
        <li><b>Toilet:</b> Children MUST be toilet trained, as we do not allow our coaches to enter bathrooms with children, due to safeguarding guidelines.</li>
        <li><b>Ramadan:</b> As camp is falling during the holy month of Ramadan, food and drink will only be allowed in the cafeteria and that any children fasting will be separated during breaks.</li>
        <li><b>What NOT to bring:</b> We kindly ask for no electronics or toys / Pokémon cards etc. to be bought to camp, as we will focus on sport for the duration of the day and want to ensure no children lose / damage their belongings.</li>
    @elseif($registration->location === 'reigate')
        <li><b>Location:</b> Reigate Grammar School Riyadh</li>
        <li><b>Arrival Time:</b> Drop off time for the camp is between 8:15 am – 8:30 am (This is to enable us to complete registrations in a controlled environment).</li>
        <li><b>Collection:</b> Pick up times between 3:15 pm – 3:30 pm.</li>
        <li><b>Food and drink:</b> Please pack your child with sufficient food for 2 snacks, lunch and a water bottle (refillable water is available)</li>
        <li><b>Clothing</b>: Comfortable sports clothes (T-shirt, shorts and trainers)</li>
        <li><b>Toilet:</b> Children MUST be toilet trained, as we do not allow our coaches to enter bathrooms with children, due to safeguarding guidelines.</li>
        <li><b>Ramadan:</b> As camp is falling during the holy month of Ramadan, food and drink will only be allowed in the cafeteria and that any children fasting will be separated during breaks.</li>
        <li><b>What NOT to bring:</b> We kindly ask for no electronics or toys / Pokémon cards etc. to be bought to camp, as we will focus on sport for the duration of the day and want to ensure no children lose / damage their belongings.</li>
    @elseif($registration->location === 'kings')
        <li><b>Location:</b> Kings College Riyadh (access via Gate 2)</li>
        <li><b>Arrival Time:</b> Drop off time for the camp is between 8:15 am – 8:30 am (This is to enable us to complete registrations in a controlled environment).</li>
        <li><b>Collection:</b> Pick up times between 3:15 pm – 3:30 pm.</li>
        <li><b>Food and drink:</b> Please pack your child with sufficient food for 2 snacks, lunch and a water bottle (refillable water is available)</li>
        <li><b>Clothing</b>: Comfortable sports clothes (T-shirt, shorts and trainers)</li>
        <li><b>Toilet:</b> Children MUST be toilet trained, as we do not allow our coaches to enter bathrooms with children, due to safeguarding guidelines.</li>
        <li><b>Ramadan:</b> As camp is falling during the holy month of Ramadan, food and drink will only be allowed in the cafeteria and that any children fasting will be separated during breaks.</li>
        <li><b>What NOT to bring:</b> We kindly ask for no electronics or toys / Pokémon cards etc. to be bought to camp, as we will focus on sport for the duration of the day and want to ensure no children lose / damage their belongings.</li>
    @endif
</ul>
<p><b>To complete your payment and registration, please follow the link <a href="">here</a></b></p>
<br>
<p>We look forward to seeing you at the camp and hope your child has a great week ahead.</p>
<p>If you need to reach us, please contact: <a href="mailto:info@elitesportsksa.com">info@elitesportsksa.com</a></p>
</body>
