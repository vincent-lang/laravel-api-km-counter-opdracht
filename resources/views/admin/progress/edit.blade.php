<x-app-layout>
    <form action="{{route('progress.update', [$ride->id, $user->id])}}" method="post">
        @csrf
        @method('put')
        <div class="flex justify-center mt-44 bg-white overflow-hidden shadow-sm sm:rounded-lg max-w-sm mx-auto sm:px-6 lg:px-8 py-8">
            <div class="mr-3">
                <div class="mt-3">
                    <select name="progress" required>
                        <option value="">Kies de voortgang...</option>
                        @if($ride->progress == 'planned')
                        <option value="planned" disabled>Gepland</option>
                        @else
                        <option value="planned">Gepland</option>
                        @endif
                        @if($ride->progress == 'ongoing')
                        <option value="ongoing" disabled>Bezig</option>
                        @else
                        <option value="ongoing">Bezig</option>
                        @endif
                        @if($ride->progress == 'executed')
                        <option value="executed" disabled>Gedaan</option>
                        @else
                        <option value="executed">Gedaan</option>
                        @endif
                    </select>
                </div>
                <div class="flex items-center mt-3 justify-center">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>