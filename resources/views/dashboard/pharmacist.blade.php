<div class="mt-8 bg-white rounded">
    <div class="w-full max-w-2xl px-6 py-12">

        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                    Name : 
                </label>
            </div>
            <div class="md:w-2/3">
                <span class="block text-gray-600 font-bold">{{-- $student->user->name --}}Ahmed Farag</span>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                    Email :
                </label>
            </div>
            <div class="md:w-2/3">
                <span class="text-gray-600 font-bold">{{-- $student->user->email --}}pha1@gmail.com</span>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                    Roll Number :
                </label>
            </div>
            <div class="md:w-2/3">
                <span class="text-gray-600 font-bold">{{-- $student->roll_number --}}2</span>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                    Phone :
                </label>
            </div>
            <div class="md:w-2/3">
                <span class="text-gray-600 font-bold">{{-- $student->phone --}}01005885834</span>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                    Gender :
                </label>
            </div>
            <div class="md:w-2/3">
                <span class="text-gray-600 font-bold">{{-- $student->gender --}}Male</span>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                    Date of Birth :
                </label>
            </div>
            <div class="md:w-2/3">
                <span class="text-gray-600 font-bold">{{-- $student->dateofbirth --}}12/12/1202</span>
            </div>
        </div>
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                    Current Address :
                </label>
            </div>
            <div class="md:w-2/3">
                <span class="text-gray-600 font-bold">{{-- $student->current_address --}}Alex</span>
            </div>
        </div>

        <div class="w-full px-0 md:px-6 py-12">
            <div class="flex items-center bg-gray-200">
                <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-semibold">Code</div>
                <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-semibold">Subject</div>
                <div class="w-1/3 text-right text-gray-600 py-2 px-4 font-semibold">Teacher</div>
            </div>
            {{-- @foreach ($student->class->subjects as $subject) --}}
                <div class="flex items-center justify-between border border-gray-200 -mb-px">
                    <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{-- $subject->subject_code --}}EC212</div>
                    <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{-- $subject->name --}}Sowftware</div>
                    <div class="w-1/3 text-right text-gray-600 py-2 px-4 font-medium">{{-- $subject->teacher->user->name --}}Ahmed Farag</div>
                </div>
            {{-- @endforeach --}}
        </div>

        <div class="w-full px-0 md:px-6 py-12">
            <div class="flex items-center bg-gray-200">
                <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-semibold">Date</div>
                <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-semibold">Class</div>
                <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-semibold">Teacher</div>
                <div class="w-1/4 text-right text-gray-600 py-2 px-4 font-semibold">attendance</div>
            </div>
            {{-- @foreach ($student->attendances as $attendance) --}}
                <div class="flex items-center justify-between border border-gray-200 -mb-px">
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium">{{-- $attendance->attendence_date --}}20/20/2020</div>
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium">{{-- $attendance->class->class_name --}}Plal</div>
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium">{{-- $attendance->teacher->user->name --}}Karim</div>
                    <div class="w-1/4 text-right text-gray-600 py-2 px-4 font-medium">
                        {{-- @if($attendance->attendence_status)
                            <span class="text-xs text-white bg-green-500 px-2 py-1 rounded">P</span>
                        @else
                            <span class="text-xs text-white bg-red-500 px-2 py-1 rounded">A</span>
                        @endif --}}
                    </div>
                </div>
            {{-- @endforeach --}}
        </div>
    </div>        
</div>