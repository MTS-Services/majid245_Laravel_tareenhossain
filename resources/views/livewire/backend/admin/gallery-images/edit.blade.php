<section>
    <div class="glass bg-white rounded-2xl p-6 mb-6">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-bold text-text-black dark:text-text-white">{{ __('Gallery Image Edit') }}</h2>
            <div class="flex items-center gap-2">
                <x-ui.button href="{{ route('admin.gallery-image.index') }}" class="w-auto! py-2!">
                    <flux:icon name="arrow-left"
                        class="w-4 h-4 stroke-text-btn-primary group-hover:stroke-text-btn-secondary" />
                    {{ __('Back') }}
                </x-ui.button>
            </div>
        </div>
    </div>
    <div class="glass bg-white rounded-2xl p-6 mb-6">
        <form wire:submit="save">
            <div class="mt-6 space-y-4 grid grid-cols-2 gap-5">
                <div class="w-full">
                    <x-ui.label value="{{ __('Gallery Category') }}" class="mb-1" />
                    <x-ui.select wire:model="form.gallery_category_id">
                        <option value="">{{ __('Select Category') }}</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </x-ui.select>
                    <x-ui.input-error :messages="$errors->get('form.gallery_category_id')" />
                </div>
                <div class="w-full">
                    <x-ui.label value="{{ __('Image Alt Text') }}" class="mb-1" />
                    <x-ui.input type="text" placeholder="{{ __('Enter Image Alt Text') }}" wire:model="form.alt" />
                    <x-ui.input-error :messages="$errors->get('form.alt')" />
                </div>
                <div class="w-full col-span-2">
                    <x-ui.label value="{{ __('Image') }}" class="mb-1" />
                    <input type="file" wire:model="form.image" accept="image/*" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                    <x-ui.input-error :messages="$errors->get('form.image')" />

                    <div class="mt-4">
                        <p class="text-sm text-gray-600 mb-2">{{ __('Current Image:') }}</p>
                        @if ($form->image)
                            <img src="{{ $form->image->temporaryUrl() }}" alt="Preview" class="w-48 h-48 object-cover rounded-lg border">
                        @else
                            <img src="{{ asset('storage/' . $model->image) }}" alt="{{ $model->alt ?? 'Gallery Image' }}" class="w-48 h-48 object-cover rounded-lg border">
                        @endif
                    </div>
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
