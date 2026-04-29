<x-site-layout>

<h1 class="ml-8 mb-4 font-bold text-xl">About us</h1>
  
<body class="ml-8 px-4">
    <div class="bg-blue-100 p-4 rounded">
        @php
        $announcement = "We hebben een nieuwe aankondiging! Probeer deze stijl te vermijden, data hoort in de controller thuis";
        @endphp
        <p>Extra mededeling {{$announcement}}.</p>
    </div>


    <p class="ml-8">De persoon is {{$person}}.</p>

    @if($person == 'Nico Deblauwe') <b>Supermooie naam!</b> @endif

    <p class="ml-8">Dit is tekst <b>in het vet</b>.</p>

    <p class="ml-8">Zijn/haar leeftijd is {{ $age }}</p>

    <div>
        @dump($person)
    </div>

    <h1 class="font-bold text-xl mt-4 ml-4">Hobbies</h1>
    <p class="ml-4">{{$person}} heeft {{ count($hobbies) }} hobby's.</p>
    <ul class="list-disc list-inside ml-8">
    @foreach($hobbies as $hobby)
        <li>{{ $hobby }}</li>
    @endforeach
    </ul>

    <h1  class="font-bold text-xl mt-4 ml-4">Familie</h1>
    <p class="ml-4">{{$person}} heeft {{ count($family) }} gezinsleden.</p>
    <ul class="list-disc list-inside ml-8">
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

</body>
</x-site-layout>