<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input wire:model="form.name" id="name" name="name" type="text" class="mt-1 block w-full" autocomplete="name" placeholder="Name"/>
        @error('form.name')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input wire:model="form.email" id="email" name="email" type="text" class="mt-1 block w-full" autocomplete="email" placeholder="Email"/>
        @error('form.email')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="two_factor_secret" :value="__('Two Factor Secret')"/>
        <x-text-input wire:model="form.two_factor_secret" id="two_factor_secret" name="two_factor_secret" type="text" class="mt-1 block w-full" autocomplete="two_factor_secret" placeholder="Two Factor Secret"/>
        @error('form.two_factor_secret')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="two_factor_recovery_codes" :value="__('Two Factor Recovery Codes')"/>
        <x-text-input wire:model="form.two_factor_recovery_codes" id="two_factor_recovery_codes" name="two_factor_recovery_codes" type="text" class="mt-1 block w-full" autocomplete="two_factor_recovery_codes" placeholder="Two Factor Recovery Codes"/>
        @error('form.two_factor_recovery_codes')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="two_factor_confirmed_at" :value="__('Two Factor Confirmed At')"/>
        <x-text-input wire:model="form.two_factor_confirmed_at" id="two_factor_confirmed_at" name="two_factor_confirmed_at" type="text" class="mt-1 block w-full" autocomplete="two_factor_confirmed_at" placeholder="Two Factor Confirmed At"/>
        @error('form.two_factor_confirmed_at')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="current_team_id" :value="__('Current Team Id')"/>
        <x-text-input wire:model="form.current_team_id" id="current_team_id" name="current_team_id" type="text" class="mt-1 block w-full" autocomplete="current_team_id" placeholder="Current Team Id"/>
        @error('form.current_team_id')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="profile_photo_path" :value="__('Profile Photo Path')"/>
        <x-text-input wire:model="form.profile_photo_path" id="profile_photo_path" name="profile_photo_path" type="text" class="mt-1 block w-full" autocomplete="profile_photo_path" placeholder="Profile Photo Path"/>
        @error('form.profile_photo_path')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>