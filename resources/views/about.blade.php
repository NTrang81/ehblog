<html>
<head>
    <title>About Us</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="px-4">
    <div class="bg-blue-100 p-4 rounded">
        @php
        $announcement = "We hebben een nieuwe aankondiging! Probeer deze stijl te vermijden, data hoort in de controller thuis";
        @endphp
        <p>Extra mededeling {{$announcement}}.</p>
    </div>


    <p>De persoon is {{$person}}.</p>

    @if($person == 'Nico Deblauwe') <b>Supermooie naam!</b> @endif

    <p>Dit is tekst <b>in het vet</b>.</p>

    <p>Zijn/haar leeftijd is {{ $age }}</p>

    <div>
        @dump($person)
    </div>

    <h1 class="font-bold text-xl mt-4">Hobbies</h1>
    <p>{{$person}} heeft {{ count($hobbies) }} hobby's.</p>
    <ul class="list-disc list-inside">
    @foreach($hobbies as $hobby)
        <li>{{ $hobby }}</li>
    @endforeach
    </ul>

    <h1  class="font-bold text-xl mt-4">Familie</h1>
    <p>{{$person}} heeft {{ count($family) }} gezinsleden.</p>
    <ul class="list-disc list-inside">
        @foreach($family as $member)
            <li>
                {{ $member['name'] }}
                @if($member['gender'] == 'female')
                    <span class="text-pink-500">(Female)</span>
                @else
                    <span class="text-blue-500">(Male)</span>
                @endif
            </li>
        @endforeach
    </ul>

    <h1 class="font-bold text-xl mt-4">Familie</h1>
    <p>{{$person}} heeft {{ count($family) }} gezinsleden.</p>
    <ul>
        @foreach($familyAsObject as $member)
            <li>{{ $member->name }} ({{$member->gender}})</li>
        @endforeach
    </ul>




</body>
</html>