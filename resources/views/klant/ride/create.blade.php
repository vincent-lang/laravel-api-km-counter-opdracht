<x-app-layout>
    <form action="{{route('ride.store')}}" method="post">
        @csrf
        @method('post')
        <div class="flex justify-center mt-44 bg-white overflow-hidden shadow-sm sm:rounded-lg max-w-sm mx-auto sm:px-6 lg:px-8 py-8">
            <div class="mr-3">
                <div class="mt-3">
                    <x-input-label for="pick_up_adress" />
                    <x-text-input id="pick_up_adress" name="pick_up_adress" type="text" placeholder="Pick up adress" required />
                    <x-input-error class="mt-2" :messages="$errors->get('pick_up_adress')" />
                </div>

                <div class="mt-3">
                    <x-input-label for="drop_off_adress" />
                    <x-text-input id="drop_off_adress" name="drop_off_adress" type="text" placeholder="Drop off adress" onfocusout="save()" required />
                    <x-input-error class="mt-2" :messages="$errors->get('drop_off_adress')" />
                </div>
                <div class="mt-3">
                    <x-input-label for="distance" />
                    <x-text-input id="distance" name="distance" type="text" placeholder="distance" required hidden />
                    <x-input-error class="mt-2" :messages="$errors->get('distance')" />
                </div>
                <div class="mt-3">
                    <x-input-label for="totalPrice" />
                    <x-text-input id="totalPrice" name="totalPrice" type="text" placeholder="totalPrice" required hidden />
                    <x-input-error class="mt-2" :messages="$errors->get('totalPrice')" />
                </div>
                <div class="flex items-center mt-3 justify-center">
                    <x-primary-button>{{ __('Save') }}</x-primary-button>
                </div>
            </div>
        </div>
    </form>
    <div>
        <input id="kmPrice" value="{{$total->price}}" hidden />
    </div>
    <script src="/js/apiCall.js"></script>
    <script src="/js/priceCounter.js"></script>
</x-app-layout>