<div class="flex h-screen gap-1">
    <livewire:admin.admin-sidebar/>

    <div class="bg-neutral-100 w-full p-5 text-slate-700">
        {{-- Alert success --}}
        @if (session('success'))
        <div class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
              <span class="font-medium">Success </span> {{session('success')}}
            </div>
        </div>

        @endif
        {{-- Personal Info --}}
        <p class="font-semibold text-lg text-neutral-600">Personal Info</p>
        <div class="border-t mb-1"></div>
        <div class="flex mt-3 justify-between gap-5 flex-col lg:flex-row">
            <div class="flex flex-col flex-1 gap-2">
                <label class="text-sm font-semibold" for="f_name">First Name</label>
                <input wire:model="first_name" class="px-2 py-1 border-slate-300 border" type="text" name="fname" id="fname">
                @error('first_name')
                    <p class="text-xs text-red-500"> {{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col flex-1 gap-2">
                <label class="text-sm font-semibold" for="l_name">Last Name</label>
                <input wire:model="last_name" class="px-2 py-1 border-slate-300 border" type="text" name="lname" id="fname">
                @error('last_name')
                    <p class="text-xs text-red-500"> {{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col flex-1 gap-2 ">

                <label class="text-sm font-semibold" for="m_name">Middle Name</label>
                <input wire:model="middle_name" class="px-2 py-1 border-slate-300 border" type="text" name="name" id="fname">
                @error('middle_name')
                    <p class="text-xs text-red-500"> {{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col flex-1 gap-2">

                <label class="text-sm font-semibold" for="m_name">Name Extension (eg Jr)</label>
                <input wire:model="ext_name" class="px-2 py-1 border-slate-300 border" type="text" name="name" id="fname">
            </div>

        </div>
        <div class="flex justify-between gap-5 my-2">
            <div class="flex flex-col flex-1 gap-2">
                <label class="text-sm font-semibold"  for="gender">Gender</label>
                <select wire:model='gender' class="px-2 py-1 border-slate-300 border" id="cars">
                    <option selected>--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                @error('gender')
                    <p class="text-xs text-red-500"> {{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col flex-1 gap-2">
                <label class="text-sm font-semibold" for="gender">Birth Date</label>
                <input wire:model='birth_date' type="date" class="px-2 py-1 border-slate-300 border">
                @error('birth_date')
                    <p class="text-xs text-red-500"> {{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col flex-1 gap-2">
                <label class="text-sm font-semibold" for="gender">Civil Status</label>
                <select wire:model='civil_status' class="px-2 py-1 border-slate-300 border" id="cars">

                    <option selected>--</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                </select>
                @error('civil_status')
                    <p class="text-xs text-red-500"> {{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col flex-1 gap-2">

                <label class="text-sm font-semibold"  for="gender">Religion</label>
                <input wire:model='religion' type="text" class="px-2 py-1 border-slate-300 border">
            </div>
        </div>
        {{-- Home Address --}}
        <p class="font-semibold text-lg text-neutral-600" >Home Address</p>
        <div class="border-t mb-1"></div>
        <div class="flex justify-between flex-col gap-3 mt-3">
            <div class="flex flex-1 gap-5">
                <div class="flex flex-col flex-1 gap-2">
                    <label class="text-sm font-semibold" for="">Provice</label>
                    <input wire:model='provice' class="px-2 py-1 border-slate-300 border" type="text" name="provide" id="">
                    @error('provice')
                        <p class="text-xs text-red-500"> {{$message}}</p>
                    @enderror
                </div>
                <div class="flex flex-col flex-1 gap-2">

                    <label class="text-sm font-semibold" for="">Municipality/City</label>
                    <input wire:model='city' class="px-2 py-1 border-slate-300 border" type="text" name="city" id="">
                    @error('city')
                        <p class="text-xs text-red-500"> {{$message}}</p>
                    @enderror
                </div>

            </div>
            <div class="flex flex-1 gap-5 ">

                <div class="flex flex-col flex-1 gap-2">

                    <label class="text-sm font-semibold" for="">Barangay</label>
                    <input wire:model='barangay' class="px-2 py-1 border-slate-300 border" type="text" name="barangay" id="">
                    @error('barangay')
                        <p class="text-xs text-red-500"> {{$message}}</p>
                    @enderror
                </div>
                <div class="flex flex-col flex-1 gap-2">

                    <label class="text-sm font-semibold" for="">Building No. | Street | Subdivision</label>
                    <input wire:model='street' class="px-2 py-1 border-slate-300 border" type="text" name="street" id="">
                </div>
            </div>
        </div>
    <button wire:click="register" class="text-lg mt-4 font-medium  border-neutral-300 border-2  p-2 text-slate-600 rounded bg-neutral-200 hover:bg-neutral-300">Register</button>

</div>

</div>
