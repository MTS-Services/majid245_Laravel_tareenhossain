{{-- <section>
    <div class="glass bg-white rounded-2xl p-6 mb-6">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-bold text-text-black dark:text-text-white">{{ __('FAQ View') }}</h2>
            <div class="flex items-center gap-2">
                <x-ui.button href="{{ route('admin.faq.index') }}" class="w-auto! py-2!">

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
                        class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Update Airport Price') }}</span>
                    <span wire:loading wire:target="save"
                        class="text-text-btn-primary group-hover:text-text-btn-secondary">{{ __('Updating...') }}</span>
                </x-ui.button>
            </div>
        </form>
    </div>
</section>
 --}}
<div>
    {{-- Page Header --}}

    <div class="bg-white w-full rounded">
        <div class="mx-auto">
            <div class="bg-white rounded-2xl p-4 lg:p-6 mb-6">
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <h2 class="text-xl lg:text-2xl font-bold text-text-black dark:text-text-white">
                        {{ __('Admin Details') }}
                    </h2>
                    <div class="flex items-center gap-2 w-full sm:w-auto">
                        <x-ui.button href="{{ route('admin.um.admin.index') }}" class="w-auto py-2!">
                            <flux:icon name="arrow-left"
                                class="w-4 h-4 stroke-text-btn-primary group-hover:stroke-text-btn-secondary" />
                            {{ __('Back') }}
                        </x-ui.button>
                    </div>
                </div>
            </div>
            <!-- Main Card -->
            <div class="bg-bg-primary rounded-2xl shadow-lg overflow-hidden border border-gray-500/20">


                <div class="bg-white shadow-glass-card rounded-xl p-6 min-h-[500px]">
                    <!-- Product Data Section -->
                    <div class="px-8 py-8">
                        <div class="mb-10">
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

                                <div class="bg-slate-50 dark:bg-gray-200 rounded-lg p-4 border border-slate-200">
                                    <p class="text-black text-xs font-semibold mb-2 uppercase">{{ __('Question') }}
                                    </p>

                                    <p class="text-slate-600 text-lg font-bold">{{ $model->question }}</p>
                                </div>

                                <div class="bg-slate-50 dark:bg-gray-200 rounded-lg p-4 border border-slate-200">
                                    <p class="text-black text-xs font-semibold mb-2 uppercase">{{ __('Answer') }}
                                    </p>
                                    <p class="text-slate-600 text-lg font-bold">{{ $model->answer }}</p>
                                </div>
                                <div class="bg-slate-50 dark:bg-gray-200 rounded-lg p-4 border border-slate-200">
                                    <p class="text-black text-xs font-semibold mb-2 uppercase">{{ __('Status') }}
                                    </p>
                                    <p class="text-slate-600 text-lg font-bold">{{ $model->status }}</p>
                                </div>
                                <div class="bg-slate-50 dark:bg-gray-200 rounded-lg p-4 border border-slate-200">
                                    <p class="text-black text-xs font-semibold mb-2 uppercase">
                                        {{ __('Eight Seater Price') }}</p>
                                    <p class="text-slate-600 text-lg font-bold">
                                        {{ $model->eight_seater_price ?? 'N/A' }}
                                    </p>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
