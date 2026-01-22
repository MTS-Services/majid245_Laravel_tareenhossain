<section>
    <div class="glass bg-white rounded-2xl p-6 mb-6">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-bold text-text-black dark:text-text-white">{{ __('Airport Price Edit') }}</h2>
            <div class="flex items-center gap-2">
                <x-ui.button href="{{ route('admin.airport-price.index') }}" class="w-auto! py-2!">
                    <flux:icon name="arrow-left"
                        class="w-4 h-4 stroke-text-btn-primary group-hover:stroke-text-btn-secondary" />
                    {{ __('Back') }}
                </x-ui.button>
            </div>
        </div>
    </div>
    <div class="glass bg-white rounded-2xl p-6 mb-6">
        <form wire:submit="save">
            <!-- Add other form fields here -->
            <div class="mt-6 space-y-4 grid grid-cols-2 gap-5">
                <div class="w-full">
                    <x-ui.label value="{{ __('Route From') }}" class="mb-1" />
                    <x-ui.input type="text" placeholder="{{ __('Enter Route') }}" wire:model="form.route_from" />
                    <x-ui.input-error :messages="$errors->get('form.route_from')" />
                </div>
                <div class="w-full">
                    <x-ui.label value="{{ __('Executive Saloon Price') }}" class="mb-1" />
                    <x-ui.input type="number" placeholder="{{ __('Enter Executive Saloon Price') }}"
                        wire:model="form.executive_saloon_price" />
                    <x-ui.input-error :messages="$errors->get('form.executive_saloon_price')" />
                </div>
                <div class="w-full">
                    <x-ui.label value="{{ __('Eight Seater Price') }}" class="mb-1" />
                    <x-ui.input type="number" placeholder="{{ __('Enter Eight Seater Price') }}"
                        wire:model="form.eight_seater_price" />
                    <x-ui.input-error :messages="$errors->get('form.eight_seater_price')" />
                </div>
                <div class="w-full">
                    <x-ui.label value="{{ __('Select Status') }}" class="mb-1" />
                    <x-ui.select wire:model="form.status">
                        @foreach ($statuses as $status)
                            <option value="{{ $status['value'] }}">{{ $status['label'] }}</option>
                        @endforeach
                    </x-ui.select>
                    <x-ui.input-error :messages="$errors->get('form.status')" />
                </div>
            </div>

            <!-- Form Actions -->
            <div class="flex items-center justify-end gap-4 mt-6">
                <x-ui.button wire:click="resetForm" variant="tertiary" class="w-auto! py-2!">
                    <flux:icon name="x-circle"
                        class="w-4 h-4 stroke-text-btn-primary group-hover:stroke-text-btn-tertiary" />
                    <span wire:loading.remove wire:target="resetForm"
                        class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Reset') }}</span>
                    <span wire:loading wire:target="resetForm"
                        class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Reseting...') }}</span>
                </x-ui.button>

                <x-ui.button class="w-auto! py-2!" type="submit">
                    <span wire:loading.remove wire:target="save"
                        class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Update') }}</span>
                    <span wire:loading wire:target="save"
                        class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Updating...') }}</span>
                </x-ui.button>
            </div>
        </form>
    </div>
</section>
