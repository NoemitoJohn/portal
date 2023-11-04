<div class="fixed inset-0 flex justify-center z-50">
    <div class=" fixed inset-0 bg-black opacity-50"></div>
    <div class="relative bg-neutral-100 h-4/5 m-auto w-2/4 rounded px-3 py-3 shadow-lg z-50">
        <div class="flex h-full flex-col">
            <div class="flex justify-end"><button wire:click="close" class="font-mono font-bold border-2 border-slate-300 bg-slate-200 hover:bg-slate-300  rounded-lg px-2">x</button></div>
            <div class="flex gap-2 my-2">
                <input class="border-slate-400 border flex-1 rounded px-3 py-1" type="text">
                <button class="border border-slate-400 hover:bg-slate-300 px-2 py-1 rounded">Search</button>
            </div>
            <div class="border flex-1 h-full p-2 overflow-auto">
                <div >
                    <table class="w-full text-left ">
                        <thead >
                            <tr class="bg-neutral-300">
                                <th class="py-2 px-3 font-medium">Section</th>
                                <th class="py-2 px-3 font-medium">Code</th>
                                <th class="py-2 px-3 font-medium">Name</th>
                                <th class="py-2 px-3 font-medium" >Unit</th>
                                <th class="py-2 px-3 font-medium" >Sched</th>
                                <th class="py-2 px-3 font-medium" >Students</th>
                                <th class="py-2 px-3 font-medium"></th>

                            </tr>
                        </thead>
                        <tbody >
                            {{-- @foreach ($subjects as $subject)

                            <tr class="border-b">
                                <td class="py-3 px-3 ">{{$subject->code}}</td>
                                <td class="py-3 px-3 " >{{$subject->name}}</td>
                                <td class="py-3 px-3 ">{{$subject->unit}}</td>
                                <td class="py-3 px-3 text-center">
                                    <x-button click="add({{$subject->id}})">
                                        Add
                                    </x-button>
                                </td>

                            </tr>
                            @endforeach --}}

                            @foreach ($subjects as $subject)

                            <tr class="border-b">
                                <td class="py-3 px-3 ">{{$subject['section']}}</td>
                                <td class="py-3 px-3 " >{{$subject['code']}}</td>
                                <td class="py-3 px-3 ">{{$subject['name']}}</td>
                                <td class="py-3 px-3 ">{{$subject['unit']}}</td>

                                <td class="py-3 px-3 ">
                                    <p>{{$subject['day']}}</p>
                                    <p>{{$subject['time']}}</p>
                                    <p>{{$subject['room']}}</p>
                                </td>
                                <td class="py-3 px-3 ">{{$subject['students']}}</td>
                                <td class="py-3 px-3 text-center">
                                    <x-button click="add({{$subject['id']}})">
                                        Add
                                    </x-button>

                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
