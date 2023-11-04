<div class="flex h-screen gap-1">
    <livewire:admin.admin-sidebar/>
    <div class="bg-neutral-100 w-full p-5 text-slate-700">
        <table class="w-full text-left ">
            <thead >
                <tr class="bg-neutral-300">
                    <th class="py-2 px-3 font-medium">ID Number</th>
                    <th class="py-2 px-3 font-medium">First Name</th>
                    <th class="py-2 px-3 font-medium" >Last Name</th>
                    <th class="py-2 px-3 font-medium">Course</th>
                    <th class="py-2 px-3  font-medium"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr class="border-b">
                    <td class="py-3 px-3 ">{{$student->id_number}}</td>
                    <td class="py-3 px-3 " >{{$student->f_name}}</td>
                    <td class="py-3 px-3 ">{{$student->l_name}}</td>
                    <td class="py-3 px-3 ">BS-ET</td>
                    <td>
                        <a href={{'/' . Route::current()->uri .'/'. $student->id}} class="bg-neutral-200 py-1 px-2 border rounded hover:bg-neutral-300 font-semibold" wire:navigate>
                            Evaluate
                        </a>
                    </td>
                </tr>
                @endforeach



            </tbody>
        </table>
    </div>
</div>
