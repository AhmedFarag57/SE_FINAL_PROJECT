<div class="sidebar hidden sm:block w-0 sm:w-1/6 bg-gray-200 h-screen shadow fixed top-0 left-0 bottom-0 z-40 overflow-y-auto">
    <div class="mb-6 mt-20 px-6">
        <a href="{{ route('home') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-6 w-6 fill-current feather feather-grid" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
            <span class="ml-2 text-sm font-semibold">Dashboard</span>
        </a>
        
        @role('Admin')
        <a href="{{ route('departments.index') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M568.2 336.3c-13.12-17.81-38.14-21.66-55.93-8.469l-119.7 88.17h-120.6c-8.748 0-15.1-7.25-15.1-15.99c0-8.75 7.25-16 15.1-16h78.25c15.1 0 30.75-10.88 33.37-26.62c3.25-20-12.12-37.38-31.62-37.38H191.1c-26.1 0-53.12 9.25-74.12 26.25l-46.5 37.74L15.1 383.1C7.251 383.1 0 391.3 0 400v95.98C0 504.8 7.251 512 15.1 512h346.1c22.03 0 43.92-7.188 61.7-20.27l135.1-99.52C577.5 379.1 581.3 354.1 568.2 336.3zM160 176h64v64C224 248.8 231.2 256 240 256h64C312.8 256 320 248.8 320 240v-64h64c8.836 0 16-7.164 16-16V96c0-8.838-7.164-16-16-16h-64v-64C320 7.162 312.8 0 304 0h-64C231.2 0 224 7.162 224 16v64H160C151.2 80 144 87.16 144 96v64C144 168.8 151.2 176 160 176z"/></svg>
            <span class="ml-2 text-sm font-semibold">Departments</span>
        </a>
        <a href="{{ route('doctors.index') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-6 w-6 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-md" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user-md fa-w-14 fa-9x"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zM104 424c0 13.3 10.7 24 24 24s24-10.7 24-24-10.7-24-24-24-24 10.7-24 24zm216-135.4v49c36.5 7.4 64 39.8 64 78.4v41.7c0 7.6-5.4 14.2-12.9 15.7l-32.2 6.4c-4.3.9-8.5-1.9-9.4-6.3l-3.1-15.7c-.9-4.3 1.9-8.6 6.3-9.4l19.3-3.9V416c0-62.8-96-65.1-96 1.9v26.7l19.3 3.9c4.3.9 7.1 5.1 6.3 9.4l-3.1 15.7c-.9 4.3-5.1 7.1-9.4 6.3l-31.2-4.2c-7.9-1.1-13.8-7.8-13.8-15.9V416c0-38.6 27.5-70.9 64-78.4v-45.2c-2.2.7-4.4 1.1-6.6 1.9-18 6.3-37.3 9.8-57.4 9.8s-39.4-3.5-57.4-9.8c-7.4-2.6-14.9-4.2-22.6-5.2v81.6c23.1 6.9 40 28.1 40 53.4 0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.3 16.9-46.5 40-53.4v-80.4C48.5 301 0 355.8 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-72-56.8-130.3-128-133.8z" class=""></path></svg>
            <span class="ml-2 text-sm font-semibold">Doctors</span>
        </a>
        <a href="{{ route('nurses.index') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-6 w-6 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-nurse" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user-nurse fa-w-14 fa-2x"><path fill="currentColor" d="M319.41,320,224,415.39,128.59,320C57.1,323.1,0,381.6,0,453.79A58.21,58.21,0,0,0,58.21,512H389.79A58.21,58.21,0,0,0,448,453.79C448,381.6,390.9,323.1,319.41,320ZM224,304A128,128,0,0,0,352,176V65.82a32,32,0,0,0-20.76-30L246.47,4.07a64,64,0,0,0-44.94,0L116.76,35.86A32,32,0,0,0,96,65.82V176A128,128,0,0,0,224,304ZM184,71.67a5,5,0,0,1,5-5h21.67V45a5,5,0,0,1,5-5h16.66a5,5,0,0,1,5,5V66.67H259a5,5,0,0,1,5,5V88.33a5,5,0,0,1-5,5H237.33V115a5,5,0,0,1-5,5H215.67a5,5,0,0,1-5-5V93.33H189a5,5,0,0,1-5-5ZM144,160H304v16a80,80,0,0,1-160,0Z" class=""></path></svg>
            <span class="ml-2 text-sm font-semibold">Nurses</span>
        </a>
        <a href="{{ route('pharmacists.index') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M222.5 48H288C341 48 384 90.98 384 144C384 197 341 240 288 240H248V160H288C296.8 160 304 152.8 304 144C304 135.2 296.8 128 288 128H220L215.5 272H256C309 272 352 314.1 352 368C352 421 309 464 256 464H240V384H256C264.8 384 272 376.8 272 368C272 359.2 264.8 352 256 352H212.1L208.5 496C208.2 504.9 200.9 512 191.1 512C183.1 512 175.8 504.9 175.5 496L174.5 464H135.1C113.9 464 95.1 446.1 95.1 424C95.1 401.9 113.9 384 135.1 384H171.1L170.1 352H151.1C98.98 352 55.1 309 55.1 256C55.1 208.4 90.6 168.9 135.1 161.3V256C135.1 264.8 143.2 272 151.1 272H168.5L164 128H122.6C113.6 146.9 94.34 160 72 160H56C25.07 160 0 134.9 0 104C0 73.07 25.07 48 56 48H161.5L160.1 31.98C160.1 31.33 160.1 30.69 160.1 30.05C161.5 13.43 175.1 0 192 0C208.9 0 222.5 13.43 223 30.05C223 30.69 223 31.33 223 31.98L222.5 48zM79.1 96C79.1 87.16 72.84 80 63.1 80C55.16 80 47.1 87.16 47.1 96C47.1 104.8 55.16 112 63.1 112C72.84 112 79.1 104.8 79.1 96z"/></svg>
            <span class="ml-2 text-sm font-semibold">Pharmacists</span>
        </a>
        <a href="{{ route('receptionists.index') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z"/></svg>
            <span class="ml-2 text-sm font-semibold">Receptionists</span>
        </a>
        <a href="{{-- route('search.index') --}}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-6 w-6 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-9x"><path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z" class=""></path></svg>
            <span class="ml-2 text-sm font-semibold">Search</span>
        </a>
        <a href="{{ route('assign-role.index') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-6 w-6 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-tag" class="svg-inline--fa fa-user-tag fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M630.6 364.9l-90.3-90.2c-12-12-28.3-18.7-45.3-18.7h-79.3c-17.7 0-32 14.3-32 32v79.2c0 17 6.7 33.2 18.7 45.2l90.3 90.2c12.5 12.5 32.8 12.5 45.3 0l92.5-92.5c12.6-12.5 12.6-32.7.1-45.2zm-182.8-21c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24c0 13.2-10.7 24-24 24zm-223.8-88c70.7 0 128-57.3 128-128C352 57.3 294.7 0 224 0S96 57.3 96 128c0 70.6 57.3 127.9 128 127.9zm127.8 111.2V294c-12.2-3.6-24.9-6.2-38.2-6.2h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 287.9 0 348.1 0 422.3v41.6c0 26.5 21.5 48 48 48h352c15.5 0 29.1-7.5 37.9-18.9l-58-58c-18.1-18.1-28.1-42.2-28.1-67.9z"></path></svg>
            <span class="ml-2 text-sm font-semibold">Assign Role</span>
        </a>
        <a href="{{ route('roles-permissions') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-6 w-6 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-cog" class="svg-inline--fa fa-user-cog fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M610.5 373.3c2.6-14.1 2.6-28.5 0-42.6l25.8-14.9c3-1.7 4.3-5.2 3.3-8.5-6.7-21.6-18.2-41.2-33.2-57.4-2.3-2.5-6-3.1-9-1.4l-25.8 14.9c-10.9-9.3-23.4-16.5-36.9-21.3v-29.8c0-3.4-2.4-6.4-5.7-7.1-22.3-5-45-4.8-66.2 0-3.3.7-5.7 3.7-5.7 7.1v29.8c-13.5 4.8-26 12-36.9 21.3l-25.8-14.9c-2.9-1.7-6.7-1.1-9 1.4-15 16.2-26.5 35.8-33.2 57.4-1 3.3.4 6.8 3.3 8.5l25.8 14.9c-2.6 14.1-2.6 28.5 0 42.6l-25.8 14.9c-3 1.7-4.3 5.2-3.3 8.5 6.7 21.6 18.2 41.1 33.2 57.4 2.3 2.5 6 3.1 9 1.4l25.8-14.9c10.9 9.3 23.4 16.5 36.9 21.3v29.8c0 3.4 2.4 6.4 5.7 7.1 22.3 5 45 4.8 66.2 0 3.3-.7 5.7-3.7 5.7-7.1v-29.8c13.5-4.8 26-12 36.9-21.3l25.8 14.9c2.9 1.7 6.7 1.1 9-1.4 15-16.2 26.5-35.8 33.2-57.4 1-3.3-.4-6.8-3.3-8.5l-25.8-14.9zM496 400.5c-26.8 0-48.5-21.8-48.5-48.5s21.8-48.5 48.5-48.5 48.5 21.8 48.5 48.5-21.7 48.5-48.5 48.5zM224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm201.2 226.5c-2.3-1.2-4.6-2.6-6.8-3.9l-7.9 4.6c-6 3.4-12.8 5.3-19.6 5.3-10.9 0-21.4-4.6-28.9-12.6-18.3-19.8-32.3-43.9-40.2-69.6-5.5-17.7 1.9-36.4 17.9-45.7l7.9-4.6c-.1-2.6-.1-5.2 0-7.8l-7.9-4.6c-16-9.2-23.4-28-17.9-45.7.9-2.9 2.2-5.8 3.2-8.7-3.8-.3-7.5-1.2-11.4-1.2h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c10.1 0 19.5-3.2 27.2-8.5-1.2-3.8-2-7.7-2-11.8v-9.2z"></path></svg>
            <span class="ml-2 text-sm font-semibold">Roles &amp; Permissions</span>
        </a>
        @endrole

        
        @role('Pharmacist')
        <a href="{{ route('pharmacy.index') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M222.5 48H288C341 48 384 90.98 384 144C384 197 341 240 288 240H248V160H288C296.8 160 304 152.8 304 144C304 135.2 296.8 128 288 128H220L215.5 272H256C309 272 352 314.1 352 368C352 421 309 464 256 464H240V384H256C264.8 384 272 376.8 272 368C272 359.2 264.8 352 256 352H212.1L208.5 496C208.2 504.9 200.9 512 191.1 512C183.1 512 175.8 504.9 175.5 496L174.5 464H135.1C113.9 464 95.1 446.1 95.1 424C95.1 401.9 113.9 384 135.1 384H171.1L170.1 352H151.1C98.98 352 55.1 309 55.1 256C55.1 208.4 90.6 168.9 135.1 161.3V256C135.1 264.8 143.2 272 151.1 272H168.5L164 128H122.6C113.6 146.9 94.34 160 72 160H56C25.07 160 0 134.9 0 104C0 73.07 25.07 48 56 48H161.5L160.1 31.98C160.1 31.33 160.1 30.69 160.1 30.05C161.5 13.43 175.1 0 192 0C208.9 0 222.5 13.43 223 30.05C223 30.69 223 31.33 223 31.98L222.5 48zM79.1 96C79.1 87.16 72.84 80 63.1 80C55.16 80 47.1 87.16 47.1 96C47.1 104.8 55.16 112 63.1 112C72.84 112 79.1 104.8 79.1 96z"/></svg>
            <span class="ml-2 text-sm font-semibold">Pharmacy</span>
        </a>
        <a href="{{ route('medicines.index') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M555.3 300.1L424.3 112.8C401.9 81 366.4 64 330.4 64c-22.63 0-45.5 6.75-65.5 20.75C245.2 98.5 231.2 117.5 223.4 138.5C220.5 79.25 171.1 32 111.1 32c-61.88 0-111.1 50.08-111.1 111.1L-.0028 368c0 61.88 50.12 112 112 112s112-50.13 112-112L223.1 218.9C227.2 227.5 231.2 236 236.7 243.9l131.3 187.4C390.3 463 425.8 480 461.8 480c22.75 0 45.5-6.75 65.5-20.75C579 423.1 591.5 351.8 555.3 300.1zM159.1 256H63.99V144c0-26.5 21.5-48 48-48s48 21.5 48 48V256zM354.8 300.9l-65.5-93.63c-7.75-11-10.75-24.5-8.375-37.63c2.375-13.25 9.75-24.87 20.75-32.5C310.1 131.1 320.1 128 330.4 128c16.5 0 31.88 8 41.38 21.5l65.5 93.75L354.8 300.9z"/></svg>
            <span class="ml-2 text-sm font-semibold">Medicine</span>
        </a>
        @endrole

        @role('Doctor')
        <a href="{{ route('doctor.appointments.index') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM328.1 304.1C338.3 295.6 338.3 280.4 328.1 271C319.6 261.7 304.4 261.7 295 271L200 366.1L152.1 319C143.6 309.7 128.4 309.7 119 319C109.7 328.4 109.7 343.6 119 352.1L183 416.1C192.4 426.3 207.6 426.3 216.1 416.1L328.1 304.1z"/></svg>
            <span class="ml-2 text-sm font-semibold">Appointments</span>
        </a>
        @endrole

        @role('Receptionist')
        <a href="{{ route('patients.index') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-6 w-6 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-injured" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user-injured fa-w-14 fa-9x"><path fill="currentColor" d="M277.37 11.98C261.08 4.47 243.11 0 224 0c-53.69 0-99.5 33.13-118.51 80h81.19l90.69-68.02zM342.51 80c-7.9-19.47-20.67-36.2-36.49-49.52L239.99 80h102.52zM224 256c70.69 0 128-57.31 128-128 0-5.48-.95-10.7-1.61-16H97.61c-.67 5.3-1.61 10.52-1.61 16 0 70.69 57.31 128 128 128zM80 299.7V512h128.26l-98.45-221.52A132.835 132.835 0 0 0 80 299.7zM0 464c0 26.51 21.49 48 48 48V320.24C18.88 344.89 0 381.26 0 422.4V464zm256-48h-55.38l42.67 96H256c26.47 0 48-21.53 48-48s-21.53-48-48-48zm57.6-128h-16.71c-22.24 10.18-46.88 16-72.89 16s-50.65-5.82-72.89-16h-7.37l42.67 96H256c44.11 0 80 35.89 80 80 0 18.08-6.26 34.59-16.41 48H400c26.51 0 48-21.49 48-48v-41.6c0-74.23-60.17-134.4-134.4-134.4z" class=""></path></svg>
            <span class="ml-2 text-sm font-semibold">Patients</span>
        </a>
        <a href="{{ route('appointments.index') }}" class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM328.1 304.1C338.3 295.6 338.3 280.4 328.1 271C319.6 261.7 304.4 261.7 295 271L200 366.1L152.1 319C143.6 309.7 128.4 309.7 119 319C109.7 328.4 109.7 343.6 119 352.1L183 416.1C192.4 426.3 207.6 426.3 216.1 416.1L328.1 304.1z"/></svg>
            <span class="ml-2 text-sm font-semibold">Appointments</span>
        </a>
        @endrole
        
    </div>
</div>