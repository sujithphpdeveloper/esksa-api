<!DOCTYPE html>

<html>

<head>

    <title>Registration</title>

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

            case 'multi-sport':
                $campName = 'Multi Sport Camp';
                break;
        }
@endphp
<h2>Registration Details</h2>
<table style="border:1px solid #000000;" cellpadding="2" cellspacing="0">
    <tr><th>Registration Number </th>
        <th>Parent Name</th>
        <th>Child Name</th>
        <td>Age</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Medical Condition</td>
        <td>Camp</td>
        <td>Location</td>
        <td>Gender</td>
        <td>Consent for Photo/Video</td>
        <td>Registered On</td>
    </tr>
    <tr>
        <td>{{ $registration->id }}</td>
        <td>{{ $registration->parent_name }}</td>
        <td>{{ $registration->child_name }}</td>
        <td>{{ $registration->age }}</td>
        <td>{{ $registration->email }}</td>
        <td>{{ $registration->phone }}</td>
        <td>{{ $registration->medical }}</td>
        <td>
            {{ $campName }}
        </td>
        <td>
            @if($registration->location === 'beachhall')
                Beech Hall School Riyadh
            @elseif($registration->location === 'reigate')
                Reigate Grammar School Riyadh
            @elseif($registration->location === 'kings')
                Kings College Riyadh
            @endif
        </td>
        <td>{{ $registration->gender }}</td>
        <td>{{ $registration->photo_consent }}</td>
        <td>{{ $registration->created_at->format('Y-m-j H:i:s') }}</td>
    </tr>
</table>


</body>
