<x-app-layout>
    <form action="{{route('price.update')}}" method="post">
        @csrf
        @method('put')
        <div class="flex justify-center mt-44 bg-white overflow-hidden shadow-sm sm:rounded-lg max-w-sm mx-auto sm:px-6 lg:px-8 py-8">
            <div class="mr-3">
                <div class="mt-3">
                    <x-input-label for="price" />
                    <select class="flex justify-center rounded-lg" id="price" name="price" required>
                        <option value="">choose your price...</option>
                        @if ($total->price == 1.34)
                        <option value="1.34" disabled>€ 1,34</option>
                        @else
                        <option value="1.34">€ 1,34</option>
                        @endif
                        @if ($total->price == 2.67)
                        <option value="2.67" disabled>€ 2,67</option>
                        @else
                        <option value="2.67">€ 2,67</option>
                        @endif
                        @if ($total->price == 4.60)
                        <option value="4.60" disabled>€ 4,60</option>
                        @else
                        <option value="4.60">€ 4,60</option>
                        @endif
                        @if ($total->price == 3.57)
                        <option value="3.57" disabled>€ 3,57</option>
                        @else
                        <option value="3.57">€ 3,57</option>
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