<header class="text-center">
    <h2 class="text-2xl font-bold uppercase mb-6">
        PERSONAL INFORMATION
    </h2>
</header>

<!--Name-->
<form method="POST" action="/listings" enctype="multipart/form-data">
    <div class="mb-2 flex justify-center gap-2">
        <div>
            <label
                for="company"
                class="inline-block mb-2"
                >Family Name</label
            > 
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="company"
                    value="<?php echo e(old('company')); ?>"
                />
        </div>
        <div>
            <label
                for="company"
                class="inline-block mb-2"
                >First Name</label
            > 
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="company"
                value="<?php echo e(old('company')); ?>"
            />
        </div>
        <div>
            <label
                for="company"
                class="inline-block mb-2"
                >Middle Name</label
            > 
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="company"
                value="<?php echo e(old('company')); ?>"
            />
        </div>
    </div>

    <!--Sex and contact number -->
    <div class="mb-2 flex justify-center gap-10">
        <div>
        <label
                for="company"
                class="inline-block mb-2"
                >Sex</label> 

            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-24"
                name="company"
                value="<?php echo e(old('company')); ?>"
            />
        </div>
        <div>
            <label
                    for="company"
                    class="inline-block mb-2"
                    >Age</label> 
    
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-24"
                    name="company"
                    value="<?php echo e(old('company')); ?>"
                />
            </div>
        <div>
            <label
            for="company"
            class="inline-block mb-2"
            >Contact No.</label> 

        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="company"
            value="<?php echo e(old('company')); ?>"
        />
        </div>
    </div>

    <!--RELIGION, EMAIL ADD, CELL#-->
    <div class="mb-2 flex justify-center gap-2">
        <div>
            <label
            for="company"
            class="inline-block mb-2"
            >Cellphone No.</label> 

        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="company"
            value="<?php echo e(old('company')); ?>"
        />
        </div>

        <div>
            <label
            for="company"
            class="inline-block mb-2"
            >Nationality</label> 
    
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="company"
            value="<?php echo e(old('company')); ?>"/>
    
        </div>
    </div>
    <div class="mb-2">
        <div>
            <label
            for="company"
            class="inline-block mb-2"
            >E-mail Address</label> 

        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="company"
            value="<?php echo e(old('company')); ?>"
        />
        </div>

        <div>
            <label
            for="company"
            class="inline-block mb-2"
            >Religion</label> 

        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="company"
            value="<?php echo e(old('company')); ?>"
        />
        </div>
    </div>

    <div class="mb-2 flex justify-center gap-20">
        <div>
            <label
            for="company"
            class="inline-block mb-2"
            >Date of Birth</label> 

            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                </div>
                <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
            </div>
        </div>
        <div>
            <label
            for="company"
            class="inline-block mb-2"
            >Place of Birth</label> 

        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="company"
            value="<?php echo e(old('company')); ?>"/>
        </div>
    </div>
    
    <div>
        <label
        for="company"
        class="inline-block mb-2"
        >Permanent Address</label> 

    <input
        type="text"
        class="border border-gray-200 rounded p-2 w-full"
        name="company"
        value="<?php echo e(old('company')); ?>"/>

    </div>
</form><?php /**PATH C:\xampp\htdocs\system_prototype1\resources\views/components/personal_information.blade.php ENDPATH**/ ?>