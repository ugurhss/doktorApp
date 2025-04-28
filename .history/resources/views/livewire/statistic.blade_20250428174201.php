<!-- Card -->
<div>
    <!-- Card Content -->
    <button data-modal-target="user-modal" data-modal-toggle="user-modal" class="w-full text-left">
        <div class="flex flex-col gap-y-3 lg:gap-y-5 p-4 md:p-5 bg-white border shadow-sm hover:shadow-md rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
            <div class="inline-flex justify-center items-center">
                <span class="size-2 inline-block bg-orange-500 rounded-full me-2"></span>
                <span class="text-xs font-semibold uppercase text-gray-600 dark:text-neutral-400">Users</span>
            </div>

            <div class="text-center">
                <h3 class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-gray-800 dark:text-neutral-200">
                    {{$users_count}}
                </h3>
            </div>

            <dl class="flex justify-center items-center divide-x divide-gray-200 dark:divide-neutral-800">
                <dt class="pe-3 text-center">
                    <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_month_users_count}}</span>
                    <span class="block text-sm text-gray-500 dark:text-neutral-500">last Month</span>
                </dt>
                <dd class="text-start ps-3">
                    <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{$last_week_users_count}}</span>
                    <span class="block text-sm text-gray-500 dark:text-neutral-500">last week</span>
                </dd>
            </dl>
        </div>
    </button>

    <!-- Modal -->
    <div id="user-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Users Details
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="user-modal">
                        <svg class="w-3 h-3" aria-hidden="true" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 space-y-4">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        Total Users: {{$users_count}}
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        Users Last Month: {{$last_month_users_count}}
                    </p>
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        Users Last Week: {{$last_week_users_count}}
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="user-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Card -->
