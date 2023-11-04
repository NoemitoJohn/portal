<div>

    <div class="flex h-screen  gap-1">
        <livewire:admin.admin-sidebar/>
        <div class="bg-neutral-100 w-full flex flex-col gap-2 p-5 text-slate-700">
            <div>
                <p class="text-lg font-semibold border-b">Student Info</p>
                <div class="flex justify-between gap-3 mt-2">

                    <div class="flex flex-col flex-1">
                        <label for="">First Name</label>
                        <input disabled wire:model='first_name' class="px-2 py-1 border-slate-300 border" type="text">

                    </div>

                    <div class="flex flex-col flex-1">
                        <label for="">Last Name</label>
                        <input  disabled wire:model='last_name' class="px-2 py-1 border-slate-300 border" type="text">

                    </div>
                    <div class="flex flex-col flex-1">

                        <label for="">Ext. Name</label>
                        <input disabled wire:model='ext_name' class="px-2 py-1 border-slate-300 border" type="text">
                    </div>

                    <div class="flex flex-col flex-1">
                        <label for="">Course</label>
                        <select class="px-2 py-1 border-slate-300 border">
                            <option value="BS-ET">BS-ET</option>
                        </select>

                    </div>

                    <div class="flex flex-col flex-1">
                        <label for="">Year Level</label>
                        <select wire:model ='year_level' class="px-2 py-1 border-slate-300 border"  name="" id="">
                            <option value="1st">1st Year</option>
                            <option value="2nd">2nd Year</option>
                            <option value="3rd">3rd Year</option>
                            <option value="4th">4th Year</option>
                        </select>

                    </div>

                </div>
            </div>
            <div class="flex-1">
                <div class="w-full h-full flex flex-col">
                    <div>
                        <x-button click='d'>
                            View Grades
                        </x-button>

                    </div>

                    <p class="text-lg font-semibold border-b-2 border-slate-300 mt-2">Subjects</p>
                    <div>
                        <x-button click="toogle" class="mt-2">
                            Add Subject
                        </x-button>

                    </div>
                    <div class="border-slate-300 border flex-1 p-2 mt-2">
                        <livewire:admin.admin-enrollment-subjects/>
                        {{-- <table class="w-full text-center">
                            <tr>
                                <th>Section</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Unit</th>
                                <th>Students</th>
                                <th>Schedule</th>
                                <th></th>
                            </tr>

                            <tr>
                                <td>19-B</td>
                                <td>AT-101</td>
                                <td>Introduction to Automotive</td>
                                <td>4</td>
                                <td>21/32</td>
                                <td>M-W-F(7:30-9:30am)</td>
                                <td>Remove</td>
                            </tr>
                            <tr>
                                <td>19-B</td>
                                <td>AT-101</td>
                                <td>Introduction to Automotive</td>
                                <td>4</td>
                                <td>21/32</td>
                                <td>M-W-F(7:30-9:30am)</td>
                                <td><button class="underline">Remove</button></td>
                            </tr>

                        </table> --}}

                    </div>
                    <div class="flex justify-between my-3">
                        <p class="font-semibold text-lg">Unit</p>
                        <div>
                            <x-button click='sds'>Save</x-button>
                            <x-button click='casd'>Enroll</x-button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($isOpen)
        <livewire:admin.admin-subjects-modal/>
    @endif
</div>

