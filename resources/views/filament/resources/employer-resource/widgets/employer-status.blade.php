<x-filament::widget>
    <x-filament::card>
    <a href="#" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 group hover:shadow dark:bg-gray-600 dark:hover:bg-gray-500 dark:text-white">
        <span class="flex-1 ml-3 whitespace-nowrap">Status</span>
        @if(\App\Enums\UserStatus::Approve()->value == $record->status)
        <span class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">
        Approved
        </span>
        @elseif(\App\Enums\UserStatus::Rejecte()->value == $record->status)
        <span class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">
        Rejected
        </span>
        @elseif(\App\Enums\UserStatus::Block()->value == $record->status)
        <span class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">
        Blocked
        </span>
        @elseif(\App\Enums\UserStatus::Pending()->value == $record->status)
        <span class="inline-flex items-center justify-center px-2 py-0.5 ml-3 text-xs font-medium text-gray-500 bg-gray-200 rounded dark:bg-gray-700 dark:text-gray-400">
        Pending
        </span>
        @endif
    </a>
        </x-filament::card>
</x-filament::widget>
