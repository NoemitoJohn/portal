<div class="bg-slate-100 w-3/12">
    <div class="border-slate-400 border py-3">
        <img class="w-32 h-32 mx-auto rounded-full shadow-xl" src="https://www.w3schools.com/w3images/avatar2.png" alt="">
        <p class="text-center font-medium mt-2 text-slate-700">Noemito John Lacanaria</p>
        <p class="text-center text-sm text-slate-700">Student</p>

    </div>
    <div class="mt-3">
        <a href="/info" @class(['w-full hover:bg-slate-200 p-2 block text-center font-medium text-slate-700', 'bg-slate-200' => request()->is('info')]) wire:navigate>Personal Information</a>
        <a href="/grade" @class(['w-full hover:bg-slate-200 p-2 block text-center font-medium text-slate-700', 'bg-slate-200' => request()->is('grade')])  wire:navigate>View Grades</a>
        <a href="/enroll" @class(['w-full hover:bg-slate-200 p-2 block text-center font-medium text-slate-700', 'bg-slate-200' => request()->is('enroll')]) class="" wire:navigate>Enrollment</a>
    </div>
</div>
