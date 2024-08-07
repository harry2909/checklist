<div class="bg-app-blue h-screen font-source">
    <div class="container mx-auto py-10">
        <ul x-sort class="space-y-4">
            <!-- Iterate over checklist items using Livewire -->
            @foreach ($checklist as $key => $item)
                <li 
                    x-sort:item
                    wire:key="checklist-item-{{ $key }}"
                    class="text-white text-2xl border-2 border-white rounded-sm flex flex-row justify-between transition ease-out duration-300"
                    x-data="{ visible: false }"
                    x-init="setTimeout(() => visible = true, 50)"
                    x-show="visible"
                    x-transition:enter-start="opacity-0 transform translate-y-2"
                    x-transition:enter-end="opacity-100 transform translate-y-0"
                >
                    <span class="p-6 content-center">{{ $item['item'] }}</span>
                    <div class="p-6 {{ $item['priorityClass'] }}">
                    <div class="flex flex-row gap-x-6 items-center">
                        <i class="fa-solid fa-trash cursor-pointer" wire:click="removeChecklistItem({{ $key }})"></i>
                        <i class="fa-solid fa-grip-vertical cursor-pointer"></i>
                    </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <div class="fixed bottom-0 left-0 right-0 container mx-auto">
            <form class="flex flex-row justify-between w-full" wire:submit="addChecklistItem">
                <input wire:model="item"
                    required
                    class="border-2 border-white p-6 rounded-tl-sm rounded-bl-sm my-4 w-full focus:outline-none outline-none focus:border-transparent focus:ring-0"
                    type="text" placeholder="Add a new task" />
                    <select wire:model="priority" class="border-2 border-white p-6 my-4 focus:outline-none outline-none focus:border-transparent focus:ring-0">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                <button class="border-2 border-white p-6 rounded-tr-sm rounded-br-sm my-4">
                    <i class="fa-solid fa-square-plus cursor-pointer text-white"></i>
                </button>
            </form>
        </div>
    </div>
</div>
