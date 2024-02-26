<!DOCTYPE html>

<html>

<head>

    <title>Registration</title>

</head>

<body>

<h2>Registration Details</h2>
<table>
    <tr><td>Registration Number </td><td>{{ $registration->id }}</td></tr>
    <tr><td>Parent Name</td><td>{{ $registration->parent_name }}</td></tr>
    <tr><td>Child Name</td><td>{{ $registration->child_name }}</td></tr>
    <tr><td>Age</td><td>{{ $registration->age }}</td></tr>
    <tr><td>Email</td><td>{{ $registration->email }}</td></tr>
    <tr><td>Phone</td><td>{{ $registration->phone }}</td></tr>
    <tr><td>Camp</td><td>{{ $registration->camp==='football'?'Football':'Multi Sport' }}</td></tr>
    <tr><td>Location</td><td>
            @if($registration->location === 'aldenham')
                Aldenham Prep School, Riyadh
            @elseif($registration->location === 'reigate')
                Reigate Grammar School Riyadh
            @elseif($registration->location === 'kings')
                Kings College Riyadh
            @endif
        </td></tr>
    <tr><td>Registered On</td><td>{{ $registration->created_at->format('Y-m-j H:i:s') }}</td></tr>
</table>


</body>
