{{-- dashboard --}}
<div class="flex h-screen">
    <div class="m-auto">
        <form wire:submit='login'>
            @csrf
            <div class="flex flex-col gap-2">
                <label for="email">email</label>
                <input wire:model='email' class="border" type="email" name="email">
                @error('email')
                    {{ $message }}
                @enderror
                <label for="password">password</label>
                <input wire:model='password' class="border" type="password" name="password">
                @error('password')
                   {{ $message }}
                @enderror
                <input class="bg-slate-400 rounded p-1 hover:bg-slate-500 cursor-pointer" type="submit" value="Login">
            </div>
        </form>
    </div>
</div>
