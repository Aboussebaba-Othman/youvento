<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Administrateur') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Bienvenue dans le tableau de bord administrateur</h3>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div class="bg-blue-100 p-4 rounded-lg">
                            <h4 class="font-semibold">Total Clubs</h4>
                            <p class="text-2xl">{{ \App\Models\Club::count() }}</p>
                        </div>
                        <div class="bg-green-100 p-4 rounded-lg">
                            <h4 class="font-semibold">Total Events</h4>
                            <p class="text-2xl">{{ \App\Models\Event::count() }}</p>
                        </div>
                        <div class="bg-purple-100 p-4 rounded-lg">
                            <h4 class="font-semibold">Total Students</h4>
                            <p class="text-2xl">{{ \App\Models\User::where('role', 'student')->count() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>