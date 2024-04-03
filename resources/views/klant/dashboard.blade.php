<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="bg-white p-6 font-semibold text-xl text-gray-800 leading-tight border-b-2">
                {{ __('Gepland') }}
            </h2>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if($plannedRides->isNotEmpty())
                @foreach($plannedRides as $ride)
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
                </div>
                @endforeach
                @else
                <div class="flex justify-evenly p-6 text-gray-900">
                    {{__("Er zijn geen geplande ritten op dit moment.")}}
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="bg-white p-6 font-semibold text-xl text-gray-800 leading-tight border-b-2">
                {{ __('Bezig') }}
            </h2>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if($ongoingRides->isNotEmpty())
                @foreach($ongoingRides as $ride)
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
                </div>
                @endforeach
                @else
                <div class="flex justify-evenly p-6 text-gray-900">
                    {{__("Er zijn geen ritten bezig op dit moment.")}}
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="bg-white p-6 font-semibold text-xl text-gray-800 leading-tight border-b-2">
                {{ __('Gedaan') }}
            </h2>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if($executedRides->isNotEMpty())
                @foreach($executedRides as $ride)
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
                </div>
                @endforeach
                @else
                <div class="flex justify-evenly p-6 text-gray-900">
                    {{__("Er zijn geen ritten gedaan op dit moment.")}}
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>