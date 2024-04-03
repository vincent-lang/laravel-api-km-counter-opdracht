<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Company Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Add your company here.") }}
        </p>
    </header>

    <form method="post" action="{{ route('company.store') }}" class="mt-6 space-y-6">
        @csrf
        @method('post')
        <div class="flex">
            <div class="block w-full">
                <div class="mt-3">
                    <x-input-label for="company_name" />
                    <x-text-input id="company_name" name="company_name" type="text" placeholder="Company name" required />
                    <x-input-error class="mt-2" :messages="$errors->get('company_name')" />
                </div>

                <div class="mt-3">
                    <x-input-label for="street" />
                    <x-text-input id="street" name="street" type="text" placeholder="Street" required />
                    <x-input-error class="mt-2" :messages="$errors->get('street')" />
                </div>

                <div class="mt-3">
                    <x-input-label for="house_number" />
                    <x-text-input id="house_number" name="house_number" type="text" placeholder="House number" required />
                    <x-input-error class="mt-2" :messages="$errors->get('house_number')" />
                </div>

                <div class="mt-3">
                    <x-input-label for="zipcode" />
                    <x-text-input id="zipcode" name="zipcode" type="text" placeholder="Zipcode" required />
                    <x-input-error class="mt-2" :messages="$errors->get('zipcode')" />
                </div>
            </div>
            <div class="block w-full">
                <div class="mt-3">
                    <x-input-label for="place" />
                    <x-text-input id="place" name="place" type="text" placeholder="Place" required />
                    <x-input-error class="mt-2" :messages="$errors->get('place')" />
                </div>

                <div class="mt-3">
                    <x-input-label for="country" />
                    <x-text-input id="country" name="country" type="text" placeholder="Country" required />
                    <x-input-error class="mt-2" :messages="$errors->get('country')" />
                </div>

                <div class="mt-3">
                    <x-input-label for="kvk_number" />
                    <x-text-input id="kvk_number" name="kvk_number" type="text" placeholder="Kvk number" required />
                    <x-input-error class="mt-2" :messages="$errors->get('kvk_number')" />
                </div>

                <div class="mt-3">
                    <x-input-label for="phone_number" />
                    <x-text-input id="phone_number" name="phone_number" type="text" placeholder="Phone number" required />
                    <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
                </div>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>