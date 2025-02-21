<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YouVento - YouCode Club Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="antialiased">
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <span class="text-2xl font-bold text-indigo-600">You</span>
                        <span class="text-2xl font-bold text-gray-800">Vento</span>
                    </div>
                </div>
                <div class="flex items-center">
                    @if (Route::has('login'))
                        <div class="hidden sm:flex sm:items-center sm:ml-6 space-x-4">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-indigo-600">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600">Login</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>

   
    <div class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto py-24 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold sm:text-5xl md:text-6xl">
                    Bienvenue sur YouVento
                </h1>
                <p class="mt-3 max-w-md mx-auto text-xl sm:text-2xl md:mt-5 md:max-w-3xl">
                    Découvrez et rejoignez les clubs de YouCode, participez à des événements passionnants.
                </p>
                <div class="mt-10 flex justify-center gap-4">
                    <a href="{{ route('register') }}" class="bg-white text-indigo-600 px-8 py-3 rounded-md font-bold hover:bg-gray-100">
                        Commencer
                    </a>
                    <a href="#clubs" class="border-2 border-white text-white px-8 py-3 rounded-md font-bold hover:bg-white hover:text-indigo-600">
                        Découvrir les Clubs
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="clubs" class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Clubs Populaires
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Explorez nos clubs les plus actifs et trouvez celui qui vous correspond.
                </p>
            </div>

            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <div class="text-3xl text-indigo-600 mb-4">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Club Tech</h3>
                        <p class="text-gray-600">Développement, IA, et nouvelles technologies.</p>
                        <a href="#" class="mt-4 inline-block text-indigo-600 hover:text-indigo-800">En savoir plus →</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <div class="text-3xl text-indigo-600 mb-4">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Club Robotique</h3>
                        <p class="text-gray-600">Construction et programmation de robots.</p>
                        <a href="#" class="mt-4 inline-block text-indigo-600 hover:text-indigo-800">En savoir plus →</a>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <div class="text-3xl text-indigo-600 mb-4">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Club Design</h3>
                        <p class="text-gray-600">UI/UX Design et créativité numérique.</p>
                        <a href="#" class="mt-4 inline-block text-indigo-600 hover:text-indigo-800">En savoir plus →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Événements à Venir
                </h2>
                <p class="mt-4 text-lg text-gray-500">
                    Ne manquez pas nos prochains événements.
                </p>
            </div>

            <div class="mt-16">
                <div class="space-y-8">
                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-bold text-gray-900">Hackathon IA</h3>
                                <p class="text-gray-600">Développez des solutions innovantes avec l'IA</p>
                            </div>
                            <div class="text-right">
                                <div class="text-indigo-600 font-semibold">25 Fév</div>
                                <div class="text-gray-500">09:00 - 18:00</div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-lg font-bold text-gray-900">Workshop UX Design</h3>
                                <p class="text-gray-600">Apprenez les bases du design d'expérience utilisateur</p>
                            </div>
                            <div class="text-right">
                                <div class="text-indigo-600 font-semibold">28 Fév</div>
                                <div class="text-gray-500">14:00 - 16:00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center">
                        <span class="text-2xl font-bold text-indigo-400">You</span>
                        <span class="text-2xl font-bold text-white">Vento</span>
                    </div>
                    <p class="mt-4 text-gray-300">
                        Plateforme de gestion des clubs et événements de YouCode.
                    </p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Liens Rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">À propos</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Clubs</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Événements</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Nous Suivre</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center text-gray-400">
                <p>&copy; 2024 YouVento. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>