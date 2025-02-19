@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold">Détails de l'utilisateur</h2>
                    <a href="{{ route('users.index') }}" class="text-gray-600 hover:text-gray-900">Retour à la liste</a>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold mb-2">Informations personnelles</h3>
                    <p><strong>Nom :</strong> {{ $user->name }}</p>
                    <p><strong>Email :</strong> {{ $user->email }}</p>
                    <p><strong>Rôle :</strong> {{ $user->role }}</p>
                    <p><strong>Créé le :</strong> {{ $user->created_at->format('d/m/Y H:i') }}</p>
                </div>

                @if($user->clubs->count() > 0)
                <div class="mb-4">
                    <h3 class="text-lg font-semibold mb-2">Clubs</h3>
                    <ul class="list-disc list-inside">
                        @foreach($user->clubs as $club)
                            <li>{{ $club->name }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if($user->events->count() > 0)
                <div class="mb-4">
                    <h3 class="text-lg font-semibold mb-2">Événements</h3>
                    <ul class="list-disc list-inside">
                        @foreach($user->events as $event)
                            <li>{{ $event->name }} ({{ $event->date->format('d/m/Y') }})</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="mt-6 flex space-x-4">
                    <a href="{{ route('users.edit', $user) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Modifier
                    </a>
                    <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
                            Supprimer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection