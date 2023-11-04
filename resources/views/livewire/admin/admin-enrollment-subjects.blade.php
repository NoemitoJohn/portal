<table class="w-full text-center">
    <tr>
        <th>Section</th>
        <th>Code</th>
        <th>Name</th>
        <th>Unit</th>
        <th>Students</th>
        <th>Schedule</th>
        <th></th>
    </tr>

    @foreach ($subjects as $subject)
        <tr>
            <td>{{$subject['section']}}</td>
            <td>{{$subject['code']}}</td>
            <td>{{$subject['name']}}</td>
            <td>{{$subject['unit']}}</td>
            <td>{{$subject['students']}}</td>
            <td>{{$subject['day']}} ({{$subject['time']}}) {{$subject['room']}}</td>
            <td><button wire:click="remove({{$subject['id']}})" class="underline">Remove</button></td>
        </tr>
    @endforeach



</table>
