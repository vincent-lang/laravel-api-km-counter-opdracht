<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach($rides as $ride)
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-12">
                <div class="flex justify-evenly p-6 text-gray-900">
                    <div>
                        <span class="font-bold">{{("Ophaal adres: ")}}</span>
                        <span>{{$ride->pick_up_adress}}</span>
                    </div>
                    <div>
                        <span class="font-bold">{{("Aflever adres: ")}}</span>
                        <span>{{$ride->drop_off_adress}}</span>
                    </div>
                    <div>
                        <span class="font-bold">{{("Voortgang: ")}}</span>
                        <span>{{$ride->progress}}</span>
                    </div>
                    <div>
                        <span class="font-bold">{{("Afstand: ")}}</span>
                        <span>{{round($ride->distance / 1000,1)}} km</span>
                    </div>
                    <div>
                        <span class="font-bold">{{("Prijs: ")}}</span>
                        <span>€ {{$ride->totalPrice}}</span>
                    </div>
                    <div>
                        <a href="{{route('progress.edit', [$ride->id, $ride->user->id])}}">&#9999;</a>
                    </div>
                    <div>
                        <form action="{{route('progress.delete', [$ride->id, $ride->user->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">&#10006;</button>
                        </form>
                    </div>
                </div>
                <div class="flex justify-evenly p-6 text-gray-900">
                    <div>
                        <span class="font-bold">{{("Naam: ")}}</span>
                        <span>{{$ride->user->name}}</span>
                    </div>
                    <div>
                        <span class="font-bold">{{("E-mail: ")}}</span>
                        <span>{{$ride->user->email}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>