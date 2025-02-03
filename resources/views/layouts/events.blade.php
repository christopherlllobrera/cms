<div id="events" class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-sm mt-8">
    <div class="flex justify-between items-start">
        <!-- Left side: Meetings List -->
        <div class="w-7/12">
            <h2 class="text-xl font-semibold mb-6">Upcoming meetings</h2>

            <!-- Meeting Items -->
            <div class="space-y-6">
                <!-- Meeting 1 -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <img src="/api/placeholder/40/40" class="w-10 h-10 rounded-full" alt="Leslie Alexander">
                        <div>
                            <h3 class="font-medium">Leslie Alexander</h3>
                            <div class="flex items-center text-sm text-gray-500 space-x-4">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    January 10th, 2022 at 5:00 PM
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Starbucks
                                </div>
                            </div>
                        </div>
                    </div>
                    <button data-dropdown-toggle="meeting1Dropdown" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                        </svg>
                    </button>
                </div>

                <!-- Meeting 2 -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <img src="/api/placeholder/40/40" class="w-10 h-10 rounded-full" alt="Michael Foster">
                        <div>
                            <h3 class="font-medium">Michael Foster</h3>
                            <div class="flex items-center text-sm text-gray-500 space-x-4">
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    January 12th, 2022 at 3:00 PM
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Tim Hortons
                                </div>
                            </div>
                        </div>
                    </div>
                    <button data-dropdown-toggle="meeting2Dropdown" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" />
                        </svg>
                    </button>
                </div>

                <!-- More meetings... -->
            </div>
        </div>

        <!-- Right side: Calendar -->
        <div>
            <h2 class="text-2xl font-bold mb-6">UPCOMING EVENTS</h2>
            <!-- Flowbite Calendar -->
            <div id="datepicker-inline" inline-datepicker data-date="01/31/2025"
                data-min-date="01/01/2024" data-max-date="12/31/2025" data-weekstart="1" data-months="2"
                data-title="Select Event Date" data-today-btn="true" data-clear-btn="true" data-autoclose="true">
            </div>
        </div>
        <hr class="mt-6 border-gray-200 dark:border-gray-600" />

    </div>
</div>
</div>

<script>
    $(document).ready(function() {
        // Populate calendar days
        const daysGrid = $('#calendar-days');
        const totalDays = 31;
        const startDay = 3; // Assuming January 1st starts on a Wednesday

        // Add empty cells for days before the 1st
        for (let i = 0; i < startDay; i++) {
            daysGrid.append('<div class="h-8 flex items-center justify-center"></div>');
        }

        // Add the days of the month
        for (let i = 1; i <= totalDays; i++) {
            const isSelected = i === 22;
            const isHighlighted = i === 12;
            const dayClass = isSelected ? 'bg-blue-600 text-white' :
                isHighlighted ? 'text-blue-600 font-medium' : '';

            daysGrid.append(`
                    <button class="h-8 flex items-center justify-center rounded-full hover:bg-gray-100 ${dayClass}">
                        ${i}
                    </button>
                `);
        }
    });
</script>
